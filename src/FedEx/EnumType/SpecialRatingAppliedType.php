<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for SpecialRatingAppliedType EnumType
 * @subpackage Enumerations
 */
class SpecialRatingAppliedType
{
    /**
     * Constant for value 'FEDEX_ONE_RATE'
     * @return string 'FEDEX_ONE_RATE'
     */
    const VALUE_FEDEX_ONE_RATE = 'FEDEX_ONE_RATE';
    /**
     * Constant for value 'FIXED_FUEL_SURCHARGE'
     * @return string 'FIXED_FUEL_SURCHARGE'
     */
    const VALUE_FIXED_FUEL_SURCHARGE = 'FIXED_FUEL_SURCHARGE';
    /**
     * Constant for value 'IMPORT_PRICING'
     * @return string 'IMPORT_PRICING'
     */
    const VALUE_IMPORT_PRICING = 'IMPORT_PRICING';
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
     * @uses self::VALUE_FEDEX_ONE_RATE
     * @uses self::VALUE_FIXED_FUEL_SURCHARGE
     * @uses self::VALUE_IMPORT_PRICING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_ONE_RATE,
            self::VALUE_FIXED_FUEL_SURCHARGE,
            self::VALUE_IMPORT_PRICING,
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
