<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazardousCommodityQuantityDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies amount and units for quantity of hazardous commodities.
 * @subpackage Structs
 */
class HazardousCommodityQuantityDetail extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Number of units of the type below.
     * - minOccurs: 0
     * @var float
     */
    public $Amount;
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - documentation: Units by which the hazardous commodity is measured. For IATA commodity, the units values are restricted based on regulation type.
     * - minOccurs: 0
     * @var string
     */
    public $Units;
    /**
     * The QuantityType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies which measure of quantity is to be validated.
     * - minOccurs: 0
     * @var string
     */
    public $QuantityType;
    /**
     * Constructor method for HazardousCommodityQuantityDetail
     * @uses HazardousCommodityQuantityDetail::setAmount()
     * @uses HazardousCommodityQuantityDetail::setUnits()
     * @uses HazardousCommodityQuantityDetail::setQuantityType()
     * @param float $amount
     * @param string $units
     * @param string $quantityType
     */
    public function __construct($amount = null, $units = null, $quantityType = null)
    {
        $this
            ->setAmount($amount)
            ->setUnits($units)
            ->setQuantityType($quantityType);
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail
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
     * Get QuantityType value
     * @return string|null
     */
    public function getQuantityType()
    {
        return $this->QuantityType;
    }
    /**
     * Set QuantityType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityQuantityType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityQuantityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $quantityType
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail
     */
    public function setQuantityType($quantityType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityQuantityType::valueIsValid($quantityType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $quantityType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityQuantityType::getValidValues())), __LINE__);
        }
        $this->QuantityType = $quantityType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail
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
