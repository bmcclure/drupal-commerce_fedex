<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RadioactivityUnitOfMeasure EnumType
 * @subpackage Enumerations
 */
class RadioactivityUnitOfMeasure
{
    /**
     * Constant for value 'BQ'
     * @return string 'BQ'
     */
    const VALUE_BQ = 'BQ';
    /**
     * Constant for value 'GBQ'
     * @return string 'GBQ'
     */
    const VALUE_GBQ = 'GBQ';
    /**
     * Constant for value 'KBQ'
     * @return string 'KBQ'
     */
    const VALUE_KBQ = 'KBQ';
    /**
     * Constant for value 'MBQ'
     * @return string 'MBQ'
     */
    const VALUE_MBQ = 'MBQ';
    /**
     * Constant for value 'PBQ'
     * @return string 'PBQ'
     */
    const VALUE_PBQ = 'PBQ';
    /**
     * Constant for value 'TBQ'
     * @return string 'TBQ'
     */
    const VALUE_TBQ = 'TBQ';
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
     * @uses self::VALUE_BQ
     * @uses self::VALUE_GBQ
     * @uses self::VALUE_KBQ
     * @uses self::VALUE_MBQ
     * @uses self::VALUE_PBQ
     * @uses self::VALUE_TBQ
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BQ,
            self::VALUE_GBQ,
            self::VALUE_KBQ,
            self::VALUE_MBQ,
            self::VALUE_PBQ,
            self::VALUE_TBQ,
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
