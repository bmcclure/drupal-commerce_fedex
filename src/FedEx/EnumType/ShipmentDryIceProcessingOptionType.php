<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ShipmentDryIceProcessingOptionType EnumType
 * @subpackage Enumerations
 */
class ShipmentDryIceProcessingOptionType
{
    /**
     * Constant for value 'SHIPMENT_LEVEL_DRY_ICE_ONLY'
     * @return string 'SHIPMENT_LEVEL_DRY_ICE_ONLY'
     */
    const VALUE_SHIPMENT_LEVEL_DRY_ICE_ONLY = 'SHIPMENT_LEVEL_DRY_ICE_ONLY';
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
     * @uses self::VALUE_SHIPMENT_LEVEL_DRY_ICE_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHIPMENT_LEVEL_DRY_ICE_ONLY,
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
