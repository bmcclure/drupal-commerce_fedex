<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ReturnEMailAllowedSpecialServiceType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: These values are used to control the availability of certain special services at the time when a customer uses the e-mail label link to create a return shipment.
 * @subpackage Enumerations
 */
class ReturnEMailAllowedSpecialServiceType
{
    /**
     * Constant for value 'SATURDAY_DELIVERY'
     * @return string 'SATURDAY_DELIVERY'
     */
    const VALUE_SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    /**
     * Constant for value 'SATURDAY_PICKUP'
     * @return string 'SATURDAY_PICKUP'
     */
    const VALUE_SATURDAY_PICKUP = 'SATURDAY_PICKUP';
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
     * @uses self::VALUE_SATURDAY_DELIVERY
     * @uses self::VALUE_SATURDAY_PICKUP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SATURDAY_DELIVERY,
            self::VALUE_SATURDAY_PICKUP,
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
