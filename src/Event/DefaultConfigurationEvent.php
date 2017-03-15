<?php

namespace Drupal\commerce_fedex\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Defines the default configuration event for FedEx.
 *
 * @see \Drupal\commerce_fedex\Event\CommerceFedExEvents
 */
class DefaultConfigurationEvent extends Event {

  /**
   * The Shipping method configuration.
   *
   * @var array
   */
  protected $configuration;

  /**
   * Constructs a new DefaultConfigurationEvent.
   *
   * @param array $configuration
   *   The shipping method configuration.
   */
  public function __construct(array $configuration){
    $this->configuration = $configuration;
  }

  /**
   * Gets the configuration.
   *
   * @return array
   *   The configuration.
   */
  public function getConfiguration() {
    return $this->configuration;
  }

  /**
   * Sets the configuration.
   *
   * @param array $configuration
   *   The configuration.
   */
  public function setConfiguration(array $configuration) {
    $this->configuration = $configuration;
  }

}
