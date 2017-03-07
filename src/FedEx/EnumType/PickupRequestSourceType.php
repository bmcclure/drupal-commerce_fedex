<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PickupRequestSourceType EnumType
 * @subpackage Enumerations
 */
class PickupRequestSourceType
{
    /**
     * Constant for value 'AUTOMATION'
     * @return string 'AUTOMATION'
     */
    const VALUE_AUTOMATION = 'AUTOMATION';
    /**
     * Constant for value 'CUSTOMER_SERVICE'
     * @return string 'CUSTOMER_SERVICE'
     */
    const VALUE_CUSTOMER_SERVICE = 'CUSTOMER_SERVICE';
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
     * @uses self::VALUE_AUTOMATION
     * @uses self::VALUE_CUSTOMER_SERVICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUTOMATION,
            self::VALUE_CUSTOMER_SERVICE,
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
