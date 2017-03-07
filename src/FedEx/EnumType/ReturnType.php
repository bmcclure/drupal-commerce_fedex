<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ReturnType EnumType
 * @subpackage Enumerations
 */
class ReturnType
{
    /**
     * Constant for value 'FEDEX_TAG'
     * @return string 'FEDEX_TAG'
     */
    const VALUE_FEDEX_TAG = 'FEDEX_TAG';
    /**
     * Constant for value 'PENDING'
     * @return string 'PENDING'
     */
    const VALUE_PENDING = 'PENDING';
    /**
     * Constant for value 'PRINT_RETURN_LABEL'
     * @return string 'PRINT_RETURN_LABEL'
     */
    const VALUE_PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';
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
     * @uses self::VALUE_FEDEX_TAG
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_PRINT_RETURN_LABEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_TAG,
            self::VALUE_PENDING,
            self::VALUE_PRINT_RETURN_LABEL,
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
