<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Volume StructType
 * Meta informations extracted from the WSDL
 * - documentation: Three-dimensional volume/cubic measurement.
 * @subpackage Structs
 */
class Volume extends AbstractStructBase
{
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Units;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Value;
    /**
     * Constructor method for Volume
     * @uses Volume::setUnits()
     * @uses Volume::setValue()
     * @param string $units
     * @param float $value
     */
    public function __construct($units = null, $value = null)
    {
        $this
            ->setUnits($units)
            ->setValue($value);
    }
    /**
     * Get Units value
     * @return string|null
     */
    public function getUnits()
    {
        return $this->Units;
    }
    /**
     * Set Units value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\VolumeUnits::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\VolumeUnits::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $units
     * @return \Drupal\commerce_fedex\FedEx\StructType\Volume
     */
    public function setUnits($units = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\VolumeUnits::valueIsValid($units)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $units, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\VolumeUnits::getValidValues())), __LINE__);
        }
        $this->Units = $units;
        return $this;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Volume
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\Volume
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
