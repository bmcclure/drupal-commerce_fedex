<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RelativeVerticalPositionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the vertical position of an item relative to another item.
 * @subpackage Enumerations
 */
class RelativeVerticalPositionType
{
    /**
     * Constant for value 'ABOVE'
     * @return string 'ABOVE'
     */
    const VALUE_ABOVE = 'ABOVE';
    /**
     * Constant for value 'BELOW'
     * @return string 'BELOW'
     */
    const VALUE_BELOW = 'BELOW';
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
     * @uses self::VALUE_ABOVE
     * @uses self::VALUE_BELOW
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ABOVE,
            self::VALUE_BELOW,
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
