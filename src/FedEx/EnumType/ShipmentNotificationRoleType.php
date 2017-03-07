<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ShipmentNotificationRoleType EnumType
 * @subpackage Enumerations
 */
class ShipmentNotificationRoleType
{
    /**
     * Constant for value 'BROKER'
     * @return string 'BROKER'
     */
    const VALUE_BROKER = 'BROKER';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'RECIPIENT'
     * @return string 'RECIPIENT'
     */
    const VALUE_RECIPIENT = 'RECIPIENT';
    /**
     * Constant for value 'SHIPPER'
     * @return string 'SHIPPER'
     */
    const VALUE_SHIPPER = 'SHIPPER';
    /**
     * Constant for value 'THIRD_PARTY'
     * @return string 'THIRD_PARTY'
     */
    const VALUE_THIRD_PARTY = 'THIRD_PARTY';
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
     * @uses self::VALUE_BROKER
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_RECIPIENT
     * @uses self::VALUE_SHIPPER
     * @uses self::VALUE_THIRD_PARTY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BROKER,
            self::VALUE_OTHER,
            self::VALUE_RECIPIENT,
            self::VALUE_SHIPPER,
            self::VALUE_THIRD_PARTY,
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
