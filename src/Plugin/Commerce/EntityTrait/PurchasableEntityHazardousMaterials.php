<?php

namespace Drupal\commerce_fedex\Plugin\Commerce\EntityTrait;

use Drupal\commerce\BundleFieldDefinition;
use Drupal\commerce\Plugin\Commerce\EntityTrait\EntityTraitBase;
use Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityOptionType;
use Drupal\Core\Field\FieldStorageDefinitionInterface;

/**
 * Provides the "commerce_fedex_hazmat" trait.
 *
 * @CommerceEntityTrait(
 *   id = "commerce_fedex_hazmat",
 *   label = @Translation("FedEx: Hazardous materials"),
 *   entity_types = {"commerce_product_variation"}
 * )
 */
class PurchasableEntityHazardousMaterials extends EntityTraitBase {

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

    $fields[$id . '_options'] = BundleFieldDefinition::create('list_string')
      ->setLabel($label . ' ' . $this->t(' options'))
      ->setCardinality(FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED)
      ->setSetting('allowed_values', [
        HazardousCommodityOptionType::VALUE_BATTERY => $this->t('Battery'),
        HazardousCommodityOptionType::VALUE_HAZARDOUS_MATERIALS => $this->t('Hazardous materials'),
        HazardousCommodityOptionType::VALUE_LIMITED_QUANTITIES_COMMODITIES => $this->t('Limited quantities commodities'),
        HazardousCommodityOptionType::VALUE_ORM_D => $this->t('ORD M'),
        HazardousCommodityOptionType::VALUE_REPORTABLE_QUANTITIES => $this->t('Reportable quantities'),
        HazardousCommodityOptionType::VALUE_SMALL_QUANTITY_EXCEPTION => $this->t('Small quantity exception'),
      ])
      ->setDisplayOptions('form', [
        'type' => 'options_buttons',
        'weight' => 95,
      ]);

    return $fields;
  }

}
