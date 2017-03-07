<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\EntityTrait;

use Drupal\commerce\BundleFieldDefinition;
use Drupal\commerce\Plugin\Commerce\EntityTrait\EntityTraitBase;

/**
 * Provides the "commerce_fedex_dry_ice" trait.
 *
 * @CommerceEntityTrait(
 *   id = "commerce_fedex_dry_ice",
 *   label = @Translation("FedEx: Dry ice"),
 *   entity_types = {"commerce_product_variation"}
 * )
 */
class PurchasableEntityDryIce extends EntityTraitBase {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = [];

    $fields['commerce_fedex_dry_ice'] = BundleFieldDefinition::create('boolean')
      ->setLabel('FedEx: Dry ice')
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => 95,
      ]);

    return $fields;
  }

}
