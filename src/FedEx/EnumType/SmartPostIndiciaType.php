<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for SmartPostIndiciaType EnumType
 * @subpackage Enumerations
 */
class SmartPostIndiciaType
{
    /**
     * Constant for value 'MEDIA_MAIL'
     * @return string 'MEDIA_MAIL'
     */
    const VALUE_MEDIA_MAIL = 'MEDIA_MAIL';
    /**
     * Constant for value 'PARCEL_RETURN'
     * @return string 'PARCEL_RETURN'
     */
    const VALUE_PARCEL_RETURN = 'PARCEL_RETURN';
    /**
     * Constant for value 'PARCEL_SELECT'
     * @return string 'PARCEL_SELECT'
     */
    const VALUE_PARCEL_SELECT = 'PARCEL_SELECT';
    /**
     * Constant for value 'PRESORTED_BOUND_PRINTED_MATTER'
     * @return string 'PRESORTED_BOUND_PRINTED_MATTER'
     */
    const VALUE_PRESORTED_BOUND_PRINTED_MATTER = 'PRESORTED_BOUND_PRINTED_MATTER';
    /**
     * Constant for value 'PRESORTED_STANDARD'
     * @return string 'PRESORTED_STANDARD'
     */
    const VALUE_PRESORTED_STANDARD = 'PRESORTED_STANDARD';
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
     * @uses self::VALUE_MEDIA_MAIL
     * @uses self::VALUE_PARCEL_RETURN
     * @uses self::VALUE_PARCEL_SELECT
     * @uses self::VALUE_PRESORTED_BOUND_PRINTED_MATTER
     * @uses self::VALUE_PRESORTED_STANDARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MEDIA_MAIL,
            self::VALUE_PARCEL_RETURN,
            self::VALUE_PARCEL_SELECT,
            self::VALUE_PRESORTED_BOUND_PRINTED_MATTER,
            self::VALUE_PRESORTED_STANDARD,
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
