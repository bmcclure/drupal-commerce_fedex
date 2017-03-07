<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PageQuadrantType EnumType
 * @subpackage Enumerations
 */
class PageQuadrantType
{
    /**
     * Constant for value 'BOTTOM_LEFT'
     * @return string 'BOTTOM_LEFT'
     */
    const VALUE_BOTTOM_LEFT = 'BOTTOM_LEFT';
    /**
     * Constant for value 'BOTTOM_RIGHT'
     * @return string 'BOTTOM_RIGHT'
     */
    const VALUE_BOTTOM_RIGHT = 'BOTTOM_RIGHT';
    /**
     * Constant for value 'TOP_LEFT'
     * @return string 'TOP_LEFT'
     */
    const VALUE_TOP_LEFT = 'TOP_LEFT';
    /**
     * Constant for value 'TOP_RIGHT'
     * @return string 'TOP_RIGHT'
     */
    const VALUE_TOP_RIGHT = 'TOP_RIGHT';
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
     * @uses self::VALUE_BOTTOM_LEFT
     * @uses self::VALUE_BOTTOM_RIGHT
     * @uses self::VALUE_TOP_LEFT
     * @uses self::VALUE_TOP_RIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BOTTOM_LEFT,
            self::VALUE_BOTTOM_RIGHT,
            self::VALUE_TOP_LEFT,
            self::VALUE_TOP_RIGHT,
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
