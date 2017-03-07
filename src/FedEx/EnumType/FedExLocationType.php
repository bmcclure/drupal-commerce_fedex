<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for FedExLocationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a kind of FedEx facility.
 * @subpackage Enumerations
 */
class FedExLocationType
{
    /**
     * Constant for value 'FEDEX_EXPRESS_STATION'
     * @return string 'FEDEX_EXPRESS_STATION'
     */
    const VALUE_FEDEX_EXPRESS_STATION = 'FEDEX_EXPRESS_STATION';
    /**
     * Constant for value 'FEDEX_FACILITY'
     * @return string 'FEDEX_FACILITY'
     */
    const VALUE_FEDEX_FACILITY = 'FEDEX_FACILITY';
    /**
     * Constant for value 'FEDEX_FREIGHT_SERVICE_CENTER'
     * @return string 'FEDEX_FREIGHT_SERVICE_CENTER'
     */
    const VALUE_FEDEX_FREIGHT_SERVICE_CENTER = 'FEDEX_FREIGHT_SERVICE_CENTER';
    /**
     * Constant for value 'FEDEX_GROUND_TERMINAL'
     * @return string 'FEDEX_GROUND_TERMINAL'
     */
    const VALUE_FEDEX_GROUND_TERMINAL = 'FEDEX_GROUND_TERMINAL';
    /**
     * Constant for value 'FEDEX_HOME_DELIVERY_STATION'
     * @return string 'FEDEX_HOME_DELIVERY_STATION'
     */
    const VALUE_FEDEX_HOME_DELIVERY_STATION = 'FEDEX_HOME_DELIVERY_STATION';
    /**
     * Constant for value 'FEDEX_OFFICE'
     * @return string 'FEDEX_OFFICE'
     */
    const VALUE_FEDEX_OFFICE = 'FEDEX_OFFICE';
    /**
     * Constant for value 'FEDEX_SHIPSITE'
     * @return string 'FEDEX_SHIPSITE'
     */
    const VALUE_FEDEX_SHIPSITE = 'FEDEX_SHIPSITE';
    /**
     * Constant for value 'FEDEX_SMART_POST_HUB'
     * @return string 'FEDEX_SMART_POST_HUB'
     */
    const VALUE_FEDEX_SMART_POST_HUB = 'FEDEX_SMART_POST_HUB';
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
     * @uses self::VALUE_FEDEX_EXPRESS_STATION
     * @uses self::VALUE_FEDEX_FACILITY
     * @uses self::VALUE_FEDEX_FREIGHT_SERVICE_CENTER
     * @uses self::VALUE_FEDEX_GROUND_TERMINAL
     * @uses self::VALUE_FEDEX_HOME_DELIVERY_STATION
     * @uses self::VALUE_FEDEX_OFFICE
     * @uses self::VALUE_FEDEX_SHIPSITE
     * @uses self::VALUE_FEDEX_SMART_POST_HUB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_EXPRESS_STATION,
            self::VALUE_FEDEX_FACILITY,
            self::VALUE_FEDEX_FREIGHT_SERVICE_CENTER,
            self::VALUE_FEDEX_GROUND_TERMINAL,
            self::VALUE_FEDEX_HOME_DELIVERY_STATION,
            self::VALUE_FEDEX_OFFICE,
            self::VALUE_FEDEX_SHIPSITE,
            self::VALUE_FEDEX_SMART_POST_HUB,
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
