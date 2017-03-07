<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for UploadDocumentIdProducer EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the application that is responsible for managing the document id.
 * @subpackage Enumerations
 */
class UploadDocumentIdProducer
{
    /**
     * Constant for value 'CUSTOMER'
     * @return string 'CUSTOMER'
     */
    const VALUE_CUSTOMER = 'CUSTOMER';
    /**
     * Constant for value 'FEDEX_CAFE'
     * @return string 'FEDEX_CAFE'
     */
    const VALUE_FEDEX_CAFE = 'FEDEX_CAFE';
    /**
     * Constant for value 'FEDEX_CSHP'
     * @return string 'FEDEX_CSHP'
     */
    const VALUE_FEDEX_CSHP = 'FEDEX_CSHP';
    /**
     * Constant for value 'FEDEX_FXRS'
     * @return string 'FEDEX_FXRS'
     */
    const VALUE_FEDEX_FXRS = 'FEDEX_FXRS';
    /**
     * Constant for value 'FEDEX_GSMW'
     * @return string 'FEDEX_GSMW'
     */
    const VALUE_FEDEX_GSMW = 'FEDEX_GSMW';
    /**
     * Constant for value 'FEDEX_GTM'
     * @return string 'FEDEX_GTM'
     */
    const VALUE_FEDEX_GTM = 'FEDEX_GTM';
    /**
     * Constant for value 'FEDEX_INET'
     * @return string 'FEDEX_INET'
     */
    const VALUE_FEDEX_INET = 'FEDEX_INET';
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
     * @uses self::VALUE_CUSTOMER
     * @uses self::VALUE_FEDEX_CAFE
     * @uses self::VALUE_FEDEX_CSHP
     * @uses self::VALUE_FEDEX_FXRS
     * @uses self::VALUE_FEDEX_GSMW
     * @uses self::VALUE_FEDEX_GTM
     * @uses self::VALUE_FEDEX_INET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMER,
            self::VALUE_FEDEX_CAFE,
            self::VALUE_FEDEX_CSHP,
            self::VALUE_FEDEX_FXRS,
            self::VALUE_FEDEX_GSMW,
            self::VALUE_FEDEX_GTM,
            self::VALUE_FEDEX_INET,
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
