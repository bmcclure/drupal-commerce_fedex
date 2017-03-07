<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for AppointmentWindowType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The description that FedEx uses for a given appointment window.
 * @subpackage Enumerations
 */
class AppointmentWindowType
{
    /**
     * Constant for value 'AFTERNOON'
     * @return string 'AFTERNOON'
     */
    const VALUE_AFTERNOON = 'AFTERNOON';
    /**
     * Constant for value 'LATE_AFTERNOON'
     * @return string 'LATE_AFTERNOON'
     */
    const VALUE_LATE_AFTERNOON = 'LATE_AFTERNOON';
    /**
     * Constant for value 'MID_DAY'
     * @return string 'MID_DAY'
     */
    const VALUE_MID_DAY = 'MID_DAY';
    /**
     * Constant for value 'MORNING'
     * @return string 'MORNING'
     */
    const VALUE_MORNING = 'MORNING';
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
     * @uses self::VALUE_AFTERNOON
     * @uses self::VALUE_LATE_AFTERNOON
     * @uses self::VALUE_MID_DAY
     * @uses self::VALUE_MORNING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AFTERNOON,
            self::VALUE_LATE_AFTERNOON,
            self::VALUE_MID_DAY,
            self::VALUE_MORNING,
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
