<?php

namespace Drupal\commerce_fedex_dangerous\Plugin\Commerce\EntityTrait;

use Drupal\commerce\BundleFieldDefinition;
use Drupal\commerce\Plugin\Commerce\EntityTrait\EntityTraitBase;
use Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod\FedEx;
use NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsAccessibilityType;

/**
 * Provides the "fedex_dangerous" trait.
 *
 * @CommerceEntityTrait(
 *   id = "fedex_dangerous",
 *   label = @Translation("FedEx: Enable dangerous goods shipping"),
 *   entity_types = {"commerce_product_variation"}
 * )
 */
class PurchasableEntityDangerousGoods extends EntityTraitBase {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $id = $this->getPluginId();

    $fields[$id . '_accessibility'] = BundleFieldDefinition::create('list_string')
      ->setLabel($this->t('Require Dangerous Goods/Hazardous Materials Shipping'))
      ->setCardinality(1)
      ->setSetting('allowed_values', [0 => "None"] + FedEx::enumToList(DangerousGoodsAccessibilityType::getValidValues()))
      ->setDisplayOptions('form', [
        'type' => 'options_select',
        'weight' => 95,
      ]);
    return $fields;
  }

}
