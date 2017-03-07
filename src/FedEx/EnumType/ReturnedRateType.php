<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ReturnedRateType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The "PAYOR..." rates are expressed in the currency identified in the payor's rate table(s). The "RATED..." rates are expressed in the currency of the origin country. Former "...COUNTER..." values have become "...RETAIL..." values,
 * except for PAYOR_COUNTER and RATED_COUNTER, which have been removed.
 * @subpackage Enumerations
 */
class ReturnedRateType
{
    /**
     * Constant for value 'PAYOR_ACCOUNT_PACKAGE'
     * @return string 'PAYOR_ACCOUNT_PACKAGE'
     */
    const VALUE_PAYOR_ACCOUNT_PACKAGE = 'PAYOR_ACCOUNT_PACKAGE';
    /**
     * Constant for value 'PAYOR_ACCOUNT_SHIPMENT'
     * @return string 'PAYOR_ACCOUNT_SHIPMENT'
     */
    const VALUE_PAYOR_ACCOUNT_SHIPMENT = 'PAYOR_ACCOUNT_SHIPMENT';
    /**
     * Constant for value 'PAYOR_LIST_PACKAGE'
     * @return string 'PAYOR_LIST_PACKAGE'
     */
    const VALUE_PAYOR_LIST_PACKAGE = 'PAYOR_LIST_PACKAGE';
    /**
     * Constant for value 'PAYOR_LIST_SHIPMENT'
     * @return string 'PAYOR_LIST_SHIPMENT'
     */
    const VALUE_PAYOR_LIST_SHIPMENT = 'PAYOR_LIST_SHIPMENT';
    /**
     * Constant for value 'PREFERRED_ACCOUNT_PACKAGE'
     * @return string 'PREFERRED_ACCOUNT_PACKAGE'
     */
    const VALUE_PREFERRED_ACCOUNT_PACKAGE = 'PREFERRED_ACCOUNT_PACKAGE';
    /**
     * Constant for value 'PREFERRED_ACCOUNT_SHIPMENT'
     * @return string 'PREFERRED_ACCOUNT_SHIPMENT'
     */
    const VALUE_PREFERRED_ACCOUNT_SHIPMENT = 'PREFERRED_ACCOUNT_SHIPMENT';
    /**
     * Constant for value 'PREFERRED_LIST_PACKAGE'
     * @return string 'PREFERRED_LIST_PACKAGE'
     */
    const VALUE_PREFERRED_LIST_PACKAGE = 'PREFERRED_LIST_PACKAGE';
    /**
     * Constant for value 'PREFERRED_LIST_SHIPMENT'
     * @return string 'PREFERRED_LIST_SHIPMENT'
     */
    const VALUE_PREFERRED_LIST_SHIPMENT = 'PREFERRED_LIST_SHIPMENT';
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
     * @uses self::VALUE_PAYOR_ACCOUNT_PACKAGE
     * @uses self::VALUE_PAYOR_ACCOUNT_SHIPMENT
     * @uses self::VALUE_PAYOR_LIST_PACKAGE
     * @uses self::VALUE_PAYOR_LIST_SHIPMENT
     * @uses self::VALUE_PREFERRED_ACCOUNT_PACKAGE
     * @uses self::VALUE_PREFERRED_ACCOUNT_SHIPMENT
     * @uses self::VALUE_PREFERRED_LIST_PACKAGE
     * @uses self::VALUE_PREFERRED_LIST_SHIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAYOR_ACCOUNT_PACKAGE,
            self::VALUE_PAYOR_ACCOUNT_SHIPMENT,
            self::VALUE_PAYOR_LIST_PACKAGE,
            self::VALUE_PAYOR_LIST_SHIPMENT,
            self::VALUE_PREFERRED_ACCOUNT_PACKAGE,
            self::VALUE_PREFERRED_ACCOUNT_SHIPMENT,
            self::VALUE_PREFERRED_LIST_PACKAGE,
            self::VALUE_PREFERRED_LIST_SHIPMENT,
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
