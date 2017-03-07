<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Measure StructType
 * @subpackage Structs
 */
class Measure extends AbstractStructBase
{
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Quantity;
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Units;
    /**
     * Constructor method for Measure
     * @uses Measure::setQuantity()
     * @uses Measure::setUnits()
     * @param float $quantity
     * @param string $units
     */
    public function __construct($quantity = null, $units = null)
    {
        $this
            ->setQuantity($quantity)
            ->setUnits($units);
    }
    /**
     * Get Quantity value
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param float $quantity
     * @return \Drupal\commerce_fedex\FedEx\StructType\Measure
     */
    public function setQuantity($quantity = null)
    {
        $this->Quantity = $quantity;
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
     * @param string $units
     * @return \Drupal\commerce_fedex\FedEx\StructType\Measure
     */
    public function setUnits($units = null)
    {
        // validation for constraint: string
        if (!is_null($units) && !is_string($units)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($units)), __LINE__);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Measure
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
