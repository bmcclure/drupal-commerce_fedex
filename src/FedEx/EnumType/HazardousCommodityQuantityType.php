<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for HazardousCommodityQuantityType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the measure of quantity to be validated against a prescribed limit.
 * @subpackage Enumerations
 */
class HazardousCommodityQuantityType
{
    /**
     * Constant for value 'GROSS'
     * @return string 'GROSS'
     */
    const VALUE_GROSS = 'GROSS';
    /**
     * Constant for value 'NET'
     * @return string 'NET'
     */
    const VALUE_NET = 'NET';
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
     * @uses self::VALUE_GROSS
     * @uses self::VALUE_NET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GROSS,
            self::VALUE_NET,
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
