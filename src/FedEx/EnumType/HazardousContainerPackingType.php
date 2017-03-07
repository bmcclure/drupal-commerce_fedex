<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for HazardousContainerPackingType EnumType
 * @subpackage Enumerations
 */
class HazardousContainerPackingType
{
    /**
     * Constant for value 'ALL_PACKED_IN_ONE'
     * @return string 'ALL_PACKED_IN_ONE'
     */
    const VALUE_ALL_PACKED_IN_ONE = 'ALL_PACKED_IN_ONE';
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
     * @uses self::VALUE_ALL_PACKED_IN_ONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL_PACKED_IN_ONE,
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
