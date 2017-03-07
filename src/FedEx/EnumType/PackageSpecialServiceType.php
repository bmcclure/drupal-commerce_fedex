<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PackageSpecialServiceType EnumType
 * @subpackage Enumerations
 */
class PackageSpecialServiceType
{
    /**
     * Constant for value 'ALCOHOL'
     * @return string 'ALCOHOL'
     */
    const VALUE_ALCOHOL = 'ALCOHOL';
    /**
     * Constant for value 'APPOINTMENT_DELIVERY'
     * @return string 'APPOINTMENT_DELIVERY'
     */
    const VALUE_APPOINTMENT_DELIVERY = 'APPOINTMENT_DELIVERY';
    /**
     * Constant for value 'COD'
     * @return string 'COD'
     */
    const VALUE_COD = 'COD';
    /**
     * Constant for value 'DANGEROUS_GOODS'
     * @return string 'DANGEROUS_GOODS'
     */
    const VALUE_DANGEROUS_GOODS = 'DANGEROUS_GOODS';
    /**
     * Constant for value 'DRY_ICE'
     * @return string 'DRY_ICE'
     */
    const VALUE_DRY_ICE = 'DRY_ICE';
    /**
     * Constant for value 'NON_STANDARD_CONTAINER'
     * @return string 'NON_STANDARD_CONTAINER'
     */
    const VALUE_NON_STANDARD_CONTAINER = 'NON_STANDARD_CONTAINER';
    /**
     * Constant for value 'PRIORITY_ALERT'
     * @return string 'PRIORITY_ALERT'
     */
    const VALUE_PRIORITY_ALERT = 'PRIORITY_ALERT';
    /**
     * Constant for value 'SIGNATURE_OPTION'
     * @return string 'SIGNATURE_OPTION'
     */
    const VALUE_SIGNATURE_OPTION = 'SIGNATURE_OPTION';
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
     * @uses self::VALUE_ALCOHOL
     * @uses self::VALUE_APPOINTMENT_DELIVERY
     * @uses self::VALUE_COD
     * @uses self::VALUE_DANGEROUS_GOODS
     * @uses self::VALUE_DRY_ICE
     * @uses self::VALUE_NON_STANDARD_CONTAINER
     * @uses self::VALUE_PRIORITY_ALERT
     * @uses self::VALUE_SIGNATURE_OPTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALCOHOL,
            self::VALUE_APPOINTMENT_DELIVERY,
            self::VALUE_COD,
            self::VALUE_DANGEROUS_GOODS,
            self::VALUE_DRY_ICE,
            self::VALUE_NON_STANDARD_CONTAINER,
            self::VALUE_PRIORITY_ALERT,
            self::VALUE_SIGNATURE_OPTION,
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
