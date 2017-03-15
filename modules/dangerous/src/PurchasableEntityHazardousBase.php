<?php

namespace Drupal\commerce_fedex_dangerous;

use Drupal\commerce\BundleFieldDefinition;
use Drupal\commerce\Plugin\Commerce\EntityTrait\EntityTraitBase;
use NicholasCreativeMedia\FedExPHP\Enums\HazardousCommodityOptionType;
use NicholasCreativeMedia\FedExPHP\Enums\HazardousCommodityRegulationType;
use Drupal\Core\Field\FieldStorageDefinitionInterface;

/**
 * Provides a base trait used for both Hazardous Materials and Dangerous Goods.
 */
abstract class PurchasableEntityHazardousBase extends EntityTraitBase {

  /**
   * Defines base fields shared by all hazardous traits.
   */
  protected function baseFields() {
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
      ->setLabel($label . ' ' . $this->t('options'))
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

    $fields[$id . '_quantity'] = BundleFieldDefinition::create('float')
      ->setLabel($label . ' ' . $this->t('quantity'))
      ->setDescription($this->t('Specify the quantity of hazardous materials being shipped.'))
      ->setDisplayOptions('form', [
        'type' => 'number',
        'weight' => 95,
      ]);

    $fields[$id . '_units'] = BundleFieldDefinition::create('list_string')
      ->setLabel($label . ' ' . $this->t('quantity units'))
      ->setDescription($this->t('Specify the unit of measurement to use for the quantity.'))
      ->setSetting('allowed_values', [
        'ml' => $this->t('ml'),
        'L' => $this->t('L'),
        'g' => $this->t('g'),
        'kg' => $this->t('kg'),
        'kg G' => $this->t('kg G'),
      ])
      ->setDisplayOptions('form', [
        'type' => 'options_select',
        'weight' => 95,
      ]);

    $fields[$id . '_regulation_type'] = BundleFieldDefinition::create('list_string')
      ->setLabel($label . ' ' . $this->t('regulation type'))
      ->setDescription($this->t('Select the regulation type of the hazardous materials'))
      ->setSetting('allowed_values', [
        HazardousCommodityRegulationType::VALUE_ADR => $this->t('ADR'),
        HazardousCommodityRegulationType::VALUE_DOT => $this->t('DOT'),
        HazardousCommodityRegulationType::VALUE_IATA => $this->t('IATA'),
        HazardousCommodityRegulationType::VALUE_ORMD => $this->t('ORMD'),
      ])
      ->setDisplayOptions('form', [
        'type' => 'options_select',
        'weight' => 95,
      ]);

    $fields[$id . '_description'] = BundleFieldDefinition::create('string')
      ->setLabel($label . ' ' . $this->t('description'))
      ->setDescription($this->t('Identify and describe this hazardous commodity.'))
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => 95,
      ]);

    return $fields;
  }

}
