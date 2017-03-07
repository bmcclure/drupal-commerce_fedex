<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RadionuclideActivity StructType
 * @subpackage Structs
 */
class RadionuclideActivity extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Value;
    /**
     * The UnitOfMeasure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnitOfMeasure;
    /**
     * Constructor method for RadionuclideActivity
     * @uses RadionuclideActivity::setValue()
     * @uses RadionuclideActivity::setUnitOfMeasure()
     * @param float $value
     * @param string $unitOfMeasure
     */
    public function __construct($value = null, $unitOfMeasure = null)
    {
        $this
            ->setValue($value)
            ->setUnitOfMeasure($unitOfMeasure);
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Drupal\commerce_fedex\FedEx\StructType\RadionuclideActivity
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Get UnitOfMeasure value
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }
    /**
     * Set UnitOfMeasure value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RadioactivityUnitOfMeasure::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RadioactivityUnitOfMeasure::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unitOfMeasure
     * @return \Drupal\commerce_fedex\FedEx\StructType\RadionuclideActivity
     */
    public function setUnitOfMeasure($unitOfMeasure = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\RadioactivityUnitOfMeasure::valueIsValid($unitOfMeasure)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $unitOfMeasure, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\RadioactivityUnitOfMeasure::getValidValues())), __LINE__);
        }
        $this->UnitOfMeasure = $unitOfMeasure;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\RadionuclideActivity
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
