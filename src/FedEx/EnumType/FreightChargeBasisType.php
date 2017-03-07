<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for FreightChargeBasisType EnumType
 * @subpackage Enumerations
 */
class FreightChargeBasisType
{
    /**
     * Constant for value 'CWT'
     * @return string 'CWT'
     */
    const VALUE_CWT = 'CWT';
    /**
     * Constant for value 'FLAT'
     * @return string 'FLAT'
     */
    const VALUE_FLAT = 'FLAT';
    /**
     * Constant for value 'MINIMUM'
     * @return string 'MINIMUM'
     */
    const VALUE_MINIMUM = 'MINIMUM';
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
     * @uses self::VALUE_CWT
     * @uses self::VALUE_FLAT
     * @uses self::VALUE_MINIMUM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CWT,
            self::VALUE_FLAT,
            self::VALUE_MINIMUM,
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
