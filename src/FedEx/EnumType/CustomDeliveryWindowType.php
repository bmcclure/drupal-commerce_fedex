<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CustomDeliveryWindowType EnumType
 * @subpackage Enumerations
 */
class CustomDeliveryWindowType
{
    /**
     * Constant for value 'AFTER'
     * @return string 'AFTER'
     */
    const VALUE_AFTER = 'AFTER';
    /**
     * Constant for value 'BEFORE'
     * @return string 'BEFORE'
     */
    const VALUE_BEFORE = 'BEFORE';
    /**
     * Constant for value 'BETWEEN'
     * @return string 'BETWEEN'
     */
    const VALUE_BETWEEN = 'BETWEEN';
    /**
     * Constant for value 'ON'
     * @return string 'ON'
     */
    const VALUE_ON = 'ON';
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
     * @uses self::VALUE_AFTER
     * @uses self::VALUE_BEFORE
     * @uses self::VALUE_BETWEEN
     * @uses self::VALUE_ON
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AFTER,
            self::VALUE_BEFORE,
            self::VALUE_BETWEEN,
            self::VALUE_ON,
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
