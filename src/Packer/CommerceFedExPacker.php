<?php

namespace Drupal\commerce_fedex\Packer;

use Drupal\commerce_order\Entity\OrderInterface;
use Drupal\commerce_shipping\Packer\DefaultPacker;
use Drupal\commerce_shipping\Packer\PackerInterface;
use Drupal\commerce_shipping\ProposedShipment;
use Drupal\commerce_shipping\ShipmentItem;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\physical\Plugin\Field\FieldType\MeasurementItem;use Drupal\physical\Weight;
use Drupal\physical\WeightUnit;
use Drupal\profile\Entity\ProfileInterface;

/**
 * Class CommerceFedExPacker
 * @package Drupal\commerce_fedex\Packer
 */
class CommerceFedExPacker extends DefaultPacker implements PackerInterface {

  use StringTranslationTrait;

  /**
   * @inheritdoc
   */
  public function pack(OrderInterface $order, ProfileInterface $shipping_profile) {

    $shipments = [
      [
        'title' => $this->t('Primary Shipment'),
        'items' => []
      ]
    ];

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

      /** @var MeasurementItem $weightItem */
      $weightItem = $purchased_entity->get('weight')->first();
      /** @var \Drupal\physical\Weight $weight */
      $weight = $weightItem->toMeasurement();

      $shipmentItem = new ShipmentItem([
        'order_item_id' => $order_item->id(),
        'title' => $order_item->getTitle(),
        'quantity' => $quantity,
        'weight' => $weight->multiply($quantity),
        'declared_value' => $order_item->getUnitPrice()->multiply($quantity),
      ]);
      $shipments[0]['items'][] = $shipmentItem;
    }


    $proposed_shipments = [];
    foreach($shipments as  $shipment){
      if (!empty($shipment['items'])) {
        $proposed_shipments[] = new ProposedShipment([
          'type' => $this->getShipmentType($order),
          'order_id' => $order->id(),
          'title' => $shipment['title'],
          'items' => $shipment['items'],
          'shipping_profile' => $shipping_profile,
        ]);
      }
    }
    return $proposed_shipments;
  }
}