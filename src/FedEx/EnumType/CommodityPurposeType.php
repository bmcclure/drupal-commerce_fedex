<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CommodityPurposeType EnumType
 * @subpackage Enumerations
 */
class CommodityPurposeType
{
    /**
     * Constant for value 'BUSINESS'
     * @return string 'BUSINESS'
     */
    const VALUE_BUSINESS = 'BUSINESS';
    /**
     * Constant for value 'CONSUMER'
     * @return string 'CONSUMER'
     */
    const VALUE_CONSUMER = 'CONSUMER';
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
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_CONSUMER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUSINESS,
            self::VALUE_CONSUMER,
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
