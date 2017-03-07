<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for FreightRateQuoteType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of rate quote
 * @subpackage Enumerations
 */
class FreightRateQuoteType
{
    /**
     * Constant for value 'AUTOMATED'
     * @return string 'AUTOMATED'
     */
    const VALUE_AUTOMATED = 'AUTOMATED';
    /**
     * Constant for value 'MANUAL'
     * @return string 'MANUAL'
     */
    const VALUE_MANUAL = 'MANUAL';
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
     * @uses self::VALUE_AUTOMATED
     * @uses self::VALUE_MANUAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUTOMATED,
            self::VALUE_MANUAL,
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
