<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackChargeDetailType EnumType
 * @subpackage Enumerations
 */
class TrackChargeDetailType
{
    /**
     * Constant for value 'ORIGINAL_CHARGES'
     * @return string 'ORIGINAL_CHARGES'
     */
    const VALUE_ORIGINAL_CHARGES = 'ORIGINAL_CHARGES';
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
     * @uses self::VALUE_ORIGINAL_CHARGES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORIGINAL_CHARGES,
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
