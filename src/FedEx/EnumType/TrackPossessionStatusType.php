<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackPossessionStatusType EnumType
 * @subpackage Enumerations
 */
class TrackPossessionStatusType
{
    /**
     * Constant for value 'BROKER'
     * @return string 'BROKER'
     */
    const VALUE_BROKER = 'BROKER';
    /**
     * Constant for value 'CARRIER'
     * @return string 'CARRIER'
     */
    const VALUE_CARRIER = 'CARRIER';
    /**
     * Constant for value 'CUSTOMS'
     * @return string 'CUSTOMS'
     */
    const VALUE_CUSTOMS = 'CUSTOMS';
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
     * Constant for value 'SPLIT_STATUS'
     * @return string 'SPLIT_STATUS'
     */
    const VALUE_SPLIT_STATUS = 'SPLIT_STATUS';
    /**
     * Constant for value 'TRANSFER_PARTNER'
     * @return string 'TRANSFER_PARTNER'
     */
    const VALUE_TRANSFER_PARTNER = 'TRANSFER_PARTNER';
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
     * @uses self::VALUE_CARRIER
     * @uses self::VALUE_CUSTOMS
     * @uses self::VALUE_RECIPIENT
     * @uses self::VALUE_SHIPPER
     * @uses self::VALUE_SPLIT_STATUS
     * @uses self::VALUE_TRANSFER_PARTNER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BROKER,
            self::VALUE_CARRIER,
            self::VALUE_CUSTOMS,
            self::VALUE_RECIPIENT,
            self::VALUE_SHIPPER,
            self::VALUE_SPLIT_STATUS,
            self::VALUE_TRANSFER_PARTNER,
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
