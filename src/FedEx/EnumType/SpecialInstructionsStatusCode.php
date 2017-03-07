<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for SpecialInstructionsStatusCode EnumType
 * @subpackage Enumerations
 */
class SpecialInstructionsStatusCode
{
    /**
     * Constant for value 'ACCEPTED'
     * @return string 'ACCEPTED'
     */
    const VALUE_ACCEPTED = 'ACCEPTED';
    /**
     * Constant for value 'CANCELLED'
     * @return string 'CANCELLED'
     */
    const VALUE_CANCELLED = 'CANCELLED';
    /**
     * Constant for value 'DENIED'
     * @return string 'DENIED'
     */
    const VALUE_DENIED = 'DENIED';
    /**
     * Constant for value 'HELD'
     * @return string 'HELD'
     */
    const VALUE_HELD = 'HELD';
    /**
     * Constant for value 'MODIFIED'
     * @return string 'MODIFIED'
     */
    const VALUE_MODIFIED = 'MODIFIED';
    /**
     * Constant for value 'RELINQUISHED'
     * @return string 'RELINQUISHED'
     */
    const VALUE_RELINQUISHED = 'RELINQUISHED';
    /**
     * Constant for value 'REQUESTED'
     * @return string 'REQUESTED'
     */
    const VALUE_REQUESTED = 'REQUESTED';
    /**
     * Constant for value 'SET'
     * @return string 'SET'
     */
    const VALUE_SET = 'SET';
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
     * @uses self::VALUE_ACCEPTED
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_DENIED
     * @uses self::VALUE_HELD
     * @uses self::VALUE_MODIFIED
     * @uses self::VALUE_RELINQUISHED
     * @uses self::VALUE_REQUESTED
     * @uses self::VALUE_SET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCEPTED,
            self::VALUE_CANCELLED,
            self::VALUE_DENIED,
            self::VALUE_HELD,
            self::VALUE_MODIFIED,
            self::VALUE_RELINQUISHED,
            self::VALUE_REQUESTED,
            self::VALUE_SET,
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
