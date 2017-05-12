<?php

namespace Drupal\commerce_fedex\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines the FedEx Service plugin annotation object.
 *
 * Plugin namespace: Plugin\Commerce\FedEx.
 *
 * @see plugin_api
 *
 * @Annotation
 */
class CommerceFedExPlugin extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The Service label.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

  /**
   * The options detail box label.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $options_label;

  /**
   * The options detail box description.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $options_description;

}
