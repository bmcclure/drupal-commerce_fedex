<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CustomerImageUsageType EnumType
 * @subpackage Enumerations
 */
class CustomerImageUsageType
{
    /**
     * Constant for value 'LETTER_HEAD'
     * @return string 'LETTER_HEAD'
     */
    const VALUE_LETTER_HEAD = 'LETTER_HEAD';
    /**
     * Constant for value 'SIGNATURE'
     * @return string 'SIGNATURE'
     */
    const VALUE_SIGNATURE = 'SIGNATURE';
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
     * @uses self::VALUE_LETTER_HEAD
     * @uses self::VALUE_SIGNATURE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LETTER_HEAD,
            self::VALUE_SIGNATURE,
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
