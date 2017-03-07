<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for FreightServiceSchedulingType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of service scheduling offered from a Freight or National Freight Service Center to a customer-supplied address.
 * @subpackage Enumerations
 */
class FreightServiceSchedulingType
{
    /**
     * Constant for value 'LIMITED'
     * @return string 'LIMITED'
     */
    const VALUE_LIMITED = 'LIMITED';
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const VALUE_STANDARD = 'STANDARD';
    /**
     * Constant for value 'WILL_CALL'
     * @return string 'WILL_CALL'
     */
    const VALUE_WILL_CALL = 'WILL_CALL';
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
     * @uses self::VALUE_LIMITED
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_WILL_CALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIMITED,
            self::VALUE_STANDARD,
            self::VALUE_WILL_CALL,
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
