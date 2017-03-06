<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod;

use Arkitecht\FedEx\Enums\ServiceType;
use Arkitecht\FedEx\Services\RateService;
use Arkitecht\FedEx\Structs\Address;
use Arkitecht\FedEx\Structs\Party;
use Arkitecht\FedEx\Structs\RequestedPackageLineItem;
use Arkitecht\FedEx\Structs\RequestedShipment;
use Arkitecht\FedEx\Structs\Weight;
use Drupal\address\AddressInterface;
use Drupal\commerce_fedex\FedExServiceManager;
use Drupal\commerce_price\Price;
use Drupal\commerce_shipping\Annotation\CommerceShippingMethod;
use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\commerce_shipping\PackageTypeManagerInterface;
use Drupal\commerce_shipping\Plugin\Commerce\EntityTrait\OrderShippable;
use Drupal\commerce_shipping\Plugin\Commerce\ShippingMethod\ShippingMethodBase;
use Drupal\commerce_shipping\ShipmentItem;
use Drupal\commerce_shipping\ShippingRate;
use Drupal\commerce_shipping\ShippingService;
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
   * {@inheritdoc}
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
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);

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
      '#options' => $this->getServiceOptions(),
      '#default_value' => $this->configuration['enabled_services']
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);

    if (!$form_state->getErrors()) {
      $values = $form_state->getValue($form['#parents']);

      $this->configuration['mode'] = $values['mode'];
      $this->configuration['api_key'] = $values['api_information']['api_key'];
      $this->configuration['account_number'] = $values['api_information']['account_number'];
      $this->configuration['meter_number'] = $values['api_information']['meter_number'];
      $this->configuration['enabled_services'] = array_keys(array_filter($values['services']['enabled_services']));

      if (!empty($values['api_information']['api_password'])) {
        $this->configuration['api_password'] = $values['api_information']['api_password'];
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function calculateRates(ShipmentInterface $shipment) {
    /** @var FedExServiceManager $fedEx */
    $fedEx = \Drupal::service('commerce_fedex.fedex_service');

    $rateService = $fedEx->getRateService($this->configuration);

    $response = $rateService->getRates($this->rateRequest($rateService, $shipment));

    $rates = [];

    if ($response->getHighestSeverity() == 'SUCCESS') {
      dpm($response->getRateReplyDetails());

      foreach ($response->getRateReplyDetails() as $rateDetails) {

      }
    }
    
    // TODO: Replace test code in the rest of the function with actual code that completes the above request.

    $rates[] = new ShippingRate('0', $this->services['fedex_ground'], new Price(0.00, 'USD'));

    // Rate IDs aren't used in a flat rate scenario because there's always a
    // single rate per plugin, and there's no support for purchasing rates.
    //$rate_id = 0;
    //$amount = $this->configuration['rate_amount'];
    //$amount = new Price($amount['number'], $amount['currency_code']);
    //$rates = [];
    //$rates[] = new ShippingRate($rate_id, $this->services['flat_rate'], $amount);

    return $rates;
  }

  protected function getShipper(ShipmentInterface $shipment) {
    $storeAddress = $shipment->getOrder()->getStore()->getAddress();

    $shipper = new Party();
    $shipper->setAddress(new Address(
      $storeAddress->getAddressLine1(),
      $storeAddress->getLocality(),
      $storeAddress->getAdministrativeArea(),
      $storeAddress->getPostalCode(),
      NULL,
      $storeAddress->getCountryCode(),
      FALSE
    ));

    return $shipper;
  }

  protected function getRecipient(ShipmentInterface $shipment) {
    /** @var AddressInterface $recipientAddress */
    $profile = $shipment->getShippingProfile();
    if(!$profile){
      return;
    }
    $recipientAddress = $profile->get('address')->first();

    $recipient = new Party();
    $recipient->setAddress(new Address(
      $recipientAddress->getAddressLine1(),
      $recipientAddress->getLocality(),
      $recipientAddress->getAdministrativeArea(),
      $recipientAddress->getPostalCode(),
      NULL,
      $recipientAddress->getCountryCode(),
      FALSE
    ));

    return $recipient;
  }

  protected function getTotalWeight(ShipmentInterface $shipment) {

    //convert between /Drupal/physical/Weight and /Arkitecht/Fedex/structs/Weight

    $weight = $shipment->getWeight();
    $number = $weight->getNumber();

    switch ($weight->getUnit()){
      case \Drupal\physical\WeightUnit::GRAM:
        $number /=1000;
      case \Drupal\physical\WeightUnit::KILOGRAM:
        $unit = \Arkitecht\FedEx\Enums\WeightUnits::VALUE_KG;
        break;
      case \Drupal\physical\WeightUnit::OUNCE:
        $number /=16;
      case \Drupal\physical\WeightUnit::POUND:
        $unit = \Arkitecht\FedEx\Enums\WeightUnits::VALUE_LB;
        break;
      default:
        throw new \Exception("Invalid Units for Weight");
    }

    return new Weight($unit, $number);
  }

  protected function getRequestedPackageLineItems(ShipmentInterface $shipment) {
    $requestedPackageLineItems = [];

    $totalWeight = $this->getTotalWeight($shipment);

    $lineItem = new RequestedPackageLineItem();
    $lineItem
      ->setWeight($totalWeight)
      ->setGroupPackageCount(1);

    $requestedPackageLineItems = $lineItem;

    // TODO: Loop through items in shipment and add to $requestedPackageLineItems.

    return $requestedPackageLineItems;
  }

  protected function getFedExShipment(ShipmentInterface $shipment) {
    $lineItems = $this->getRequestedPackageLineItems($shipment);

    $fedExShipment = new RequestedShipment();
    $fedExShipment->setTotalWeight($this->getTotalWeight($shipment));
    $fedExShipment->setShipper($this->getShipper($shipment));
    $fedExShipment->setRecipient($this->getRecipient($shipment));
    $fedExShipment->setRequestedPackageLineItems($lineItems);
    $fedExShipment->setPackageCount(count($lineItems));

    return $fedExShipment;
  }

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
   * Returns an array of service options for use as radio or checkbox values.
   *
   * @return array
   *   The options array.
   */
  protected function getServiceOptions() {
    $options = [];

    /**
     * @var string $id
     * @var ShippingService $service
     */
    foreach ($this->services as $service) {
      $options[$service->getId()] = $service->getLabel();
    }

    return $options;
  }
}
