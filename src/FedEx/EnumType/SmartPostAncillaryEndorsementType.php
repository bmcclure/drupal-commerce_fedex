<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for SmartPostAncillaryEndorsementType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: These values are mutually exclusive; at most one of them can be attached to a SmartPost shipment.
 * @subpackage Enumerations
 */
class SmartPostAncillaryEndorsementType
{
    /**
     * Constant for value 'ADDRESS_CORRECTION'
     * @return string 'ADDRESS_CORRECTION'
     */
    const VALUE_ADDRESS_CORRECTION = 'ADDRESS_CORRECTION';
    /**
     * Constant for value 'CARRIER_LEAVE_IF_NO_RESPONSE'
     * @return string 'CARRIER_LEAVE_IF_NO_RESPONSE'
     */
    const VALUE_CARRIER_LEAVE_IF_NO_RESPONSE = 'CARRIER_LEAVE_IF_NO_RESPONSE';
    /**
     * Constant for value 'CHANGE_SERVICE'
     * @return string 'CHANGE_SERVICE'
     */
    const VALUE_CHANGE_SERVICE = 'CHANGE_SERVICE';
    /**
     * Constant for value 'FORWARDING_SERVICE'
     * @return string 'FORWARDING_SERVICE'
     */
    const VALUE_FORWARDING_SERVICE = 'FORWARDING_SERVICE';
    /**
     * Constant for value 'RETURN_SERVICE'
     * @return string 'RETURN_SERVICE'
     */
    const VALUE_RETURN_SERVICE = 'RETURN_SERVICE';
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
     * @uses self::VALUE_ADDRESS_CORRECTION
     * @uses self::VALUE_CARRIER_LEAVE_IF_NO_RESPONSE
     * @uses self::VALUE_CHANGE_SERVICE
     * @uses self::VALUE_FORWARDING_SERVICE
     * @uses self::VALUE_RETURN_SERVICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADDRESS_CORRECTION,
            self::VALUE_CARRIER_LEAVE_IF_NO_RESPONSE,
            self::VALUE_CHANGE_SERVICE,
            self::VALUE_FORWARDING_SERVICE,
            self::VALUE_RETURN_SERVICE,
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
