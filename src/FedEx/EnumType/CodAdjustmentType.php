<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CodAdjustmentType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of adjustment was performed to the COD collection amount during rating.
 * @subpackage Enumerations
 */
class CodAdjustmentType
{
    /**
     * Constant for value 'CHARGES_ADDED'
     * @return string 'CHARGES_ADDED'
     */
    const VALUE_CHARGES_ADDED = 'CHARGES_ADDED';
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
     * @uses self::VALUE_CHARGES_ADDED
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHARGES_ADDED,
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
