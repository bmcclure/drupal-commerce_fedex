<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tax StructType
 * @subpackage Structs
 */
class Tax extends AbstractStructBase
{
    /**
     * The TaxType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TaxType;
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
     * Constructor method for Tax
     * @uses Tax::setTaxType()
     * @uses Tax::setDescription()
     * @uses Tax::setAmount()
     * @param string $taxType
     * @param string $description
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $amount
     */
    public function __construct($taxType = null, $description = null, \Drupal\commerce_fedex\FedEx\StructType\Money $amount = null)
    {
        $this
            ->setTaxType($taxType)
            ->setDescription($description)
            ->setAmount($amount);
    }
    /**
     * Get TaxType value
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }
    /**
     * Set TaxType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TaxType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TaxType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $taxType
     * @return \Drupal\commerce_fedex\FedEx\StructType\Tax
     */
    public function setTaxType($taxType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\TaxType::valueIsValid($taxType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $taxType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\TaxType::getValidValues())), __LINE__);
        }
        $this->TaxType = $taxType;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Tax
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Tax
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Tax
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
