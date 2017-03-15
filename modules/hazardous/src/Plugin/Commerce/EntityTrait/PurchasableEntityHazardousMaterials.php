<?php

namespace Drupal\commerce_fedex_hazardous\Plugin\Commerce\EntityTrait;

use Drupal\commerce_fedex\PurchasableEntityHazardousBase;

/**
 * Provides the "fedex_hazardous" trait.
 *
 * @CommerceEntityTrait(
 *   id = "fedex_hazardous",
 *   label = @Translation("FedEx: Enable hazardous materials shipping"),
 *   entity_types = {"commerce_product_variation"}
 * )
 */
class PurchasableEntityHazardousMaterials extends PurchasableEntityHazardousBase {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = $this->baseFields();

    return $fields;
  }

}
