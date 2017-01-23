<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod;

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
      'ground' => 'FedEx Ground',
      'ground_home_delivery' => 'FedEx Ground Home Delivery',
      'standard_overnight' => 'FedEx Standard Overnight',
      'priority_overnight' => 'FedEx Priority Overnight',
      'first_overnight' => 'FedEx First Overnight',
      'second_day' => 'FedEx 2nd Day',
      'express_saver' => 'FedEx Express Saver',
      'international_economy' => 'FedEx International Economy',
      'international_priority' => 'FedEx International Priority',
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
    $recipientAddress = $shipment->getShippingProfile()->get('address');

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
    $weight = $shipment->getWeight();

    return new Weight($weight->getUnit(), $weight->getNumber());
  }

  protected function getRequestedPackageLineItems(ShipmentInterface $shipment) {
    $requestedPackageLineItems = [];

    $totalWeight = $this->getTotalWeight($shipment);

    $lineItem = new RequestedPackageLineItem();
    $lineItem
      ->setWeight($totalWeight)
      ->setGroupPackageCount(1);

    $requestedPackageLineItems[] = $lineItem;

    // TODO: Loop through items and determine the number of packages

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
