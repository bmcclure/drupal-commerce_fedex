<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for SmartPostShipmentProcessingOptionType EnumType
 * @subpackage Enumerations
 */
class SmartPostShipmentProcessingOptionType
{
    /**
     * Constant for value 'GROUND_TRACKING_NUMBER_REQUESTED'
     * @return string 'GROUND_TRACKING_NUMBER_REQUESTED'
     */
    const VALUE_GROUND_TRACKING_NUMBER_REQUESTED = 'GROUND_TRACKING_NUMBER_REQUESTED';
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
     * @uses self::VALUE_GROUND_TRACKING_NUMBER_REQUESTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GROUND_TRACKING_NUMBER_REQUESTED,
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
