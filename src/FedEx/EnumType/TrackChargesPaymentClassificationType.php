<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackChargesPaymentClassificationType EnumType
 * @subpackage Enumerations
 */
class TrackChargesPaymentClassificationType
{
    /**
     * Constant for value 'DUTIES_AND_TAXES'
     * @return string 'DUTIES_AND_TAXES'
     */
    const VALUE_DUTIES_AND_TAXES = 'DUTIES_AND_TAXES';
    /**
     * Constant for value 'TRANSPORTATION'
     * @return string 'TRANSPORTATION'
     */
    const VALUE_TRANSPORTATION = 'TRANSPORTATION';
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
     * @uses self::VALUE_DUTIES_AND_TAXES
     * @uses self::VALUE_TRANSPORTATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DUTIES_AND_TAXES,
            self::VALUE_TRANSPORTATION,
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
