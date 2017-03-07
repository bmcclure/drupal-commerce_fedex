<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyExchangeRate StructType
 * @subpackage Structs
 */
class CurrencyExchangeRate extends AbstractStructBase
{
    /**
     * The FromCurrency
     * Meta informations extracted from the WSDL
     * - documentation: The currency code for the original (converted FROM) currency.
     * - minOccurs: 0
     * @var string
     */
    public $FromCurrency;
    /**
     * The IntoCurrency
     * Meta informations extracted from the WSDL
     * - documentation: The currency code for the final (converted INTO) currency.
     * - minOccurs: 0
     * @var string
     */
    public $IntoCurrency;
    /**
     * The Rate
     * Meta informations extracted from the WSDL
     * - documentation: Multiplier used to convert fromCurrency units to intoCurrency units.
     * - minOccurs: 0
     * @var float
     */
    public $Rate;
    /**
     * Constructor method for CurrencyExchangeRate
     * @uses CurrencyExchangeRate::setFromCurrency()
     * @uses CurrencyExchangeRate::setIntoCurrency()
     * @uses CurrencyExchangeRate::setRate()
     * @param string $fromCurrency
     * @param string $intoCurrency
     * @param float $rate
     */
    public function __construct($fromCurrency = null, $intoCurrency = null, $rate = null)
    {
        $this
            ->setFromCurrency($fromCurrency)
            ->setIntoCurrency($intoCurrency)
            ->setRate($rate);
    }
    /**
     * Get FromCurrency value
     * @return string|null
     */
    public function getFromCurrency()
    {
        return $this->FromCurrency;
    }
    /**
     * Set FromCurrency value
     * @param string $fromCurrency
     * @return \Drupal\commerce_fedex\FedEx\StructType\CurrencyExchangeRate
     */
    public function setFromCurrency($fromCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($fromCurrency) && !is_string($fromCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromCurrency)), __LINE__);
        }
        $this->FromCurrency = $fromCurrency;
        return $this;
    }
    /**
     * Get IntoCurrency value
     * @return string|null
     */
    public function getIntoCurrency()
    {
        return $this->IntoCurrency;
    }
    /**
     * Set IntoCurrency value
     * @param string $intoCurrency
     * @return \Drupal\commerce_fedex\FedEx\StructType\CurrencyExchangeRate
     */
    public function setIntoCurrency($intoCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($intoCurrency) && !is_string($intoCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($intoCurrency)), __LINE__);
        }
        $this->IntoCurrency = $intoCurrency;
        return $this;
    }
    /**
     * Get Rate value
     * @return float|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @param float $rate
     * @return \Drupal\commerce_fedex\FedEx\StructType\CurrencyExchangeRate
     */
    public function setRate($rate = null)
    {
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CurrencyExchangeRate
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
