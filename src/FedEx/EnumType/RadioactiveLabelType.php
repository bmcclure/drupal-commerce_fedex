<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RadioactiveLabelType EnumType
 * @subpackage Enumerations
 */
class RadioactiveLabelType
{
    /**
     * Constant for value 'III_YELLOW'
     * @return string 'III_YELLOW'
     */
    const VALUE_III_YELLOW = 'III_YELLOW';
    /**
     * Constant for value 'II_YELLOW'
     * @return string 'II_YELLOW'
     */
    const VALUE_II_YELLOW = 'II_YELLOW';
    /**
     * Constant for value 'I_WHITE'
     * @return string 'I_WHITE'
     */
    const VALUE_I_WHITE = 'I_WHITE';
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
     * @uses self::VALUE_III_YELLOW
     * @uses self::VALUE_II_YELLOW
     * @uses self::VALUE_I_WHITE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_III_YELLOW,
            self::VALUE_II_YELLOW,
            self::VALUE_I_WHITE,
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
