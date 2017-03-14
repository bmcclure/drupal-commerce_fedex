<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/9/17
 * Time: 8:00 PM
 */

namespace Drupal\commerce_fedex\Packer;


use Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod\FedEx;
use Drupal\commerce_order\Entity\OrderInterface;
use Drupal\commerce_shipping\Packer\DefaultPacker;
use Drupal\commerce_shipping\Packer\PackerInterface;
use Drupal\commerce_shipping\ProposedShipment;
use Drupal\commerce_shipping\ShipmentItem;
use Drupal\physical\Weight;
use Drupal\physical\WeightUnit;
use Drupal\profile\Entity\ProfileInterface;

/**
 * Class CommerceFedExPacker
 * @package Drupal\commerce_fedex\Packer
 */
class CommerceFedExPacker extends DefaultPacker implements PackerInterface {

  /**
   * @inheritdoc
   */
  public function pack(OrderInterface $order, ProfileInterface $shipping_profile) {
    $preShipments = [
      'no_special_services' => [],
      'dry_ice' => [],
    ];

    if ($order->getStore()->getAddress()->getCountryCode() == $shipping_profile->address->first()->getCountryCode()){
      $shippingType = FedEx::SHIPPING_TYPE_DOMESTIC;
    } else {
      $shippingType = Fedex::SHIPPING_TYPE_INTERNATIONAL;
    }
    foreach ($order->getItems() as $order_item) {
      $purchased_entity = $order_item->getPurchasedEntity();
      // Ship only shippable purchasable entity types.
      if (!$purchased_entity || !$purchased_entity->hasField('weight')) {
        continue;
      }
      // The weight will be empty if the shippable trait was added but the
      // existing entities were not updated. add a gram because fedex doesn't like zero weights
      if ($purchased_entity->get('weight')->isEmpty()) {
        $purchased_entity->set('weight', new Weight(1, WeightUnit::GRAM));
      }

      $quantity = $order_item->getQuantity();
      /** @var \Drupal\physical\Weight $weight */
      $weight = $purchased_entity->get('weight')->first()->toMeasurement();
      $shipmentItem = new ShipmentItem([
        'order_item_id' => $order_item->id(),
        'title' => $order_item->getTitle(),
        'quantity' => $quantity,
        'weight' => $weight->multiply($quantity),
        'declared_value' => $order_item->getUnitPrice()->multiply($quantity),
      ]);

      if ($purchased_entity->hasField('commerce_fedex_dry_ice_' . $shippingType) && !$purchased_entity->get('commerce_fedex_dry_ice_' . $shippingType)->getValue()[0]['value']){
        $preShipments['dry_ice'][] = $shipmentItem;

      } else {
        $preShipments['no_special_services'][] = $shipmentItem;
      }
    }
    $proposed_shipments = [];
    $i = 0;
    foreach($preShipments as $delta => $items){
      if (!empty($items)) {
        $proposed_shipments[] = new ProposedShipment([
          'type' => $this->getShipmentType($order),
          'order_id' => $order->id(),
          'title' => t('Shipment #' . ++$i),
          'items' => $items,
          'shipping_profile' => $shipping_profile,
        ]);
      }
    }
    return $proposed_shipments;
  }
}