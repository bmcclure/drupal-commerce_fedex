<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PickupRequestType EnumType
 * @subpackage Enumerations
 */
class PickupRequestType
{
    /**
     * Constant for value 'FUTURE_DAY'
     * @return string 'FUTURE_DAY'
     */
    const VALUE_FUTURE_DAY = 'FUTURE_DAY';
    /**
     * Constant for value 'SAME_DAY'
     * @return string 'SAME_DAY'
     */
    const VALUE_SAME_DAY = 'SAME_DAY';
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
     * @uses self::VALUE_FUTURE_DAY
     * @uses self::VALUE_SAME_DAY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FUTURE_DAY,
            self::VALUE_SAME_DAY,
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
