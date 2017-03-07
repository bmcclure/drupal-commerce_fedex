<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RegulatoryControlType EnumType
 * @subpackage Enumerations
 */
class RegulatoryControlType
{
    /**
     * Constant for value 'EU_CIRCULATION'
     * @return string 'EU_CIRCULATION'
     */
    const VALUE_EU_CIRCULATION = 'EU_CIRCULATION';
    /**
     * Constant for value 'FOOD_OR_PERISHABLE'
     * @return string 'FOOD_OR_PERISHABLE'
     */
    const VALUE_FOOD_OR_PERISHABLE = 'FOOD_OR_PERISHABLE';
    /**
     * Constant for value 'NAFTA'
     * @return string 'NAFTA'
     */
    const VALUE_NAFTA = 'NAFTA';
    /**
     * Constant for value 'NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION'
     * @return string 'NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION'
     */
    const VALUE_NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION = 'NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION';
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
     * @uses self::VALUE_EU_CIRCULATION
     * @uses self::VALUE_FOOD_OR_PERISHABLE
     * @uses self::VALUE_NAFTA
     * @uses self::VALUE_NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EU_CIRCULATION,
            self::VALUE_FOOD_OR_PERISHABLE,
            self::VALUE_NAFTA,
            self::VALUE_NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION,
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
