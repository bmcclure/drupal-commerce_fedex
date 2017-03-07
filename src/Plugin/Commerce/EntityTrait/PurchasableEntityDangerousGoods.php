<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\EntityTrait;

use Drupal\commerce\BundleFieldDefinition;
use Drupal\commerce\Plugin\Commerce\EntityTrait\EntityTraitBase;

/**
 * Provides the "commerce_fedex_dangerous_goods" trait.
 *
 * @CommerceEntityTrait(
 *   id = "commerce_fedex_dangerous_goods",
 *   label = @Translation("FedEx: Dangerous goods"),
 *   entity_types = {"commerce_product_variation"}
 * )
 */
class PurchasableEntityDangerousGoods extends EntityTraitBase {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = [];

    $fields['commerce_fedex_dangerous_goods'] = BundleFieldDefinition::create('boolean')
      ->setLabel('FedEx: Dangerous goods')
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => 95,
      ]);

    return $fields;
  }

}
