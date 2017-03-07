<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PendingShipmentProcessingOptionType EnumType
 * @subpackage Enumerations
 */
class PendingShipmentProcessingOptionType
{
    /**
     * Constant for value 'ALLOW_MODIFICATIONS'
     * @return string 'ALLOW_MODIFICATIONS'
     */
    const VALUE_ALLOW_MODIFICATIONS = 'ALLOW_MODIFICATIONS';
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
     * @uses self::VALUE_ALLOW_MODIFICATIONS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALLOW_MODIFICATIONS,
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
