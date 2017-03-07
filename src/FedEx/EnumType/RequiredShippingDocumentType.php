<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RequiredShippingDocumentType EnumType
 * @subpackage Enumerations
 */
class RequiredShippingDocumentType
{
    /**
     * Constant for value 'CANADIAN_B13A'
     * @return string 'CANADIAN_B13A'
     */
    const VALUE_CANADIAN_B_13_A = 'CANADIAN_B13A';
    /**
     * Constant for value 'CERTIFICATE_OF_ORIGIN'
     * @return string 'CERTIFICATE_OF_ORIGIN'
     */
    const VALUE_CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'COMMERCIAL_INVOICE'
     * @return string 'COMMERCIAL_INVOICE'
     */
    const VALUE_COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    /**
     * Constant for value 'INTERNATIONAL_AIRWAY_BILL'
     * @return string 'INTERNATIONAL_AIRWAY_BILL'
     */
    const VALUE_INTERNATIONAL_AIRWAY_BILL = 'INTERNATIONAL_AIRWAY_BILL';
    /**
     * Constant for value 'MAIL_SERVICE_AIRWAY_BILL'
     * @return string 'MAIL_SERVICE_AIRWAY_BILL'
     */
    const VALUE_MAIL_SERVICE_AIRWAY_BILL = 'MAIL_SERVICE_AIRWAY_BILL';
    /**
     * Constant for value 'SHIPPERS_EXPORT_DECLARATION'
     * @return string 'SHIPPERS_EXPORT_DECLARATION'
     */
    const VALUE_SHIPPERS_EXPORT_DECLARATION = 'SHIPPERS_EXPORT_DECLARATION';
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
     * @uses self::VALUE_CANADIAN_B_13_A
     * @uses self::VALUE_CERTIFICATE_OF_ORIGIN
     * @uses self::VALUE_COMMERCIAL_INVOICE
     * @uses self::VALUE_INTERNATIONAL_AIRWAY_BILL
     * @uses self::VALUE_MAIL_SERVICE_AIRWAY_BILL
     * @uses self::VALUE_SHIPPERS_EXPORT_DECLARATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CANADIAN_B_13_A,
            self::VALUE_CERTIFICATE_OF_ORIGIN,
            self::VALUE_COMMERCIAL_INVOICE,
            self::VALUE_INTERNATIONAL_AIRWAY_BILL,
            self::VALUE_MAIL_SERVICE_AIRWAY_BILL,
            self::VALUE_SHIPPERS_EXPORT_DECLARATION,
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
