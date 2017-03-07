<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazardousCommodityPackingDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies documentation and limits for validation of an individual packing group/category.
 * @subpackage Structs
 */
class HazardousCommodityPackingDetail extends AbstractStructBase
{
    /**
     * The CargoAircraftOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CargoAircraftOnly;
    /**
     * The PackingInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Coded specification for how commodity is to be packed.
     * - minOccurs: 0
     * @var string
     */
    public $PackingInstructions;
    /**
     * Constructor method for HazardousCommodityPackingDetail
     * @uses HazardousCommodityPackingDetail::setCargoAircraftOnly()
     * @uses HazardousCommodityPackingDetail::setPackingInstructions()
     * @param bool $cargoAircraftOnly
     * @param string $packingInstructions
     */
    public function __construct($cargoAircraftOnly = null, $packingInstructions = null)
    {
        $this
            ->setCargoAircraftOnly($cargoAircraftOnly)
            ->setPackingInstructions($packingInstructions);
    }
    /**
     * Get CargoAircraftOnly value
     * @return bool|null
     */
    public function getCargoAircraftOnly()
    {
        return $this->CargoAircraftOnly;
    }
    /**
     * Set CargoAircraftOnly value
     * @param bool $cargoAircraftOnly
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityPackingDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly = null)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    /**
     * Get PackingInstructions value
     * @return string|null
     */
    public function getPackingInstructions()
    {
        return $this->PackingInstructions;
    }
    /**
     * Set PackingInstructions value
     * @param string $packingInstructions
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityPackingDetail
     */
    public function setPackingInstructions($packingInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($packingInstructions) && !is_string($packingInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packingInstructions)), __LINE__);
        }
        $this->PackingInstructions = $packingInstructions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityPackingDetail
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
