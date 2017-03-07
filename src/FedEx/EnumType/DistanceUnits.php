<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for DistanceUnits EnumType
 * @subpackage Enumerations
 */
class DistanceUnits
{
    /**
     * Constant for value 'KM'
     * @return string 'KM'
     */
    const VALUE_KM = 'KM';
    /**
     * Constant for value 'MI'
     * @return string 'MI'
     */
    const VALUE_MI = 'MI';
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
     * @uses self::VALUE_KM
     * @uses self::VALUE_MI
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_KM,
            self::VALUE_MI,
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
