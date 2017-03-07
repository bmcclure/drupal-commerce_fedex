<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ArrivalLocationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies where a tracking event occurs.
 * @subpackage Enumerations
 */
class ArrivalLocationType
{
    /**
     * Constant for value 'AIRPORT'
     * @return string 'AIRPORT'
     */
    const VALUE_AIRPORT = 'AIRPORT';
    /**
     * Constant for value 'CUSTOMER'
     * @return string 'CUSTOMER'
     */
    const VALUE_CUSTOMER = 'CUSTOMER';
    /**
     * Constant for value 'CUSTOMS_BROKER'
     * @return string 'CUSTOMS_BROKER'
     */
    const VALUE_CUSTOMS_BROKER = 'CUSTOMS_BROKER';
    /**
     * Constant for value 'DELIVERY_LOCATION'
     * @return string 'DELIVERY_LOCATION'
     */
    const VALUE_DELIVERY_LOCATION = 'DELIVERY_LOCATION';
    /**
     * Constant for value 'DESTINATION_AIRPORT'
     * @return string 'DESTINATION_AIRPORT'
     */
    const VALUE_DESTINATION_AIRPORT = 'DESTINATION_AIRPORT';
    /**
     * Constant for value 'DESTINATION_FEDEX_FACILITY'
     * @return string 'DESTINATION_FEDEX_FACILITY'
     */
    const VALUE_DESTINATION_FEDEX_FACILITY = 'DESTINATION_FEDEX_FACILITY';
    /**
     * Constant for value 'DROP_BOX'
     * @return string 'DROP_BOX'
     */
    const VALUE_DROP_BOX = 'DROP_BOX';
    /**
     * Constant for value 'ENROUTE'
     * @return string 'ENROUTE'
     */
    const VALUE_ENROUTE = 'ENROUTE';
    /**
     * Constant for value 'FEDEX_FACILITY'
     * @return string 'FEDEX_FACILITY'
     */
    const VALUE_FEDEX_FACILITY = 'FEDEX_FACILITY';
    /**
     * Constant for value 'FEDEX_OFFICE_LOCATION'
     * @return string 'FEDEX_OFFICE_LOCATION'
     */
    const VALUE_FEDEX_OFFICE_LOCATION = 'FEDEX_OFFICE_LOCATION';
    /**
     * Constant for value 'INTERLINE_CARRIER'
     * @return string 'INTERLINE_CARRIER'
     */
    const VALUE_INTERLINE_CARRIER = 'INTERLINE_CARRIER';
    /**
     * Constant for value 'NON_FEDEX_FACILITY'
     * @return string 'NON_FEDEX_FACILITY'
     */
    const VALUE_NON_FEDEX_FACILITY = 'NON_FEDEX_FACILITY';
    /**
     * Constant for value 'ORIGIN_AIRPORT'
     * @return string 'ORIGIN_AIRPORT'
     */
    const VALUE_ORIGIN_AIRPORT = 'ORIGIN_AIRPORT';
    /**
     * Constant for value 'ORIGIN_FEDEX_FACILITY'
     * @return string 'ORIGIN_FEDEX_FACILITY'
     */
    const VALUE_ORIGIN_FEDEX_FACILITY = 'ORIGIN_FEDEX_FACILITY';
    /**
     * Constant for value 'PICKUP_LOCATION'
     * @return string 'PICKUP_LOCATION'
     */
    const VALUE_PICKUP_LOCATION = 'PICKUP_LOCATION';
    /**
     * Constant for value 'PLANE'
     * @return string 'PLANE'
     */
    const VALUE_PLANE = 'PLANE';
    /**
     * Constant for value 'PORT_OF_ENTRY'
     * @return string 'PORT_OF_ENTRY'
     */
    const VALUE_PORT_OF_ENTRY = 'PORT_OF_ENTRY';
    /**
     * Constant for value 'SHIP_AND_GET_LOCATION'
     * @return string 'SHIP_AND_GET_LOCATION'
     */
    const VALUE_SHIP_AND_GET_LOCATION = 'SHIP_AND_GET_LOCATION';
    /**
     * Constant for value 'SORT_FACILITY'
     * @return string 'SORT_FACILITY'
     */
    const VALUE_SORT_FACILITY = 'SORT_FACILITY';
    /**
     * Constant for value 'TURNPOINT'
     * @return string 'TURNPOINT'
     */
    const VALUE_TURNPOINT = 'TURNPOINT';
    /**
     * Constant for value 'VEHICLE'
     * @return string 'VEHICLE'
     */
    const VALUE_VEHICLE = 'VEHICLE';
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
     * @uses self::VALUE_AIRPORT
     * @uses self::VALUE_CUSTOMER
     * @uses self::VALUE_CUSTOMS_BROKER
     * @uses self::VALUE_DELIVERY_LOCATION
     * @uses self::VALUE_DESTINATION_AIRPORT
     * @uses self::VALUE_DESTINATION_FEDEX_FACILITY
     * @uses self::VALUE_DROP_BOX
     * @uses self::VALUE_ENROUTE
     * @uses self::VALUE_FEDEX_FACILITY
     * @uses self::VALUE_FEDEX_OFFICE_LOCATION
     * @uses self::VALUE_INTERLINE_CARRIER
     * @uses self::VALUE_NON_FEDEX_FACILITY
     * @uses self::VALUE_ORIGIN_AIRPORT
     * @uses self::VALUE_ORIGIN_FEDEX_FACILITY
     * @uses self::VALUE_PICKUP_LOCATION
     * @uses self::VALUE_PLANE
     * @uses self::VALUE_PORT_OF_ENTRY
     * @uses self::VALUE_SHIP_AND_GET_LOCATION
     * @uses self::VALUE_SORT_FACILITY
     * @uses self::VALUE_TURNPOINT
     * @uses self::VALUE_VEHICLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AIRPORT,
            self::VALUE_CUSTOMER,
            self::VALUE_CUSTOMS_BROKER,
            self::VALUE_DELIVERY_LOCATION,
            self::VALUE_DESTINATION_AIRPORT,
            self::VALUE_DESTINATION_FEDEX_FACILITY,
            self::VALUE_DROP_BOX,
            self::VALUE_ENROUTE,
            self::VALUE_FEDEX_FACILITY,
            self::VALUE_FEDEX_OFFICE_LOCATION,
            self::VALUE_INTERLINE_CARRIER,
            self::VALUE_NON_FEDEX_FACILITY,
            self::VALUE_ORIGIN_AIRPORT,
            self::VALUE_ORIGIN_FEDEX_FACILITY,
            self::VALUE_PICKUP_LOCATION,
            self::VALUE_PLANE,
            self::VALUE_PORT_OF_ENTRY,
            self::VALUE_SHIP_AND_GET_LOCATION,
            self::VALUE_SORT_FACILITY,
            self::VALUE_TURNPOINT,
            self::VALUE_VEHICLE,
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
