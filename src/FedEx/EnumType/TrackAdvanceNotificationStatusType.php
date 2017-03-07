<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackAdvanceNotificationStatusType EnumType
 * @subpackage Enumerations
 */
class TrackAdvanceNotificationStatusType
{
    /**
     * Constant for value 'BACK_ON_TRACK'
     * @return string 'BACK_ON_TRACK'
     */
    const VALUE_BACK_ON_TRACK = 'BACK_ON_TRACK';
    /**
     * Constant for value 'FAIL'
     * @return string 'FAIL'
     */
    const VALUE_FAIL = 'FAIL';
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
     * @uses self::VALUE_BACK_ON_TRACK
     * @uses self::VALUE_FAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BACK_ON_TRACK,
            self::VALUE_FAIL,
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
