<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for AdditionalLabelsType EnumType
 * @subpackage Enumerations
 */
class AdditionalLabelsType
{
    /**
     * Constant for value 'BROKER'
     * @return string 'BROKER'
     */
    const VALUE_BROKER = 'BROKER';
    /**
     * Constant for value 'CONSIGNEE'
     * @return string 'CONSIGNEE'
     */
    const VALUE_CONSIGNEE = 'CONSIGNEE';
    /**
     * Constant for value 'CUSTOMS'
     * @return string 'CUSTOMS'
     */
    const VALUE_CUSTOMS = 'CUSTOMS';
    /**
     * Constant for value 'DESTINATION'
     * @return string 'DESTINATION'
     */
    const VALUE_DESTINATION = 'DESTINATION';
    /**
     * Constant for value 'MANIFEST'
     * @return string 'MANIFEST'
     */
    const VALUE_MANIFEST = 'MANIFEST';
    /**
     * Constant for value 'ORIGIN'
     * @return string 'ORIGIN'
     */
    const VALUE_ORIGIN = 'ORIGIN';
    /**
     * Constant for value 'RECIPIENT'
     * @return string 'RECIPIENT'
     */
    const VALUE_RECIPIENT = 'RECIPIENT';
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
     * @uses self::VALUE_BROKER
     * @uses self::VALUE_CONSIGNEE
     * @uses self::VALUE_CUSTOMS
     * @uses self::VALUE_DESTINATION
     * @uses self::VALUE_MANIFEST
     * @uses self::VALUE_ORIGIN
     * @uses self::VALUE_RECIPIENT
     * @uses self::VALUE_SHIPPER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BROKER,
            self::VALUE_CONSIGNEE,
            self::VALUE_CUSTOMS,
            self::VALUE_DESTINATION,
            self::VALUE_MANIFEST,
            self::VALUE_ORIGIN,
            self::VALUE_RECIPIENT,
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
