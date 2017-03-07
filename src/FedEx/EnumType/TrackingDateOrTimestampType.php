<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackingDateOrTimestampType EnumType
 * @subpackage Enumerations
 */
class TrackingDateOrTimestampType
{
    /**
     * Constant for value 'ACTUAL_DELIVERY'
     * @return string 'ACTUAL_DELIVERY'
     */
    const VALUE_ACTUAL_DELIVERY = 'ACTUAL_DELIVERY';
    /**
     * Constant for value 'ACTUAL_PICKUP'
     * @return string 'ACTUAL_PICKUP'
     */
    const VALUE_ACTUAL_PICKUP = 'ACTUAL_PICKUP';
    /**
     * Constant for value 'ACTUAL_TENDER'
     * @return string 'ACTUAL_TENDER'
     */
    const VALUE_ACTUAL_TENDER = 'ACTUAL_TENDER';
    /**
     * Constant for value 'ANTICIPATED_TENDER'
     * @return string 'ANTICIPATED_TENDER'
     */
    const VALUE_ANTICIPATED_TENDER = 'ANTICIPATED_TENDER';
    /**
     * Constant for value 'APPOINTMENT_DELIVERY'
     * @return string 'APPOINTMENT_DELIVERY'
     */
    const VALUE_APPOINTMENT_DELIVERY = 'APPOINTMENT_DELIVERY';
    /**
     * Constant for value 'ESTIMATED_DELIVERY'
     * @return string 'ESTIMATED_DELIVERY'
     */
    const VALUE_ESTIMATED_DELIVERY = 'ESTIMATED_DELIVERY';
    /**
     * Constant for value 'ESTIMATED_PICKUP'
     * @return string 'ESTIMATED_PICKUP'
     */
    const VALUE_ESTIMATED_PICKUP = 'ESTIMATED_PICKUP';
    /**
     * Constant for value 'SHIP'
     * @return string 'SHIP'
     */
    const VALUE_SHIP = 'SHIP';
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
     * @uses self::VALUE_ACTUAL_DELIVERY
     * @uses self::VALUE_ACTUAL_PICKUP
     * @uses self::VALUE_ACTUAL_TENDER
     * @uses self::VALUE_ANTICIPATED_TENDER
     * @uses self::VALUE_APPOINTMENT_DELIVERY
     * @uses self::VALUE_ESTIMATED_DELIVERY
     * @uses self::VALUE_ESTIMATED_PICKUP
     * @uses self::VALUE_SHIP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTUAL_DELIVERY,
            self::VALUE_ACTUAL_PICKUP,
            self::VALUE_ACTUAL_TENDER,
            self::VALUE_ANTICIPATED_TENDER,
            self::VALUE_APPOINTMENT_DELIVERY,
            self::VALUE_ESTIMATED_DELIVERY,
            self::VALUE_ESTIMATED_PICKUP,
            self::VALUE_SHIP,
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
