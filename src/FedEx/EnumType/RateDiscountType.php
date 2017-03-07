<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RateDiscountType EnumType
 * @subpackage Enumerations
 */
class RateDiscountType
{
    /**
     * Constant for value 'BONUS'
     * @return string 'BONUS'
     */
    const VALUE_BONUS = 'BONUS';
    /**
     * Constant for value 'COUPON'
     * @return string 'COUPON'
     */
    const VALUE_COUPON = 'COUPON';
    /**
     * Constant for value 'EARNED'
     * @return string 'EARNED'
     */
    const VALUE_EARNED = 'EARNED';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'VOLUME'
     * @return string 'VOLUME'
     */
    const VALUE_VOLUME = 'VOLUME';
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
     * @uses self::VALUE_BONUS
     * @uses self::VALUE_COUPON
     * @uses self::VALUE_EARNED
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_VOLUME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BONUS,
            self::VALUE_COUPON,
            self::VALUE_EARNED,
            self::VALUE_OTHER,
            self::VALUE_VOLUME,
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
