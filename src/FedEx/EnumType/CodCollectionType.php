<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CodCollectionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the type of funds FedEx should collect upon shipment delivery.
 * @subpackage Enumerations
 */
class CodCollectionType
{
    /**
     * Constant for value 'ANY'
     * @return string 'ANY'
     */
    const VALUE_ANY = 'ANY';
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const VALUE_CASH = 'CASH';
    /**
     * Constant for value 'GUARANTEED_FUNDS'
     * @return string 'GUARANTEED_FUNDS'
     */
    const VALUE_GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
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
     * @uses self::VALUE_ANY
     * @uses self::VALUE_CASH
     * @uses self::VALUE_GUARANTEED_FUNDS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANY,
            self::VALUE_CASH,
            self::VALUE_GUARANTEED_FUNDS,
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
