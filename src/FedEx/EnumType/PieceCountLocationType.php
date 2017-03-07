<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PieceCountLocationType EnumType
 * @subpackage Enumerations
 */
class PieceCountLocationType
{
    /**
     * Constant for value 'DESTINATION'
     * @return string 'DESTINATION'
     */
    const VALUE_DESTINATION = 'DESTINATION';
    /**
     * Constant for value 'ORIGIN'
     * @return string 'ORIGIN'
     */
    const VALUE_ORIGIN = 'ORIGIN';
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
     * @uses self::VALUE_DESTINATION
     * @uses self::VALUE_ORIGIN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DESTINATION,
            self::VALUE_ORIGIN,
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
