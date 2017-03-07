<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Money StructType
 * @subpackage Structs
 */
class Money extends AbstractStructBase
{
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Amount;
    /**
     * Constructor method for Money
     * @uses Money::setCurrency()
     * @uses Money::setAmount()
     * @param string $currency
     * @param float $amount
     */
    public function __construct($currency = null, $amount = null)
    {
        $this
            ->setCurrency($currency)
            ->setAmount($amount);
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public function setAmount($amount = null)
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money
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
