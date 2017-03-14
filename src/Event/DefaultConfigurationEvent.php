<?php

namespace Drupal\commerce_fedex\Event;

/**
 * Class DefaultConfigurationEvent
 * @package Drupal\commerce_fedex\Event
 */
class DefaultConfigurationEvent {

  /**
   * The Shipping method configuration
   *
   * @var array
   */
  protected $configuration;

  /**
   * @inheritdoc
   */
  public function __construct(array $configuration){
    $this->configuration = $configuration;
  }

  /**
   * @return array
   */
  public function getConfiguration(): array {
    return $this->configuration;
  }

  /**
   * @param array $configuration
   */
  public function setConfiguration(array $configuration) {
    $this->configuration = $configuration;
  }

}