<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\FedEx;

use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\Component\Plugin\ConfigurablePluginInterface;
use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Plugin\PluginFormInterface;
use NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem;

/**
 * Defines the base interface for FedEx Service Plugins.
 *
 * @package Drupal\commerce_fedex\Plugin\Commerce\FedEx
 */
interface FedExPluginInterface extends ConfigurablePluginInterface, PluginFormInterface, PluginInspectionInterface {

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

}
