<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for NaftaProducerSpecificationType EnumType
 * @subpackage Enumerations
 */
class NaftaProducerSpecificationType
{
    /**
     * Constant for value 'AVAILABLE_UPON_REQUEST'
     * @return string 'AVAILABLE_UPON_REQUEST'
     */
    const VALUE_AVAILABLE_UPON_REQUEST = 'AVAILABLE_UPON_REQUEST';
    /**
     * Constant for value 'MULTIPLE_SPECIFIED'
     * @return string 'MULTIPLE_SPECIFIED'
     */
    const VALUE_MULTIPLE_SPECIFIED = 'MULTIPLE_SPECIFIED';
    /**
     * Constant for value 'SAME'
     * @return string 'SAME'
     */
    const VALUE_SAME = 'SAME';
    /**
     * Constant for value 'SINGLE_SPECIFIED'
     * @return string 'SINGLE_SPECIFIED'
     */
    const VALUE_SINGLE_SPECIFIED = 'SINGLE_SPECIFIED';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
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
     * @uses self::VALUE_AVAILABLE_UPON_REQUEST
     * @uses self::VALUE_MULTIPLE_SPECIFIED
     * @uses self::VALUE_SAME
     * @uses self::VALUE_SINGLE_SPECIFIED
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AVAILABLE_UPON_REQUEST,
            self::VALUE_MULTIPLE_SPECIFIED,
            self::VALUE_SAME,
            self::VALUE_SINGLE_SPECIFIED,
            self::VALUE_UNKNOWN,
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
