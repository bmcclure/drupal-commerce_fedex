<?php

namespace Drupal\commerce_fedex\Event;

use Drupal\commerce_fedex\FedEx\ServiceType\RateService;
use Drupal\commerce_fedex\FedEx\StructType\RateRequest;
use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Defines the rate request event for FedEx.
 *
 * @see \Drupal\commerce_fedex\Event\CommerceFedExEvents
 */
class RateRequestEvent extends Event {

  /**
   * The rate request object.
   *
   * @var \Drupal\commerce_fedex\FedEx\StructType\RateRequest
   */
  protected $rateRequest;

  /**
   * The FedEx rate service being used.
   *
   * @var \Drupal\commerce_fedex\FedEx\ServiceType\RateService
   */
  protected $rateService;

  /**
   * The shipment being requested.
   *
   * @var \Drupal\commerce_shipping\Entity\ShipmentInterface
   */
  protected $shipment;

  /**
   * Constructs a new BeforePackEvent object.
   *
   * @param RateRequest $rateRequest
   *   The rate request object.
   * @param RateService $rateService
   *   The FedEx rate service being used.
   * @param ShipmentInterface $shipment
   *   The shipment being requested.
   */
  public function __construct(RateRequest $rateRequest, RateService $rateService, ShipmentInterface $shipment) {
    $this->rateRequest = $rateRequest;
    $this->rateService = $rateService;
    $this->shipment = $shipment;
  }

  /**
   * Gets the rate request object.
   *
   * @return RateRequest
   *   The rate request object.
   */
  public function getRateRequest() {
    return $this->rateRequest;
  }

  /**
   * Sets the rate request object.
   *
   * @param RateRequest $rateRequest
   *   The rate request object.
   *
   * @return $this
   */
  public function setRateRequest(RateRequest $rateRequest) {
    $this->rateRequest = $rateRequest;
    return $this;
  }

  /**
   * Gets the rate service.
   *
   * @return RateService
   *   The rate service.
   */
  public function getRateService() {
    return $this->rateService;
  }

  /**
   * Sets the rate service.
   *
   * @param RateService $rateService
   *   The rate service.
   *
   * @return $this
   */
  public function setRateService(RateService $rateService) {
    $this->rateService = $rateService;
    return $this;
  }

  /**
   * Gets the shipment.
   *
   * @return ShipmentInterface
   *   The shipment.
   */
  public function getShipment() {
    return $this->shipment;
  }

  /**
   * Sets the shipment.
   *
   * @param ShipmentInterface $shipment
   *   The shipment.
   *
   * @return $this
   */
  public function setShipment(ShipmentInterface $shipment) {
    $this->shipment = $shipment;
    return $this;
  }

}
