<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for EdtRequestType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the types of Estimated Duties and Taxes to be included in a rate quotation for an international shipment.
 * @subpackage Enumerations
 */
class EdtRequestType
{
    /**
     * Constant for value 'ALL'
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
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
     * @uses self::VALUE_ALL
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
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
