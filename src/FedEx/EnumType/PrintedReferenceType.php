<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PrintedReferenceType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a particular reference identifier printed on a Freight bill of lading.
 * @subpackage Enumerations
 */
class PrintedReferenceType
{
    /**
     * Constant for value 'BILL_OF_LADING'
     * @return string 'BILL_OF_LADING'
     */
    const VALUE_BILL_OF_LADING = 'BILL_OF_LADING';
    /**
     * Constant for value 'CONSIGNEE_ID_NUMBER'
     * @return string 'CONSIGNEE_ID_NUMBER'
     */
    const VALUE_CONSIGNEE_ID_NUMBER = 'CONSIGNEE_ID_NUMBER';
    /**
     * Constant for value 'SHIPPER_ID_NUMBER'
     * @return string 'SHIPPER_ID_NUMBER'
     */
    const VALUE_SHIPPER_ID_NUMBER = 'SHIPPER_ID_NUMBER';
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
     * @uses self::VALUE_BILL_OF_LADING
     * @uses self::VALUE_CONSIGNEE_ID_NUMBER
     * @uses self::VALUE_SHIPPER_ID_NUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BILL_OF_LADING,
            self::VALUE_CONSIGNEE_ID_NUMBER,
            self::VALUE_SHIPPER_ID_NUMBER,
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
