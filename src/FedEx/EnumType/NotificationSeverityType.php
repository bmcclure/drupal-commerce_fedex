<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for NotificationSeverityType EnumType
 * @subpackage Enumerations
 */
class NotificationSeverityType
{
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Constant for value 'FAILURE'
     * @return string 'FAILURE'
     */
    const VALUE_FAILURE = 'FAILURE';
    /**
     * Constant for value 'NOTE'
     * @return string 'NOTE'
     */
    const VALUE_NOTE = 'NOTE';
    /**
     * Constant for value 'SUCCESS'
     * @return string 'SUCCESS'
     */
    const VALUE_SUCCESS = 'SUCCESS';
    /**
     * Constant for value 'WARNING'
     * @return string 'WARNING'
     */
    const VALUE_WARNING = 'WARNING';
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
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_FAILURE
     * @uses self::VALUE_NOTE
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_WARNING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ERROR,
            self::VALUE_FAILURE,
            self::VALUE_NOTE,
            self::VALUE_SUCCESS,
            self::VALUE_WARNING,
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
