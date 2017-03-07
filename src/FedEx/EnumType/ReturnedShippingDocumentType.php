<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ReturnedShippingDocumentType EnumType
 * @subpackage Enumerations
 */
class ReturnedShippingDocumentType
{
    /**
     * Constant for value 'AUXILIARY_LABEL'
     * @return string 'AUXILIARY_LABEL'
     */
    const VALUE_AUXILIARY_LABEL = 'AUXILIARY_LABEL';
    /**
     * Constant for value 'CERTIFICATE_OF_ORIGIN'
     * @return string 'CERTIFICATE_OF_ORIGIN'
     */
    const VALUE_CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE'
     * @return string 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE'
     */
    const VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE = 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE';
    /**
     * Constant for value 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL'
     * @return string 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL'
     */
    const VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL = 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL';
    /**
     * Constant for value 'COD_RETURN_2_D_BARCODE'
     * @return string 'COD_RETURN_2_D_BARCODE'
     */
    const VALUE_COD_RETURN_2_D_BARCODE = 'COD_RETURN_2_D_BARCODE';
    /**
     * Constant for value 'COD_RETURN_LABEL'
     * @return string 'COD_RETURN_LABEL'
     */
    const VALUE_COD_RETURN_LABEL = 'COD_RETURN_LABEL';
    /**
     * Constant for value 'COMMERCIAL_INVOICE'
     * @return string 'COMMERCIAL_INVOICE'
     */
    const VALUE_COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    /**
     * Constant for value 'CUSTOM_PACKAGE_DOCUMENT'
     * @return string 'CUSTOM_PACKAGE_DOCUMENT'
     */
    const VALUE_CUSTOM_PACKAGE_DOCUMENT = 'CUSTOM_PACKAGE_DOCUMENT';
    /**
     * Constant for value 'CUSTOM_SHIPMENT_DOCUMENT'
     * @return string 'CUSTOM_SHIPMENT_DOCUMENT'
     */
    const VALUE_CUSTOM_SHIPMENT_DOCUMENT = 'CUSTOM_SHIPMENT_DOCUMENT';
    /**
     * Constant for value 'DANGEROUS_GOODS_SHIPPERS_DECLARATION'
     * @return string 'DANGEROUS_GOODS_SHIPPERS_DECLARATION'
     */
    const VALUE_DANGEROUS_GOODS_SHIPPERS_DECLARATION = 'DANGEROUS_GOODS_SHIPPERS_DECLARATION';
    /**
     * Constant for value 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE'
     * @return string 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE'
     */
    const VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE = 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE';
    /**
     * Constant for value 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL'
     * @return string 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL'
     */
    const VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL = 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL';
    /**
     * Constant for value 'ETD_LABEL'
     * @return string 'ETD_LABEL'
     */
    const VALUE_ETD_LABEL = 'ETD_LABEL';
    /**
     * Constant for value 'EXPORT_DECLARATION'
     * @return string 'EXPORT_DECLARATION'
     */
    const VALUE_EXPORT_DECLARATION = 'EXPORT_DECLARATION';
    /**
     * Constant for value 'FREIGHT_ADDRESS_LABEL'
     * @return string 'FREIGHT_ADDRESS_LABEL'
     */
    const VALUE_FREIGHT_ADDRESS_LABEL = 'FREIGHT_ADDRESS_LABEL';
    /**
     * Constant for value 'GENERAL_AGENCY_AGREEMENT'
     * @return string 'GENERAL_AGENCY_AGREEMENT'
     */
    const VALUE_GENERAL_AGENCY_AGREEMENT = 'GENERAL_AGENCY_AGREEMENT';
    /**
     * Constant for value 'GROUND_BARCODE'
     * @return string 'GROUND_BARCODE'
     */
    const VALUE_GROUND_BARCODE = 'GROUND_BARCODE';
    /**
     * Constant for value 'NAFTA_CERTIFICATE_OF_ORIGIN'
     * @return string 'NAFTA_CERTIFICATE_OF_ORIGIN'
     */
    const VALUE_NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'OP_900'
     * @return string 'OP_900'
     */
    const VALUE_OP_900 = 'OP_900';
    /**
     * Constant for value 'OUTBOUND_2_D_BARCODE'
     * @return string 'OUTBOUND_2_D_BARCODE'
     */
    const VALUE_OUTBOUND_2_D_BARCODE = 'OUTBOUND_2_D_BARCODE';
    /**
     * Constant for value 'OUTBOUND_LABEL'
     * @return string 'OUTBOUND_LABEL'
     */
    const VALUE_OUTBOUND_LABEL = 'OUTBOUND_LABEL';
    /**
     * Constant for value 'PRO_FORMA_INVOICE'
     * @return string 'PRO_FORMA_INVOICE'
     */
    const VALUE_PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
    /**
     * Constant for value 'RECIPIENT_ADDRESS_BARCODE'
     * @return string 'RECIPIENT_ADDRESS_BARCODE'
     */
    const VALUE_RECIPIENT_ADDRESS_BARCODE = 'RECIPIENT_ADDRESS_BARCODE';
    /**
     * Constant for value 'RECIPIENT_POSTAL_BARCODE'
     * @return string 'RECIPIENT_POSTAL_BARCODE'
     */
    const VALUE_RECIPIENT_POSTAL_BARCODE = 'RECIPIENT_POSTAL_BARCODE';
    /**
     * Constant for value 'RETURN_INSTRUCTIONS'
     * @return string 'RETURN_INSTRUCTIONS'
     */
    const VALUE_RETURN_INSTRUCTIONS = 'RETURN_INSTRUCTIONS';
    /**
     * Constant for value 'TERMS_AND_CONDITIONS'
     * @return string 'TERMS_AND_CONDITIONS'
     */
    const VALUE_TERMS_AND_CONDITIONS = 'TERMS_AND_CONDITIONS';
    /**
     * Constant for value 'USPS_BARCODE'
     * @return string 'USPS_BARCODE'
     */
    const VALUE_USPS_BARCODE = 'USPS_BARCODE';
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
     * @uses self::VALUE_AUXILIARY_LABEL
     * @uses self::VALUE_CERTIFICATE_OF_ORIGIN
     * @uses self::VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE
     * @uses self::VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL
     * @uses self::VALUE_COD_RETURN_2_D_BARCODE
     * @uses self::VALUE_COD_RETURN_LABEL
     * @uses self::VALUE_COMMERCIAL_INVOICE
     * @uses self::VALUE_CUSTOM_PACKAGE_DOCUMENT
     * @uses self::VALUE_CUSTOM_SHIPMENT_DOCUMENT
     * @uses self::VALUE_DANGEROUS_GOODS_SHIPPERS_DECLARATION
     * @uses self::VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE
     * @uses self::VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL
     * @uses self::VALUE_ETD_LABEL
     * @uses self::VALUE_EXPORT_DECLARATION
     * @uses self::VALUE_FREIGHT_ADDRESS_LABEL
     * @uses self::VALUE_GENERAL_AGENCY_AGREEMENT
     * @uses self::VALUE_GROUND_BARCODE
     * @uses self::VALUE_NAFTA_CERTIFICATE_OF_ORIGIN
     * @uses self::VALUE_OP_900
     * @uses self::VALUE_OUTBOUND_2_D_BARCODE
     * @uses self::VALUE_OUTBOUND_LABEL
     * @uses self::VALUE_PRO_FORMA_INVOICE
     * @uses self::VALUE_RECIPIENT_ADDRESS_BARCODE
     * @uses self::VALUE_RECIPIENT_POSTAL_BARCODE
     * @uses self::VALUE_RETURN_INSTRUCTIONS
     * @uses self::VALUE_TERMS_AND_CONDITIONS
     * @uses self::VALUE_USPS_BARCODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUXILIARY_LABEL,
            self::VALUE_CERTIFICATE_OF_ORIGIN,
            self::VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE,
            self::VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL,
            self::VALUE_COD_RETURN_2_D_BARCODE,
            self::VALUE_COD_RETURN_LABEL,
            self::VALUE_COMMERCIAL_INVOICE,
            self::VALUE_CUSTOM_PACKAGE_DOCUMENT,
            self::VALUE_CUSTOM_SHIPMENT_DOCUMENT,
            self::VALUE_DANGEROUS_GOODS_SHIPPERS_DECLARATION,
            self::VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE,
            self::VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL,
            self::VALUE_ETD_LABEL,
            self::VALUE_EXPORT_DECLARATION,
            self::VALUE_FREIGHT_ADDRESS_LABEL,
            self::VALUE_GENERAL_AGENCY_AGREEMENT,
            self::VALUE_GROUND_BARCODE,
            self::VALUE_NAFTA_CERTIFICATE_OF_ORIGIN,
            self::VALUE_OP_900,
            self::VALUE_OUTBOUND_2_D_BARCODE,
            self::VALUE_OUTBOUND_LABEL,
            self::VALUE_PRO_FORMA_INVOICE,
            self::VALUE_RECIPIENT_ADDRESS_BARCODE,
            self::VALUE_RECIPIENT_POSTAL_BARCODE,
            self::VALUE_RETURN_INSTRUCTIONS,
            self::VALUE_TERMS_AND_CONDITIONS,
            self::VALUE_USPS_BARCODE,
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
