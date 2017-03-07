<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for DocTabZoneJustificationType EnumType
 * @subpackage Enumerations
 */
class DocTabZoneJustificationType
{
    /**
     * Constant for value 'LEFT'
     * @return string 'LEFT'
     */
    const VALUE_LEFT = 'LEFT';
    /**
     * Constant for value 'RIGHT'
     * @return string 'RIGHT'
     */
    const VALUE_RIGHT = 'RIGHT';
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
     * @uses self::VALUE_RIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LEFT,
            self::VALUE_RIGHT,
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
