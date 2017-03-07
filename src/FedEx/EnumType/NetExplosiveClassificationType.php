<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for NetExplosiveClassificationType EnumType
 * @subpackage Enumerations
 */
class NetExplosiveClassificationType
{
    /**
     * Constant for value 'NET_EXPLOSIVE_CONTENT'
     * @return string 'NET_EXPLOSIVE_CONTENT'
     */
    const VALUE_NET_EXPLOSIVE_CONTENT = 'NET_EXPLOSIVE_CONTENT';
    /**
     * Constant for value 'NET_EXPLOSIVE_MASS'
     * @return string 'NET_EXPLOSIVE_MASS'
     */
    const VALUE_NET_EXPLOSIVE_MASS = 'NET_EXPLOSIVE_MASS';
    /**
     * Constant for value 'NET_EXPLOSIVE_QUANTITY'
     * @return string 'NET_EXPLOSIVE_QUANTITY'
     */
    const VALUE_NET_EXPLOSIVE_QUANTITY = 'NET_EXPLOSIVE_QUANTITY';
    /**
     * Constant for value 'NET_EXPLOSIVE_WEIGHT'
     * @return string 'NET_EXPLOSIVE_WEIGHT'
     */
    const VALUE_NET_EXPLOSIVE_WEIGHT = 'NET_EXPLOSIVE_WEIGHT';
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
     * @uses self::VALUE_NET_EXPLOSIVE_CONTENT
     * @uses self::VALUE_NET_EXPLOSIVE_MASS
     * @uses self::VALUE_NET_EXPLOSIVE_QUANTITY
     * @uses self::VALUE_NET_EXPLOSIVE_WEIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NET_EXPLOSIVE_CONTENT,
            self::VALUE_NET_EXPLOSIVE_MASS,
            self::VALUE_NET_EXPLOSIVE_QUANTITY,
            self::VALUE_NET_EXPLOSIVE_WEIGHT,
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
