<?php

namespace Drupal\commerce_fedex;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * The manager for FedEx Service Plugins.
 *
 * @see \Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginInterface
 */
class FedExPluginManager extends DefaultPluginManager {

  /**
   * FedExServiceManager constructor.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   The cache backend.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct(
      'Plugin/Commerce/FedEx',
      $namespaces,
      $module_handler,
      'Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginInterface',
      'Drupal\commerce_fedex\Annotation\CommerceFedExPlugin'
    );
    $this->setCacheBackend($cache_backend, 'commerce_fedex_plugins');
  }

}
