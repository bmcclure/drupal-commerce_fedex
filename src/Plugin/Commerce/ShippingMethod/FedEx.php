<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod;

use Drupal\address\AddressInterface;
use Drupal\address\Plugin\Field\FieldType\AddressItem;
use Drupal\commerce_fedex\Event\CommerceFedExEvents;
use Drupal\commerce_fedex\Event\ConfigurationFormEvent;
use Drupal\commerce_fedex\Event\DefaultConfigurationEvent;
use Drupal\commerce_fedex\Event\RateRequestEvent;
use Drupal\commerce_fedex\FedExServiceManager;
use Drupal\commerce_order\Entity\OrderItem;
use Drupal\commerce_price\Price;
use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\commerce_shipping\PackageTypeManagerInterface;
use Drupal\commerce_shipping\Plugin\Commerce\PackageType\PackageTypeInterface;
use Drupal\commerce_shipping\Plugin\Commerce\ShippingMethod\ShippingMethodBase;
use Drupal\commerce_shipping\ShippingRate;
use Drupal\physical\Weight as PhysicalWeight;
use Drupal\physical\WeightUnit as PhysicalWeightUnits;
use Drupal\physical\LengthUnit as PhysicalLengthUnits;
use Drupal\Core\Form\FormStateInterface;
use NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsAccessibilityType;
use NicholasCreativeMedia\FedExPHP\Enums\DropoffType;
use NicholasCreativeMedia\FedExPHP\Enums\HazardousCommodityOptionType;
use NicholasCreativeMedia\FedExPHP\Enums\HazardousCommodityRegulationType;
use NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType;
use NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType;
use NicholasCreativeMedia\FedExPHP\Enums\RateRequestType;
use NicholasCreativeMedia\FedExPHP\Services\RateService;
use NicholasCreativeMedia\FedExPHP\Structs\Address;
use NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail;
use NicholasCreativeMedia\FedExPHP\Structs\Dimensions;
use NicholasCreativeMedia\FedExPHP\Structs\Money;
use NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested;
use NicholasCreativeMedia\FedExPHP\Structs\Party;
use NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem;
use NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment;
use NicholasCreativeMedia\FedExPHP\Structs\VersionId;
use NicholasCreativeMedia\FedExPHP\Structs\Weight as FedexWeight;
use NicholasCreativeMedia\FedExPHP\Enums\WeightUnits as FedexWeightUnits;
use NicholasCreativeMedia\FedExPHP\Enums\LinearUnits as FedexLengthUnits;
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
   * The event dispatcher.
   *
   * @var EventDispatcherInterface
   */
  protected $eventDispatcher;

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
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, PackageTypeManagerInterface $package_type_manager, EventDispatcherInterface $event_dispatcher) {
    $this->eventDispatcher = $event_dispatcher;

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
      $container->get('event_dispatcher')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {

    $defaultConfiguration = [
        'mode' => 'test',
        'api_information' => [
          'api_key' => '',
          'api_password' => '',
          'account_number' => '',
          'meter_number' => '',
        ],
        'options' => [
          'rate_service_type' => RateRequestType::VALUE_NONE,
          'ship_to' => 'residential',
          'dropoff' => DropoffType::VALUE_REGULAR_PICKUP,
          'insurance' => false,
          'log' => [],

        ]
      ] + parent::defaultConfiguration();

    $defaultConfigurationEvent = new DefaultConfigurationEvent($defaultConfiguration);
    $this->eventDispatcher->dispatch(CommerceFedExEvents::GET_DEFAULT_CONFIGURATION, $defaultConfigurationEvent);

    return $defaultConfigurationEvent->getConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
 //   $form['services']['#type'] = 'select';
 //   $form['services']['#multiple'] = TRUE;

    // Select all services by default.
    if (empty($this->configuration['services'])) {
      $service_ids = array_keys($this->services);
      $this->configuration['services'] = array_combine($service_ids, $service_ids);
    }

    $form['mode'] = [
      '#type' => 'select',
      '#title' => $this->t('Mode'),
      '#description' => $this->t('Choose whether to use the test or live mode.'),
      '#options' => [
        'test' => $this->t('Test'),
        'live' => $this->t('Live'),
      ],
      '#default_value' => $this->configuration['mode'],
      '#weight' => 5,
    ];

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
    $form['options'] = [
      '#type' => 'details',
      '#title' => $this->t('Fedex Options'),
      '#description' => $this->t('Additional options for Fedex'),
      '#weight' => 15,
    ];
    $form['options']['rate_service_type'] = array(
      '#type' => 'select',
      '#title' => $this->t('Pricing options'),
      '#description' => $this->t('Select the pricing option to use when requesting a rate quote. Note that discounted rates are only available when sending production requests.'),
      '#options' => array(
        RateRequestType::VALUE_NONE => $this->t('Standard pricing (LIST)'),
        RateRequestType::VALUE_PREFERRED => $this->t('This FedEx account\'s discounted pricing (ACCOUNT)'),
      ),
      '#default_value' => $this->configuration['options']['rate_service_type'],
    );
    $form['options']['ship_to'] = array(
      '#type' => 'select',
      '#title' => $this->t('Ship to destination type'),
      '#description' => $this->t('Leave this set as residential unless you only ship to commercial addresses.'),
      '#options' => array(
        'residential' => $this->t('Residential and Commercial'),
        'commercial' => $this->t('Commercial Only')
      ),
      '#default_value' => $this->configuration['options']['ship_to'],
    );
    $form['options']['dropoff'] = array(
      '#type' => 'select',
      '#title' => $this->t('Default dropoff/pickup location for your FedEx shipments'),
      '#options' => static::enumToList(DropoffType::getValidValues()),
      '#default_value' => $this->configuration['options']['dropoff'],
    );
    $form['options']['insurance'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Include insurance value of shippable line items in FedEx rate requests'),
      '#default_value' => $this->configuration['options']['insurance'],
    );
    $form['options']['log'] = array(
      '#type' => 'checkboxes',
      '#title' => $this->t('Log the following messages for debugging'),
      '#options' => array(
        'request' => $this->t('API request messages'),
        'response' => $this->t('API response messages'),
      ),
      '#default_value' => $this->configuration['options']['log'],
    );



    /* Allow other modules to alter the settings form with access to configuration */
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

     /* if (empty($values['api_information']['api_password'])) {
        $values['api_information']['api_password'] = $values['api_information']['existing_api_password'];
      }*/
     //unset($values['api_information']['existing_api_password']);

      $this->configuration['mode'] = $values['mode'];
      $this->configuration['api_information'] = $values['api_information'];
      $this->configuration['options'] = $values['options'];

      /* Allow other modules to alter the settings form with access to configuration */
      $configurationFormEvent = new ConfigurationFormEvent($form, $form_state, $this->configuration);
      $this->eventDispatcher->dispatch(CommerceFedExEvents::SUBMIT_CONFIGURATION_FORM, $configurationFormEvent);
    }

  }

  /**
   * {@inheritdoc}
   */
  public function calculateRates(ShipmentInterface $shipment) {

    /** @var FedExServiceManager $fedEx */
    $fedEx = \Drupal::service('commerce_fedex.fedex_service');

    $rateService = $fedEx->getRateService($this->configuration);
    $rateRequest = $this->getRateRequest($rateService, $shipment);
    // Allow other modules to alter the rate request before it's submitted.
    $rateRequestEvent = new RateRequestEvent($rateRequest, $rateService, $shipment);
    $this->eventDispatcher->dispatch(CommerceFedExEvents::BEFORE_RATE_REQUEST, $rateRequestEvent);

    $rateRequest = $rateRequestEvent->getRateRequest();

    $response = $rateService->getRates($rateRequest);
    if (!$response) {
      throw new \Exception($rateService->getLastError());
    }

    $rates = [];
    if ($response->getHighestSeverity() == 'SUCCESS') {
      foreach ($response->getRateReplyDetails() as $rateDetails) {
        if (in_array($rateDetails->getServiceType(), array_keys($this->getServices()))) {
          $ratedShipmentDetails = $rateDetails->getRatedShipmentDetails()[0];
          $cost = $ratedShipmentDetails->getShipmentRateDetail()->getTotalNetChargeWithDutiesAndTaxes();

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
   *   Convert a fedex api Enum array to an option list
   *
   * @param array $enums
   *
   * @return array
   */
  public static function enumToList(array $enums){
    return array_combine($enums, array_map(function ($d) { return ucwords(str_replace('_', ' ', $d)); }, $enums));
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
   * Sets Details for Hazmat/Dangerous Goods
   *
   * @param $purchased_entity
   *    A product with the information needed to create the soap request
   * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail
   *    A Struct to be added to the package detail
   */
  protected function getDangerousGoodsDetail($purchased_entity){
    $dangerousGoodsDetail = new DangerousGoodsDetail();
    $dangerousGoodsDetail->setAccessibility(DangerousGoodsAccessibilityType::VALUE_ACCESSIBLE);
    $dangerousGoodsDetail->setOptions([HazardousCommodityOptionType::VALUE_HAZARDOUS_MATERIALS]);
    $dangerousGoodsDetail->setRegulation(HazardousCommodityRegulationType::VALUE_DOT);
    return $dangerousGoodsDetail;
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
    $orderItemStorage = \Drupal::entityTypeManager()->getStorage('commerce_order_item');

    $shippingType = $this->shippingType($shipment);

    $requestedPackageLineItems = [];

    foreach ($shipment->getItems() as $delta => $shipmentItem) {
      $requestedPackageLineItem = new RequestedPackageLineItem();
      $requestedPackageLineItem
        ->setSequenceNumber($delta + 1)
        ->setGroupPackageCount(1)
        ->setInsuredValue(new Money(
          $shipmentItem->getDeclaredValue()->getCurrencyCode(),
          $shipmentItem->getDeclaredValue()->getNumber()
        ))
        ->setWeight($this->physicalWeightToFedex($shipmentItem->getWeight()))
        ->setDimensions($this->packageToFedexDimensions($shipment->getPackageType()))
        ->setPhysicalPackaging(PhysicalPackagingType::VALUE_BOX)
        ->setItemDescription($shipmentItem->getTitle())
        ->setSpecialServicesRequested(new PackageSpecialServicesRequested());

      /** @var OrderItem $orderItem */
      $orderItem = $orderItemStorage->load($shipmentItem->getOrderItemId());
      $purchasedEntity = $orderItem->getPurchasedEntity();
      if ($purchasedEntity->hasField("commerce_fedex_dry_ice_$shippingType") && $purchasedEntity->get("commerce_fedex_dry_ice_$shippingType")->getValue()[0]['value']){
        $requestedPackageLineItem
          ->getSpecialServicesRequested()
          ->addToSpecialServiceTypes(PackageSpecialServiceType::VALUE_DRY_ICE);
        if (!empty($this->configuration['dry_ice'][$shippingType]['weight'])) {
          $weight = $this->configuration['dry_ice'][$shippingType]['weight'];
          $requestedPackageLineItem->getSpecialServicesRequested()
            ->setDryIceWeight($this->physicalWeightToFedex(new PhysicalWeight($weight['number'], $weight['unit'])));
        }
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

    /** @var AddressInterface $recipientAddress */
    $recipientAddress = $shipment->getShippingProfile()->get('address')->first();
    $shipperAddress = $shipment->getOrder()->getStore()->getAddress();

    $fedExShipment = new RequestedShipment();
    $fedExShipment
      ->setTotalWeight($this->physicalWeightToFedex($shipment->getWeight()))
      ->setShipper($this->getAddressForFedEx($shipperAddress))
      ->setRecipient($this->getAddressForFedEx($recipientAddress))
      ->setRequestedPackageLineItems($lineItems)
      ->setPackageCount(count($lineItems));

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
    /** @var FedExServiceManager $fedEx */
    $fedEx = \Drupal::service('commerce_fedex.fedex_service');

    $rateRequest = $fedEx->getRateRequest($this->configuration);
    $rateRequest
          ->setVersion($rateService->version)
          ->setRequestedShipment($this->getFedExShipment($shipment));

    return $rateRequest;
  }

  protected function isConfigured(){
    $api = $this->configuration['api_information'];
    return !empty($api['api_key']) && !empty($api['api_password']) && !empty($api['account_number']) && !empty($api['meter_number']);
  }
  /**
   * Convert between \Drupal\physical\Weight and \Nicholas
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
    if (!($weight instanceof PhysicalWeight)) {
      throw new \Exception("Invalid Units for Weight");
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

  public static function isDomestic(ShipmentInterface $shipment){
    $shippingAddress = $shipment->getShippingProfile()->get('address')->first();
    if ($shippingAddress instanceof AddressItem) {
      /** @var  AddressItem $shippingAddress */
      return $shipment->getOrder()->getStore()->getAddress()->getCountryCode() == $shippingAddress->getCountryCode();
    }
    return NULL;
  }

  public static function shippingType(ShipmentInterface $shipment){
    if (static::isDomestic($shipment)){
      return FedEx::SHIPPING_TYPE_DOMESTIC;
    }
    else {
      return FedEx::SHIPPING_TYPE_INTERNATIONAL;
    }
  }

}
