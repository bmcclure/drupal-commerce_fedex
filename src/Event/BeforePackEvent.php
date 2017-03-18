<?php

namespace Drupal\commerce_fedex\Event;

use Drupal\commerce_order\Entity\OrderInterface;
use Drupal\profile\Entity\ProfileInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Defines the before pack event for FedEx.
 *
 * @todo Remove this event after it's rolled into commerce_shipping
 *
 * @see \Drupal\commerce_fedex\Event\CommerceFedExEvents
 */
class BeforePackEvent extends Event {

  /**
   * The order items being packed.
   *
   * @var \Drupal\commerce_order\Entity\OrderItemInterface[]
   */
  protected $orderItems;

  /**
   * The order being packed.
   *
   * @var \Drupal\commerce_order\Entity\OrderInterface
   */
  protected $order;

  /**
   * The selected shipping profile.
   *
   * @var \Drupal\profile\Entity\ProfileInterface
   */
  protected $shippingProfile;

  /**
   * Constructs a new BeforePackEvent object.
   *
   * @param array $order_items
   *   The order items array.
   * @param \Drupal\commerce_order\Entity\OrderInterface $order
   *   The order being packed.
   * @param \Drupal\profile\Entity\ProfileInterface $shipping_profile
   *   The selected shipping profile.
   */
  public function __construct(array $order_items, OrderInterface $order, ProfileInterface $shipping_profile) {
    $this->orderItems = $order_items;
    $this->order = $order;
    $this->shippingProfile = $shipping_profile;
  }

  /**
   * Gets the order items.
   *
   * @return \Drupal\commerce_order\Entity\OrderItemInterface[]
   *   The order items.
   */
  public function getOrderItems() {
    return $this->orderItems;
  }

  /**
   * Sets the plugin types.
   *
   * @param array $order_items
   *   The order items array.
   *
   * @return $this
   */
  public function setOrderItems(array $order_items) {
    $this->orderItems = $order_items;
    return $this;
  }

  /**
   * Gets the order.
   *
   * @return \Drupal\commerce_order\Entity\OrderInterface
   *   The order.
   */
  public function getOrder() {
    return $this->order;
  }

  /**
   * Sets the order.
   *
   * @param \Drupal\commerce_order\Entity\OrderInterface $order
   *   The order.
   *
   * @return $this
   */
  public function setOrder(OrderInterface $order) {
    $this->order = $order;
    return $this;
  }

  /**
   * Gets the shipping profile.
   *
   * @return \Drupal\profile\Entity\ProfileInterface
   *   The shipping profile.
   */
  public function getShippingProfile() {
    return $this->shippingProfile;
  }

  /**
   * Sets the shipping profile.
   *
   * @param \Drupal\profile\Entity\ProfileInterface $shipping_profile
   *   The shipping profile.
   *
   * @return $this
   */
  public function setShippingProfile(ProfileInterface $shipping_profile) {
    $this->shippingProfile = $shipping_profile;
    return $this;
  }

}
