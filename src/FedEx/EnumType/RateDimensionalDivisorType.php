<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RateDimensionalDivisorType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the reason that a dim divisor value was chose.
 * @subpackage Enumerations
 */
class RateDimensionalDivisorType
{
    /**
     * Constant for value 'COUNTRY'
     * @return string 'COUNTRY'
     */
    const VALUE_COUNTRY = 'COUNTRY';
    /**
     * Constant for value 'CUSTOMER'
     * @return string 'CUSTOMER'
     */
    const VALUE_CUSTOMER = 'CUSTOMER';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'PRODUCT'
     * @return string 'PRODUCT'
     */
    const VALUE_PRODUCT = 'PRODUCT';
    /**
     * Constant for value 'WAIVED'
     * @return string 'WAIVED'
     */
    const VALUE_WAIVED = 'WAIVED';
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
     * @uses self::VALUE_COUNTRY
     * @uses self::VALUE_CUSTOMER
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PRODUCT
     * @uses self::VALUE_WAIVED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COUNTRY,
            self::VALUE_CUSTOMER,
            self::VALUE_OTHER,
            self::VALUE_PRODUCT,
            self::VALUE_WAIVED,
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
