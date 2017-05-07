<?php

namespace Drupal\commerce_fedex_dangerous\Plugin\Commerce\FedEx;

use Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginBase;
use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\commerce_shipping\ShipmentItem;
use Drupal\Core\Form\FormStateInterface;
use NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType;
use NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail;
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
    $status = $this->getDangerousStatus(reset($shipment_items));

    if ($status === static::NOT_DANGEROUS) {
      return $package;
    }

    $special_services_requested = $package->getSpecialServicesRequested();
    if (empty($special_services_requested)) {
      $special_services_requested = new PackageSpecialServicesRequested();
    }
    $special_services_requested->addToSpecialServiceTypes(PackageSpecialServiceType::VALUE_DANGEROUS_GOODS);
    $dangerous_goods_detail = $special_services_requested->getDangerousGoodsDetail();
    if (empty($dangerous_goods_detail)) {
      $dangerous_goods_detail = new DangerousGoodsDetail();
    }
    $dangerous_goods_detail->setAccessibility($status);
    $special_services_requested->setDangerousGoodsDetail($dangerous_goods_detail);
    $package->setSpecialServicesRequested($special_services_requested);

    return $package;
  }

  /**
   * {@inheritdoc}
   */
  public function splitPackage(array $shipment_items, ShipmentInterface $shipment) {
    $packages = [];
    foreach ($shipment_items as $shipment_item) {
      $packages[$this->getDangerousStatus($shipment_item)][] = $shipment_item;
    }
    return array_values($packages);
  }

  /**
   * Returns the DG status of an item.
   *
   * @param \Drupal\commerce_shipping\ShipmentItem $shipment_item
   *   The item to check.
   *
   * @return mixed
   *   The DG status.
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

}
