<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CustomsDeclarationStatementType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This indicates the different statements, declarations, acts, and certifications that may apply to a shipment.
 * @subpackage Enumerations
 */
class CustomsDeclarationStatementType
{
    /**
     * Constant for value 'NAFTA_LOW_VALUE'
     * @return string 'NAFTA_LOW_VALUE'
     */
    const VALUE_NAFTA_LOW_VALUE = 'NAFTA_LOW_VALUE';
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
     * @uses self::VALUE_NAFTA_LOW_VALUE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NAFTA_LOW_VALUE,
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
