<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ServiceOptionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: These values control the optional features of service that may be combined in a commitment/rate comparision transaction.
 * @subpackage Enumerations
 */
class ServiceOptionType
{
    /**
     * Constant for value 'FEDEX_ONE_RATE'
     * @return string 'FEDEX_ONE_RATE'
     */
    const VALUE_FEDEX_ONE_RATE = 'FEDEX_ONE_RATE';
    /**
     * Constant for value 'FREIGHT_GUARANTEE'
     * @return string 'FREIGHT_GUARANTEE'
     */
    const VALUE_FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';
    /**
     * Constant for value 'SATURDAY_DELIVERY'
     * @return string 'SATURDAY_DELIVERY'
     */
    const VALUE_SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    /**
     * Constant for value 'SMART_POST_ALLOWED_INDICIA'
     * @return string 'SMART_POST_ALLOWED_INDICIA'
     */
    const VALUE_SMART_POST_ALLOWED_INDICIA = 'SMART_POST_ALLOWED_INDICIA';
    /**
     * Constant for value 'SMART_POST_HUB_ID'
     * @return string 'SMART_POST_HUB_ID'
     */
    const VALUE_SMART_POST_HUB_ID = 'SMART_POST_HUB_ID';
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
     * @uses self::VALUE_FEDEX_ONE_RATE
     * @uses self::VALUE_FREIGHT_GUARANTEE
     * @uses self::VALUE_SATURDAY_DELIVERY
     * @uses self::VALUE_SMART_POST_ALLOWED_INDICIA
     * @uses self::VALUE_SMART_POST_HUB_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_ONE_RATE,
            self::VALUE_FREIGHT_GUARANTEE,
            self::VALUE_SATURDAY_DELIVERY,
            self::VALUE_SMART_POST_ALLOWED_INDICIA,
            self::VALUE_SMART_POST_HUB_ID,
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
