<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod;

use Drupal\commerce_fedex\FedEx\EnumType\ServiceType;
use Drupal\commerce_fedex\FedEx\EnumType\PhysicalPackagingType;
use Drupal\commerce_fedex\FedEx\ServiceType\RateService;
use Drupal\commerce_fedex\FedEx\StructType\Address;
use Drupal\commerce_fedex\FedEx\StructType\Dimensions;
use Drupal\commerce_fedex\FedEx\StructType\Money;
use Drupal\commerce_fedex\FedEx\StructType\Party;
use Drupal\commerce_fedex\FedEx\StructType\RequestedPackageLineItem;
use Drupal\commerce_fedex\FedEx\StructType\RequestedShipment;
use Drupal\commerce_fedex\FedEx\StructType\Weight as FedexWeight;
use Drupal\commerce_fedex\FedEx\EnumType\WeightUnits as FedexWeightUnits;
use Drupal\commerce_fedex\FedEx\EnumType\LinearUnits as FedexLengthUnits;
use Drupal\address\AddressInterface;
use Drupal\commerce_fedex\FedExServiceManager;
use Drupal\commerce_price\Price;
use Drupal\commerce_shipping\Annotation\CommerceShippingMethod;
use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\commerce_shipping\PackageTypeManagerInterface;
use Drupal\commerce_shipping\Plugin\Commerce\EntityTrait\OrderShippable;
use Drupal\commerce_shipping\Plugin\Commerce\PackageType\PackageType;
use Drupal\commerce_shipping\Plugin\Commerce\PackageType\PackageTypeInterface;
use Drupal\commerce_shipping\Plugin\Commerce\ShippingMethod\ShippingMethodBase;
use Drupal\commerce_shipping\ShipmentItem;
use Drupal\commerce_shipping\ShippingRate;
use Drupal\commerce_shipping\ShippingService;
use Drupal\physical\Weight as PhysicalWeight;
use Drupal\physical\WeightUnit as PhysicalWeightUnits;
use Drupal\physical\LengthUnit as PhysicalLengthUnits;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides the FedEx shipping method.
 *
 * @CommerceShippingMethod(
 *   id = "fedex",
 *   label = @Translation("FedEx"),
 * )
 */
class FedEx extends ShippingMethodBase {

  /**
   * Constructs a new FedEx object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\commerce_shipping\PackageTypeManagerInterface $package_type_manager
   *   The package type manager.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, PackageTypeManagerInterface $package_type_manager) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $package_type_manager);

    $services = [
      ServiceType::VALUE_EUROPE_FIRST_INTERNATIONAL_PRIORITY  => 'FedEx Europe First International Priority',
      ServiceType::VALUE_FEDEX_1_DAY_FREIGHT  => 'FedEx 1st Day Freight',
      ServiceType::VALUE_FEDEX_2_DAY  => 'FedEx 2nd Day',
      ServiceType::VALUE_FEDEX_2_DAY_AM  => 'FedEx 2nd Day AM',
      ServiceType::VALUE_FEDEX_2_DAY_FREIGHT  => 'FedEx 2nd Day Freight',
      ServiceType::VALUE_FEDEX_3_DAY_FREIGHT  => 'FedEx 3rd Day Freight',
      ServiceType::VALUE_FEDEX_DISTANCE_DEFERRED  => 'FedEx Distance Deferred',
      ServiceType::VALUE_FEDEX_EXPRESS_SAVER  => 'FedEx Express Saver',
      ServiceType::VALUE_FEDEX_FIRST_FREIGHT  => 'FedEx First Freight',
      ServiceType::VALUE_FEDEX_FREIGHT_ECONOMY  => 'FedEx Freight Economy',
      ServiceType::VALUE_FEDEX_FREIGHT_PRIORITY  => 'FedEx Freight Priority',
      ServiceType::VALUE_FEDEX_GROUND  => 'FedEx Ground',
      ServiceType::VALUE_FEDEX_NEXT_DAY_AFTERNOON  => 'FedEx Next Day Afternoon',
      ServiceType::VALUE_FEDEX_NEXT_DAY_EARLY_MORNING  => 'FedEx Next Day Early Morning',
      ServiceType::VALUE_FEDEX_NEXT_DAY_END_OF_DAY  => 'FedEx Next Day End of Day',
      ServiceType::VALUE_FEDEX_NEXT_DAY_FREIGHT  => 'FedEx Next Day Freight',
      ServiceType::VALUE_FEDEX_NEXT_DAY_MID_MORNING  => 'FedEx Next Day Mid Morning',
      ServiceType::VALUE_FIRST_OVERNIGHT  => 'FedEx First Overnight',
      ServiceType::VALUE_GROUND_HOME_DELIVERY  => 'FedEx Ground Home Delivery',
      ServiceType::VALUE_INTERNATIONAL_ECONOMY  => 'FedEx International Economy',
      ServiceType::VALUE_INTERNATIONAL_ECONOMY_FREIGHT  => 'FedEx International Economy Freight',
      ServiceType::VALUE_INTERNATIONAL_FIRST  => 'FedEx International First',
      ServiceType::VALUE_INTERNATIONAL_PRIORITY  => 'FedEx International Priority',
      ServiceType::VALUE_INTERNATIONAL_PRIORITY_FREIGHT  => 'FedEx International Priority Freight',
      ServiceType::VALUE_PRIORITY_OVERNIGHT  => 'FedEx Priority Overnight',
      ServiceType::VALUE_SAME_DAY  => 'FedEx Same Day',
      ServiceType::VALUE_SAME_DAY_CITY  => 'FedEx Same Day City',
      ServiceType::VALUE_SMART_POST  => 'FedEx Smart Post',
      ServiceType::VALUE_STANDARD_OVERNIGHT  => 'FedEx Standard Overnight',
    ];

    foreach ($services as $id => $name) {
      $this->services[$id] = new ShippingService($id, $name);
    }
  }

  /**
   * @return array
   */
  public function defaultConfiguration() {
    return [
        'mode' => 'test',
        'api_key' => '',
        'api_password' => '',
        'account_number' => '',
        'meter_number' => '',
        'enabled_services' => [],


      ] + parent::defaultConfiguration();
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   * @return array
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
    $services = array_map(function ($service) {
      return $service->getLabel();
    }, $this->services);
    // Select all services by default.
    if (empty($this->configuration['services'])) {
      $service_ids = array_keys($services);
      $this->configuration['services'] = array_combine($service_ids, $service_ids);
    }

    $form['mode'] = [
      '#type' => 'radios',
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
      '#description' => $this->t('Fill in or update your FedEx API information.'),
      '#weight' => 10,
    ];

    $form['api_information']['api_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API key'),
      '#description' => $this->t('Enter your FedEx API key.'),
      '#default_value' => $this->configuration['api_key'],
    ];

    $form['api_information']['api_password'] = [
      '#type' => 'password',
      '#title' => $this->t('API password'),
      '#description' => $this->t('Enter your FedEx API password only if you wish to change its value.'),
      '#default_value' => '',
    ];

    $form['api_information']['account_number'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Account number'),
      '#description' => $this->t('Enter your FedEx account number.'),
      '#default_value' => $this->configuration['account_number']
    ];

    $form['api_information']['meter_number'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Meter number'),
      '#description' => $this->t('Enter your FedEx meter number.'),
      '#default_value' => $this->configuration['meter_number'],
    ];

    $form['services'] = [
      '#type' => 'details',
      '#title' => $this->t('Services'),
      '#description' => $this->t('Customize the FedEx services offered.'),
      '#weight' => 15,
    ];

    $form['services']['enabled_services'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Enabled services'),
      '#description' => $this->t('Choose which services to offer at checkout.'),
      '#options' => $services,
      '#default_value' => $this->configuration['services']
    ];

    return $form;
  }


  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);

    if (!$form_state->getErrors()) {
      $values = $form_state->getValue($form['#parents']);

      $this->configuration['mode'] = $values['mode'];
      $this->configuration['api_key'] = $values['api_information']['api_key'];
      $this->configuration['account_number'] = $values['api_information']['account_number'];
      $this->configuration['meter_number'] = $values['api_information']['meter_number'];
      $this->configuration['services'] = array_keys(array_filter($values['services']['enabled_services']));

      if (!empty($values['api_information']['api_password'])) {
        $this->configuration['api_password'] = $values['api_information']['api_password'];
      } else {
        $this->configuration['api_password'] = $form_state->getCompleteForm()['plugin']['widget'][0]['#default_value']['target_plugin_configuration']['api_password'];
      }
    }
  }

  /**
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   * @return array
   */
  public function calculateRates(ShipmentInterface $shipment) {

    /** @var FedExServiceManager $fedEx */
    $fedEx = \Drupal::service('commerce_fedex.fedex_service');

    $rateService = $fedEx->getRateService($this->configuration);
    $rateRequest = $this->rateRequest($rateService, $shipment);
    $response = $rateService->getRates($rateRequest);
    if (!$response){
      throw new \Exception($rateService->getLastError());
    }
    $rates = [];
    if ($response->getHighestSeverity() == 'SUCCESS') {
      $details = $response->getRateReplyDetails();
      $rates = [];
      foreach ($details as $rateDetails) {
        if (in_array($rateDetails->getServiceType(), array_keys($this->getServices()))){
          $ratedShipmentDetails = $rateDetails->getRatedShipmentDetails()[0];
          $shipmentRateDetails = $ratedShipmentDetails->getShipmentRateDetail();
          $cost = $shipmentRateDetails->getTotalNetChargeWithDutiesAndTaxes();
          $rates[] = new ShippingRate($rateDetails->getServiceType(), $this->services[$rateDetails->getServiceType()], new Price($cost->getAmount(), $cost->getCurrency()));
        }
      }
    }
    return $rates;
  }

  /**
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   * @return \Drupal\commerce_fedex\FedEx\StructType\Party
   */
  protected function getShipper(ShipmentInterface $shipment) {
    $storeAddress = $shipment->getOrder()->getStore()->getAddress();
    $streetLines = [];
    if ($storeAddress->getAddressLine1()){
      $streetLines[] = $storeAddress->getAddressLine1();
    }
    if ($storeAddress->getAddressLine2()){
      $streetLines[] = $storeAddress->getAddressLine2();
    }
    $shipper = new Party();
    $shipper->setAddress(new Address(
      $streetLines,
      $storeAddress->getLocality(),
      $storeAddress->getAdministrativeArea(),
      $storeAddress->getPostalCode(),
      NULL,
      $storeAddress->getCountryCode(),
      NULL,
      FALSE
    ));

    return $shipper;
  }

  /**
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   * @return \Drupal\commerce_fedex\FedEx\StructType\Party|void
   */
  protected function getRecipient(ShipmentInterface $shipment) {
    $profile = $shipment->getShippingProfile();
    if(!$profile){
      return;
    }
    $recipientAddress = $profile->get('address')->first();
    $streetLines = [];
    if ($recipientAddress->getAddressLine1()){
      $streetLines[] = $recipientAddress->getAddressLine1();
    }
    if ($recipientAddress->getAddressLine2()){
      $streetLines[] = $recipientAddress->getAddressLine2();
    }

    $recipient = new Party();
    $recipient->setAddress(new Address(
      $streetLines,
      $recipientAddress->getLocality(),
      $recipientAddress->getAdministrativeArea(),
      $recipientAddress->getPostalCode(),
      NULL,
      $recipientAddress->getCountryCode(),
      NULL,
      FALSE
    ));

    return $recipient;
  }

  /**
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   * @return \Drupal\commerce_fedex\FedEx\StructType\Weight
   */
  protected function getTotalWeight(ShipmentInterface $shipment) {
    return $this->_physicalWeightToFedex($shipment->getWeight());
  }

  /**
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   * @return array
   */
  protected function getRequestedPackageLineItems(ShipmentInterface $shipment) {
    $requestedPackageLineItems = [];
    $shipmentItems = $shipment->getItems();
    $package = $shipment->getPackageType();
    foreach($shipmentItems as $delta => $shipmentItem){
      $requestedPackageLineItems[] = new RequestedPackageLineItem(
        $delta + 1,
        NULL,
        1,
        NULL,
        new Money($shipmentItem->getDeclaredValue()->getCurrencyCode(), $shipmentItem->getDeclaredValue()->getNumber()),
        $this->_physicalWeightToFedex($shipmentItem->getWeight()),
        $this->_packageToFedexDimensions($package),
        PhysicalPackagingType::VALUE_BOX,
        $shipmentItem->getTitle(),
        NULL,[],NULL,[]
      );

    }
    return $requestedPackageLineItems;
  }

  /**
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
   */
  protected function getFedExShipment(ShipmentInterface $shipment) {
    $lineItems = $this->getRequestedPackageLineItems($shipment);
    $fedExShipment = new RequestedShipment();
    $fedExShipment->setTotalWeight($this->getTotalWeight($shipment));
    $fedExShipment->setShipper($this->getShipper($shipment));
    $fedExShipment->setRecipient($this->getRecipient($shipment));
    $fedExShipment->setPackageCount(count($lineItems));
    $fedExShipment->RequestedPackageLineItems = $lineItems;
    $fedExShipment->setPackageCount(count($lineItems));
    return $fedExShipment;
  }

  /**
   * @param \Drupal\commerce_fedex\FedEx\ServiceType\RateService $rateService
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
   */
  protected function rateRequest(RateService $rateService, ShipmentInterface $shipment) {
    /** @var FedExServiceManager $fedEx */
    $fedEx = \Drupal::service('commerce_fedex.fedex_service');

    $rateRequest = $fedEx->getRateRequest($this->configuration);
    $rateRequest
      ->setVersion($rateService->version)
      ->setRequestedShipment($this->getFedExShipment($shipment));

    return $rateRequest;
  }

  /**
   * @param \Drupal\physical\Weight $weight
   * @return \Drupal\commerce_fedex\FedEx\StructType\Weight
   * @throws \Exception
   */
  protected function _physicalWeightToFedex(PhysicalWeight $weight){
    /** convert between \Drupal\physical\Weight and \Arkitecht\Fedex\structs\Weight */

    $number = $weight->getNumber();

    switch ($weight->getUnit()){
      case PhysicalWeightUnits::GRAM:
        $number /=1000;
      case PhysicalWeightUnits::KILOGRAM:
        $unit = FedexWeightUnits::VALUE_KG;
        break;
      case PhysicalWeightUnits::OUNCE:
        $number /=16;
      case PhysicalWeightUnits::POUND:
        $unit = FedexWeightUnits::VALUE_LB;
        break;
      default:
        throw new \Exception("Invalid Units for Weight");
    }
    return new FedexWeight($unit, $number);
  }

  /**
   * @param \Drupal\commerce_shipping\Plugin\Commerce\PackageType\PackageTypeInterface $package
   * @return \Drupal\commerce_fedex\FedEx\Structs\Dimensions
   * @throws \Exception
   */
  protected function _packageToFedexDimensions(PackageTypeInterface $package){
    $length = $package->getLength();
    $width = $package->getWidth();
    $height = $package->getHeight();
    if ($length->getUnit() != $width->getUnit()){
      $width = $width->convert($length->getUnit());
    }
    if ($length->getUnit() != $height->getUnit()){
      $height = $height->convert($length->getUnit());
    }

    switch ($length->getUnit()){
      case PhysicalLengthUnits::MILLIMETER:
        $length = $length->divide(1000);
        $width = $width->divide(1000);
        $height = $height->divide(1000);
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
      case PhysicalLengthUnits::INCH:
        $unit = FedexLengthUnits::VALUE_IN;
        break;
      default:
        throw new \Exception("Invalid Units for Length");
    }

    return new Dimensions($length->getNumber(), $width->getNumber(), $height->getNumber(), $unit);
  }
}
