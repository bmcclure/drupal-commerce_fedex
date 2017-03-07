<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackReturnMovementStatusType EnumType
 * @subpackage Enumerations
 */
class TrackReturnMovementStatusType
{
    /**
     * Constant for value 'MOVEMENT_OCCURRED'
     * @return string 'MOVEMENT_OCCURRED'
     */
    const VALUE_MOVEMENT_OCCURRED = 'MOVEMENT_OCCURRED';
    /**
     * Constant for value 'NO_MOVEMENT'
     * @return string 'NO_MOVEMENT'
     */
    const VALUE_NO_MOVEMENT = 'NO_MOVEMENT';
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
     * @uses self::VALUE_MOVEMENT_OCCURRED
     * @uses self::VALUE_NO_MOVEMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MOVEMENT_OCCURRED,
            self::VALUE_NO_MOVEMENT,
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
