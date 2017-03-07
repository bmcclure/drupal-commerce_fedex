<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for UploadDocumentType EnumType
 * @subpackage Enumerations
 */
class UploadDocumentType
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
     * Constant for value 'ETD_LABEL'
     * @return string 'ETD_LABEL'
     */
    const VALUE_ETD_LABEL = 'ETD_LABEL';
    /**
     * Constant for value 'NAFTA_CERTIFICATE_OF_ORIGIN'
     * @return string 'NAFTA_CERTIFICATE_OF_ORIGIN'
     */
    const VALUE_NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'PRO_FORMA_INVOICE'
     * @return string 'PRO_FORMA_INVOICE'
     */
    const VALUE_PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
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
     * @uses self::VALUE_ETD_LABEL
     * @uses self::VALUE_NAFTA_CERTIFICATE_OF_ORIGIN
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PRO_FORMA_INVOICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CERTIFICATE_OF_ORIGIN,
            self::VALUE_COMMERCIAL_INVOICE,
            self::VALUE_ETD_LABEL,
            self::VALUE_NAFTA_CERTIFICATE_OF_ORIGIN,
            self::VALUE_OTHER,
            self::VALUE_PRO_FORMA_INVOICE,
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
