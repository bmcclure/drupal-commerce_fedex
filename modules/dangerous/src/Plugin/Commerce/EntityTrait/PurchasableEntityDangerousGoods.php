<?php

namespace Drupal\commerce_fedex_dangerous\Plugin\Commerce\EntityTrait;

use Drupal\commerce\BundleFieldDefinition;
use Drupal\commerce_fedex\PurchasableEntityHazardousBase;

/**
 * Provides the "fedex_dangerous" trait.
 *
 * @CommerceEntityTrait(
 *   id = "fedex_dangerous",
 *   label = @Translation("FedEx: Dangerous goods"),
 *   entity_types = {"commerce_product_variation"}
 * )
 */
class PurchasableEntityDangerousGoods extends PurchasableEntityHazardousBase {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = $this->baseFields();

    return $fields;
  }

}
