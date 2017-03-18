<?php

namespace Drupal\commerce_fedex\Event;

use NicholasCreativeMedia\FedExPHP\Services\RateService;
use NicholasCreativeMedia\FedExPHP\Structs\RateRequest;
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
   * @var \NicholasCreativeMedia\FedExPHP\Structs\RateRequest
   */
  protected $rateRequest;

  /**
   * The FedEx rate service being used.
   *
   * @var \NicholasCreativeMedia\FedExPHP\Services\RateService
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
   * @param \NicholasCreativeMedia\FedExPHP\Structs\RateRequest $rate_request
   *   The rate request object.
   * @param \NicholasCreativeMedia\FedExPHP\Services\RateService $rate_service
   *   The FedEx rate service being used.
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment being requested.
   */
  public function __construct(RateRequest $rate_request, RateService $rate_service, ShipmentInterface $shipment) {
    $this->rateRequest = $rate_request;
    $this->rateService = $rate_service;
    $this->shipment = $shipment;
  }

  /**
   * Gets the rate request object.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\RateRequest
   *   The rate request object.
   */
  public function getRateRequest() {
    return $this->rateRequest;
  }

  /**
   * Sets the rate request object.
   *
   * @param \NicholasCreativeMedia\FedExPHP\Structs\RateRequest $rate_request
   *   The rate request object.
   *
   * @return $this
   */
  public function setRateRequest(RateRequest $rate_request) {
    $this->rateRequest = $rate_request;
    return $this;
  }

  /**
   * Gets the rate service.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Services\RateService
   *   The rate service.
   */
  public function getRateService() {
    return $this->rateService;
  }

  /**
   * Sets the rate service.
   *
   * @param \NicholasCreativeMedia\FedExPHP\Services\RateService $rate_service
   *   The rate service.
   *
   * @return $this
   */
  public function setRateService(RateService $rate_service) {
    $this->rateService = $rate_service;
    return $this;
  }

  /**
   * Gets the shipment.
   *
   * @return \Drupal\commerce_shipping\Entity\ShipmentInterface
   *   The shipment.
   */
  public function getShipment() {
    return $this->shipment;
  }

  /**
   * Sets the shipment.
   *
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return $this
   */
  public function setShipment(ShipmentInterface $shipment) {
    $this->shipment = $shipment;
    return $this;
  }

}
