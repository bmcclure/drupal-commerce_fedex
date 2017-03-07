<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PhysicalFormType EnumType
 * @subpackage Enumerations
 */
class PhysicalFormType
{
    /**
     * Constant for value 'GAS'
     * @return string 'GAS'
     */
    const VALUE_GAS = 'GAS';
    /**
     * Constant for value 'LIQUID'
     * @return string 'LIQUID'
     */
    const VALUE_LIQUID = 'LIQUID';
    /**
     * Constant for value 'SOLID'
     * @return string 'SOLID'
     */
    const VALUE_SOLID = 'SOLID';
    /**
     * Constant for value 'SPECIAL'
     * @return string 'SPECIAL'
     */
    const VALUE_SPECIAL = 'SPECIAL';
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
     * @uses self::VALUE_GAS
     * @uses self::VALUE_LIQUID
     * @uses self::VALUE_SOLID
     * @uses self::VALUE_SPECIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GAS,
            self::VALUE_LIQUID,
            self::VALUE_SOLID,
            self::VALUE_SPECIAL,
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
