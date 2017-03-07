<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for EdtTaxType EnumType
 * @subpackage Enumerations
 */
class EdtTaxType
{
    /**
     * Constant for value 'ADDITIONAL_TAXES'
     * @return string 'ADDITIONAL_TAXES'
     */
    const VALUE_ADDITIONAL_TAXES = 'ADDITIONAL_TAXES';
    /**
     * Constant for value 'CONSULAR_INVOICE_FEE'
     * @return string 'CONSULAR_INVOICE_FEE'
     */
    const VALUE_CONSULAR_INVOICE_FEE = 'CONSULAR_INVOICE_FEE';
    /**
     * Constant for value 'CUSTOMS_SURCHARGES'
     * @return string 'CUSTOMS_SURCHARGES'
     */
    const VALUE_CUSTOMS_SURCHARGES = 'CUSTOMS_SURCHARGES';
    /**
     * Constant for value 'DUTY'
     * @return string 'DUTY'
     */
    const VALUE_DUTY = 'DUTY';
    /**
     * Constant for value 'EXCISE_TAX'
     * @return string 'EXCISE_TAX'
     */
    const VALUE_EXCISE_TAX = 'EXCISE_TAX';
    /**
     * Constant for value 'FOREIGN_EXCHANGE_TAX'
     * @return string 'FOREIGN_EXCHANGE_TAX'
     */
    const VALUE_FOREIGN_EXCHANGE_TAX = 'FOREIGN_EXCHANGE_TAX';
    /**
     * Constant for value 'GENERAL_SALES_TAX'
     * @return string 'GENERAL_SALES_TAX'
     */
    const VALUE_GENERAL_SALES_TAX = 'GENERAL_SALES_TAX';
    /**
     * Constant for value 'IMPORT_LICENSE_FEE'
     * @return string 'IMPORT_LICENSE_FEE'
     */
    const VALUE_IMPORT_LICENSE_FEE = 'IMPORT_LICENSE_FEE';
    /**
     * Constant for value 'INTERNAL_ADDITIONAL_TAXES'
     * @return string 'INTERNAL_ADDITIONAL_TAXES'
     */
    const VALUE_INTERNAL_ADDITIONAL_TAXES = 'INTERNAL_ADDITIONAL_TAXES';
    /**
     * Constant for value 'INTERNAL_SENSITIVE_PRODUCTS_TAX'
     * @return string 'INTERNAL_SENSITIVE_PRODUCTS_TAX'
     */
    const VALUE_INTERNAL_SENSITIVE_PRODUCTS_TAX = 'INTERNAL_SENSITIVE_PRODUCTS_TAX';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'SENSITIVE_PRODUCTS_TAX'
     * @return string 'SENSITIVE_PRODUCTS_TAX'
     */
    const VALUE_SENSITIVE_PRODUCTS_TAX = 'SENSITIVE_PRODUCTS_TAX';
    /**
     * Constant for value 'STAMP_TAX'
     * @return string 'STAMP_TAX'
     */
    const VALUE_STAMP_TAX = 'STAMP_TAX';
    /**
     * Constant for value 'STATISTICAL_TAX'
     * @return string 'STATISTICAL_TAX'
     */
    const VALUE_STATISTICAL_TAX = 'STATISTICAL_TAX';
    /**
     * Constant for value 'TRANSPORT_FACILITIES_TAX'
     * @return string 'TRANSPORT_FACILITIES_TAX'
     */
    const VALUE_TRANSPORT_FACILITIES_TAX = 'TRANSPORT_FACILITIES_TAX';
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
     * @uses self::VALUE_ADDITIONAL_TAXES
     * @uses self::VALUE_CONSULAR_INVOICE_FEE
     * @uses self::VALUE_CUSTOMS_SURCHARGES
     * @uses self::VALUE_DUTY
     * @uses self::VALUE_EXCISE_TAX
     * @uses self::VALUE_FOREIGN_EXCHANGE_TAX
     * @uses self::VALUE_GENERAL_SALES_TAX
     * @uses self::VALUE_IMPORT_LICENSE_FEE
     * @uses self::VALUE_INTERNAL_ADDITIONAL_TAXES
     * @uses self::VALUE_INTERNAL_SENSITIVE_PRODUCTS_TAX
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_SENSITIVE_PRODUCTS_TAX
     * @uses self::VALUE_STAMP_TAX
     * @uses self::VALUE_STATISTICAL_TAX
     * @uses self::VALUE_TRANSPORT_FACILITIES_TAX
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADDITIONAL_TAXES,
            self::VALUE_CONSULAR_INVOICE_FEE,
            self::VALUE_CUSTOMS_SURCHARGES,
            self::VALUE_DUTY,
            self::VALUE_EXCISE_TAX,
            self::VALUE_FOREIGN_EXCHANGE_TAX,
            self::VALUE_GENERAL_SALES_TAX,
            self::VALUE_IMPORT_LICENSE_FEE,
            self::VALUE_INTERNAL_ADDITIONAL_TAXES,
            self::VALUE_INTERNAL_SENSITIVE_PRODUCTS_TAX,
            self::VALUE_OTHER,
            self::VALUE_SENSITIVE_PRODUCTS_TAX,
            self::VALUE_STAMP_TAX,
            self::VALUE_STATISTICAL_TAX,
            self::VALUE_TRANSPORT_FACILITIES_TAX,
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
