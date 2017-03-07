<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ShipmentOnlyFieldsType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: These values identify which package-level data values will be provided at the shipment-level.
 * @subpackage Enumerations
 */
class ShipmentOnlyFieldsType
{
    /**
     * Constant for value 'DIMENSIONS'
     * @return string 'DIMENSIONS'
     */
    const VALUE_DIMENSIONS = 'DIMENSIONS';
    /**
     * Constant for value 'INSURED_VALUE'
     * @return string 'INSURED_VALUE'
     */
    const VALUE_INSURED_VALUE = 'INSURED_VALUE';
    /**
     * Constant for value 'WEIGHT'
     * @return string 'WEIGHT'
     */
    const VALUE_WEIGHT = 'WEIGHT';
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
     * @uses self::VALUE_DIMENSIONS
     * @uses self::VALUE_INSURED_VALUE
     * @uses self::VALUE_WEIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DIMENSIONS,
            self::VALUE_INSURED_VALUE,
            self::VALUE_WEIGHT,
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
