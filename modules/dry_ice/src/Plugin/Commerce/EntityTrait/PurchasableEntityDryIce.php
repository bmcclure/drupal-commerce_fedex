<?php

namespace Drupal\commerce_fedex_dry_ice\Plugin\Commerce\EntityTrait;

use Drupal\commerce\BundleFieldDefinition;
use Drupal\commerce\Plugin\Commerce\EntityTrait\EntityTraitBase;

/**
 * Provides the "fedex_dry_ice" trait.
 *
 * @CommerceEntityTrait(
 *   id = "fedex_dry_ice",
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

    $id = $this->getPluginId();
    $label = $this->getLabel();

    $fields[$id] = BundleFieldDefinition::create('boolean')
      ->setLabel($label)
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => 95,
      ]);

    $fields[$id . '_weight'] = BundleFieldDefinition::create('float')
      ->setLabel($label . ' ' . $this->t('weight'))
      ->setDescription($this->t('Enter the weight of the dry ice in kg.'))
      ->setDisplayOptions('form', [
        'type' => 'number',
        'weight' => 95,
        'suffix' => ' kg',
      ]);

    return $fields;
  }

}
