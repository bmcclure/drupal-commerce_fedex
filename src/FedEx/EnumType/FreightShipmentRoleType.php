<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for FreightShipmentRoleType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the role of the party submitting the transaction.
 * @subpackage Enumerations
 */
class FreightShipmentRoleType
{
    /**
     * Constant for value 'CONSIGNEE'
     * @return string 'CONSIGNEE'
     */
    const VALUE_CONSIGNEE = 'CONSIGNEE';
    /**
     * Constant for value 'SHIPPER'
     * @return string 'SHIPPER'
     */
    const VALUE_SHIPPER = 'SHIPPER';
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
     * @uses self::VALUE_CONSIGNEE
     * @uses self::VALUE_SHIPPER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONSIGNEE,
            self::VALUE_SHIPPER,
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
