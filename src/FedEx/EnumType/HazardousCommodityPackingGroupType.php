<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for HazardousCommodityPackingGroupType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies DOT packing group for a hazardous commodity.
 * @subpackage Enumerations
 */
class HazardousCommodityPackingGroupType
{
    /**
     * Constant for value 'DEFAULT'
     * @return string 'DEFAULT'
     */
    const VALUE_DEFAULT = 'DEFAULT';
    /**
     * Constant for value 'I'
     * @return string 'I'
     */
    const VALUE_I = 'I';
    /**
     * Constant for value 'II'
     * @return string 'II'
     */
    const VALUE_II = 'II';
    /**
     * Constant for value 'III'
     * @return string 'III'
     */
    const VALUE_III = 'III';
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
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_I
     * @uses self::VALUE_II
     * @uses self::VALUE_III
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_I,
            self::VALUE_II,
            self::VALUE_III,
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
