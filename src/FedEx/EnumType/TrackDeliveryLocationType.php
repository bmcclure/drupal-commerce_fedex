<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackDeliveryLocationType EnumType
 * @subpackage Enumerations
 */
class TrackDeliveryLocationType
{
    /**
     * Constant for value 'APARTMENT_OFFICE'
     * @return string 'APARTMENT_OFFICE'
     */
    const VALUE_APARTMENT_OFFICE = 'APARTMENT_OFFICE';
    /**
     * Constant for value 'FEDEX_LOCATION'
     * @return string 'FEDEX_LOCATION'
     */
    const VALUE_FEDEX_LOCATION = 'FEDEX_LOCATION';
    /**
     * Constant for value 'GATE_HOUSE'
     * @return string 'GATE_HOUSE'
     */
    const VALUE_GATE_HOUSE = 'GATE_HOUSE';
    /**
     * Constant for value 'GUARD_OR_SECURITY_STATION'
     * @return string 'GUARD_OR_SECURITY_STATION'
     */
    const VALUE_GUARD_OR_SECURITY_STATION = 'GUARD_OR_SECURITY_STATION';
    /**
     * Constant for value 'IN_BOND_OR_CAGE'
     * @return string 'IN_BOND_OR_CAGE'
     */
    const VALUE_IN_BOND_OR_CAGE = 'IN_BOND_OR_CAGE';
    /**
     * Constant for value 'LEASING_OFFICE'
     * @return string 'LEASING_OFFICE'
     */
    const VALUE_LEASING_OFFICE = 'LEASING_OFFICE';
    /**
     * Constant for value 'MAILROOM'
     * @return string 'MAILROOM'
     */
    const VALUE_MAILROOM = 'MAILROOM';
    /**
     * Constant for value 'MAIN_OFFICE'
     * @return string 'MAIN_OFFICE'
     */
    const VALUE_MAIN_OFFICE = 'MAIN_OFFICE';
    /**
     * Constant for value 'MANAGER_OFFICE'
     * @return string 'MANAGER_OFFICE'
     */
    const VALUE_MANAGER_OFFICE = 'MANAGER_OFFICE';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'PHARMACY'
     * @return string 'PHARMACY'
     */
    const VALUE_PHARMACY = 'PHARMACY';
    /**
     * Constant for value 'RECEPTIONIST_OR_FRONT_DESK'
     * @return string 'RECEPTIONIST_OR_FRONT_DESK'
     */
    const VALUE_RECEPTIONIST_OR_FRONT_DESK = 'RECEPTIONIST_OR_FRONT_DESK';
    /**
     * Constant for value 'RENTAL_OFFICE'
     * @return string 'RENTAL_OFFICE'
     */
    const VALUE_RENTAL_OFFICE = 'RENTAL_OFFICE';
    /**
     * Constant for value 'RESIDENCE'
     * @return string 'RESIDENCE'
     */
    const VALUE_RESIDENCE = 'RESIDENCE';
    /**
     * Constant for value 'SHIPPING_RECEIVING'
     * @return string 'SHIPPING_RECEIVING'
     */
    const VALUE_SHIPPING_RECEIVING = 'SHIPPING_RECEIVING';
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
     * @uses self::VALUE_APARTMENT_OFFICE
     * @uses self::VALUE_FEDEX_LOCATION
     * @uses self::VALUE_GATE_HOUSE
     * @uses self::VALUE_GUARD_OR_SECURITY_STATION
     * @uses self::VALUE_IN_BOND_OR_CAGE
     * @uses self::VALUE_LEASING_OFFICE
     * @uses self::VALUE_MAILROOM
     * @uses self::VALUE_MAIN_OFFICE
     * @uses self::VALUE_MANAGER_OFFICE
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PHARMACY
     * @uses self::VALUE_RECEPTIONIST_OR_FRONT_DESK
     * @uses self::VALUE_RENTAL_OFFICE
     * @uses self::VALUE_RESIDENCE
     * @uses self::VALUE_SHIPPING_RECEIVING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APARTMENT_OFFICE,
            self::VALUE_FEDEX_LOCATION,
            self::VALUE_GATE_HOUSE,
            self::VALUE_GUARD_OR_SECURITY_STATION,
            self::VALUE_IN_BOND_OR_CAGE,
            self::VALUE_LEASING_OFFICE,
            self::VALUE_MAILROOM,
            self::VALUE_MAIN_OFFICE,
            self::VALUE_MANAGER_OFFICE,
            self::VALUE_OTHER,
            self::VALUE_PHARMACY,
            self::VALUE_RECEPTIONIST_OR_FRONT_DESK,
            self::VALUE_RENTAL_OFFICE,
            self::VALUE_RESIDENCE,
            self::VALUE_SHIPPING_RECEIVING,
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
