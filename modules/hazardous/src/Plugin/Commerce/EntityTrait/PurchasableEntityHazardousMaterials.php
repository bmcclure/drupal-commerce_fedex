<?php

namespace Drupal\commerce_fedex_hazardous\Plugin\Commerce\EntityTrait;

use Drupal\commerce\BundleFieldDefinition;
use Drupal\commerce_fedex\PurchasableEntityHazardousBase;

/**
 * Provides the "fedex_hazardous" trait.
 *
 * @CommerceEntityTrait(
 *   id = "fedex_hazardous",
 *   label = @Translation("FedEx: Hazardous materials"),
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
