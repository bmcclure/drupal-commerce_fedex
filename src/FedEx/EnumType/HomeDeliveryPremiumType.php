<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for HomeDeliveryPremiumType EnumType
 * @subpackage Enumerations
 */
class HomeDeliveryPremiumType
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
     * Constant for value 'EVENING'
     * @return string 'EVENING'
     */
    const VALUE_EVENING = 'EVENING';
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
     * @uses self::VALUE_EVENING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APPOINTMENT,
            self::VALUE_DATE_CERTAIN,
            self::VALUE_EVENING,
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
