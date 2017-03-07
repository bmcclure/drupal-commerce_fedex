<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for NotificationFormatType EnumType
 * @subpackage Enumerations
 */
class NotificationFormatType
{
    /**
     * Constant for value 'HTML'
     * @return string 'HTML'
     */
    const VALUE_HTML = 'HTML';
    /**
     * Constant for value 'TEXT'
     * @return string 'TEXT'
     */
    const VALUE_TEXT = 'TEXT';
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
     * @uses self::VALUE_HTML
     * @uses self::VALUE_TEXT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HTML,
            self::VALUE_TEXT,
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
