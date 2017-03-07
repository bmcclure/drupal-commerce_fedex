<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContentBarcoded StructType
 * @subpackage Structs
 */
class DocTabContentBarcoded extends AbstractStructBase
{
    /**
     * The Symbology
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Symbology;
    /**
     * The Specification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification
     */
    public $Specification;
    /**
     * Constructor method for DocTabContentBarcoded
     * @uses DocTabContentBarcoded::setSymbology()
     * @uses DocTabContentBarcoded::setSpecification()
     * @param string $symbology
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification $specification
     */
    public function __construct($symbology = null, \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification $specification = null)
    {
        $this
            ->setSymbology($symbology)
            ->setSpecification($specification);
    }
    /**
     * Get Symbology value
     * @return string|null
     */
    public function getSymbology()
    {
        return $this->Symbology;
    }
    /**
     * Set Symbology value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\BarcodeSymbologyType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\BarcodeSymbologyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $symbology
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContentBarcoded
     */
    public function setSymbology($symbology = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\BarcodeSymbologyType::valueIsValid($symbology)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $symbology, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\BarcodeSymbologyType::getValidValues())), __LINE__);
        }
        $this->Symbology = $symbology;
        return $this;
    }
    /**
     * Get Specification value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification|null
     */
    public function getSpecification()
    {
        return $this->Specification;
    }
    /**
     * Set Specification value
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification $specification
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContentBarcoded
     */
    public function setSpecification(\Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification $specification = null)
    {
        $this->Specification = $specification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContentBarcoded
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
