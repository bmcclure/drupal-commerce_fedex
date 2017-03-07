<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for MinimumChargeType EnumType
 * @subpackage Enumerations
 */
class MinimumChargeType
{
    /**
     * Constant for value 'CUSTOMER'
     * @return string 'CUSTOMER'
     */
    const VALUE_CUSTOMER = 'CUSTOMER';
    /**
     * Constant for value 'CUSTOMER_FREIGHT_WEIGHT'
     * @return string 'CUSTOMER_FREIGHT_WEIGHT'
     */
    const VALUE_CUSTOMER_FREIGHT_WEIGHT = 'CUSTOMER_FREIGHT_WEIGHT';
    /**
     * Constant for value 'EARNED_DISCOUNT'
     * @return string 'EARNED_DISCOUNT'
     */
    const VALUE_EARNED_DISCOUNT = 'EARNED_DISCOUNT';
    /**
     * Constant for value 'MIXED'
     * @return string 'MIXED'
     */
    const VALUE_MIXED = 'MIXED';
    /**
     * Constant for value 'RATE_SCALE'
     * @return string 'RATE_SCALE'
     */
    const VALUE_RATE_SCALE = 'RATE_SCALE';
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
     * @uses self::VALUE_CUSTOMER
     * @uses self::VALUE_CUSTOMER_FREIGHT_WEIGHT
     * @uses self::VALUE_EARNED_DISCOUNT
     * @uses self::VALUE_MIXED
     * @uses self::VALUE_RATE_SCALE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMER,
            self::VALUE_CUSTOMER_FREIGHT_WEIGHT,
            self::VALUE_EARNED_DISCOUNT,
            self::VALUE_MIXED,
            self::VALUE_RATE_SCALE,
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
