<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateDiscount StructType
 * @subpackage Structs
 */
class RateDiscount extends AbstractStructBase
{
    /**
     * The RateDiscountType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RateDiscountType;
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
     * The Percent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Percent;
    /**
     * Constructor method for RateDiscount
     * @uses RateDiscount::setRateDiscountType()
     * @uses RateDiscount::setDescription()
     * @uses RateDiscount::setAmount()
     * @uses RateDiscount::setPercent()
     * @param string $rateDiscountType
     * @param string $description
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $amount
     * @param float $percent
     */
    public function __construct($rateDiscountType = null, $description = null, \Drupal\commerce_fedex\FedEx\StructType\Money $amount = null, $percent = null)
    {
        $this
            ->setRateDiscountType($rateDiscountType)
            ->setDescription($description)
            ->setAmount($amount)
            ->setPercent($percent);
    }
    /**
     * Get RateDiscountType value
     * @return string|null
     */
    public function getRateDiscountType()
    {
        return $this->RateDiscountType;
    }
    /**
     * Set RateDiscountType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RateDiscountType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RateDiscountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $rateDiscountType
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateDiscount
     */
    public function setRateDiscountType($rateDiscountType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\RateDiscountType::valueIsValid($rateDiscountType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rateDiscountType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\RateDiscountType::getValidValues())), __LINE__);
        }
        $this->RateDiscountType = $rateDiscountType;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateDiscount
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateDiscount
     */
    public function setAmount(\Drupal\commerce_fedex\FedEx\StructType\Money $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateDiscount
     */
    public function setPercent($percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateDiscount
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
