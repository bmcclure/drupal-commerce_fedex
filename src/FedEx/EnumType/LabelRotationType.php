<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for LabelRotationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Relative to normal orientation for the printer.
 * @subpackage Enumerations
 */
class LabelRotationType
{
    /**
     * Constant for value 'LEFT'
     * @return string 'LEFT'
     */
    const VALUE_LEFT = 'LEFT';
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const VALUE_NONE = 'NONE';
    /**
     * Constant for value 'RIGHT'
     * @return string 'RIGHT'
     */
    const VALUE_RIGHT = 'RIGHT';
    /**
     * Constant for value 'UPSIDE_DOWN'
     * @return string 'UPSIDE_DOWN'
     */
    const VALUE_UPSIDE_DOWN = 'UPSIDE_DOWN';
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
     * @uses self::VALUE_LEFT
     * @uses self::VALUE_NONE
     * @uses self::VALUE_RIGHT
     * @uses self::VALUE_UPSIDE_DOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LEFT,
            self::VALUE_NONE,
            self::VALUE_RIGHT,
            self::VALUE_UPSIDE_DOWN,
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
