<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for WeightUnits EnumType
 * @subpackage Enumerations
 */
class WeightUnits
{
    /**
     * Constant for value 'KG'
     * @return string 'KG'
     */
    const VALUE_KG = 'KG';
    /**
     * Constant for value 'LB'
     * @return string 'LB'
     */
    const VALUE_LB = 'LB';
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
     * @uses self::VALUE_KG
     * @uses self::VALUE_LB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_KG,
            self::VALUE_LB,
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
