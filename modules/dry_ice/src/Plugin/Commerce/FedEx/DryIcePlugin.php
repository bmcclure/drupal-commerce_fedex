<?php

namespace Drupal\commerce_fedex_dry_ice\Plugin\Commerce\FedEx;

use Drupal\address\Plugin\Field\FieldType\AddressItem;
use Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginBase;
use Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod\FedEx;
use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\commerce_shipping\PackageTypeManagerInterface;
use Drupal\commerce_shipping\ShipmentItem;
use Drupal\Core\Form\FormStateInterface;
use Drupal\physical\Weight;
use Drupal\physical\WeightUnit;
use NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType;
use NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested;
use NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides the Fedex Dry Ice Service.
 *
 * @CommerceFedExPlugin(
 *   id = "dry_ice",
 *   label = @Translation("FedEx Dry Ice"),
 *   options_label = @Translation("Dry Ice Shipment Options"),
 *   options_description = @Translation("Enter your global shipping options for dry ice shipments")
 * )
 */
class DryIcePlugin extends FedExPluginBase {

  const NOT_DRY_ICE = 0;
  const DRY_ICE = 1;

  /**
   * The Package Type Manager.
   *
   * @var \Drupal\commerce_shipping\PackageTypeManagerInterface
   */
  protected $packageTypeManager;

  /**
   * Creates a new Dry Ice FedEx Plugin object.
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
    $this->packageTypeManager = $package_type_manager;
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    $this->setConfiguration($configuration);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('plugin.manager.commerce_package_type')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $config = [
      'domestic' => [
        'package_type' => 'custom_box',
        'weight' => [
          'number' => 0,
          'unit' => WeightUnit::KILOGRAM,
        ],
      ],
      'intl' => [
        'package_type' => 'custom_box',
        'weight' => [
          'number' => 0,
          'unit' => WeightUnit::KILOGRAM,
        ],
      ],
    ] + parent::defaultConfiguration();
    return $config;
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $package_types = $this->packageTypeManager
      ->getDefinitionsByShippingMethod('fedex');

    $package_types = array_map(function ($package_type) {
      return $package_type['label'];
    }, $package_types);

    $form['domestic']['package_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Dry ice package type'),
      '#options' => $package_types,
      '#default_value' => $this->configuration['domestic']['package_type'],
      '#required' => TRUE,
      '#access' => count($package_types) > 1,
    ];
    $form['domestic']['weight'] = [
      '#type' => 'physical_measurement',
      '#measurement_type' => 'weight',
      '#title' => $this->t('Dry Ice Weight'),
      '#default_value' => $this->configuration['domestic']['weight'],
      '#size' => 5,
      '#maxlength' => 4,
      '#required' => TRUE,
    ];
    $form['intl']['package_type'] = [
      '#type' => 'select',
      '#title' => $this->t('International dry ice package type'),
      '#options' => $package_types,
      '#default_value' => $this->configuration['intl']['package_type'],
      '#required' => TRUE,
      '#access' => count($package_types) > 1,
    ];
    $form['intl']['weight'] = [
      '#type' => 'physical_measurement',
      '#measurement_type' => 'weight',
      '#title' => $this->t('International dry Ice Weight'),
      '#default_value' => $this->configuration['intl']['weight'],
      '#size' => 5,
      '#maxlength' => 4,
      '#required' => TRUE,
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {

    if (!$form_state->getErrors()) {

      $values = $form_state->getValues();

      $this->configuration['domestic']['package_type'] = $values['domestic']['package_type'];
      $this->configuration['domestic']['weight'] = $values['domestic']['weight'];
      $this->configuration['intl']['package_type'] = $values['intl']['package_type'];
      $this->configuration['intl']['weight'] = $values['intl']['weight'];
    }
  }

  /**
   * {@inheritdoc}
   */
  public function adjustPackage(RequestedPackageLineItem $package, array $shipment_items, ShipmentInterface $shipment) {
    $type = $this->getType($shipment);
    if (!$this->verifyPackage($shipment_items, $type)) {
      throw new \Exception("Package cannot be shipped, mix of Dry Ice and non Dry Ice Items");
    }

    if ($this->isDryIceItem(reset($shipment_items), $type)) {
      $special_services_requested = $package->getSpecialServicesRequested();
      if (empty($special_services_requested)) {
        $special_services_requested = new PackageSpecialServicesRequested();
      }
      $dry_ice_weight = new Weight($this->configuration[$type]['weight']['number'], $this->configuration[$type]['weight']['unit']);
      $special_services_requested->addToSpecialServiceTypes(PackageSpecialServiceType::VALUE_DRY_ICE);
      $special_services_requested->setDryIceWeight(FedEx::physicalWeightToFedex($dry_ice_weight));
      /** @var \Drupal\commerce_shipping\Plugin\Commerce\PackageType\PackageType $package_type */
      $package_type = $this->packageTypeManager->createInstance($this->configuration[$type]['package_type']);
      $package->setDimensions(Fedex::packageToFedexDimensions($package_type));
      $package->setWeight(FedEx::packageTotalWeight($shipment_items, $package_type, $dry_ice_weight));
      $package->setSpecialServicesRequested($special_services_requested);
    }
    $package = parent::adjustPackage($package, $shipment_items, $shipment);
    return $package;
  }

  /**
   * {@inheritdoc}
   */
  public function splitPackage(array $shipment_items, ShipmentInterface $shipment) {
    $type = $this->getType($shipment);
    $packages = [static::NOT_DRY_ICE => [], static::DRY_ICE => []];
    foreach ($shipment_items as $shipment_item) {
      if ($this->isDryIceItem($shipment_item, $type)) {
        $packages[static::DRY_ICE][] = $shipment_item;
      }
      else {
        $packages[static::NOT_DRY_ICE][] = $shipment_item;
      }
    }

    return $packages;
  }

  /**
   * Verified a package has all dry ic eor non-dry ice items.
   *
   * @param array $shipment_items
   *   The shipment items to check.
   * @param string $type
   *   The type, 'domestic' or 'intl' depending on the shipping distance.
   *
   * @throws \Exception
   *   If the provided $type is not of type 'string'.
   *
   * @return bool
   *   True if the package is internally consistant.
   */
  protected function verifyPackage(array $shipment_items, $type) {
    if (!is_string($type)) {
      $varType = gettype($type);
      throw new \Exception("Shipment type must be string. $varType given.");
    }

    $dryIceBox = $this->isDryIceBox($shipment_items, $type);
    foreach ($shipment_items as $shipment_item) {
      if ($dryIceBox xor $this->isDryIceItem($shipment_item, $type)) {
        return FALSE;
      }

    }
    return TRUE;
  }

  /**
   * Determine whether a droup of shipment items requires dry ice shipping.
   *
   * @param array $shipment_items
   *   The shipment items to check.
   * @param string $type
   *   The type, 'domestic' or 'intl' depending on the shipping distance.
   *
   * @throws \Exception
   *   If the provided $type is not of type 'string'.
   *
   * @return bool
   *   True if the package needs dry ice shipping.
   */
  protected function isDryIceBox(array $shipment_items, $type) {
    if (!is_string($type)) {
      $varType = gettype($type);
      throw new \Exception("Shipment type must be string. $varType given.");
    }

    return $this->isDryIceItem(reset($shipment_items), $type);
  }

  /**
   * Determine whether a shipment item requires dry ice shipping or not.
   *
   * @param \Drupal\commerce_shipping\ShipmentItem $shipment_item
   *   The shipment item.
   * @param string $type
   *   The type, 'domestic' or 'intl' depending on the shipping distance.
   *
   * @throws \Exception
   *   If the provided $type is not of type 'string'.
   *
   * @return bool
   *   true if the shipment item requires dry ice shipping.
   */
  protected function isDryIceItem(ShipmentItem $shipment_item, $type) {
    if (!is_string($type)) {
      $varType = gettype($type);
      throw new \Exception("Shipment type must be string. $varType given.");
    }

    $storage = \Drupal::entityTypeManager()->getStorage('commerce_order_item');
    /** @var \Drupal\commerce_order\Entity\OrderItemInterface $order_item */
    $order_item = $storage->load($shipment_item->getOrderItemId());
    $purchased_entity = $order_item->getPurchasedEntity();
    return $purchased_entity->hasField('fedex_dry_ice_' . $type) && !$purchased_entity->get('fedex_dry_ice_' . $type)->isEmpty() && $purchased_entity->get('fedex_dry_ice_' . $type)->first()->getValue()['value'] == 1;

  }

  /**
   * Determine if this is a domestic or international shipment.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment to check.
   *
   * @return string
   *   either 'domestic' or 'intl'
   */
  protected function getType(ShipmentInterface $shipment) {

    /* @var  AddressItem $shipping_address */
    $shipping_address = $shipment->getShippingProfile()->get('address')->first();

    $domestic = ($shipping_address instanceof AddressItem)
      ? $shipment->getOrder()->getStore()->getAddress()->getCountryCode() == $shipping_address->getCountryCode()
      : FALSE;

    return $domestic ? 'domestic' : 'intl';
  }

}
