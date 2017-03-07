<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for BinaryBarcodeType EnumType
 * @subpackage Enumerations
 */
class BinaryBarcodeType
{
    /**
     * Constant for value 'COMMON_2D'
     * @return string 'COMMON_2D'
     */
    const VALUE_COMMON_2_D = 'COMMON_2D';
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
     * @uses self::VALUE_COMMON_2_D
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMMON_2_D,
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
