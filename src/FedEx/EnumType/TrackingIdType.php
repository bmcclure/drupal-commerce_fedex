<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackingIdType EnumType
 * @subpackage Enumerations
 */
class TrackingIdType
{
    /**
     * Constant for value 'EXPRESS'
     * @return string 'EXPRESS'
     */
    const VALUE_EXPRESS = 'EXPRESS';
    /**
     * Constant for value 'FEDEX'
     * @return string 'FEDEX'
     */
    const VALUE_FEDEX = 'FEDEX';
    /**
     * Constant for value 'GROUND'
     * @return string 'GROUND'
     */
    const VALUE_GROUND = 'GROUND';
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
     * @uses self::VALUE_EXPRESS
     * @uses self::VALUE_FEDEX
     * @uses self::VALUE_GROUND
     * @uses self::VALUE_USPS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXPRESS,
            self::VALUE_FEDEX,
            self::VALUE_GROUND,
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
