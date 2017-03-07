<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TaxType EnumType
 * @subpackage Enumerations
 */
class TaxType
{
    /**
     * Constant for value 'EXPORT'
     * @return string 'EXPORT'
     */
    const VALUE_EXPORT = 'EXPORT';
    /**
     * Constant for value 'GST'
     * @return string 'GST'
     */
    const VALUE_GST = 'GST';
    /**
     * Constant for value 'HST'
     * @return string 'HST'
     */
    const VALUE_HST = 'HST';
    /**
     * Constant for value 'INTRACOUNTRY'
     * @return string 'INTRACOUNTRY'
     */
    const VALUE_INTRACOUNTRY = 'INTRACOUNTRY';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'PST'
     * @return string 'PST'
     */
    const VALUE_PST = 'PST';
    /**
     * Constant for value 'VAT'
     * @return string 'VAT'
     */
    const VALUE_VAT = 'VAT';
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
     * @uses self::VALUE_EXPORT
     * @uses self::VALUE_GST
     * @uses self::VALUE_HST
     * @uses self::VALUE_INTRACOUNTRY
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PST
     * @uses self::VALUE_VAT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXPORT,
            self::VALUE_GST,
            self::VALUE_HST,
            self::VALUE_INTRACOUNTRY,
            self::VALUE_OTHER,
            self::VALUE_PST,
            self::VALUE_VAT,
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
