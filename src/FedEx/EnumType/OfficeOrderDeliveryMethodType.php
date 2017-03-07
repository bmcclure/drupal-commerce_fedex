<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for OfficeOrderDeliveryMethodType EnumType
 * @subpackage Enumerations
 */
class OfficeOrderDeliveryMethodType
{
    /**
     * Constant for value 'COURIER'
     * @return string 'COURIER'
     */
    const VALUE_COURIER = 'COURIER';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'PICKUP'
     * @return string 'PICKUP'
     */
    const VALUE_PICKUP = 'PICKUP';
    /**
     * Constant for value 'SHIPMENT'
     * @return string 'SHIPMENT'
     */
    const VALUE_SHIPMENT = 'SHIPMENT';
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
     * @uses self::VALUE_COURIER
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PICKUP
     * @uses self::VALUE_SHIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COURIER,
            self::VALUE_OTHER,
            self::VALUE_PICKUP,
            self::VALUE_SHIPMENT,
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
