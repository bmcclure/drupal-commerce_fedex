<?php

namespace Drupal\commerce_fedex_dry_ice\Plugin\Commerce\EntityTrait;

use Drupal\commerce\BundleFieldDefinition;
use Drupal\commerce\Plugin\Commerce\EntityTrait\EntityTraitBase;

/**
 * Provides the "fedex_dry_ice" trait.
 *
 * @CommerceEntityTrait(
 *   id = "fedex_dry_ice",
 *   label = @Translation("FedEx: Enable dry ice shipping"),
 *   entity_types = {"commerce_product_variation"}
 * )
 */
class PurchasableEntityDryIce extends EntityTraitBase {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $id = $this->getPluginId();

    $fields = [];
    $fields[$id . '_domestic'] = BundleFieldDefinition::create('boolean')
      ->setLabel("FedEx: Require dry ice shipping domestically")
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => 95,
      ]);
    $fields[$id . '_intl'] = BundleFieldDefinition::create('boolean')
      ->setLabel("FedEx: Require dry ice shipping internationally")
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => 95,
      ]);

    return $fields;
  }

}
