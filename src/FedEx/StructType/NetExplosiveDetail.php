<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NetExplosiveDetail StructType
 * @subpackage Structs
 */
class NetExplosiveDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Amount;
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Units;
    /**
     * Constructor method for NetExplosiveDetail
     * @uses NetExplosiveDetail::setType()
     * @uses NetExplosiveDetail::setAmount()
     * @uses NetExplosiveDetail::setUnits()
     * @param string $type
     * @param float $amount
     * @param string $units
     */
    public function __construct($type = null, $amount = null, $units = null)
    {
        $this
            ->setType($type)
            ->setAmount($amount)
            ->setUnits($units);
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
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NetExplosiveClassificationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NetExplosiveClassificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\NetExplosiveClassificationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NetExplosiveClassificationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail
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
