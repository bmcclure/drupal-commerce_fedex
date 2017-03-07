<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for SecondaryBarcodeType EnumType
 * @subpackage Enumerations
 */
class SecondaryBarcodeType
{
    /**
     * Constant for value 'COMMON_2D'
     * @return string 'COMMON_2D'
     */
    const VALUE_COMMON_2_D = 'COMMON_2D';
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const VALUE_NONE = 'NONE';
    /**
     * Constant for value 'SSCC_18'
     * @return string 'SSCC_18'
     */
    const VALUE_SSCC_18 = 'SSCC_18';
    /**
     * Constant for value 'USPS'
     * @return string 'USPS'
     */
    const VALUE_USPS = 'USPS';
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
     * @uses self::VALUE_COMMON_2_D
     * @uses self::VALUE_NONE
     * @uses self::VALUE_SSCC_18
     * @uses self::VALUE_USPS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMMON_2_D,
            self::VALUE_NONE,
            self::VALUE_SSCC_18,
            self::VALUE_USPS,
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
