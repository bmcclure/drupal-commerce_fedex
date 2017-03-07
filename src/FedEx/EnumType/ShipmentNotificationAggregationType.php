<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ShipmentNotificationAggregationType EnumType
 * @subpackage Enumerations
 */
class ShipmentNotificationAggregationType
{
    /**
     * Constant for value 'PER_PACKAGE'
     * @return string 'PER_PACKAGE'
     */
    const VALUE_PER_PACKAGE = 'PER_PACKAGE';
    /**
     * Constant for value 'PER_SHIPMENT'
     * @return string 'PER_SHIPMENT'
     */
    const VALUE_PER_SHIPMENT = 'PER_SHIPMENT';
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
     * @uses self::VALUE_PER_PACKAGE
     * @uses self::VALUE_PER_SHIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PER_PACKAGE,
            self::VALUE_PER_SHIPMENT,
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
