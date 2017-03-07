<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for DocTabContentType EnumType
 * @subpackage Enumerations
 */
class DocTabContentType
{
    /**
     * Constant for value 'BARCODED'
     * @return string 'BARCODED'
     */
    const VALUE_BARCODED = 'BARCODED';
    /**
     * Constant for value 'CUSTOM'
     * @return string 'CUSTOM'
     */
    const VALUE_CUSTOM = 'CUSTOM';
    /**
     * Constant for value 'MINIMUM'
     * @return string 'MINIMUM'
     */
    const VALUE_MINIMUM = 'MINIMUM';
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const VALUE_STANDARD = 'STANDARD';
    /**
     * Constant for value 'ZONE001'
     * @return string 'ZONE001'
     */
    const VALUE_ZONE_001 = 'ZONE001';
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
     * @uses self::VALUE_BARCODED
     * @uses self::VALUE_CUSTOM
     * @uses self::VALUE_MINIMUM
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_ZONE_001
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BARCODED,
            self::VALUE_CUSTOM,
            self::VALUE_MINIMUM,
            self::VALUE_STANDARD,
            self::VALUE_ZONE_001,
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
