<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for UploadDocumentProducerType EnumType
 * @subpackage Enumerations
 */
class UploadDocumentProducerType
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
     * Constant for value 'FEDEX_CLS'
     * @return string 'FEDEX_CLS'
     */
    const VALUE_FEDEX_CLS = 'FEDEX_CLS';
    /**
     * Constant for value 'FEDEX_FIDT'
     * @return string 'FEDEX_FIDT'
     */
    const VALUE_FEDEX_FIDT = 'FEDEX_FIDT';
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
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
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
     * @uses self::VALUE_FEDEX_CLS
     * @uses self::VALUE_FEDEX_FIDT
     * @uses self::VALUE_FEDEX_FXRS
     * @uses self::VALUE_FEDEX_GSMW
     * @uses self::VALUE_FEDEX_GTM
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMER,
            self::VALUE_FEDEX_CAFE,
            self::VALUE_FEDEX_CLS,
            self::VALUE_FEDEX_FIDT,
            self::VALUE_FEDEX_FXRS,
            self::VALUE_FEDEX_GSMW,
            self::VALUE_FEDEX_GTM,
            self::VALUE_OTHER,
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
