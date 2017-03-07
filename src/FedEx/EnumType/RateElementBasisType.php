<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RateElementBasisType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Selects the value from a set of rate data to which the percentage is applied.
 * @subpackage Enumerations
 */
class RateElementBasisType
{
    /**
     * Constant for value 'BASE_CHARGE'
     * @return string 'BASE_CHARGE'
     */
    const VALUE_BASE_CHARGE = 'BASE_CHARGE';
    /**
     * Constant for value 'NET_CHARGE'
     * @return string 'NET_CHARGE'
     */
    const VALUE_NET_CHARGE = 'NET_CHARGE';
    /**
     * Constant for value 'NET_CHARGE_EXCLUDING_TAXES'
     * @return string 'NET_CHARGE_EXCLUDING_TAXES'
     */
    const VALUE_NET_CHARGE_EXCLUDING_TAXES = 'NET_CHARGE_EXCLUDING_TAXES';
    /**
     * Constant for value 'NET_FREIGHT'
     * @return string 'NET_FREIGHT'
     */
    const VALUE_NET_FREIGHT = 'NET_FREIGHT';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_BASE_CHARGE
     * @uses self::VALUE_NET_CHARGE
     * @uses self::VALUE_NET_CHARGE_EXCLUDING_TAXES
     * @uses self::VALUE_NET_FREIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BASE_CHARGE,
            self::VALUE_NET_CHARGE,
            self::VALUE_NET_CHARGE_EXCLUDING_TAXES,
            self::VALUE_NET_FREIGHT,
        );
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
