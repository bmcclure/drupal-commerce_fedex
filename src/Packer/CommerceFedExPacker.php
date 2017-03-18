<?php

namespace Drupal\commerce_fedex\Packer;

use Drupal\commerce_fedex\Event\BeforePackEvent;
use Drupal\commerce_fedex\Event\CommerceFedExEvents;
use Drupal\commerce_order\Entity\OrderInterface;
use Drupal\commerce_order\Entity\OrderItemInterface;
use Drupal\commerce_shipping\Packer\DefaultPacker;
use Drupal\commerce_shipping\Packer\PackerInterface;
use Drupal\commerce_shipping\ProposedShipment;
use Drupal\commerce_shipping\ShipmentItem;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\physical\Weight;
use Drupal\physical\WeightUnit;
use Drupal\profile\Entity\ProfileInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Defines a shipment packer for FedEx.
 *
 * @package Drupal\commerce_fedex\Packer
 */
class CommerceFedExPacker extends DefaultPacker implements PackerInterface {

  use StringTranslationTrait;

  /**
   * The event dispatcher.
   *
   * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
   */
  protected $eventDispatcher;

  /**
   * Constructs a new DefaultPacker object.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $event_dispatcher
   *   The event dispatcher.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, EventDispatcherInterface $event_dispatcher) {
    $this->entityTypeManager = $entity_type_manager;
    $this->eventDispatcher = $event_dispatcher;
  }

  /**
   * {@inheritdoc}
   */
  public function pack(OrderInterface $order, ProfileInterface $shipping_profile) {

    $shipments = [
      [
        'title' => $this->t('Primary Shipment'),
        'items' => [],
      ],
    ];

    foreach ($this->getOrderItems($order, $shipping_profile) as $order_item) {
      $purchased_entity = $order_item->getPurchasedEntity();

      // Ship only shippable purchasable entity types.
      if (!$purchased_entity || !$purchased_entity->hasField('weight')) {
        continue;
      }

      $quantity = $order_item->getQuantity();

      $shipments[0]['items'][] = new ShipmentItem([
        'order_item_id' => $order_item->id(),
        'title' => $order_item->getTitle(),
        'quantity' => $quantity,
        'weight' => $this->getWeight($order_item)->multiply($quantity),
        'declared_value' => $order_item->getUnitPrice()->multiply($quantity),
      ]);
    }

    $proposed_shipments = [];

    foreach ($shipments as $shipment) {
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

  /**
   * Gets the weight of the order item.
   *
   * The weight will be empty if the shippable trait was added but the existing
   * entities were not updated. Add 1 gram as fedex doesn't support 0 weights.
   *
   * @param \Drupal\commerce_order\Entity\OrderItemInterface $order_item
   *   The order item.
   *
   * @return \Drupal\physical\Weight
   *   The weight.
   */
  protected function getWeight(OrderItemInterface $order_item) {
    $purchasedEntity = $order_item->getPurchasedEntity();

    if ($purchasedEntity->get('weight')->isEmpty()) {
      $weight = new Weight(1, WeightUnit::GRAM);
    }
    else {
      /** @var \Drupal\physical\Plugin\Field\FieldType\MeasurementItem $weight_item */
      $weight_item = $purchasedEntity->get('weight')->first();

      $weight = $weight_item->toMeasurement();
    }

    return $weight;
  }

  /**
   * Gets the order items and fires an event to allow overriding before packing.
   *
   * @param \Drupal\commerce_order\Entity\OrderInterface $order
   *   The order.
   * @param \Drupal\profile\Entity\ProfileInterface $shipping_profile
   *   The shipping profile.
   *
   * @return \Drupal\commerce_order\Entity\OrderItemInterface[]
   *   The order items.
   */
  protected function getOrderItems(OrderInterface $order, ProfileInterface $shipping_profile) {
    $event = new BeforePackEvent($order->getItems(), $order, $shipping_profile);
    $this->eventDispatcher->dispatch(CommerceFedExEvents::BEFORE_PACK, $event);

    return $event->getOrderItems();
  }

}
