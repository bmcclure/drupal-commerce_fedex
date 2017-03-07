<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RecipientCustomsIdType EnumType
 * @subpackage Enumerations
 */
class RecipientCustomsIdType
{
    /**
     * Constant for value 'COMPANY'
     * @return string 'COMPANY'
     */
    const VALUE_COMPANY = 'COMPANY';
    /**
     * Constant for value 'INDIVIDUAL'
     * @return string 'INDIVIDUAL'
     */
    const VALUE_INDIVIDUAL = 'INDIVIDUAL';
    /**
     * Constant for value 'PASSPORT'
     * @return string 'PASSPORT'
     */
    const VALUE_PASSPORT = 'PASSPORT';
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
     * @uses self::VALUE_COMPANY
     * @uses self::VALUE_INDIVIDUAL
     * @uses self::VALUE_PASSPORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMPANY,
            self::VALUE_INDIVIDUAL,
            self::VALUE_PASSPORT,
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
