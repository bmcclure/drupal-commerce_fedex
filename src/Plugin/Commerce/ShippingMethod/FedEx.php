<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod;

use Drupal\address\AddressInterface;
use Drupal\address\Plugin\Field\FieldType\AddressItem;
use Drupal\commerce_fedex\Event\CommerceFedExEvents;
use Drupal\commerce_fedex\Event\ConfigurationFormEvent;
use Drupal\commerce_fedex\Event\DefaultConfigurationEvent;
use Drupal\commerce_fedex\Event\RateRequestEvent;
use Drupal\commerce_fedex\FedExServiceManagerInterface;
use Drupal\commerce_order\Entity\OrderItem;
use Drupal\commerce_price\Price;
use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\commerce_shipping\PackageTypeManagerInterface;
use Drupal\commerce_shipping\Plugin\Commerce\PackageType\PackageTypeInterface;
use Drupal\commerce_shipping\Plugin\Commerce\ShippingMethod\ShippingMethodBase;
use Drupal\commerce_shipping\ShipmentItem;
use Drupal\commerce_shipping\ShippingRate;
use Drupal\physical\Plugin\Field\FieldType\DimensionsItem;
use Drupal\physical\Weight as PhysicalWeight;
use Drupal\physical\WeightUnit as PhysicalWeightUnits;
use Drupal\physical\LengthUnit as PhysicalLengthUnits;
use Drupal\Core\Form\FormStateInterface;
use NicholasCreativeMedia\FedExPHP\Enums\DropoffType;
use NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType;
use NicholasCreativeMedia\FedExPHP\Enums\RateRequestType;
use NicholasCreativeMedia\FedExPHP\Services\RateService;
use NicholasCreativeMedia\FedExPHP\Structs\Address;
use NicholasCreativeMedia\FedExPHP\Structs\Dimensions;
use NicholasCreativeMedia\FedExPHP\Structs\Money;
use NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested;
use NicholasCreativeMedia\FedExPHP\Structs\Party;
use NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem;
use NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment;
use NicholasCreativeMedia\FedExPHP\Structs\Weight as FedexWeight;
use NicholasCreativeMedia\FedExPHP\Enums\WeightUnits as FedexWeightUnits;
use NicholasCreativeMedia\FedExPHP\Enums\LinearUnits as FedexLengthUnits;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Provides the FedEx shipping method.
 *
 * @CommerceShippingMethod(
 *   id = "fedex",
 *   label = @Translation("FedEx"),
 *   services = {
 *     "EUROPE_FIRST_INTERNATIONAL_PRIORITY" = @Translation("FedEx Europe First International Priority"),
 *     "FEDEX_1_DAY_FREIGHT" = @Translation("FedEx 1st Day Freight"),
 *     "FEDEX_2_DAY" = @Translation("FedEx 2nd Day"),
 *     "FEDEX_2_DAY_AM" = @Translation("FedEx 2nd Day AM"),
 *     "FEDEX_2_DAY_FREIGHT" = @Translation("FedEx 2nd Day Freight"),
 *     "FEDEX_3_DAY_FREIGHT" = @Translation("FedEx 3rd Day Freight"),
 *     "FEDEX_DISTANCE_DEFERRED" = @Translation("FedEx Distance Deferred"),
 *     "FEDEX_EXPRESS_SAVER" = @Translation("FedEx Express Saver"),
 *     "FEDEX_FIRST_FREIGHT" = @Translation("FedEx First Freight"),
 *     "FEDEX_FREIGHT_ECONOMY" = @Translation("FedEx Freight Economy"),
 *     "FEDEX_FREIGHT_PRIORITY" = @Translation("FedEx Freight Priority"),
 *     "FEDEX_GROUND" = @Translation("FedEx Ground"),
 *     "FEDEX_NEXT_DAY_AFTERNOON" = @Translation("FedEx Next Day Afternoon"),
 *     "FEDEX_NEXT_DAY_EARLY_MORNING" = @Translation("FedEx Next Day Early Morning"),
 *     "FEDEX_NEXT_DAY_END_OF_DAY" = @Translation("FedEx Next Day End of Day"),
 *     "FEDEX_NEXT_DAY_FREIGHT" = @Translation("FedEx Next Day Freight"),
 *     "FEDEX_NEXT_DAY_MID_MORNING" = @Translation("FedEx Next Day Mid Morning"),
 *     "FIRST_OVERNIGHT" = @Translation("FedEx First Overnight"),
 *     "GROUND_HOME_DELIVERY" = @Translation("FedEx Ground Home Delivery"),
 *     "INTERNATIONAL_ECONOMY" = @Translation("FedEx International Economy"),
 *     "INTERNATIONAL_ECONOMY_FREIGHT" = @Translation("FedEx International Economy Freight"),
 *     "INTERNATIONAL_FIRST" = @Translation("FedEx International First"),
 *     "INTERNATIONAL_PRIORITY" = @Translation("FedEx International Priority"),
 *     "INTERNATIONAL_PRIORITY_FREIGHT" = @Translation("FedEx International Priority Freight"),
 *     "PRIORITY_OVERNIGHT" = @Translation("FedEx Priority Overnight"),
 *     "SAME_DAY" = @Translation("FedEx Same Day"),
 *     "SAME_DAY_CITY" = @Translation("FedEx Same Day City"),
 *     "SMART_POST" = @Translation("FedEx Smart Post"),
 *     "STANDARD_OVERNIGHT" = @Translation("FedEx Standard Overnight")
 *   }
 * )
 */
class FedEx extends ShippingMethodBase {

  /**
   * Constant for Domestic Shipping
   */
  const SHIPPING_TYPE_DOMESTIC = 'domestic';

  /**
   *  Constant for International Shipping
   */
  const SHIPPING_TYPE_INTERNATIONAL = 'intl';

  /**
   * Package All items in one box, ignoring dimensions
   */
  const PACKAGE_ALL_IN_ONE = 'allinone';

  /**
   * Package each line item in its own box, ignoring dimensions
   */
  const PACKAGE_INDIVIDUAL = 'individual';

  /**
   * Calculate volume to determine how many boxes are needed
   */
  const PACKAGE_CALCULATE = 'calculate';

  /**
   * The event dispatcher.
   *
   * @var EventDispatcherInterface
   */
  protected $eventDispatcher;

  /**
   * Commerce Fedex Logger Channel.
   *
   * @var LoggerInterface
   */
  protected $watchdog;

  /**
   * The Fedex Service Manager.
   *
   * @var FedExServiceManagerInterface
   */
  protected $fedExServiceManager;

  /**
   * Constructs a new ShippingMethodBase object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\commerce_shipping\PackageTypeManagerInterface $package_type_manager
   *   The package type manager.
   * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $event_dispatcher
   *   The event dispatcher.
   * @param \Drupal\commerce_fedex\FedExServiceManagerInterface $fedExServiceManager
   *   The FedEx Service Manager.
   * @param \Psr\Log\LoggerInterface $watchdog
   *   Commerce Fedex Logger Channel.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, PackageTypeManagerInterface $package_type_manager, EventDispatcherInterface $event_dispatcher, FedExServiceManagerInterface $fedExServiceManager, LoggerInterface $watchdog) {
    $this->eventDispatcher = $event_dispatcher;
    $this->watchdog = $watchdog;
    $this->fedExServiceManager = $fedExServiceManager;

    parent::__construct($configuration, $plugin_id, $plugin_definition, $package_type_manager);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('plugin.manager.commerce_package_type'),
      $container->get('event_dispatcher'),
      $container->get('commerce_fedex.fedex_service'),
      $container->get('logger.channel.commerce_fedex')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $defaultConfiguration = [
        'api_information' => [
          'api_key' => '',
          'api_password' => '',
          'account_number' => '',
          'meter_number' => '',
          'mode' => 'test',
        ],
        'options' => [
          'packaging' => static::PACKAGE_ALL_IN_ONE,
          'rate_request_type' => RateRequestType::VALUE_NONE,
          'ship_to' => 'residential',
          'dropoff' => DropoffType::VALUE_REGULAR_PICKUP,
          'insurance' => false,
          'log' => [],
        ]
      ] + parent::defaultConfiguration();

    // Allow modules to alter the default configuration.
    $defaultConfigurationEvent = new DefaultConfigurationEvent($defaultConfiguration);
    $this->eventDispatcher->dispatch(CommerceFedExEvents::GET_DEFAULT_CONFIGURATION, $defaultConfigurationEvent);

    return $defaultConfigurationEvent->getConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);

    // Select all services by default.
    if (empty($this->configuration['services'])) {
      $service_ids = array_keys($this->services);
      $this->configuration['services'] = array_combine($service_ids, $service_ids);
    }

    $form['api_information'] = [
      '#type' => 'details',
      '#title' => $this->t('API information'),
      '#description' => $this->isConfigured() ? $this->t('Update your FedEx API information.') : $this->t('Fill in your FedEx API information.'),
      '#weight' => $this->isConfigured()?10:-1,
      '#open' => !$this->isConfigured(),
    ];
    $form['api_information']['api_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API key'),
      '#description' => $this->t('Enter your FedEx API key.'),
      '#default_value' => $this->configuration['api_information']['api_key'],
    ];
    $form['api_information']['api_password'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API password'),
      '#description' => $this->t('Enter your FedEx API password only if you wish to change its value.'),
      '#default_value' => $this->configuration['api_information']['api_password'],
    ];
    $form['api_information']['account_number'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Account number'),
      '#description' => $this->t('Enter your FedEx account number.'),
      '#default_value' => $this->configuration['api_information']['account_number']
    ];
    $form['api_information']['meter_number'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Meter number'),
      '#description' => $this->t('Enter your FedEx meter number.'),
      '#default_value' => $this->configuration['api_information']['meter_number'],
    ];
    $form['api_information']['mode'] = [
      '#type' => 'select',
      '#title' => $this->t('Mode'),
      '#description' => $this->t('Choose whether to use the test or live mode.'),
      '#options' => [
        'test' => $this->t('Test'),
        'live' => $this->t('Live'),
      ],
      '#default_value' => $this->configuration['api_information']['mode'],
    ];

    $form['options'] = [
      '#type' => 'details',
      '#title' => $this->t('Fedex Options'),
      '#description' => $this->t('Additional options for Fedex'),
      '#weight' => 15,
    ];
    $form['options']['packaging'] = [
      '#type' => 'select',
      '#title' => $this->t('Packaging Strategy'),
      '#description' => $this->t('Select your packaging strategy. "All items in one box" will ignore package type and product dimensions, and assume all items go in one box. "Each item in its own box" will create a box for each line item in the order, "Calculate" Will attempt to figure out how many boxes are needed based on package type volumes and product volumes similar to commerce_fedex 7.x'),
      '#options' => [
        static::PACKAGE_ALL_IN_ONE => $this->t("All items in one box"),
        static::PACKAGE_INDIVIDUAL => $this->t("Each item in its own box"),
        static::PACKAGE_CALCULATE => $this->t("Calculate"),
      ],
      '#default_value' => $this->configuration['options']['packaging']
    ];
    $form['options']['rate_request_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Pricing options'),
      '#description' => $this->t('Select the pricing option to use when requesting a rate quote. Note that discounted rates are only available when sending production requests.'),
      '#options' => [
        RateRequestType::VALUE_NONE => $this->t('Standard pricing (LIST)'),
        RateRequestType::VALUE_PREFERRED => $this->t('This FedEx account\'s discounted pricing (ACCOUNT)'),
      ],
      '#default_value' => $this->configuration['options']['rate_request_type'],
    ];

    // @todo Uncomment or remove
    /*$form['options']['ship_to'] = [
      '#type' => 'select',
      '#title' => $this->t('Ship to destination type'),
      '#description' => $this->t('Leave this set as residential unless you only ship to commercial addresses.'),
      '#options' => [
        'residential' => $this->t('Residential and Commercial'),
        'commercial' => $this->t('Commercial Only')
      ],
      '#efault_value' => $this->configuration['options']['ship_to'],
    ]; */

    $form['options']['dropoff'] = [
      '#type' => 'select',
      '#title' => $this->t('Default dropoff/pickup location for your FedEx shipments'),
      '#options' => static::enumToList(DropoffType::getValidValues()),
      '#default_value' => $this->configuration['options']['dropoff'],
    ];
    $form['options']['insurance'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Include insurance value of shippable line items in FedEx rate requests'),
      '#default_value' => $this->configuration['options']['insurance'],
    ];
    $form['options']['log'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Log the following messages for debugging'),
      '#options' => [
        'request' => $this->t('API request messages'),
        'response' => $this->t('API response messages'),
      ],
      '#default_value' => $this->configuration['options']['log'],
    ];

    // Allow other modules to alter the settings form.
    $configurationFormEvent = new ConfigurationFormEvent($form, $form_state, $this->configuration);
    $this->eventDispatcher->dispatch(CommerceFedExEvents::BUILD_CONFIGURATION_FORM, $configurationFormEvent);

    return $configurationFormEvent->getForm();
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);

    if (!$form_state->getErrors()) {
      $values = $form_state->getValue($form['#parents']);

      // @todo Re-implement once commerce creates plugins with existing configuration
      /*if (empty($values['api_information']['api_password'])) {
        $values['api_information']['api_password'] = $values['api_information']['existing_api_password'];
      }
      unset($values['api_information']['existing_api_password']);*/

      // @todo Set each option individually to prevent saving non-standard config values
      $this->configuration['api_information'] = $values['api_information'];
      $this->configuration['options'] = $values['options'];

      // Allow other modules to alter the settings form with access to configuration
      $configurationFormEvent = new ConfigurationFormEvent($form, $form_state, $this->configuration);
      $this->eventDispatcher->dispatch(CommerceFedExEvents::SUBMIT_CONFIGURATION_FORM, $configurationFormEvent);
    }
  }

  protected function logRequest($message, $rateRequest, $level = LogLevel::INFO, $skipConfigCheck = FALSE) {
    if ($skipConfigCheck || $this->configuration['options']['log']['request']) {
      $this->watchdog->log($level, "$message <br>@rate_request", [
        '@rate_request' => var_export($rateRequest, TRUE),
      ]);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function calculateRates(ShipmentInterface $shipment) {
    $rateService = $this->fedExServiceManager->getRateService($this->configuration);
    $rateRequest = $this->getRateRequest($rateService, $shipment);

    $this->logRequest('Sending FedEx request.', $rateRequest);

    $response = $rateService->getRates($rateRequest);

    if (!$response) {
      $this->logRequest('FedEx sent no response back.', $rateRequest, LogLevel::NOTICE, TRUE);
    } else {
      $this->logRequest('FedEx response received.', $rateRequest);
    }

    $rates = [];
    if ($response->getHighestSeverity() == 'SUCCESS') {
      foreach ($response->getRateReplyDetails() as $rateDetails) {
        if (in_array($rateDetails->getServiceType(), array_keys($this->getServices()))) {
          $cost = $rateDetails
            ->getRatedShipmentDetails()[0]
            ->getShipmentRateDetail()
            ->getTotalNetChargeWithDutiesAndTaxes();

          $rates[] = new ShippingRate(
            $rateDetails->getServiceType(),
            $this->services[$rateDetails->getServiceType()],
            new Price($cost->getAmount(), $cost->getCurrency())
          );
        }
      }
    }

    return $rates;
  }

  /**
   * Convert a FedEx API enum array to an options list.
   *
   * @param array $enums
   *   The FedEx API enum array.
   *
   * @return array
   *   The options list.
   */
  protected static function enumToList(array $enums){
    return array_combine($enums, array_map(function ($d) {
      return ucwords(str_replace('_', ' ', $d));
    }, $enums));
  }

  /**
   * Gets a FedEx address object from the provided Drupal address object.
   *
   * @param \Drupal\address\AddressInterface $address
   *   The Drupal address object.
   *
   * @return Party
   *   The address for FedEx.
   */
  protected function getAddressForFedEx(AddressInterface $address) {
    $party = new Party();

    $party->setAddress(new Address(
      array_filter([$address->getAddressLine1(), $address->getAddressLine2()]),
      $address->getLocality(),
      $address->getAdministrativeArea(),
      $address->getPostalCode(),
      NULL,
      $address->getCountryCode(),
      NULL,
      FALSE
    ));

    return $party;
  }

  /**
   * Gets the requested package line items.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return RequestedPackageLineItem[]
   *   The requested package line items.
   */
  protected function getRequestedPackageLineItems(ShipmentInterface $shipment) {
    $requestedPackageLineItems = [];

    switch ($this->configuration['options']['packaging']){
      case static::PACKAGE_ALL_IN_ONE:
        $requestedPackageLineItems = $this->getRequestedPackageLineItemsAllInOne($shipment);
        break;

      case static::PACKAGE_INDIVIDUAL:
        $requestedPackageLineItems = $this->getRequestedPackageLineItemsIndividual($shipment);
        break;

      case static::PACKAGE_CALCULATE:
        $requestedPackageLineItems = $this->getRequestedPackageLineItemsCalculate($shipment);
        break;
    }

    return $requestedPackageLineItems;
  }

  /**
   * Gets the volume of the provided package type.
   *
   * @param \Drupal\commerce_shipping\Plugin\Commerce\PackageType\PackageTypeInterface $packageType
   *   The package type.
   *
   * @return float
   *   The volume.
   */
  protected function getPackageVolume(PackageTypeInterface $packageType) {
    $unit = $packageType->getHeight()->getUnit();

    $number = $packageType
      ->getHeight()
      ->multiply($packageType->getWidth()->convert($unit)->getNumber())
      ->multiply($packageType->getLength()->convert($unit)->getNumber())
      ->getNumber();

    return (float) $number;
  }

  /**
   * Gets a cleaned title string for use in sending to FedEx.
   *
   * @param \Drupal\commerce_shipping\ShipmentItem $shipmentItem
   *   The shipment item.
   *
   * @return string
   *   The cleaned title.
   */
  protected function getCleanTitle(ShipmentItem $shipmentItem) {
    $title = $shipmentItem->getTitle();
    $title = preg_replace('/[^A-Za-z0-9 ]/', ' ', $title);
    $title = preg_replace('/ +/', ' ', $title);

    return trim($title);
  }

  /**
   * Gets package line items for PACKAGE_ALL_IN_ONE strategy.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return array
   *   The package line items.
   */
  protected function getRequestedPackageLineItemsAllInOne(ShipmentInterface $shipment){
    $requestedPackageLineItem = new RequestedPackageLineItem();

    $shipmentTitle = $shipment->getTitle();
    if (!is_string($shipmentTitle)) {
      $shipmentTitle = $shipmentTitle->render();
    }

    $requestedPackageLineItem
      ->setSequenceNumber(1)
      ->setGroupPackageCount(1)
      ->setWeight($this->physicalWeightToFedex($shipment->getWeight()))
      ->setDimensions($this->packageToFedexDimensions($shipment->getPackageType()))
      ->setPhysicalPackaging(PhysicalPackagingType::VALUE_BOX)
      ->setItemDescription($shipmentTitle)
      ->setSpecialServicesRequested(new PackageSpecialServicesRequested());

    if ($this->configuration['options']['insurance']) {
      $requestedPackageLineItem->setInsuredValue(new Money(
        $shipment->getTotalDeclaredValue()->getCurrencyCode(),
        $shipment->getTotalDeclaredValue()->getNumber()
      ));
    }

    return [$requestedPackageLineItem];
  }

  /**
   * Gets package line items for PACKAGE_CALCULATE strategy.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return array
   *   The package line items.
   */
  protected function getRequestedPackageLineItemsCalculate(ShipmentInterface $shipment) {
    $packageVolume = $this->getPackageVolume($shipment->getPackageType());
    $totalVolume = $this->getShipmentTotalVolume($shipment);

    $count = ($totalVolume == 0 || $totalVolume < $packageVolume)
      ? 0
      : ceil($totalVolume / $packageVolume);

    $packageWeight = $shipment->getWeight()->divide((string) $count);

    $shipmentTitle = $shipment->getTitle();
    if (!is_string($shipmentTitle)) {
      $shipmentTitle = $shipmentTitle->render();
    }

    $requestedPackageLineItem = new RequestedPackageLineItem();

    $requestedPackageLineItem
      ->setGroupNumber(1)
      ->setGroupPackageCount($count)
      ->setWeight($this->physicalWeightToFedex($packageWeight))
      ->setDimensions($this->packageToFedexDimensions($shipment->getPackageType()))
      ->setPhysicalPackaging(PhysicalPackagingType::VALUE_BOX)
      ->setItemDescription($shipmentTitle)
      ->setSpecialServicesRequested(new PackageSpecialServicesRequested());

    if ($this->configuration['options']['insurance']) {
      $requestedPackageLineItem->setInsuredValue(new Money(
        $shipment->getTotalDeclaredValue()->getCurrencyCode(),
        $shipment->getTotalDeclaredValue()->getNumber()
      ));
    }

    return [$requestedPackageLineItem];
  }

  /**
   * Gets package line items for PACKAGE_INDIVIDUAL strategy.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return array
   *   The package line items.
   */
  protected function getRequestedPackageLineItemsIndividual(ShipmentInterface $shipment) {
    $requestedPackageLineItems = [];

    foreach ($shipment->getItems() as $delta => $shipmentItem) {
      $requestedPackageLineItem = new RequestedPackageLineItem();

      $requestedPackageLineItem
        ->setSequenceNumber($delta + 1)
        ->setGroupPackageCount(1)
        ->setWeight($this->physicalWeightToFedex($shipmentItem->getWeight()))
        ->setDimensions($this->packageToFedexDimensions($shipment->getPackageType()))
        ->setPhysicalPackaging(PhysicalPackagingType::VALUE_BOX)
        ->setItemDescription($this->getCleanTitle($shipmentItem))
        ->setSpecialServicesRequested(new PackageSpecialServicesRequested());

      if ($this->configuration['options']['insurance']) {
        $requestedPackageLineItem->setInsuredValue(new Money(
          $shipmentItem->getDeclaredValue()->getCurrencyCode(),
          $shipmentItem->getDeclaredValue()->getNumber()
        ));
      }

      $requestedPackageLineItems[] = $requestedPackageLineItem;
    }

    return $requestedPackageLineItems;
  }

  /**
   * Gets a RequestedShipment object for FedEx.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
   *   The RequestedShipment object.
   */
  protected function getFedExShipment(ShipmentInterface $shipment) {
    $lineItems = $this->getRequestedPackageLineItems($shipment);

    $count = ($this->configuration['options']['packaging'] == static::PACKAGE_CALCULATE)
      ? $lineItems[0]->getGroupPackageCount()
      : count($lineItems);

    /** @var AddressInterface $recipientAddress */
    $recipientAddress = $shipment->getShippingProfile()->get('address')->first();
    $shipperAddress = $shipment->getOrder()->getStore()->getAddress();

    $fedExShipment = new RequestedShipment();

    $fedExShipment
      ->setTotalWeight($this->physicalWeightToFedex($shipment->getWeight()))
      ->setShipper($this->getAddressForFedEx($shipperAddress))
      ->setRecipient($this->getAddressForFedEx($recipientAddress))
      ->setRequestedPackageLineItems($lineItems)
      ->setPackageCount($count)
      ->setPreferredCurrency($shipment->getOrder()->getStore()->getDefaultCurrencyCode())
      ->setDropoffType($this->configuration['options']['dropoff'])
      ->addToRateRequestTypes($this->configuration['options']['rate_request_type'])
      ->setRateRequestTypes();

    if ($this->configuration['options']['insurance']) {
      $fedExShipment->setTotalInsuredValue( new Money(
        $shipment->getTotalDeclaredValue()->getCurrencyCode(),
        $shipment->getTotalDeclaredValue()->getNumber()
      ));
    }

    return $fedExShipment;
  }

  /**
   * Gets a rate request object for FedEx.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\RateRequest
   *   The rate request object.
   */
  protected function getRateRequest(RateService $rateService, ShipmentInterface $shipment) {
    $rateRequest = $this->fedExServiceManager->getRateRequest($this->configuration);
    $rateRequest->setRequestedShipment($this->getFedExShipment($shipment));
    $rateRequest->setVersion($rateService->version);

    // Allow other modules to alter the rate request before it's submitted.
    $rateRequestEvent = new RateRequestEvent($rateRequest, $rateService, $shipment);
    $this->eventDispatcher->dispatch(CommerceFedExEvents::BEFORE_RATE_REQUEST, $rateRequestEvent);

    return $rateRequest;
  }

  /**
   * Gets the shipment items total volume in the same units as the shipment
   * package type.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return float
   *   The volume.
   */
  protected function getShipmentTotalVolume(ShipmentInterface $shipment) {
    $orderItemStorage = \Drupal::entityTypeManager()->getStorage('commerce_order_item');
    $orderItemIds = [];

    foreach ($shipment->getItems() as $shipmentItem){
      $orderItemIds[] = $shipmentItem->getOrderItemId();
    }

    $orderItems = $orderItemStorage->loadMultiple($orderItemIds);
    $unit = $shipment->getPackageType()->getHeight()->getUnit();

    $totalVolume = 0;
    foreach ($orderItems as $orderItem){
      /** @var OrderItem $orderItem */
      $purchased_entity = $orderItem->getPurchasedEntity();

      if ($purchased_entity->hasField('dimensions') && !$purchased_entity->get('dimensions')->isEmpty()) {
        /** @var DimensionsItem $dimensions */
        $dimensions = $purchased_entity->get('dimensions')->first();

        $volume = $dimensions
          ->getHeight()
          ->convert($unit)
          ->multiply($dimensions->getWidth()->convert($unit)->getNumber())
          ->multiply($dimensions->getLength()->convert($unit)->getNumber())
          ->getNumber();

        $totalVolume += (float) $volume * $orderItem->getQuantity();
      }
    }

    return $totalVolume;
  }

  /**
   * Determine if we have the minimum information to connect to FedEx.
   *
   * @return bool
   *   TRUE if there is enough information to connect, FALSE otherwise.
   */
  protected function isConfigured() {
    $apiInformation = $this->configuration['api_information'];

    return (
      !empty($apiInformation['api_key'])
      && !empty($apiInformation['api_password'])
      && !empty($apiInformation['account_number'])
      && !empty($apiInformation['meter_number'])
    );
  }

  /**
   * Convert physical weight to FedEx weight object.
   *
   * @param \Drupal\physical\Weight $weight
   *   The weight from Drupal.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight
   *   The weight for FedEx.
   *
   * @throws \Exception
   */
  protected function physicalWeightToFedex(PhysicalWeight $weight) {
    if (!$weight instanceof PhysicalWeight) {
      throw new \Exception("Invalid units for weight");
    }

    $number = $weight->getNumber();

    switch ($weight->getUnit()) {
      case PhysicalWeightUnits::GRAM:
        $number /= 1000;
        $unit = FedexWeightUnits::VALUE_KG;
        break;

      case PhysicalWeightUnits::KILOGRAM:
        $unit = FedexWeightUnits::VALUE_KG;
        break;

      case PhysicalWeightUnits::OUNCE:
        $number /= 16;
        $unit = FedexWeightUnits::VALUE_LB;
        break;

      case PhysicalWeightUnits::POUND:
        $unit = FedexWeightUnits::VALUE_LB;
        break;

      default:
        throw new \Exception("Invalid Units for Weight");
    }

    return new FedexWeight($unit, $number);
  }

  /**
   * Get FedEx dimensions object for the given package.
   *
   * @param \Drupal\commerce_shipping\Plugin\Commerce\PackageType\PackageTypeInterface $package
   *   The package.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\Dimensions
   *   The dimensions.
   *
   * @throws \Exception
   */
  protected function packageToFedexDimensions(PackageTypeInterface $package) {
    $length = $package->getLength();
    $width = $package->getWidth();
    $height = $package->getHeight();

    if ($width->getUnit() != $length->getUnit()) {
      $width = $width->convert($length->getUnit());
    }

    if ($height->getUnit() != $length->getUnit()) {
      $height = $height->convert($length->getUnit());
    }

    switch ($length->getUnit()) {
      case PhysicalLengthUnits::MILLIMETER:
        $length = $length->divide(1000);
        $width = $width->divide(1000);
        $height = $height->divide(1000);
        $unit = FedexLengthUnits::VALUE_CM;
        break;

      case PhysicalLengthUnits::CENTIMETER:
        $unit = FedexLengthUnits::VALUE_CM;
        break;

      case PhysicalLengthUnits::METER;
        $length = $length->multiply(1000);
        $width = $width->multiply(1000);
        $height = $height->multiply(1000);
        $unit = FedexLengthUnits::VALUE_CM;
        break;

      case PhysicalLengthUnits::FOOT:
        $length = $length->multiply(12);
        $width = $width->multiply(12);
        $height = $height->multiply(12);
        $unit = FedexLengthUnits::VALUE_IN;
        break;

      case PhysicalLengthUnits::INCH:
        $unit = FedexLengthUnits::VALUE_IN;
        break;

      default:
        throw new \Exception("Invalid Units for Length");
    }

    return new Dimensions($length->getNumber(), $width->getNumber(), $height->getNumber(), $unit);
  }

  /**
   * Returns a bool indicating if the shipment is domestic.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return bool
   *   TRUE if the shipment is domestic, FALSE otherwise.
   */
  public static function isDomestic(ShipmentInterface $shipment) {

    /** @var  AddressItem $shippingAddress */
    $shippingAddress = $shipment->getShippingProfile()->get('address')->first();

    $domestic = ($shippingAddress instanceof AddressItem)
      ? $shipment->getOrder()->getStore()->getAddress()->getCountryCode() == $shippingAddress->getCountryCode()
      : FALSE;

    return $domestic;
  }

  /**
   * Gets the shipping type of the shipment.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   * @return string
   */
  public static function shippingType(ShipmentInterface $shipment) {
    return static::isDomestic($shipment)
      ? FedEx::SHIPPING_TYPE_DOMESTIC
      : FedEx::SHIPPING_TYPE_INTERNATIONAL;
  }

}
