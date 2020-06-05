<?php

namespace Drupal\commerce_fedex_freight\Plugin\Commerce\FedEx;

use Drupal\address\AddressInterface;
use Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginBase;
use Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod\FedEx;
use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\Core\Form\FormStateInterface;
use NicholasCreativeMedia\FedExPHP\Enums\FreightClassType;
use NicholasCreativeMedia\FedExPHP\Enums\FreightCollectTermsType;
use NicholasCreativeMedia\FedExPHP\Enums\FreightShipmentRoleType;
use NicholasCreativeMedia\FedExPHP\Enums\PaymentType;
use NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType;
use NicholasCreativeMedia\FedExPHP\Services\RateService;
use NicholasCreativeMedia\FedExPHP\Structs\Address;
use NicholasCreativeMedia\FedExPHP\Structs\Contact;
use NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress;
use NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail;
use NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentLineItem;
use NicholasCreativeMedia\FedExPHP\Structs\Party;
use NicholasCreativeMedia\FedExPHP\Structs\Payment;
use NicholasCreativeMedia\FedExPHP\Structs\Payor;
use NicholasCreativeMedia\FedExPHP\Structs\RateRequest;
use NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment;
use NicholasCreativeMedia\FedExPHP\Structs\Weight;

/**
 * Provides the FedEx Freight Service Plugin.
 *
 * @CommerceFedExPlugin(
 *   id = "freight",
 *   label = @Translation("FedEx Freight Shipping"),
 *   options_label = @Translation("FedEx Freight Options"),
 *   options_description = @Translation("Enter your global shipping options for freight shipments")
 * )
 */
class FreightPlugin extends FedExPluginBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'default_freight_class' => FreightClassType::VALUE_CLASS_050,
      'default_packaging_type' => PhysicalPackagingType::VALUE_BOX,
      'payment_type' => PaymentType::VALUE_SENDER,
      'contact_name' => '',
      'minimum_weight' => 150,
    ] + parent::defaultConfiguration();

  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);

    $form['default_freight_class'] = [
      '#type' => 'select',
      '#title' => $this->t('Default freight class'),
      '#description' => $this->t('Select the default freight class to use for freight shipments.'),
      '#default_value' => $this->configuration['default_freight_class'],
      '#options' => $this->getFreightClassOptions(),
    ];

    $form['default_packaging_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Default packaging type'),
      '#description' => $this->t('Select the default packaging type to use for freight shipments.'),
      '#default_value' => $this->configuration['default_packaging_type'],
      '#options' => $this->getPackagingTypeOptions(),
    ];

    $form['payment_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Payment type'),
      '#description' => $this->t('Select the payment type for FedEx Freight shipments'),
      '#default_value' => $this->configuration['payment_type'],
      '#options' => $this->getPaymentTypeOptions(),
    ];

    $form['contact_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Contact name'),
      '#description' => $this->t('Enter the contact name for FedEx Freight shipments'),
      '#default_value' => $this->configuration['contact_name'],
    ];

    $form['minimum_weight'] = [
      '#type' => 'number',
      '#title' => $this->t('Minimum weight (lb)'),
      '#description' => $this->t('Shipments over this weight will switch to requesting freight shipping.'),
      '#default_value' => $this->configuration['minimum_weight'],
    ];

    return $form;
  }

  private function getFreightClassOptions() {
    return [
      FreightClassType::VALUE_CLASS_050 => $this->t('Class 50'),
      FreightClassType::VALUE_CLASS_055 => $this->t('Class 55'),
      FreightClassType::VALUE_CLASS_060 => $this->t('Class 60'),
      FreightClassType::VALUE_CLASS_065 => $this->t('Class 65'),
      FreightClassType::VALUE_CLASS_070 => $this->t('Class 70'),
      FreightClassType::VALUE_CLASS_077_5 => $this->t('Class 77.5'),
      FreightClassType::VALUE_CLASS_085 => $this->t('Class 85'),
      FreightClassType::VALUE_CLASS_092_5 => $this->t('Class 92.5'),
      FreightClassType::VALUE_CLASS_100 => $this->t('Class 100'),
      FreightClassType::VALUE_CLASS_110 => $this->t('Class 110'),
      FreightClassType::VALUE_CLASS_125 => $this->t('Class 125'),
      FreightClassType::VALUE_CLASS_150 => $this->t('Class 150'),
      FreightClassType::VALUE_CLASS_175 => $this->t('Class 175'),
      FreightClassType::VALUE_CLASS_200 => $this->t('Class 200'),
      FreightClassType::VALUE_CLASS_250 => $this->t('Class 250'),
      FreightClassType::VALUE_CLASS_300 => $this->t('Class 300'),
      FreightClassType::VALUE_CLASS_400 => $this->t('Class 400'),
      FreightClassType::VALUE_CLASS_500 => $this->t('Class 500'),
    ];
  }

  private function getPackagingTypeOptions() {
    return [
      PhysicalPackagingType::VALUE_BAG => $this->t('Bag'),
      PhysicalPackagingType::VALUE_BARREL => $this->t('Barrel'),
      PhysicalPackagingType::VALUE_BASKET => $this->t('Basket'),
      PhysicalPackagingType::VALUE_BOX => $this->t('Box'),
      PhysicalPackagingType::VALUE_BUCKET => $this->t('Bucket'),
      PhysicalPackagingType::VALUE_BUNDLE => $this->t('Bundle'),
      PhysicalPackagingType::VALUE_CARTON => $this->t('Carton'),
      PhysicalPackagingType::VALUE_CASE => $this->t('Case'),
      PhysicalPackagingType::VALUE_CONTAINER => $this->t('Container'),
      PhysicalPackagingType::VALUE_CRATE => $this->t('Crate'),
      PhysicalPackagingType::VALUE_CYLINDER => $this->t('Cylinder'),
      PhysicalPackagingType::VALUE_DRUM => $this->t('Drum'),
      PhysicalPackagingType::VALUE_ENVELOPE => $this->t('Envelope'),
      PhysicalPackagingType::VALUE_HAMPER => $this->t('Hamper'),
      PhysicalPackagingType::VALUE_OTHER => $this->t('Other'),
      PhysicalPackagingType::VALUE_PAIL => $this->t('Pail'),
      PhysicalPackagingType::VALUE_PALLET => $this->t('Pallet'),
      PhysicalPackagingType::VALUE_PIECE => $this->t('Piece'),
      PhysicalPackagingType::VALUE_REEL => $this->t('Reel'),
      PhysicalPackagingType::VALUE_ROLL => $this->t('Roll'),
      PhysicalPackagingType::VALUE_SKID => $this->t('Skid'),
      PhysicalPackagingType::VALUE_TANK => $this->t('Tank'),
      PhysicalPackagingType::VALUE_TUBE => $this->t('Tube'),
    ];
  }

  protected function getPaymentTypeOptions() {
    return [
      PaymentType::VALUE_ACCOUNT => $this->t('Account'),
      PaymentType::VALUE_COLLECT => $this->t('Collect'),
      PaymentType::VALUE_RECIPIENT => $this->t('Recipient'),
      PaymentType::VALUE_SENDER => $this->t('Sender'),
      PaymentType::VALUE_THIRD_PARTY => $this->t('Third party'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    $this->configuration['default_freight_class'] = $form_state->getValue('default_freight_class');
    $this->configuration['default_packaging_type'] = $form_state->getValue('default_packaging_type');
    $this->configuration['payment_type'] = $form_state->getValue('payment_type');
    $this->configuration['contact_name'] = $form_state->getValue('contact_name');
    $this->configuration['minimum_weight'] = $form_state->getValue('minimum_weight');
  }

  /**
   * {@inheritdoc}
   */
  public function alterRateRequest(RateRequest $rate_request, RateService $rate_service, ShipmentInterface $shipment, $configuration) {
    $requestedShipment = $rate_request->getRequestedShipment();

    if ($requestedShipment) {
      $weight = $requestedShipment->getTotalWeight();

      if (!$weight) {
        $weight = $requestedShipment->getRequestedPackageLineItems()[0]->getWeight();
      }

      if ($weight instanceof Weight) {
        $weight = new \Drupal\physical\Weight((string) $weight->getValue(), strtolower($weight->getUnits()));
        $minimum_weight = $this->configuration['minimum_weight'];
        $weight = $weight->convert('lb');

        if ((float)$weight->getNumber() >= (float)$minimum_weight) {
          $requestedShipment
            ->setShippingChargesPayment($this->getShippingChargesPayment($shipment, $configuration))
            ->setFreightShipmentDetail($this->getFreightShipmentDetail($requestedShipment, $shipment, $configuration))
            ->setRequestedPackageLineItems([]);
        }
      }
    }
  }

  protected function getShippingChargesPayment(ShipmentInterface $shipment, $configuration) {
    $party = new Party();
    $party->setAccountNumber($configuration['api_information']['account_number']);
    $party->setContact(new Contact($this->configuration['contact_name']));
    $party->setAddress($this->getFreightAddress($shipment->getOrder()->getStore()->getAddress()));
    return new Payment($this->configuration['payment_type'], new Payor($party));
  }

  protected function getFreightAddress(AddressInterface $address) {
    return new Address(
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
    );
  }

  protected function getFreightShipmentDetail(RequestedShipment $requestedShipment, ShipmentInterface $shipment, $configuration) {
    $freightDetail = new FreightShipmentDetail();

    $freightDetail
      ->setRole(FreightShipmentRoleType::VALUE_SHIPPER)
      ->setCollectTermsType(FreightCollectTermsType::VALUE_STANDARD)
      ->setLineItems($this->getFreightShipmentLineItems($requestedShipment, $shipment))
      ->setFedExFreightAccountNumber($configuration['api_information']['account_number'])
      ->setFedExFreightBillingContactAndAddress($this->getBillingContactAndAddress($requestedShipment, $shipment));

    return $freightDetail;
  }

  protected function getBillingContactAndAddress(RequestedShipment $requestedShipment, ShipmentInterface $shipment) {
    $contactAndAddress = new ContactAndAddress();
    $contactAndAddress
      ->setContact(new Contact($this->configuration['contact_name']))
      ->setAddress($this->getFreightAddress($shipment->getOrder()->getStore()->getAddress()));
    return $contactAndAddress;
  }

  protected function getFreightShipmentLineItems(RequestedShipment $requestedShipment, ShipmentInterface $shipment) {
    $weight = $shipment->getWeight();
    $dimensions = FedEx::packageToFedexDimensions($shipment->getPackageType());

    $lineItem = new FreightShipmentLineItem();
    $lineItem
      ->setFreightClass($this->configuration['default_freight_class'])
      ->setPackaging($this->configuration['default_packaging_type'])
      ->setWeight(FedEx::physicalWeightToFedex($weight))
      ->setDimensions($dimensions);

    return [$lineItem];
  }

}
