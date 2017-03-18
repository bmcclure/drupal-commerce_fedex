<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\FedEx;

use Drupal\Component\Plugin\ConfigurablePluginInterface;
use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Plugin\PluginFormInterface;

/**
 * Defines the base interface for FedEx Service Plugins.
 *
 * @package Drupal\commerce_fedex\Plugin\Commerce\FedEx
 */
interface FedExPluginInterface extends ConfigurablePluginInterface, PluginFormInterface, PluginInspectionInterface {

}
