<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for SignatureOptionType EnumType
 * @subpackage Enumerations
 */
class SignatureOptionType
{
    /**
     * Constant for value 'ADULT'
     * @return string 'ADULT'
     */
    const VALUE_ADULT = 'ADULT';
    /**
     * Constant for value 'DIRECT'
     * @return string 'DIRECT'
     */
    const VALUE_DIRECT = 'DIRECT';
    /**
     * Constant for value 'INDIRECT'
     * @return string 'INDIRECT'
     */
    const VALUE_INDIRECT = 'INDIRECT';
    /**
     * Constant for value 'NO_SIGNATURE_REQUIRED'
     * @return string 'NO_SIGNATURE_REQUIRED'
     */
    const VALUE_NO_SIGNATURE_REQUIRED = 'NO_SIGNATURE_REQUIRED';
    /**
     * Constant for value 'SERVICE_DEFAULT'
     * @return string 'SERVICE_DEFAULT'
     */
    const VALUE_SERVICE_DEFAULT = 'SERVICE_DEFAULT';
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
     * @uses self::VALUE_ADULT
     * @uses self::VALUE_DIRECT
     * @uses self::VALUE_INDIRECT
     * @uses self::VALUE_NO_SIGNATURE_REQUIRED
     * @uses self::VALUE_SERVICE_DEFAULT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADULT,
            self::VALUE_DIRECT,
            self::VALUE_INDIRECT,
            self::VALUE_NO_SIGNATURE_REQUIRED,
            self::VALUE_SERVICE_DEFAULT,
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
