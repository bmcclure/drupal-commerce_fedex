<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for LinearUnits EnumType
 * @subpackage Enumerations
 */
class LinearUnits
{
    /**
     * Constant for value 'CM'
     * @return string 'CM'
     */
    const VALUE_CM = 'CM';
    /**
     * Constant for value 'IN'
     * @return string 'IN'
     */
    const VALUE_IN = 'IN';
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
     * @uses self::VALUE_CM
     * @uses self::VALUE_IN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CM,
            self::VALUE_IN,
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
