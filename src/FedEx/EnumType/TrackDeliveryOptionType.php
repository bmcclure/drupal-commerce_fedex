<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackDeliveryOptionType EnumType
 * @subpackage Enumerations
 */
class TrackDeliveryOptionType
{
    /**
     * Constant for value 'APPOINTMENT'
     * @return string 'APPOINTMENT'
     */
    const VALUE_APPOINTMENT = 'APPOINTMENT';
    /**
     * Constant for value 'DATE_CERTAIN'
     * @return string 'DATE_CERTAIN'
     */
    const VALUE_DATE_CERTAIN = 'DATE_CERTAIN';
    /**
     * Constant for value 'ELECTRONIC_SIGNATURE_RELEASE'
     * @return string 'ELECTRONIC_SIGNATURE_RELEASE'
     */
    const VALUE_ELECTRONIC_SIGNATURE_RELEASE = 'ELECTRONIC_SIGNATURE_RELEASE';
    /**
     * Constant for value 'EVENING'
     * @return string 'EVENING'
     */
    const VALUE_EVENING = 'EVENING';
    /**
     * Constant for value 'REDIRECT_TO_HOLD_AT_LOCATION'
     * @return string 'REDIRECT_TO_HOLD_AT_LOCATION'
     */
    const VALUE_REDIRECT_TO_HOLD_AT_LOCATION = 'REDIRECT_TO_HOLD_AT_LOCATION';
    /**
     * Constant for value 'REROUTE'
     * @return string 'REROUTE'
     */
    const VALUE_REROUTE = 'REROUTE';
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
     * @uses self::VALUE_APPOINTMENT
     * @uses self::VALUE_DATE_CERTAIN
     * @uses self::VALUE_ELECTRONIC_SIGNATURE_RELEASE
     * @uses self::VALUE_EVENING
     * @uses self::VALUE_REDIRECT_TO_HOLD_AT_LOCATION
     * @uses self::VALUE_REROUTE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APPOINTMENT,
            self::VALUE_DATE_CERTAIN,
            self::VALUE_ELECTRONIC_SIGNATURE_RELEASE,
            self::VALUE_EVENING,
            self::VALUE_REDIRECT_TO_HOLD_AT_LOCATION,
            self::VALUE_REROUTE,
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
