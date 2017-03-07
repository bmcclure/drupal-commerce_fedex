<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for DropoffType EnumType
 * @subpackage Enumerations
 */
class DropoffType
{
    /**
     * Constant for value 'BUSINESS_SERVICE_CENTER'
     * @return string 'BUSINESS_SERVICE_CENTER'
     */
    const VALUE_BUSINESS_SERVICE_CENTER = 'BUSINESS_SERVICE_CENTER';
    /**
     * Constant for value 'DROP_BOX'
     * @return string 'DROP_BOX'
     */
    const VALUE_DROP_BOX = 'DROP_BOX';
    /**
     * Constant for value 'REGULAR_PICKUP'
     * @return string 'REGULAR_PICKUP'
     */
    const VALUE_REGULAR_PICKUP = 'REGULAR_PICKUP';
    /**
     * Constant for value 'REQUEST_COURIER'
     * @return string 'REQUEST_COURIER'
     */
    const VALUE_REQUEST_COURIER = 'REQUEST_COURIER';
    /**
     * Constant for value 'STATION'
     * @return string 'STATION'
     */
    const VALUE_STATION = 'STATION';
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
     * @uses self::VALUE_BUSINESS_SERVICE_CENTER
     * @uses self::VALUE_DROP_BOX
     * @uses self::VALUE_REGULAR_PICKUP
     * @uses self::VALUE_REQUEST_COURIER
     * @uses self::VALUE_STATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUSINESS_SERVICE_CENTER,
            self::VALUE_DROP_BOX,
            self::VALUE_REGULAR_PICKUP,
            self::VALUE_REQUEST_COURIER,
            self::VALUE_STATION,
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
