<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for GroundDeliveryEligibilityType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Represents features of FedEx Ground delivery for which the shipment is eligible.
 * @subpackage Enumerations
 */
class GroundDeliveryEligibilityType
{
    /**
     * Constant for value 'ALTERNATE_DAY_SERVICE'
     * @return string 'ALTERNATE_DAY_SERVICE'
     */
    const VALUE_ALTERNATE_DAY_SERVICE = 'ALTERNATE_DAY_SERVICE';
    /**
     * Constant for value 'CARTAGE_AGENT_DELIVERY'
     * @return string 'CARTAGE_AGENT_DELIVERY'
     */
    const VALUE_CARTAGE_AGENT_DELIVERY = 'CARTAGE_AGENT_DELIVERY';
    /**
     * Constant for value 'SATURDAY_DELIVERY'
     * @return string 'SATURDAY_DELIVERY'
     */
    const VALUE_SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    /**
     * Constant for value 'USPS_DELIVERY'
     * @return string 'USPS_DELIVERY'
     */
    const VALUE_USPS_DELIVERY = 'USPS_DELIVERY';
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
     * @uses self::VALUE_ALTERNATE_DAY_SERVICE
     * @uses self::VALUE_CARTAGE_AGENT_DELIVERY
     * @uses self::VALUE_SATURDAY_DELIVERY
     * @uses self::VALUE_USPS_DELIVERY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALTERNATE_DAY_SERVICE,
            self::VALUE_CARTAGE_AGENT_DELIVERY,
            self::VALUE_SATURDAY_DELIVERY,
            self::VALUE_USPS_DELIVERY,
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
