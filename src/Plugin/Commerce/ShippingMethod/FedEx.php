<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod;

use Drupal\address\AddressInterface;
use Drupal\address\Plugin\Field\FieldType\AddressItem;
use Drupal\commerce_fedex\Event\CommerceFedExEvents;
use Drupal\commerce_fedex\Event\RateRequestEvent;
use Drupal\commerce_fedex\FedExAddressResolver;
use Drupal\commerce_fedex\FedExRequestInterface;
use Drupal\commerce_fedex\FedExPluginManager;
use Drupal\commerce_price\Price;
use Drupal\commerce_price\RounderInterface;
use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\commerce_shipping\PackageTypeManagerInterface;
use Drupal\commerce_shipping\Plugin\Commerce\PackageType\PackageTypeInterface;
use Drupal\commerce_shipping\Plugin\Commerce\ShippingMethod\ShippingMethodBase;
use Drupal\commerce_shipping\ShipmentItem;
use Drupal\commerce_shipping\ShippingRate;
use Drupal\Core\Form\SubformState;
use Drupal\Core\Plugin\DefaultLazyPluginCollection;
use Drupal\physical\Volume;
use Drupal\physical\VolumeUnit;
use Drupal\physical\Weight as PhysicalWeight;
use Drupal\physical\WeightUnit as PhysicalWeightUnits;
use Drupal\physical\LengthUnit as PhysicalLengthUnits;
use Drupal\Core\Form\FormStateInterface;
use NicholasCreativeMedia\FedExPHP\Enums\DropoffType;
use NicholasCreativeMedia\FedExPHP\Enums\LinearUnits;
use NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType;
use NicholasCreativeMedia\FedExPHP\Enums\RateRequestType;
use NicholasCreativeMedia\FedExPHP\Services\RateService;
use NicholasCreativeMedia\FedExPHP\Structs\Address;
use NicholasCreativeMedia\FedExPHP\Structs\Dimensions;
use NicholasCreativeMedia\FedExPHP\Structs\Money;
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
 *     "FEDEX_2_DAY" = @Translation("FedEx 2nd Day"),
 *     "FEDEX_2_DAY_AM" = @Translation("FedEx 2nd Day AM"),
 *     "FEDEX_EXPRESS_SAVER" = @Translation("FedEx Express Saver"),
 *     "FEDEX_GROUND" = @Translation("FedEx Ground"),
 *     "FIRST_OVERNIGHT" = @Translation("FedEx First Overnight"),
 *     "GROUND_HOME_DELIVERY" = @Translation("FedEx Ground Home Delivery"),
 *     "INTERNATIONAL_ECONOMY" = @Translation("FedEx International Economy"),
 *     "INTERNATIONAL_FIRST" = @Translation("FedEx International First"),
 *     "INTERNATIONAL_PRIORITY" = @Translation("FedEx International Priority"),
 *     "PRIORITY_OVERNIGHT" = @Translation("FedEx Priority Overnight"),
 *     "SMART_POST" = @Translation("FedEx Smart Post"),
 *     "STANDARD_OVERNIGHT" = @Translation("FedEx Standard Overnight")
 *   }
 * )
 */
class FedEx extends ShippingMethodBase {
  use FedExAddressResolver;

  /**
   * Constant for Domestic Shipping.
   */
  const SHIPPING_TYPE_DOMESTIC = 'domestic';

  /**
   * Constant for International Shipping.
   */
  const SHIPPING_TYPE_INTERNATIONAL = 'intl';

  /**
   * Package All items in one box, ignoring dimensions.
   */
  const PACKAGE_ALL_IN_ONE = 'allinone';

  /**
   * Package each line item in its own box, ignoring dimensions.
   */
  const PACKAGE_INDIVIDUAL = 'individual';

  /**
   * Calculate volume to determine how many boxes are needed.
   */
  const PACKAGE_CALCULATE = 'calculate';

  /**
   * The event dispatcher.
   *
   * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
   */
  protected $eventDispatcher;

  /**
   * The FedEx Service Plugin Manager.
   *
   * @var \Drupal\commerce_fedex\FedExPluginManager
   */
  protected $fedExServiceManager;

  /**
   * The Service Plugins.
   *
   * @var \Drupal\Core\Plugin\DefaultLazyPluginCollection
   */
  protected $plugins;

  /**
   * Commerce Fedex Logger Channel.
   *
   * @var \Psr\Log\LoggerInterface
   */
  protected $watchdog;

  /**
   * The price rounder.
   *
   * @var \Drupal\commerce_price\RounderInterface
   */
  protected $rounder;

  /**
   * The FedEx Connection.
   *
   * @var \Drupal\commerce_fedex\FedExRequestInterface
   */
  protected $fedExRequest;

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
   * @param \Drupal\commerce_fedex\FedExPluginManager $fedex_service_manager
   *   The FedEx Plugin Manager.
   * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $event_dispatcher
   *   The Event Dispatcher.
   * @param \Drupal\commerce_fedex\FedExRequestInterface $fedex_request
   *   The Fedex Request Service.
   * @param \Psr\Log\LoggerInterface $watchdog
   *   Commerce Fedex Logger Channel.
   * @param \Drupal\commerce_price\RounderInterface $rounder
   *   The price rounder.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, PackageTypeManagerInterface $package_type_manager, FedExPluginManager $fedex_service_manager, EventDispatcherInterface $event_dispatcher, FedExRequestInterface $fedex_request, LoggerInterface $watchdog, RounderInterface $rounder) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $package_type_manager);
    $this->watchdog = $watchdog;
    $this->fedExRequest = $fedex_request;
    $this->fedExServiceManager = $fedex_service_manager;
    $this->eventDispatcher = $event_dispatcher;
    $this->rounder = $rounder;
    if (empty($this->configuration['plugins'])) {
      $this->configuration['plugins'] = [];
    }

    $this->updatePlugins()->getPlugins();
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
      $container->get('plugin.manager.commerce_fedex_service'),
      $container->get('event_dispatcher'),
      $container->get('commerce_fedex.fedex_request'),
      $container->get('logger.channel.commerce_fedex'),
      $container->get('commerce_price.rounder')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {

    return [
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
        'dropoff' => DropoffType::VALUE_REGULAR_PICKUP,
        'insurance' => FALSE,
        'rate_multiplier' => 1.0,
        'round' => PHP_ROUND_HALF_UP,
        'log' => [],
      ],
      'plugins' => [],
    ] + parent::defaultConfiguration();
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
      '#weight' => $this->isConfigured() ? 10 : -10,
      '#open' => !$this->isConfigured(),
    ];
    $form['api_information']['api_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API key'),
      '#description' => $this->t('Enter your FedEx API key.'),
      '#default_value' => $this->configuration['api_information']['api_key'],
    ];
    $form['api_information']['api_password'] = [
      '#type' => 'password',
      '#title' => $this->t('API password'),
      '#description' => $this->t('Enter your FedEx API password only if you wish to change its value.'),
      '#default_value' => '',
    ];
    $form['api_information']['account_number'] = [
      '#type' => 'number',
      '#min' => 0,
      '#step' => 1,
      '#title' => $this->t('Account number'),
      '#description' => $this->t('Enter your FedEx account number.'),
      '#default_value' => $this->configuration['api_information']['account_number'],
    ];
    $form['api_information']['meter_number'] = [
      '#type' => 'number',
      '#min' => 0,
      '#step' => 1,
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
    ];
    $form['options']['packaging'] = [
      '#type' => 'select',
      '#title' => $this->t('Packaging strategy'),
      '#description' => $this->t('Select your packaging strategy. "All items in one box" will ignore package type and product dimensions, and assume all items go in one box. "Each item in its own box" will create a box for each line item in the order, "Calculate" Will attempt to figure out how many boxes are needed based on package type volumes and product volumes similar to commerce_fedex 7.x'),
      '#options' => [
        static::PACKAGE_ALL_IN_ONE => $this->t("All items in one box"),
        static::PACKAGE_INDIVIDUAL => $this->t("Each item in its own box"),
        static::PACKAGE_CALCULATE => $this->t("Calculate"),
      ],
      '#default_value' => $this->configuration['options']['packaging'],
    ];
    $form['options']['rate_request_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Pricing options'),
      '#description' => $this->t('Select the pricing option to use when requesting a rate quote. Note that discounted rates are only available when sending production requests.'),
      '#options' => [
        RateRequestType::VALUE_NONE => $this->t('Standard pricing (LIST)'),
        RateRequestType::VALUE_PREFERRED => $this->t("This FedEx account's discounted pricing (ACCOUNT)"),
      ],
      '#default_value' => $this->configuration['options']['rate_request_type'],
    ];
    $form['options']['dropoff'] = [
      '#type' => 'select',
      '#title' => $this->t('Dropoff type'),
      '#description' => $this->t('Default dropoff/pickup location for your FedEx shipments'),
      '#options' => static::enumToList(DropoffType::getValidValues()),
      '#default_value' => $this->configuration['options']['dropoff'],
    ];
    $form['options']['insurance'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Include insurance'),
      '#description' => $this->t('Include insurance value of shippable line items in FedEx rate requests'),
      '#default_value' => $this->configuration['options']['insurance'],
    ];
    $form['options']['rate_multiplier'] = [
      '#type' => 'number',
      '#title' => $this->t('Rate multiplier'),
      '#description' => $this->t('A number that each rate returned from FedEx will be multiplied by. For example, enter 1.5 to mark up shipping costs to 150%.'),
      '#min' => 0.1,
      '#step' => 0.1,
      '#size' => 5,
      '#default_value' => $this->configuration['options']['rate_multiplier'],
    ];
    $form['options']['round'] = [
      '#type' => 'select',
      '#title' => $this->t('Round type'),
      '#description' => $this->t('Choose how the shipping rate should be rounded.'),
      '#options' => [
        PHP_ROUND_HALF_UP => 'Half up',
        PHP_ROUND_HALF_DOWN => 'Half down',
        PHP_ROUND_HALF_EVEN => 'Half even',
        PHP_ROUND_HALF_ODD => 'Half odd',
      ],
      '#default_value' => $this->configuration['options']['round'],
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

    foreach ($this->fedExServiceManager->getDefinitions() as $plugin_id => $definition) {
      /** @var \Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginInterface $plugin */
      $plugin = $this->plugins->get($plugin_id);
      $subform = [
        '#type' => 'details',
        '#title' => $definition['options_label']->render(),
        '#description' => $definition['options_description']->render(),
      ];
      $form[$plugin_id] = $plugin->buildConfigurationForm($subform, $form_state);
      if ($form[$plugin_id] == $subform) {
        unset($form[$plugin_id]);
      }
    }
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {

    parent::validateConfigurationForm($form, $form_state);

    foreach ($this->fedExServiceManager->getDefinitions() as $plugin_id => $definition) {
      if (!empty($form[$plugin_id])) {
        /** @var \Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginInterface $plugin */
        $plugin = $this->plugins->get($plugin_id);
        $plugin->validateConfigurationForm($form[$plugin_id], SubformState::createForSubform($form[$plugin_id], $form_state->getCompleteForm(), $form_state));
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    if (!$form_state->getErrors()) {

      $values = $form_state->getValue($form['#parents']);

      $this->configuration['api_information']['api_key'] = $values['api_information']['api_key'];
      if (!empty($values['api_information']['api_password'])) {
        $this->configuration['api_information']['api_password'] = $values['api_information']['api_password'];
      }
      $this->configuration['api_information']['account_number'] = $values['api_information']['account_number'];
      $this->configuration['api_information']['meter_number'] = $values['api_information']['meter_number'];
      $this->configuration['api_information']['mode'] = $values['api_information']['mode'];
      $this->configuration['options']['packaging'] = $values['options']['packaging'];
      $this->configuration['options']['rate_request_type'] = $values['options']['rate_request_type'];
      $this->configuration['options']['dropoff'] = $values['options']['dropoff'];
      $this->configuration['options']['insurance'] = $values['options']['insurance'];
      $this->configuration['options']['rate_multiplier'] = $values['options']['rate_multiplier'];
      $this->configuration['options']['round'] = $values['options']['round'];
      $this->configuration['options']['log'] = $values['options']['log'];

      unset($this->configuration['plugins']);
      foreach ($this->fedExServiceManager->getDefinitions() as $plugin_id => $definition) {
        /** @var \Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginInterface $plugin */
        $plugin = $this->plugins->get($plugin_id);
        if (!empty($form[$plugin_id])) {
          $plugin->submitConfigurationForm($form[$plugin_id], SubformState::createForSubform($form[$plugin_id], $form_state->getCompleteForm(), $form_state));
        }
        $this->configuration['plugins'][$plugin_id]['configuration'] = $plugin->getConfiguration();

      }
    }
    parent::submitConfigurationForm($form, $form_state);
  }

  /**
   * Logs Requests and responses from FedEx.
   *
   * @param string $message
   *   The message to log.
   * @param mixed $data
   *   The FedEx Request or response object.
   * @param string $level
   *   The Log level.
   * @param bool $skip_config_check
   *   Whether to skip the check to log or not.
   */
  protected function logRequest($message, $data, $level = LogLevel::INFO, $skip_config_check = FALSE) {
    /* If we are using the old configuration */
    if (is_array($this->configuration['options']['log'])) {

    }

    if ($skip_config_check || @$this->configuration['options']['log']['request']) {
      $this->watchdog->log($level, "$message <br><pre>@rate_request</pre>", [
        '@rate_request' => var_export($data, TRUE),
      ]);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function calculateRates(ShipmentInterface $shipment) {

    if ($shipment->getShippingProfile()->address->isEmpty()) {
      return [];
    }

    $rate_service = $this->fedExRequest->getRateService($this->configuration);
    $rate_request = $this->getRateRequest($rate_service, $shipment);
    $this->logRequest('Sending FedEx request.', $rate_request);
    $response = $rate_service->getRates($rate_request);
    $rates = [];

    if ($response) {
      $this->logRequest('FedEx response received.', $response);
      $allowed_severities = ['SUCCESS', 'NOTE', 'WARNING'];
      $highest_severity = $response->getHighestSeverity();
      $severity_map = [
        'NOTE' => LogLevel::NOTICE,
        'WARNING' => LogLevel::WARNING,
        'ERROR' => LogLevel::ERROR,
        'FAILURE' => LogLevel::ERROR,
      ];

      // Log any notifications returned from FedEx.
      foreach ($response->getNotifications() as $notification) {
        if (array_key_exists($notification->getSeverity(), $severity_map)) {
          $this->watchdog->log($severity_map[$notification->getSeverity()], '@message (Code @code)', [
            '@message' => $notification->getMessage(),
            '@code' => $notification->getCode(),
          ]);
        }
      }

      if (in_array($highest_severity, $allowed_severities)) {
        $multiplier = (!empty($this->configuration['options']['rate_multiplier']))
          ? $this->configuration['options']['rate_multiplier']
          : 1.0;
        $round = !empty($this->configuration['options']['round'])
          ? $this->configuration['options']['round']
          : PHP_ROUND_HALF_UP;
        foreach ($response->getRateReplyDetails() as $rate_details) {
          if (in_array($rate_details->getServiceType(), array_keys($this->getServices()))) {
            $cost = $rate_details
              ->getRatedShipmentDetails()[0]
              ->getShipmentRateDetail()
              ->getTotalNetChargeWithDutiesAndTaxes();

            $price = new Price((string) $cost->getAmount(), $cost->getCurrency());
            if ($multiplier != 1) {
              $price = $price->multiply((string) $multiplier);
            }
            $price = $this->rounder->round($price, $round);

            $rates[] = new ShippingRate(
              $rate_details->getServiceType(),
              $this->services[$rate_details->getServiceType()],
              $price
            );
          }
        }
      }
    }
    else {
      $this->logRequest('FedEx sent no response back.', $rate_request, LogLevel::NOTICE, TRUE);
    }

    return $rates;
  }

  /**
   * Updates the configuration array with currently discovered plugins.
   *
   * @return $this
   */
  public function updatePlugins() {
    $definitions = $this->fedExServiceManager->getDefinitions();
    $this->configuration['plugins'] = array_intersect_key($this->configuration['plugins'], $definitions);
    foreach ($definitions as $plugin_id => $definition) {
      if (empty($this->configuration['plugins'][$plugin_id])) {
        $this->configuration['plugins'][$plugin_id] = [
          'plugin_id' => $plugin_id,
          'configuration' => ['id' => $plugin_id],
        ];
      }
    }
    return $this;
  }

  /**
   * Loads the Plugin Collection.
   *
   * @return $this
   */
  public function getPlugins() {
    $plugins = [];
    foreach ($this->configuration['plugins'] as $plugin_id => $plugin_data) {
      $plugins[$plugin_id] = $plugin_data['configuration'];
    }
    $this->plugins = new DefaultLazyPluginCollection($this->fedExServiceManager, $plugins);
    return $this;
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
  public static function enumToList(array $enums) {
    return array_combine($enums, array_map(function ($d) {
      return ucwords(strtolower(str_replace('_', ' ', $d)));
    }, $enums));
  }

  /**
   * Gets a FedEx address object from the provided Drupal address object.
   *
   * @param \Drupal\address\AddressInterface $address
   *   The Drupal address object.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\Party
   *   The address for FedEx.
   */
  protected function getAddressForFedEx(AddressInterface $address) {
    $custom_resolver = 'addressResolve' . $address->getCountryCode();

    if (method_exists($this, $custom_resolver)) {
      $party = $this->$custom_resolver($address);
    }
    else {
      $party = new Party();

      $party->setAddress(new Address(
        array_filter([
          $address->getAddressLine1(),
          $address->getAddressLine2(),
        ]),
        $address->getLocality(),
        $address->getAdministrativeArea(),
        $address->getPostalCode(),
        NULL,
        $address->getCountryCode(),
        NULL,
        FALSE
      ));
    }
    return $party;
  }

  /**
   * Gets the requested package line items.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem[]
   *   The requested package line items.
   */
  protected function getRequestedPackageLineItems(ShipmentInterface $shipment) {
    $requested_package_line_items = [];

    switch ($this->configuration['options']['packaging']) {
      case static::PACKAGE_ALL_IN_ONE:
        $requested_package_line_items = $this->getRequestedPackageLineItemsAllInOne($shipment);
        break;

      case static::PACKAGE_INDIVIDUAL:
        $requested_package_line_items = $this->getRequestedPackageLineItemsIndividual($shipment);
        break;

      case static::PACKAGE_CALCULATE:
        $requested_package_line_items = $this->getRequestedPackageLineItemsCalculate($shipment);
        break;
    }

    return $requested_package_line_items;
  }

  /**
   * Gets the volume of the provided package type.
   *
   * @param \Drupal\commerce_shipping\Plugin\Commerce\PackageType\PackageTypeInterface $package_type
   *   The package type.
   *
   * @return float
   *   The volume.
   */
  protected function getPackageVolume(PackageTypeInterface $package_type) {
    $unit = $package_type->getHeight()->getUnit();

    $number = $package_type
      ->getHeight()
      ->multiply($package_type->getWidth()->convert($unit)->getNumber())
      ->multiply($package_type->getLength()->convert($unit)->getNumber())
      ->getNumber();

    return (float) $number;
  }

  /**
   * Gets a cleaned title string for use in sending to FedEx.
   *
   * @param \Drupal\commerce_shipping\ShipmentItem $shipment_item
   *   The shipment item.
   *
   * @return string
   *   The cleaned title.
   */
  protected function getCleanTitle(ShipmentItem $shipment_item) {
    $title = $shipment_item->getTitle();
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
  protected function getRequestedPackageLineItemsAllInOne(ShipmentInterface $shipment) {

    $packages = $this->splitPackages($shipment);

    $requested_package_line_items = [];

    foreach ($packages as $delta => $package) {
      $requested_package_line_item = new RequestedPackageLineItem();
      $shipment_title = $shipment->getTitle();

      if (!is_string($shipment_title)) {
        $shipment_title = $shipment_title->render();
      }

      $requested_package_line_item
        ->setSequenceNumber($delta + 1)
        ->setGroupPackageCount(1)
        ->setWeight(static::packageTotalWeight($package, $shipment->getPackageType()))
        ->setDimensions($this->packageToFedexDimensions($shipment->getPackageType()))
        ->setPhysicalPackaging(PhysicalPackagingType::VALUE_BOX)
        ->setItemDescription($shipment_title);

      if ($this->configuration['options']['insurance']) {
        $requested_package_line_item->setInsuredValue(new Money(
          $shipment->getTotalDeclaredValue()->getCurrencyCode(),
          $shipment->getTotalDeclaredValue()->getNumber()
        ));
      }

      $requested_package_line_items[] = $this->adjustPackage($requested_package_line_item, $package, $shipment);
    }

    return $requested_package_line_items;
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
    $requested_package_line_items = $this->getRequestedPackageLineItemsAllInOne($shipment);
    $packages = $this->splitPackages($shipment);
    foreach ($requested_package_line_items as &$requested_package_line_item) {
      /** @var \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $requested_package_line_item */
      $count = static::calculatePackageCount($requested_package_line_item, $packages[$requested_package_line_item->getSequenceNumber() - 1]);
      if ($count) {
        $requested_package_line_item->setGroupPackageCount($count);
        $requested_package_line_item->getWeight()->setValue($requested_package_line_item->getWeight()->getValue() / $count);
      }
    }

    return $requested_package_line_items;
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
    $requested_package_line_items = [];
    $weightUnits = '';
    foreach ($shipment->getItems() as $delta => $shipment_item) {
      $requested_package_line_item = new RequestedPackageLineItem();
      if ($weightUnits == '') {
        /* All packages must have the same Weight Unit */
        $weightUnits = $shipment_item->getWeight()->getUnit();
      }

      $requested_package_line_item
        ->setSequenceNumber($delta + 1)
        ->setGroupPackageCount(1)
        ->setWeight($this->physicalWeightToFedex($shipment_item->getWeight()->convert($weightUnits)))
        ->setDimensions($this->packageToFedexDimensions($shipment->getPackageType()))
        ->setPhysicalPackaging(PhysicalPackagingType::VALUE_BOX)
        ->setItemDescription($this->getCleanTitle($shipment_item));

      if ($this->configuration['options']['insurance']) {
        $requested_package_line_item->setInsuredValue(new Money(
          $shipment_item->getDeclaredValue()->getCurrencyCode(),
          $shipment_item->getDeclaredValue()->getNumber()
        ));
      }
      $this->adjustPackage($requested_package_line_item, [$shipment_item], $shipment);
      $requested_package_line_items[] = $requested_package_line_item;
    }

    return $requested_package_line_items;
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
    $line_items = $this->getRequestedPackageLineItems($shipment);

    if ($this->configuration['options']['packaging'] == static::PACKAGE_CALCULATE) {
      $count = 0;
      foreach ($line_items as $line_item) {
        $count += $line_item->getGroupPackageCount();
      }
    }
    else {
      $count = count($line_items);
    }

    /** @var \Drupal\address\AddressInterface $recipient_address */
    $recipient_address = $shipment->getShippingProfile()->get('address')->first();
    $shipper_address = $shipment->getOrder()->getStore()->getAddress();

    $fedex_shipment = new RequestedShipment();

    $fedex_shipment
      ->setShipper($this->getAddressForFedEx($shipper_address))
      ->setRecipient($this->getAddressForFedEx($recipient_address))
      ->setRequestedPackageLineItems($line_items)
      ->setPackageCount($count)
      ->setPreferredCurrency($shipment->getOrder()->getStore()->getDefaultCurrencyCode())
      ->setDropoffType($this->configuration['options']['dropoff'])
      ->addToRateRequestTypes($this->configuration['options']['rate_request_type'])
      ->setRateRequestTypes();

    if ($this->configuration['options']['insurance']) {
      $fedex_shipment->setTotalInsuredValue(new Money(
        $shipment->getTotalDeclaredValue()->getCurrencyCode(),
        $shipment->getTotalDeclaredValue()->getNumber()
      ));
    }

    return $fedex_shipment;
  }

  /**
   * Queries plugins to split shipments into fedex packages.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment to split.
   *
   * @return array
   *   An array of arrays or shipment items.
   */
  protected function splitPackages(ShipmentInterface $shipment) {
    $packages = [$shipment->getItems()];
    foreach ($this->fedExServiceManager->getDefinitions() as $plugin_id => $definition) {
      /** @var \Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginInterface $plugin */
      $plugin = $this->plugins->get($plugin_id);
      $new_packages = [];
      foreach ($packages as $package) {
        $new_packages = array_merge($new_packages, $plugin->splitPackage($package, $shipment));
      }
      $packages = array_filter($new_packages);
    }
    return $packages;
  }

  /**
   * Query plugins for package adjustments.
   *
   * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $requested_package_line_item
   *   Te package line item to be adjusted.
   * @param array $shipment_items
   *   The shipment items in the package.
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The full shipment.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
   *   The adjusted line item.
   */
  protected function adjustPackage(RequestedPackageLineItem $requested_package_line_item, array $shipment_items, ShipmentInterface $shipment) {
    foreach ($this->fedExServiceManager->getDefinitions() as $plugin_id => $definition) {
      /** @var \Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginInterface $plugin */
      $plugin = $this->plugins->get($plugin_id);
      $requested_package_line_item = $plugin->adjustPackage($requested_package_line_item, $shipment_items, $shipment);
    }
    return $requested_package_line_item;
  }

  /**
   * Gets a rate request object for FedEx.
   *
   * @param \NicholasCreativeMedia\FedExPHP\Services\RateService $rate_service
   *   The FedEx Rate Service.
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\RateRequest
   *   The rate request object.
   */
  protected function getRateRequest(RateService $rate_service, ShipmentInterface $shipment) {
    $rate_request = $this->fedExRequest->getRateRequest($this->configuration);
    $rate_request->setRequestedShipment($this->getFedExShipment($shipment));
    $rate_request->setVersion($rate_service->version);

    // Allow other modules to alter the rate request before it's submitted.
    $rateRequestEvent = new RateRequestEvent($rate_request, $rate_service, $shipment);
    $this->eventDispatcher->dispatch(CommerceFedExEvents::BEFORE_RATE_REQUEST, $rateRequestEvent);

    return $rate_request;
  }

  /**
   * Return the total volume of an array of shipment items in a given unit.
   *
   * @param array $shipment_items
   *   The array of shipment items.
   * @param string $volume_unit
   *   The volume unit.
   *
   * @return \Drupal\physical\Volume
   *   The total Volume.
   *
   * @throws \Exception
   */
  protected static function getPackageTotalVolume(array $shipment_items, $volume_unit = NULL) {
    if ($volume_unit == NULL) {
      $volume_unit = VolumeUnit::CUBIC_CENTIMETER;
    }
    switch ($volume_unit) {
      case VolumeUnit::CUBIC_CENTIMETER:
        $linear_unit = PhysicalLengthUnits::CENTIMETER;
        break;

      case VolumeUnit::CUBIC_INCH:
        $linear_unit = PhysicalLengthUnits::INCH;
        break;

      default:
        throw new \Exception("Invalid Units");
    }
    $order_item_storage = \Drupal::entityTypeManager()->getStorage('commerce_order_item');
    $order_item_ids = [];
    foreach ($shipment_items as $shipment_item) {
      $order_item_ids[] = $shipment_item->getOrderItemId();
    }

    $order_items = $order_item_storage->loadMultiple($order_item_ids);

    $total_volume = 0;
    foreach ($order_items as $order_item) {
      /** @var \Drupal\commerce_order\Entity\OrderItem $order_item */
      /** @var \Drupal\commerce_product\Entity\ProductVariationInterface $purchased_entity */
      $purchased_entity = $order_item->getPurchasedEntity();

      if ($purchased_entity->hasField('dimensions') && !$purchased_entity->get('dimensions')->isEmpty()) {
        /** @var \Drupal\physical\Plugin\Field\FieldType\DimensionsItem $dimensions */
        $dimensions = $purchased_entity->get('dimensions')->first();

        $volume = $dimensions
          ->getHeight()
          ->convert($linear_unit)
          ->multiply($dimensions->getWidth()->convert($linear_unit)->getNumber())
          ->multiply($dimensions->getLength()->convert($linear_unit)->getNumber())
          ->getNumber();

        $total_volume += (float) $volume * $order_item->getQuantity();
      }
    }

    return new Volume((string) $total_volume, $volume_unit);
  }

  /**
   * Gets the shipment's total volume in the same units as the package type.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return float
   *   The volume.
   */
  protected function getShipmentTotalVolume(ShipmentInterface $shipment) {
    $order_item_storage = \Drupal::entityTypeManager()->getStorage('commerce_order_item');
    $order_item_ids = [];

    foreach ($shipment->getItems() as $shipment_item) {
      $order_item_ids[] = $shipment_item->getOrderItemId();
    }

    $order_items = $order_item_storage->loadMultiple($order_item_ids);
    $unit = $shipment->getPackageType()->getHeight()->getUnit();

    $total_volume = 0;
    foreach ($order_items as $orderItem) {
      /** @var \Drupal\commerce_order\Entity\OrderItem $orderItem */
      $purchased_entity = $orderItem->getPurchasedEntity();

      if ($purchased_entity->hasField('dimensions') && !$purchased_entity->get('dimensions')->isEmpty()) {
        /** @var \Drupal\physical\Plugin\Field\FieldType\DimensionsItem $dimensions */
        $dimensions = $purchased_entity->get('dimensions')->first();

        $volume = $dimensions
          ->getHeight()
          ->convert($unit)
          ->multiply($dimensions->getWidth()->convert($unit)->getNumber())
          ->multiply($dimensions->getLength()->convert($unit)->getNumber())
          ->getNumber();

        $total_volume += (float) $volume * $orderItem->getQuantity();
      }
    }

    return $total_volume;
  }

  /**
   * Determine if we have the minimum information to connect to FedEx.
   *
   * @return bool
   *   TRUE if there is enough information to connect, FALSE otherwise.
   */
  protected function isConfigured() {
    $api_information = $this->configuration['api_information'];

    return (
      !empty($api_information['api_key'])
      && !empty($api_information['api_password'])
      && !empty($api_information['account_number'])
      && !empty($api_information['meter_number'])
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
  public static function physicalWeightToFedex(PhysicalWeight $weight) {
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
  public static function packageToFedexDimensions(PackageTypeInterface $package) {
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

    /* @var  AddressItem $shipping_address */
    $shipping_address = $shipment->getShippingProfile()->get('address')->first();

    $domestic = ($shipping_address instanceof AddressItem)
      ? $shipment->getOrder()->getStore()->getAddress()->getCountryCode() == $shipping_address->getCountryCode()
      : FALSE;

    return $domestic;
  }

  /**
   * Gets the shipping type of the shipment.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The Shipment.
   *
   * @return string
   *   A constant representing the shipment type
   */
  public static function shippingType(ShipmentInterface $shipment) {
    return static::isDomestic($shipment)
      ? FedEx::SHIPPING_TYPE_DOMESTIC
      : FedEx::SHIPPING_TYPE_INTERNATIONAL;
  }

  /**
   * Function packageTotalWeight.
   *
   * @param array $shipment_items
   *   An array of shipment items.
   * @param \Drupal\commerce_shipping\Plugin\Commerce\PackageType\PackageTypeInterface $package_type
   *   The commerce_shipping package type.
   * @param \Drupal\physical\Weight|null $adjustment
   *   Any weight adjustment to add or subtract.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight
   *   The total weight of the package.
   */
  public static function packageTotalWeight(array $shipment_items, PackageTypeInterface $package_type, PhysicalWeight $adjustment = NULL) {

    if (empty($shipment_items)) {
      return new FedexWeight('LB', 0);
    }

    $storage = \Drupal::entityTypeManager()->getStorage('commerce_order_item');
    $unit = $storage->load(reset($shipment_items)->getOrderItemId())->getPurchasedEntity()->weight->first()->toMeasurement()->getUnit();
    $total_weight = new PhysicalWeight("0", $unit);
    foreach ($shipment_items as $shipment_item) {
      /* @var ShipmentItem $shipment_item */
      /* @var \Drupal\commerce_order\Entity\OrderItem $order_item */
      $order_item = $storage->load($shipment_item->getOrderItemId());
      $purchased_entity = $order_item->getPurchasedEntity();
      $order_item_weight = $purchased_entity->weight->first()->toMeasurement()
        ->convert($unit)
        ->multiply($order_item->getQuantity());
      $total_weight = $total_weight->add($order_item_weight);
    }
    $total_weight = $total_weight->add($package_type->getWeight()->convert($unit));
    if ($adjustment) {
      $total_weight = $total_weight->add($adjustment->convert($unit));
    }
    return static::physicalWeightToFedex($total_weight);
  }

  /**
   * Determines a package count given package and item volumes.
   *
   * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $requested_package_line_item
   *   The package line item containing the fedex package dimensions.
   * @param array $shipment_items
   *   The array of shipment items.
   *
   * @return bool|float
   *   The number of needed packages, or False on error.
   */
  public static function calculatePackageCount(RequestedPackageLineItem $requested_package_line_item, array $shipment_items) {
    $package_volume = static::getFedexPackageVolume($requested_package_line_item->getDimensions());
    $items_volume = static::getPackageTotalVolume($shipment_items, $package_volume->getUnit());

    if ($package_volume->getNumber() != 0) {
      return ceil($items_volume->getNumber() / $package_volume->getNumber());
    }
    return FALSE;

  }

  /**
   * Determine the package volume from a fedex package dimensions item.
   *
   * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions
   *   The fexed package dimensions item.
   *
   * @return \Drupal\physical\Volume
   *   The total package volume.
   *
   * @throws \Exception
   */
  public static function getFedexPackageVolume(Dimensions $dimensions) {
    $volume_value = $dimensions->getHeight() * $dimensions->getLength() * $dimensions->getWidth();
    switch ($dimensions->getUnits()) {
      case LinearUnits::VALUE_CM:
        $volume_units = VolumeUnit::CUBIC_CENTIMETER;
        break;

      case LinearUnits::VALUE_IN:
        $volume_units = VolumeUnit::CUBIC_INCH;
        break;

      default:
        throw new \Exception("Invalid Dimensions");
    }
    return new Volume((string) $volume_value, $volume_units);
  }

}
