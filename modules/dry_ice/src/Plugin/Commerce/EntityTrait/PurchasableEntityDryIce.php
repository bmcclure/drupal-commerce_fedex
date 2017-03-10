<?php

namespace Drupal\commerce_fedex_dry_ice\Plugin\Commerce\EntityTrait;

use Drupal\commerce\BundleFieldDefinition;
use Drupal\commerce\Plugin\Commerce\EntityTrait\EntityTraitBase;

/**
 * Provides the "fedex_dry_ice" trait.
 *
 * @CommerceEntityTrait(
 *   id = "commerce_fedex_dry_ice",
 *   label = @Translation("FedEx: Enable dry ice shipping"),
 *   entity_types = {"commerce_product_variation"}
 * )
 */
class PurchasableEntityDryIce extends EntityTraitBase {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = [];

    $id = $this->getPluginId();

    $fields[$id] = BundleFieldDefinition::create('boolean')
      ->setLabel("FedEx: Require dry ice shipping")
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => 95,
      ]);

    return $fields;
  }

}
