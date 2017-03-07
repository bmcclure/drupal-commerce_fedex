<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ConsolidationType EnumType
 * @subpackage Enumerations
 */
class ConsolidationType
{
    /**
     * Constant for value 'INTERNATIONAL_DISTRIBUTION_FREIGHT'
     * @return string 'INTERNATIONAL_DISTRIBUTION_FREIGHT'
     */
    const VALUE_INTERNATIONAL_DISTRIBUTION_FREIGHT = 'INTERNATIONAL_DISTRIBUTION_FREIGHT';
    /**
     * Constant for value 'INTERNATIONAL_ECONOMY_DISTRIBUTION'
     * @return string 'INTERNATIONAL_ECONOMY_DISTRIBUTION'
     */
    const VALUE_INTERNATIONAL_ECONOMY_DISTRIBUTION = 'INTERNATIONAL_ECONOMY_DISTRIBUTION';
    /**
     * Constant for value 'INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION'
     * @return string 'INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION'
     */
    const VALUE_INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION = 'INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION';
    /**
     * Constant for value 'INTERNATIONAL_GROUND_DISTRIBUTION'
     * @return string 'INTERNATIONAL_GROUND_DISTRIBUTION'
     */
    const VALUE_INTERNATIONAL_GROUND_DISTRIBUTION = 'INTERNATIONAL_GROUND_DISTRIBUTION';
    /**
     * Constant for value 'INTERNATIONAL_PRIORITY_DISTRIBUTION'
     * @return string 'INTERNATIONAL_PRIORITY_DISTRIBUTION'
     */
    const VALUE_INTERNATIONAL_PRIORITY_DISTRIBUTION = 'INTERNATIONAL_PRIORITY_DISTRIBUTION';
    /**
     * Constant for value 'TRANSBORDER_DISTRIBUTION'
     * @return string 'TRANSBORDER_DISTRIBUTION'
     */
    const VALUE_TRANSBORDER_DISTRIBUTION = 'TRANSBORDER_DISTRIBUTION';
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
     * @uses self::VALUE_INTERNATIONAL_DISTRIBUTION_FREIGHT
     * @uses self::VALUE_INTERNATIONAL_ECONOMY_DISTRIBUTION
     * @uses self::VALUE_INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION
     * @uses self::VALUE_INTERNATIONAL_GROUND_DISTRIBUTION
     * @uses self::VALUE_INTERNATIONAL_PRIORITY_DISTRIBUTION
     * @uses self::VALUE_TRANSBORDER_DISTRIBUTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INTERNATIONAL_DISTRIBUTION_FREIGHT,
            self::VALUE_INTERNATIONAL_ECONOMY_DISTRIBUTION,
            self::VALUE_INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION,
            self::VALUE_INTERNATIONAL_GROUND_DISTRIBUTION,
            self::VALUE_INTERNATIONAL_PRIORITY_DISTRIBUTION,
            self::VALUE_TRANSBORDER_DISTRIBUTION,
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
