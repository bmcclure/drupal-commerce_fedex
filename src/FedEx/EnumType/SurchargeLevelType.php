<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for SurchargeLevelType EnumType
 * @subpackage Enumerations
 */
class SurchargeLevelType
{
    /**
     * Constant for value 'PACKAGE'
     * @return string 'PACKAGE'
     */
    const VALUE_PACKAGE = 'PACKAGE';
    /**
     * Constant for value 'SHIPMENT'
     * @return string 'SHIPMENT'
     */
    const VALUE_SHIPMENT = 'SHIPMENT';
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
     * @uses self::VALUE_PACKAGE
     * @uses self::VALUE_SHIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PACKAGE,
            self::VALUE_SHIPMENT,
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
