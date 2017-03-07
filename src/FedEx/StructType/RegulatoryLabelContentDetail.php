<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegulatoryLabelContentDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies details needed to generate any label artifacts required due to regulatory requirements.
 * @subpackage Structs
 */
class RegulatoryLabelContentDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The GenerationOptions
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how the customer requested the regulatory label to be generated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $GenerationOptions;
    /**
     * Constructor method for RegulatoryLabelContentDetail
     * @uses RegulatoryLabelContentDetail::setType()
     * @uses RegulatoryLabelContentDetail::setGenerationOptions()
     * @param string $type
     * @param string[] $generationOptions
     */
    public function __construct($type = null, array $generationOptions = array())
    {
        $this
            ->setType($type)
            ->setGenerationOptions($generationOptions);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RegulatoryLabelType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RegulatoryLabelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\RegulatoryLabelContentDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\RegulatoryLabelType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\RegulatoryLabelType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get GenerationOptions value
     * @return string[]|null
     */
    public function getGenerationOptions()
    {
        return $this->GenerationOptions;
    }
    /**
     * Set GenerationOptions value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomerSpecifiedLabelGenerationOptionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomerSpecifiedLabelGenerationOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $generationOptions
     * @return \Drupal\commerce_fedex\FedEx\StructType\RegulatoryLabelContentDetail
     */
    public function setGenerationOptions(array $generationOptions = array())
    {
        $invalidValues = array();
        foreach ($generationOptions as $regulatoryLabelContentDetailGenerationOptionsItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\CustomerSpecifiedLabelGenerationOptionType::valueIsValid($regulatoryLabelContentDetailGenerationOptionsItem)) {
                $invalidValues[] = var_export($regulatoryLabelContentDetailGenerationOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CustomerSpecifiedLabelGenerationOptionType::getValidValues())), __LINE__);
        }
        $this->GenerationOptions = $generationOptions;
        return $this;
    }
    /**
     * Add item to GenerationOptions value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomerSpecifiedLabelGenerationOptionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomerSpecifiedLabelGenerationOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RegulatoryLabelContentDetail
     */
    public function addToGenerationOptions($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\CustomerSpecifiedLabelGenerationOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CustomerSpecifiedLabelGenerationOptionType::getValidValues())), __LINE__);
        }
        $this->GenerationOptions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\RegulatoryLabelContentDetail
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
