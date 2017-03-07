<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for StringBarcodeType EnumType
 * @subpackage Enumerations
 */
class StringBarcodeType
{
    /**
     * Constant for value 'ADDRESS'
     * @return string 'ADDRESS'
     */
    const VALUE_ADDRESS = 'ADDRESS';
    /**
     * Constant for value 'ASTRA'
     * @return string 'ASTRA'
     */
    const VALUE_ASTRA = 'ASTRA';
    /**
     * Constant for value 'FEDEX_1D'
     * @return string 'FEDEX_1D'
     */
    const VALUE_FEDEX_1_D = 'FEDEX_1D';
    /**
     * Constant for value 'GROUND'
     * @return string 'GROUND'
     */
    const VALUE_GROUND = 'GROUND';
    /**
     * Constant for value 'POSTAL'
     * @return string 'POSTAL'
     */
    const VALUE_POSTAL = 'POSTAL';
    /**
     * Constant for value 'USPS'
     * @return string 'USPS'
     */
    const VALUE_USPS = 'USPS';
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
     * @uses self::VALUE_ADDRESS
     * @uses self::VALUE_ASTRA
     * @uses self::VALUE_FEDEX_1_D
     * @uses self::VALUE_GROUND
     * @uses self::VALUE_POSTAL
     * @uses self::VALUE_USPS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADDRESS,
            self::VALUE_ASTRA,
            self::VALUE_FEDEX_1_D,
            self::VALUE_GROUND,
            self::VALUE_POSTAL,
            self::VALUE_USPS,
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
