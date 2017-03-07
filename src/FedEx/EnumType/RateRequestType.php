<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RateRequestType EnumType
 * @subpackage Enumerations
 */
class RateRequestType
{
    /**
     * Constant for value 'LIST'
     * @return string 'LIST'
     */
    const VALUE_LIST = 'LIST';
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const VALUE_NONE = 'NONE';
    /**
     * Constant for value 'PREFERRED'
     * @return string 'PREFERRED'
     */
    const VALUE_PREFERRED = 'PREFERRED';
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
     * @uses self::VALUE_LIST
     * @uses self::VALUE_NONE
     * @uses self::VALUE_PREFERRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIST,
            self::VALUE_NONE,
            self::VALUE_PREFERRED,
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
