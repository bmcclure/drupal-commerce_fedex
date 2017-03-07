<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RatedWeightMethod EnumType
 * @subpackage Enumerations
 */
class RatedWeightMethod
{
    /**
     * Constant for value 'ACTUAL'
     * @return string 'ACTUAL'
     */
    const VALUE_ACTUAL = 'ACTUAL';
    /**
     * Constant for value 'AVERAGE_PACKAGE_WEIGHT_MINIMUM'
     * @return string 'AVERAGE_PACKAGE_WEIGHT_MINIMUM'
     */
    const VALUE_AVERAGE_PACKAGE_WEIGHT_MINIMUM = 'AVERAGE_PACKAGE_WEIGHT_MINIMUM';
    /**
     * Constant for value 'BALLOON'
     * @return string 'BALLOON'
     */
    const VALUE_BALLOON = 'BALLOON';
    /**
     * Constant for value 'DEFAULT_WEIGHT_APPLIED'
     * @return string 'DEFAULT_WEIGHT_APPLIED'
     */
    const VALUE_DEFAULT_WEIGHT_APPLIED = 'DEFAULT_WEIGHT_APPLIED';
    /**
     * Constant for value 'DIM'
     * @return string 'DIM'
     */
    const VALUE_DIM = 'DIM';
    /**
     * Constant for value 'FREIGHT_MINIMUM'
     * @return string 'FREIGHT_MINIMUM'
     */
    const VALUE_FREIGHT_MINIMUM = 'FREIGHT_MINIMUM';
    /**
     * Constant for value 'MIXED'
     * @return string 'MIXED'
     */
    const VALUE_MIXED = 'MIXED';
    /**
     * Constant for value 'OVERSIZE'
     * @return string 'OVERSIZE'
     */
    const VALUE_OVERSIZE = 'OVERSIZE';
    /**
     * Constant for value 'OVERSIZE_1'
     * @return string 'OVERSIZE_1'
     */
    const VALUE_OVERSIZE_1 = 'OVERSIZE_1';
    /**
     * Constant for value 'OVERSIZE_2'
     * @return string 'OVERSIZE_2'
     */
    const VALUE_OVERSIZE_2 = 'OVERSIZE_2';
    /**
     * Constant for value 'OVERSIZE_3'
     * @return string 'OVERSIZE_3'
     */
    const VALUE_OVERSIZE_3 = 'OVERSIZE_3';
    /**
     * Constant for value 'PACKAGING_MINIMUM'
     * @return string 'PACKAGING_MINIMUM'
     */
    const VALUE_PACKAGING_MINIMUM = 'PACKAGING_MINIMUM';
    /**
     * Constant for value 'WEIGHT_BREAK'
     * @return string 'WEIGHT_BREAK'
     */
    const VALUE_WEIGHT_BREAK = 'WEIGHT_BREAK';
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
     * @uses self::VALUE_ACTUAL
     * @uses self::VALUE_AVERAGE_PACKAGE_WEIGHT_MINIMUM
     * @uses self::VALUE_BALLOON
     * @uses self::VALUE_DEFAULT_WEIGHT_APPLIED
     * @uses self::VALUE_DIM
     * @uses self::VALUE_FREIGHT_MINIMUM
     * @uses self::VALUE_MIXED
     * @uses self::VALUE_OVERSIZE
     * @uses self::VALUE_OVERSIZE_1
     * @uses self::VALUE_OVERSIZE_2
     * @uses self::VALUE_OVERSIZE_3
     * @uses self::VALUE_PACKAGING_MINIMUM
     * @uses self::VALUE_WEIGHT_BREAK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTUAL,
            self::VALUE_AVERAGE_PACKAGE_WEIGHT_MINIMUM,
            self::VALUE_BALLOON,
            self::VALUE_DEFAULT_WEIGHT_APPLIED,
            self::VALUE_DIM,
            self::VALUE_FREIGHT_MINIMUM,
            self::VALUE_MIXED,
            self::VALUE_OVERSIZE,
            self::VALUE_OVERSIZE_1,
            self::VALUE_OVERSIZE_2,
            self::VALUE_OVERSIZE_3,
            self::VALUE_PACKAGING_MINIMUM,
            self::VALUE_WEIGHT_BREAK,
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
