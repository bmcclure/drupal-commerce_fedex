<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazardousCommodityPackagingDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies number and type of packaging units for hazardous commodities.
 * @subpackage Structs
 */
class HazardousCommodityPackagingDetail extends AbstractStructBase
{
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - documentation: Number of units of the type below.
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - documentation: Units in which the hazardous commodity is packaged.
     * - minOccurs: 0
     * @var string
     */
    public $Units;
    /**
     * Constructor method for HazardousCommodityPackagingDetail
     * @uses HazardousCommodityPackagingDetail::setCount()
     * @uses HazardousCommodityPackagingDetail::setUnits()
     * @param int $count
     * @param string $units
     */
    public function __construct($count = null, $units = null)
    {
        $this
            ->setCount($count)
            ->setUnits($units);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityPackagingDetail
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityPackagingDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityPackagingDetail
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
