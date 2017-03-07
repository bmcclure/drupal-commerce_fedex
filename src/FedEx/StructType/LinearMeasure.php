<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LinearMeasure StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents a one-dimensional measurement in small units (e.g. suitable for measuring a package or document), contrasted with Distance, which represents a large one-dimensional measurement (e.g. distance between cities).
 * @subpackage Structs
 */
class LinearMeasure extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: The numerical quantity of this measurement.
     * - minOccurs: 0
     * @var float
     */
    public $Value;
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - documentation: The units for this measurement.
     * - minOccurs: 0
     * @var string
     */
    public $Units;
    /**
     * Constructor method for LinearMeasure
     * @uses LinearMeasure::setValue()
     * @uses LinearMeasure::setUnits()
     * @param float $value
     * @param string $units
     */
    public function __construct($value = null, $units = null)
    {
        $this
            ->setValue($value)
            ->setUnits($units);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\LinearMeasure
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
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
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LinearUnits::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LinearUnits::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $units
     * @return \Drupal\commerce_fedex\FedEx\StructType\LinearMeasure
     */
    public function setUnits($units = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\LinearUnits::valueIsValid($units)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $units, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\LinearUnits::getValidValues())), __LINE__);
        }
        $this->Units = $units;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\LinearMeasure
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
