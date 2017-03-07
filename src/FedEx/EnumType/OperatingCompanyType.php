<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for OperatingCompanyType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identification for a FedEx operating company (transportation and non-transportation).
 * @subpackage Enumerations
 */
class OperatingCompanyType
{
    /**
     * Constant for value 'FEDEX_CARGO'
     * @return string 'FEDEX_CARGO'
     */
    const VALUE_FEDEX_CARGO = 'FEDEX_CARGO';
    /**
     * Constant for value 'FEDEX_CORPORATE_SERVICES'
     * @return string 'FEDEX_CORPORATE_SERVICES'
     */
    const VALUE_FEDEX_CORPORATE_SERVICES = 'FEDEX_CORPORATE_SERVICES';
    /**
     * Constant for value 'FEDEX_CORPORATION'
     * @return string 'FEDEX_CORPORATION'
     */
    const VALUE_FEDEX_CORPORATION = 'FEDEX_CORPORATION';
    /**
     * Constant for value 'FEDEX_CUSTOMER_INFORMATION_SYSTEMS'
     * @return string 'FEDEX_CUSTOMER_INFORMATION_SYSTEMS'
     */
    const VALUE_FEDEX_CUSTOMER_INFORMATION_SYSTEMS = 'FEDEX_CUSTOMER_INFORMATION_SYSTEMS';
    /**
     * Constant for value 'FEDEX_CUSTOM_CRITICAL'
     * @return string 'FEDEX_CUSTOM_CRITICAL'
     */
    const VALUE_FEDEX_CUSTOM_CRITICAL = 'FEDEX_CUSTOM_CRITICAL';
    /**
     * Constant for value 'FEDEX_EXPRESS'
     * @return string 'FEDEX_EXPRESS'
     */
    const VALUE_FEDEX_EXPRESS = 'FEDEX_EXPRESS';
    /**
     * Constant for value 'FEDEX_FREIGHT'
     * @return string 'FEDEX_FREIGHT'
     */
    const VALUE_FEDEX_FREIGHT = 'FEDEX_FREIGHT';
    /**
     * Constant for value 'FEDEX_GROUND'
     * @return string 'FEDEX_GROUND'
     */
    const VALUE_FEDEX_GROUND = 'FEDEX_GROUND';
    /**
     * Constant for value 'FEDEX_KINKOS'
     * @return string 'FEDEX_KINKOS'
     */
    const VALUE_FEDEX_KINKOS = 'FEDEX_KINKOS';
    /**
     * Constant for value 'FEDEX_OFFICE'
     * @return string 'FEDEX_OFFICE'
     */
    const VALUE_FEDEX_OFFICE = 'FEDEX_OFFICE';
    /**
     * Constant for value 'FEDEX_SERVICES'
     * @return string 'FEDEX_SERVICES'
     */
    const VALUE_FEDEX_SERVICES = 'FEDEX_SERVICES';
    /**
     * Constant for value 'FEDEX_TRADE_NETWORKS'
     * @return string 'FEDEX_TRADE_NETWORKS'
     */
    const VALUE_FEDEX_TRADE_NETWORKS = 'FEDEX_TRADE_NETWORKS';
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
     * @uses self::VALUE_FEDEX_CARGO
     * @uses self::VALUE_FEDEX_CORPORATE_SERVICES
     * @uses self::VALUE_FEDEX_CORPORATION
     * @uses self::VALUE_FEDEX_CUSTOMER_INFORMATION_SYSTEMS
     * @uses self::VALUE_FEDEX_CUSTOM_CRITICAL
     * @uses self::VALUE_FEDEX_EXPRESS
     * @uses self::VALUE_FEDEX_FREIGHT
     * @uses self::VALUE_FEDEX_GROUND
     * @uses self::VALUE_FEDEX_KINKOS
     * @uses self::VALUE_FEDEX_OFFICE
     * @uses self::VALUE_FEDEX_SERVICES
     * @uses self::VALUE_FEDEX_TRADE_NETWORKS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_CARGO,
            self::VALUE_FEDEX_CORPORATE_SERVICES,
            self::VALUE_FEDEX_CORPORATION,
            self::VALUE_FEDEX_CUSTOMER_INFORMATION_SYSTEMS,
            self::VALUE_FEDEX_CUSTOM_CRITICAL,
            self::VALUE_FEDEX_EXPRESS,
            self::VALUE_FEDEX_FREIGHT,
            self::VALUE_FEDEX_GROUND,
            self::VALUE_FEDEX_KINKOS,
            self::VALUE_FEDEX_OFFICE,
            self::VALUE_FEDEX_SERVICES,
            self::VALUE_FEDEX_TRADE_NETWORKS,
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
