<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for HazardousCommodityLabelTextOptionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how the commodity is to be labeled.
 * @subpackage Enumerations
 */
class HazardousCommodityLabelTextOptionType
{
    /**
     * Constant for value 'APPEND'
     * @return string 'APPEND'
     */
    const VALUE_APPEND = 'APPEND';
    /**
     * Constant for value 'OVERRIDE'
     * @return string 'OVERRIDE'
     */
    const VALUE_OVERRIDE = 'OVERRIDE';
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const VALUE_STANDARD = 'STANDARD';
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
     * @uses self::VALUE_APPEND
     * @uses self::VALUE_OVERRIDE
     * @uses self::VALUE_STANDARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APPEND,
            self::VALUE_OVERRIDE,
            self::VALUE_STANDARD,
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
