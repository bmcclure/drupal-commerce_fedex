<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CustomLabelCoordinateUnits EnumType
 * @subpackage Enumerations
 */
class CustomLabelCoordinateUnits
{
    /**
     * Constant for value 'MILS'
     * @return string 'MILS'
     */
    const VALUE_MILS = 'MILS';
    /**
     * Constant for value 'PIXELS'
     * @return string 'PIXELS'
     */
    const VALUE_PIXELS = 'PIXELS';
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
     * @uses self::VALUE_MILS
     * @uses self::VALUE_PIXELS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MILS,
            self::VALUE_PIXELS,
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
