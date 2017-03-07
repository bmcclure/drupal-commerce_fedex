<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TinType EnumType
 * @subpackage Enumerations
 */
class TinType
{
    /**
     * Constant for value 'BUSINESS_NATIONAL'
     * @return string 'BUSINESS_NATIONAL'
     */
    const VALUE_BUSINESS_NATIONAL = 'BUSINESS_NATIONAL';
    /**
     * Constant for value 'BUSINESS_STATE'
     * @return string 'BUSINESS_STATE'
     */
    const VALUE_BUSINESS_STATE = 'BUSINESS_STATE';
    /**
     * Constant for value 'PERSONAL_NATIONAL'
     * @return string 'PERSONAL_NATIONAL'
     */
    const VALUE_PERSONAL_NATIONAL = 'PERSONAL_NATIONAL';
    /**
     * Constant for value 'PERSONAL_STATE'
     * @return string 'PERSONAL_STATE'
     */
    const VALUE_PERSONAL_STATE = 'PERSONAL_STATE';
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
     * @uses self::VALUE_BUSINESS_NATIONAL
     * @uses self::VALUE_BUSINESS_STATE
     * @uses self::VALUE_PERSONAL_NATIONAL
     * @uses self::VALUE_PERSONAL_STATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUSINESS_NATIONAL,
            self::VALUE_BUSINESS_STATE,
            self::VALUE_PERSONAL_NATIONAL,
            self::VALUE_PERSONAL_STATE,
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
