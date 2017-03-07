<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for DelayLevelType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling )
 * @subpackage Enumerations
 */
class DelayLevelType
{
    /**
     * Constant for value 'CITY'
     * @return string 'CITY'
     */
    const VALUE_CITY = 'CITY';
    /**
     * Constant for value 'COUNTRY'
     * @return string 'COUNTRY'
     */
    const VALUE_COUNTRY = 'COUNTRY';
    /**
     * Constant for value 'LOCATION'
     * @return string 'LOCATION'
     */
    const VALUE_LOCATION = 'LOCATION';
    /**
     * Constant for value 'POSTAL_CODE'
     * @return string 'POSTAL_CODE'
     */
    const VALUE_POSTAL_CODE = 'POSTAL_CODE';
    /**
     * Constant for value 'SERVICE_AREA'
     * @return string 'SERVICE_AREA'
     */
    const VALUE_SERVICE_AREA = 'SERVICE_AREA';
    /**
     * Constant for value 'SERVICE_AREA_SPECIAL_SERVICE'
     * @return string 'SERVICE_AREA_SPECIAL_SERVICE'
     */
    const VALUE_SERVICE_AREA_SPECIAL_SERVICE = 'SERVICE_AREA_SPECIAL_SERVICE';
    /**
     * Constant for value 'SPECIAL_SERVICE'
     * @return string 'SPECIAL_SERVICE'
     */
    const VALUE_SPECIAL_SERVICE = 'SPECIAL_SERVICE';
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
     * @uses self::VALUE_CITY
     * @uses self::VALUE_COUNTRY
     * @uses self::VALUE_LOCATION
     * @uses self::VALUE_POSTAL_CODE
     * @uses self::VALUE_SERVICE_AREA
     * @uses self::VALUE_SERVICE_AREA_SPECIAL_SERVICE
     * @uses self::VALUE_SPECIAL_SERVICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CITY,
            self::VALUE_COUNTRY,
            self::VALUE_LOCATION,
            self::VALUE_POSTAL_CODE,
            self::VALUE_SERVICE_AREA,
            self::VALUE_SERVICE_AREA_SPECIAL_SERVICE,
            self::VALUE_SPECIAL_SERVICE,
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
