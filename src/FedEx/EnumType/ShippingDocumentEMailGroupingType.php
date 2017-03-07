<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ShippingDocumentEMailGroupingType EnumType
 * @subpackage Enumerations
 */
class ShippingDocumentEMailGroupingType
{
    /**
     * Constant for value 'BY_RECIPIENT'
     * @return string 'BY_RECIPIENT'
     */
    const VALUE_BY_RECIPIENT = 'BY_RECIPIENT';
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const VALUE_NONE = 'NONE';
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
     * @uses self::VALUE_BY_RECIPIENT
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BY_RECIPIENT,
            self::VALUE_NONE,
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
