<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for FreightCollectTermsType EnumType
 * @subpackage Enumerations
 */
class FreightCollectTermsType
{
    /**
     * Constant for value 'NON_RECOURSE_SHIPPER_SIGNED'
     * @return string 'NON_RECOURSE_SHIPPER_SIGNED'
     */
    const VALUE_NON_RECOURSE_SHIPPER_SIGNED = 'NON_RECOURSE_SHIPPER_SIGNED';
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const VALUE_STANDARD = 'STANDARD';
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
     * @uses self::VALUE_NON_RECOURSE_SHIPPER_SIGNED
     * @uses self::VALUE_STANDARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NON_RECOURSE_SHIPPER_SIGNED,
            self::VALUE_STANDARD,
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
