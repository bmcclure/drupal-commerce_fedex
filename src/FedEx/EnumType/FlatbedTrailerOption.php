<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for FlatbedTrailerOption EnumType
 * @subpackage Enumerations
 */
class FlatbedTrailerOption
{
    /**
     * Constant for value 'OVER_DIMENSION'
     * @return string 'OVER_DIMENSION'
     */
    const VALUE_OVER_DIMENSION = 'OVER_DIMENSION';
    /**
     * Constant for value 'TARP'
     * @return string 'TARP'
     */
    const VALUE_TARP = 'TARP';
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
     * @uses self::VALUE_OVER_DIMENSION
     * @uses self::VALUE_TARP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OVER_DIMENSION,
            self::VALUE_TARP,
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
