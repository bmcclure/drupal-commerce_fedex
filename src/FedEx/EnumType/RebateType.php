<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RebateType EnumType
 * @subpackage Enumerations
 */
class RebateType
{
    /**
     * Constant for value 'BONUS'
     * @return string 'BONUS'
     */
    const VALUE_BONUS = 'BONUS';
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
     * @uses self::VALUE_EARNED
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BONUS,
            self::VALUE_EARNED,
            self::VALUE_OTHER,
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
