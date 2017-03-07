<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RequestedShippingDocumentType EnumType
 * @subpackage Enumerations
 */
class RequestedShippingDocumentType
{
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
     * Constant for value 'CUSTOMER_SPECIFIED_LABELS'
     * @return string 'CUSTOMER_SPECIFIED_LABELS'
     */
    const VALUE_CUSTOMER_SPECIFIED_LABELS = 'CUSTOMER_SPECIFIED_LABELS';
    /**
     * Constant for value 'DANGEROUS_GOODS_SHIPPERS_DECLARATION'
     * @return string 'DANGEROUS_GOODS_SHIPPERS_DECLARATION'
     */
    const VALUE_DANGEROUS_GOODS_SHIPPERS_DECLARATION = 'DANGEROUS_GOODS_SHIPPERS_DECLARATION';
    /**
     * Constant for value 'EXPORT_DECLARATION'
     * @return string 'EXPORT_DECLARATION'
     */
    const VALUE_EXPORT_DECLARATION = 'EXPORT_DECLARATION';
    /**
     * Constant for value 'GENERAL_AGENCY_AGREEMENT'
     * @return string 'GENERAL_AGENCY_AGREEMENT'
     */
    const VALUE_GENERAL_AGENCY_AGREEMENT = 'GENERAL_AGENCY_AGREEMENT';
    /**
     * Constant for value 'LABEL'
     * @return string 'LABEL'
     */
    const VALUE_LABEL = 'LABEL';
    /**
     * Constant for value 'NAFTA_CERTIFICATE_OF_ORIGIN'
     * @return string 'NAFTA_CERTIFICATE_OF_ORIGIN'
     */
    const VALUE_NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'PRO_FORMA_INVOICE'
     * @return string 'PRO_FORMA_INVOICE'
     */
    const VALUE_PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
    /**
     * Constant for value 'RETURN_INSTRUCTIONS'
     * @return string 'RETURN_INSTRUCTIONS'
     */
    const VALUE_RETURN_INSTRUCTIONS = 'RETURN_INSTRUCTIONS';
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
     * @uses self::VALUE_CERTIFICATE_OF_ORIGIN
     * @uses self::VALUE_COMMERCIAL_INVOICE
     * @uses self::VALUE_CUSTOMER_SPECIFIED_LABELS
     * @uses self::VALUE_DANGEROUS_GOODS_SHIPPERS_DECLARATION
     * @uses self::VALUE_EXPORT_DECLARATION
     * @uses self::VALUE_GENERAL_AGENCY_AGREEMENT
     * @uses self::VALUE_LABEL
     * @uses self::VALUE_NAFTA_CERTIFICATE_OF_ORIGIN
     * @uses self::VALUE_PRO_FORMA_INVOICE
     * @uses self::VALUE_RETURN_INSTRUCTIONS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CERTIFICATE_OF_ORIGIN,
            self::VALUE_COMMERCIAL_INVOICE,
            self::VALUE_CUSTOMER_SPECIFIED_LABELS,
            self::VALUE_DANGEROUS_GOODS_SHIPPERS_DECLARATION,
            self::VALUE_EXPORT_DECLARATION,
            self::VALUE_GENERAL_AGENCY_AGREEMENT,
            self::VALUE_LABEL,
            self::VALUE_NAFTA_CERTIFICATE_OF_ORIGIN,
            self::VALUE_PRO_FORMA_INVOICE,
            self::VALUE_RETURN_INSTRUCTIONS,
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
