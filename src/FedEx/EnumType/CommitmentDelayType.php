<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CommitmentDelayType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The type of delay this shipment will encounter.
 * @subpackage Enumerations
 */
class CommitmentDelayType
{
    /**
     * Constant for value 'HOLIDAY'
     * @return string 'HOLIDAY'
     */
    const VALUE_HOLIDAY = 'HOLIDAY';
    /**
     * Constant for value 'NON_WORKDAY'
     * @return string 'NON_WORKDAY'
     */
    const VALUE_NON_WORKDAY = 'NON_WORKDAY';
    /**
     * Constant for value 'NO_CITY_DELIVERY'
     * @return string 'NO_CITY_DELIVERY'
     */
    const VALUE_NO_CITY_DELIVERY = 'NO_CITY_DELIVERY';
    /**
     * Constant for value 'NO_HOLD_AT_LOCATION'
     * @return string 'NO_HOLD_AT_LOCATION'
     */
    const VALUE_NO_HOLD_AT_LOCATION = 'NO_HOLD_AT_LOCATION';
    /**
     * Constant for value 'NO_LOCATION_DELIVERY'
     * @return string 'NO_LOCATION_DELIVERY'
     */
    const VALUE_NO_LOCATION_DELIVERY = 'NO_LOCATION_DELIVERY';
    /**
     * Constant for value 'NO_SERVICE_AREA_DELIVERY'
     * @return string 'NO_SERVICE_AREA_DELIVERY'
     */
    const VALUE_NO_SERVICE_AREA_DELIVERY = 'NO_SERVICE_AREA_DELIVERY';
    /**
     * Constant for value 'NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY'
     * @return string 'NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY'
     */
    const VALUE_NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY = 'NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY';
    /**
     * Constant for value 'NO_SPECIAL_SERVICE_DELIVERY'
     * @return string 'NO_SPECIAL_SERVICE_DELIVERY'
     */
    const VALUE_NO_SPECIAL_SERVICE_DELIVERY = 'NO_SPECIAL_SERVICE_DELIVERY';
    /**
     * Constant for value 'NO_ZIP_DELIVERY'
     * @return string 'NO_ZIP_DELIVERY'
     */
    const VALUE_NO_ZIP_DELIVERY = 'NO_ZIP_DELIVERY';
    /**
     * Constant for value 'WEEKEND'
     * @return string 'WEEKEND'
     */
    const VALUE_WEEKEND = 'WEEKEND';
    /**
     * Constant for value 'WEEKEND_SPECIAL'
     * @return string 'WEEKEND_SPECIAL'
     */
    const VALUE_WEEKEND_SPECIAL = 'WEEKEND_SPECIAL';
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
     * @uses self::VALUE_HOLIDAY
     * @uses self::VALUE_NON_WORKDAY
     * @uses self::VALUE_NO_CITY_DELIVERY
     * @uses self::VALUE_NO_HOLD_AT_LOCATION
     * @uses self::VALUE_NO_LOCATION_DELIVERY
     * @uses self::VALUE_NO_SERVICE_AREA_DELIVERY
     * @uses self::VALUE_NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY
     * @uses self::VALUE_NO_SPECIAL_SERVICE_DELIVERY
     * @uses self::VALUE_NO_ZIP_DELIVERY
     * @uses self::VALUE_WEEKEND
     * @uses self::VALUE_WEEKEND_SPECIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HOLIDAY,
            self::VALUE_NON_WORKDAY,
            self::VALUE_NO_CITY_DELIVERY,
            self::VALUE_NO_HOLD_AT_LOCATION,
            self::VALUE_NO_LOCATION_DELIVERY,
            self::VALUE_NO_SERVICE_AREA_DELIVERY,
            self::VALUE_NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY,
            self::VALUE_NO_SPECIAL_SERVICE_DELIVERY,
            self::VALUE_NO_ZIP_DELIVERY,
            self::VALUE_WEEKEND,
            self::VALUE_WEEKEND_SPECIAL,
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
