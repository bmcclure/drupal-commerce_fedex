<?php

namespace Drupal\commerce_fedex\Event;

use Drupal\commerce_shipping\ShippingService;
use Symfony\Component\EventDispatcher\Event;

/**
 * Defines the services event for FedEx.
 *
 * @see \Drupal\commerce_fedex\Event\CommerceFedExEvents
 */
class ServicesEvent extends Event {

  /**
   * The array of services.
   *
   * @var \Drupal\commerce_shipping\ShippingService[]
   */
  protected $services;

  /**
   * Constructs a new BeforePackEvent object.
   *
   * @param \Drupal\commerce_shipping\ShippingService[] $services
   *   The shipping services.
   */
  public function __construct(array $services) {
    $this->services = $services;
  }

  /**
   * Gets the services.
   *
   * @return \Drupal\commerce_shipping\ShippingService[]
   *   The services array.
   */
  public function getServices() {
    return $this->services;
  }

  /**
   * Sets the services.
   *
   * @param \Drupal\commerce_shipping\ShippingService[] $services
   *   The services array.
   *
   * @return $this
   */
  public function setServices(array $services) {
    $this->services = $services;
    return $this;
  }

  public function addService($id, $label) {
    $this->services[$id] = new ShippingService($id, $label);
    return $this;
  }

}
