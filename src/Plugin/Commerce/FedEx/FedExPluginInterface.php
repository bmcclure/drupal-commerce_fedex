<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\FedEx;

use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\Component\Plugin\ConfigurableInterface;
use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Plugin\PluginFormInterface;
use NicholasCreativeMedia\FedExPHP\Services\RateService;
use NicholasCreativeMedia\FedExPHP\Structs\RateRequest;
use NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem;

/**
 * Defines the base interface for FedEx Service Plugins.
 *
 * @package Drupal\commerce_fedex\Plugin\Commerce\FedEx
 */
interface FedExPluginInterface extends ConfigurableInterface, PluginFormInterface, PluginInspectionInterface {

  /**
   * Function adjustPackage.
   *
   * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $package
   *   The package to adjust.
   * @param array $items
   *   An array of Shipment Items.
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The Shipment.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
   *   The Adjusted Package
   */
  public function adjustPackage(RequestedPackageLineItem $package, array $items, ShipmentInterface $shipment);

  /**
   * Function splitPackage.
   *
   * @param array $shipment_items
   *   An Array of shipment items.
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The Shipment.
   *
   * @return array
   *   An array of arrays of shipment items.
   */
  public function splitPackage(array $shipment_items, ShipmentInterface $shipment);

  /**
   * Function alterRateRequest.
   *
   * @param RateRequest $rate_request
   *   The rate request object.
   * @param \NicholasCreativeMedia\FedExPHP\Services\RateService $rate_service
   *   The current rate service object.
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The current shipment object.
   * @param $configuration
   *   The FedEx plugin configuration array.
   *
   * @return void
   */
  public function alterRateRequest(RateRequest $rate_request, RateService $rate_service, ShipmentInterface $shipment, $configuration);

}
