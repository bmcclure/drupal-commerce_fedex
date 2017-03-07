<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for DayOfWeekType EnumType
 * @subpackage Enumerations
 */
class DayOfWeekType
{
    /**
     * Constant for value 'FRI'
     * @return string 'FRI'
     */
    const VALUE_FRI = 'FRI';
    /**
     * Constant for value 'MON'
     * @return string 'MON'
     */
    const VALUE_MON = 'MON';
    /**
     * Constant for value 'SAT'
     * @return string 'SAT'
     */
    const VALUE_SAT = 'SAT';
    /**
     * Constant for value 'SUN'
     * @return string 'SUN'
     */
    const VALUE_SUN = 'SUN';
    /**
     * Constant for value 'THU'
     * @return string 'THU'
     */
    const VALUE_THU = 'THU';
    /**
     * Constant for value 'TUE'
     * @return string 'TUE'
     */
    const VALUE_TUE = 'TUE';
    /**
     * Constant for value 'WED'
     * @return string 'WED'
     */
    const VALUE_WED = 'WED';
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
     * @uses self::VALUE_FRI
     * @uses self::VALUE_MON
     * @uses self::VALUE_SAT
     * @uses self::VALUE_SUN
     * @uses self::VALUE_THU
     * @uses self::VALUE_TUE
     * @uses self::VALUE_WED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FRI,
            self::VALUE_MON,
            self::VALUE_SAT,
            self::VALUE_SUN,
            self::VALUE_THU,
            self::VALUE_TUE,
            self::VALUE_WED,
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
