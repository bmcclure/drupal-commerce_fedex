<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PricingCodeType EnumType
 * @subpackage Enumerations
 */
class PricingCodeType
{
    /**
     * Constant for value 'ACTUAL'
     * @return string 'ACTUAL'
     */
    const VALUE_ACTUAL = 'ACTUAL';
    /**
     * Constant for value 'ALTERNATE'
     * @return string 'ALTERNATE'
     */
    const VALUE_ALTERNATE = 'ALTERNATE';
    /**
     * Constant for value 'BASE'
     * @return string 'BASE'
     */
    const VALUE_BASE = 'BASE';
    /**
     * Constant for value 'HUNDREDWEIGHT'
     * @return string 'HUNDREDWEIGHT'
     */
    const VALUE_HUNDREDWEIGHT = 'HUNDREDWEIGHT';
    /**
     * Constant for value 'HUNDREDWEIGHT_ALTERNATE'
     * @return string 'HUNDREDWEIGHT_ALTERNATE'
     */
    const VALUE_HUNDREDWEIGHT_ALTERNATE = 'HUNDREDWEIGHT_ALTERNATE';
    /**
     * Constant for value 'INTERNATIONAL_DISTRIBUTION'
     * @return string 'INTERNATIONAL_DISTRIBUTION'
     */
    const VALUE_INTERNATIONAL_DISTRIBUTION = 'INTERNATIONAL_DISTRIBUTION';
    /**
     * Constant for value 'INTERNATIONAL_ECONOMY_SERVICE'
     * @return string 'INTERNATIONAL_ECONOMY_SERVICE'
     */
    const VALUE_INTERNATIONAL_ECONOMY_SERVICE = 'INTERNATIONAL_ECONOMY_SERVICE';
    /**
     * Constant for value 'LTL_FREIGHT'
     * @return string 'LTL_FREIGHT'
     */
    const VALUE_LTL_FREIGHT = 'LTL_FREIGHT';
    /**
     * Constant for value 'PACKAGE'
     * @return string 'PACKAGE'
     */
    const VALUE_PACKAGE = 'PACKAGE';
    /**
     * Constant for value 'SHIPMENT'
     * @return string 'SHIPMENT'
     */
    const VALUE_SHIPMENT = 'SHIPMENT';
    /**
     * Constant for value 'SHIPMENT_FIVE_POUND_OPTIONAL'
     * @return string 'SHIPMENT_FIVE_POUND_OPTIONAL'
     */
    const VALUE_SHIPMENT_FIVE_POUND_OPTIONAL = 'SHIPMENT_FIVE_POUND_OPTIONAL';
    /**
     * Constant for value 'SHIPMENT_OPTIONAL'
     * @return string 'SHIPMENT_OPTIONAL'
     */
    const VALUE_SHIPMENT_OPTIONAL = 'SHIPMENT_OPTIONAL';
    /**
     * Constant for value 'SPECIAL'
     * @return string 'SPECIAL'
     */
    const VALUE_SPECIAL = 'SPECIAL';
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
     * @uses self::VALUE_ACTUAL
     * @uses self::VALUE_ALTERNATE
     * @uses self::VALUE_BASE
     * @uses self::VALUE_HUNDREDWEIGHT
     * @uses self::VALUE_HUNDREDWEIGHT_ALTERNATE
     * @uses self::VALUE_INTERNATIONAL_DISTRIBUTION
     * @uses self::VALUE_INTERNATIONAL_ECONOMY_SERVICE
     * @uses self::VALUE_LTL_FREIGHT
     * @uses self::VALUE_PACKAGE
     * @uses self::VALUE_SHIPMENT
     * @uses self::VALUE_SHIPMENT_FIVE_POUND_OPTIONAL
     * @uses self::VALUE_SHIPMENT_OPTIONAL
     * @uses self::VALUE_SPECIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTUAL,
            self::VALUE_ALTERNATE,
            self::VALUE_BASE,
            self::VALUE_HUNDREDWEIGHT,
            self::VALUE_HUNDREDWEIGHT_ALTERNATE,
            self::VALUE_INTERNATIONAL_DISTRIBUTION,
            self::VALUE_INTERNATIONAL_ECONOMY_SERVICE,
            self::VALUE_LTL_FREIGHT,
            self::VALUE_PACKAGE,
            self::VALUE_SHIPMENT,
            self::VALUE_SHIPMENT_FIVE_POUND_OPTIONAL,
            self::VALUE_SHIPMENT_OPTIONAL,
            self::VALUE_SPECIAL,
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
