<?php

namespace Drupal\commerce_fedex_dangerous\Plugin\Commerce\FedEx;

use Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginBase;
use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\commerce_shipping\ShipmentItem;
use Drupal\Core\Form\FormStateInterface;
use NicholasCreativeMedia\FedExPHP\Enums\HazardousCommodityOptionType;
use NicholasCreativeMedia\FedExPHP\Enums\HazardousCommodityPackingGroupType;
use NicholasCreativeMedia\FedExPHP\Enums\HazardousCommodityQuantityType;
use NicholasCreativeMedia\FedExPHP\Enums\HazardousContainerPackingType;
use NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType;
use NicholasCreativeMedia\FedExPHP\Enums\RadioactiveContainerClassType;
use NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsContainer;
use NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail;
use NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityContent;
use NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityDescription;
use NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityInnerReceptacleDetail;
use NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityPackingDetail;
use NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityQuantityDetail;
use NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested;
use NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem;

/**
 * Providex the FedEx Dangerous Goods Service Plugin.
 *
 * @CommerceFedExPlugin(
 *   id = "dangerous",
 *   label = @Translation("FedEx Dangerous Goods"),
 *   options_label = @Translation("Dangerous Goods Shipment Options"),
 *   options_description = @Translation("Enter your global shipping options for Dangerous Goods shipments")
 * )
 */
class DangerousGoodsPlugin extends FedExPluginBase {
  const NOT_DANGEROUS = 0;

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return ['contact_number' => ''] + parent::defaultConfiguration();

  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
    $form['contact_number'] = [
      '#type' => 'textfield',
      '#title' => $this->t("Contact Number"),
      '#description' => $this->t('Enter the Phone number of your dangerous goods/hazardous materials contact person'),
      '#default_value' => $this->configuration['contact_number'],
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    $this->configuration['contact_number'] = $form_state->getValue('contact_number');
  }

  /**
   * {@inheritdoc}
   */
  public function adjustPackage(RequestedPackageLineItem $package, array $shipment_items, ShipmentInterface $shipment) {
    $dangerous_goods = $this->getDangerousGoodsItems($shipment_items);
    if (!empty($dangerous_goods)) {
      /** @var ShipmentItem $item */
      $item = reset($dangerous_goods);
      $status = $this->getDangerousStatus($item);
      $special_services_requested = $package->getSpecialServicesRequested();
      if (empty($special_services_requested)) {
        $special_services_requested = new PackageSpecialServicesRequested();
      }
      $special_services_requested->addToSpecialServiceTypes(PackageSpecialServiceType::VALUE_DANGEROUS_GOODS);
      $dangerous_goods_detail = $special_services_requested->getDangerousGoodsDetail();
      if (empty($dangerous_goods_detail)) {
        $dangerous_goods_detail = new DangerousGoodsDetail();
      }
      $dangerous_goods_detail->setOptions($this->getDangerousOptions($dangerous_goods));
      if ($this->isHazardous($dangerous_goods)) {
        $commodity = new HazardousCommodityContent();

        $description = new HazardousCommodityDescription();
        $description->setLabelText($item->getTitle());
        $description->setId($item->getOrderItemId());
        $description->setSequenceNumber(1);
        $description->setPackingGroup(HazardousCommodityPackingGroupType::VALUE_DEFAULT);
        $description->setPackingDetails(new HazardousCommodityPackingDetail(FALSE));
        $commodity->setDescription($description);

        $container = new DangerousGoodsContainer();
        $container->addToHazardousCommodities($commodity);
        $container->setNumberOfContainers(1);
        $container->setPackingType(HazardousContainerPackingType::VALUE_ALL_PACKED_IN_ONE);
        $dangerous_goods_detail->addToContainers($container);
      } else {
        $dangerous_goods_detail->setAccessibility($status);
      }
      $special_services_requested->setDangerousGoodsDetail($dangerous_goods_detail);
      $package->setSpecialServicesRequested($special_services_requested);
    }
    return $package;
  }

  /**
   * Determines if the shipment items contain hazardous materials.
   *
   * @param array $shipment_items
   *   The shipment items to check.
   *
   * @return bool
   *   TRUE if hazardous, FALSE otherwise.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   */
  protected function isHazardous(array $shipment_items) {
    $options = $this->getDangerousOptions($shipment_items);
    return array_search(HazardousCommodityOptionType::VALUE_HAZARDOUS_MATERIALS, $options) !== FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function splitPackage(array $shipment_items, ShipmentInterface $shipment) {
    $packages = [];
    $main_package = [];
    foreach ($shipment_items as $shipment_item) {
      if ($this->getDangerousStatus($shipment_item) === self::NOT_DANGEROUS) {
        $main_package[] = $shipment_item;
      } else {
        $packages[][] = $shipment_item;
      }
    }
    if (!empty($main_package)) {
      $packages = [$main_package] + $packages;
    }
    return $packages;
  }

  /**
   * Returns the DG status of an item.
   *
   * @param \Drupal\commerce_shipping\ShipmentItem $shipment_item
   *   The item to check.
   *
   * @return mixed
   *   The DG status.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   */
  protected function getDangerousStatus(ShipmentItem $shipment_item) {
    $storage = \Drupal::entityTypeManager()->getStorage('commerce_order_item');
    /** @var \Drupal\commerce_order\Entity\OrderItemInterface $order_item */
    $order_item = $storage->load($shipment_item->getOrderItemId());
    $purchased_entity = $order_item->getPurchasedEntity();
    if (!$purchased_entity->hasField('fedex_dangerous_accessibility') || $purchased_entity->get('fedex_dangerous_accessibility')->isEmpty()) {
      return static::NOT_DANGEROUS;
    }
    return $purchased_entity->get('fedex_dangerous_accessibility')->value;
  }

  /**
   * Gets only the dangerous goods items from a list of shipment items.
   *
   * @param array $shipment_items
   *   All of the shipment items.
   *
   * @return array
   *   The dangerous goods items from the shipment items list.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   */
  protected function getDangerousGoodsItems(array $shipment_items) {
    $dangerous_items = [];
    foreach ($shipment_items as $shipment_item) {
      if ($this->getDangerousStatus($shipment_item) !== self::NOT_DANGEROUS) {
        $dangerous_items[] = $shipment_item;
      }
    }
    return $dangerous_items;
  }

  /**
   * Gets the type of this dangerous goods item.
   *
   * @param ShipmentItem[] $shipment_items
   *   The item to check.
   *
   * @return mixed
   *   'dangerous', 'hazardous', or FALSE.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   */
  protected function getDangerousOptions(array $shipment_items) {
    $storage = \Drupal::entityTypeManager()->getStorage('commerce_order_item');
    $options = [];
    $field = 'fedex_dangerous_options';
    foreach ($shipment_items as $shipment_item) {
      /** @var \Drupal\commerce_order\Entity\OrderItemInterface $order_item */
      $order_item = $storage->load($shipment_item->getOrderItemId());
      $purchased_entity = $order_item->getPurchasedEntity();
      if ($purchased_entity->hasField($field) && !$purchased_entity->get($field)->isEmpty()) {
        foreach ($purchased_entity->get($field)->getValue() as $item) {
          $options[] = $item['value'];
        }
      }
    }

    return array_unique($options);
  }
}
