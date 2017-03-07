<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for DangerousGoodsAccessibilityType EnumType
 * @subpackage Enumerations
 */
class DangerousGoodsAccessibilityType
{
    /**
     * Constant for value 'ACCESSIBLE'
     * @return string 'ACCESSIBLE'
     */
    const VALUE_ACCESSIBLE = 'ACCESSIBLE';
    /**
     * Constant for value 'INACCESSIBLE'
     * @return string 'INACCESSIBLE'
     */
    const VALUE_INACCESSIBLE = 'INACCESSIBLE';
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
     * @uses self::VALUE_ACCESSIBLE
     * @uses self::VALUE_INACCESSIBLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCESSIBLE,
            self::VALUE_INACCESSIBLE,
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
