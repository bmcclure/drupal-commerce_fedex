<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackRequestProcessingOptionType EnumType
 * @subpackage Enumerations
 */
class TrackRequestProcessingOptionType
{
    /**
     * Constant for value 'INCLUDE_DETAILED_SCANS'
     * @return string 'INCLUDE_DETAILED_SCANS'
     */
    const VALUE_INCLUDE_DETAILED_SCANS = 'INCLUDE_DETAILED_SCANS';
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
     * @uses self::VALUE_INCLUDE_DETAILED_SCANS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCLUDE_DETAILED_SCANS,
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
