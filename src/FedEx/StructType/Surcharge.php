<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Surcharge StructType
 * @subpackage Structs
 */
class Surcharge extends AbstractStructBase
{
    /**
     * The SurchargeType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SurchargeType;
    /**
     * The Level
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Level;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $Amount;
    /**
     * Constructor method for Surcharge
     * @uses Surcharge::setSurchargeType()
     * @uses Surcharge::setLevel()
     * @uses Surcharge::setDescription()
     * @uses Surcharge::setAmount()
     * @param string $surchargeType
     * @param string $level
     * @param string $description
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $amount
     */
    public function __construct($surchargeType = null, $level = null, $description = null, \Drupal\commerce_fedex\FedEx\StructType\Money $amount = null)
    {
        $this
            ->setSurchargeType($surchargeType)
            ->setLevel($level)
            ->setDescription($description)
            ->setAmount($amount);
    }
    /**
     * Get SurchargeType value
     * @return string|null
     */
    public function getSurchargeType()
    {
        return $this->SurchargeType;
    }
    /**
     * Set SurchargeType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SurchargeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SurchargeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $surchargeType
     * @return \Drupal\commerce_fedex\FedEx\StructType\Surcharge
     */
    public function setSurchargeType($surchargeType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\SurchargeType::valueIsValid($surchargeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $surchargeType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\SurchargeType::getValidValues())), __LINE__);
        }
        $this->SurchargeType = $surchargeType;
        return $this;
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SurchargeLevelType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SurchargeLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $level
     * @return \Drupal\commerce_fedex\FedEx\StructType\Surcharge
     */
    public function setLevel($level = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\SurchargeLevelType::valueIsValid($level)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $level, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\SurchargeLevelType::getValidValues())), __LINE__);
        }
        $this->Level = $level;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Drupal\commerce_fedex\FedEx\StructType\Surcharge
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Amount value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $amount
     * @return \Drupal\commerce_fedex\FedEx\StructType\Surcharge
     */
    public function setAmount(\Drupal\commerce_fedex\FedEx\StructType\Money $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\Surcharge
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
