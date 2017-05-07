<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\FedEx;

use Drupal\commerce_shipping\Entity\ShipmentInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class FedExPluginBase base class for the fedex plugins.
 *
 * @package Drupal\commerce_fedex\Plugin\Commerce\FedEx
 */
abstract class FedExPluginBase extends PluginBase implements ContainerFactoryPluginInterface, FedExPluginInterface {
  use StringTranslationTrait;

  /**
   * Creates a new FedEx Service object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    $this->setConfiguration($configuration);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition
    );
  }

  /**
   * Provide the plugin default configuration.
   *
   * @return array
   *   The default configuration
   */
  public function defaultConfiguration() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfiguration() {
    return $this->configuration;
  }

  /**
   * {@inheritdoc}
   */
  public function setConfiguration(array $configuration) {
    $this->configuration = NestedArray::mergeDeep($this->defaultConfiguration(), $configuration);
  }

  /**
   * {@inheritdoc}
   */
  public function calculateDependencies() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    return $form;
  }

  /**
   * Adjust a package based on the items, shipment and profile.
   *
   * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $package
   *   The package to adjust.
   * @param array $items
   *   An array of shipment items.
   * @param \Drupal\commerce_shipping\Entity\ShipmentInterface $shipment
   *   The shipment.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
   *   The adjusted Package.
   */
  public function adjustPackage(RequestedPackageLineItem $package, array $items, ShipmentInterface $shipment) {
    return $package;
  }

  /**
   * {@inheritdoc}
   */
  public function splitPackage(array $shipment_items, ShipmentInterface $shipment) {
    return [$shipment_items];
  }

}
