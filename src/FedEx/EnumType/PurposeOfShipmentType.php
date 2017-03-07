<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PurposeOfShipmentType EnumType
 * @subpackage Enumerations
 */
class PurposeOfShipmentType
{
    /**
     * Constant for value 'GIFT'
     * @return string 'GIFT'
     */
    const VALUE_GIFT = 'GIFT';
    /**
     * Constant for value 'NOT_SOLD'
     * @return string 'NOT_SOLD'
     */
    const VALUE_NOT_SOLD = 'NOT_SOLD';
    /**
     * Constant for value 'PERSONAL_EFFECTS'
     * @return string 'PERSONAL_EFFECTS'
     */
    const VALUE_PERSONAL_EFFECTS = 'PERSONAL_EFFECTS';
    /**
     * Constant for value 'REPAIR_AND_RETURN'
     * @return string 'REPAIR_AND_RETURN'
     */
    const VALUE_REPAIR_AND_RETURN = 'REPAIR_AND_RETURN';
    /**
     * Constant for value 'SAMPLE'
     * @return string 'SAMPLE'
     */
    const VALUE_SAMPLE = 'SAMPLE';
    /**
     * Constant for value 'SOLD'
     * @return string 'SOLD'
     */
    const VALUE_SOLD = 'SOLD';
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
     * @uses self::VALUE_GIFT
     * @uses self::VALUE_NOT_SOLD
     * @uses self::VALUE_PERSONAL_EFFECTS
     * @uses self::VALUE_REPAIR_AND_RETURN
     * @uses self::VALUE_SAMPLE
     * @uses self::VALUE_SOLD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GIFT,
            self::VALUE_NOT_SOLD,
            self::VALUE_PERSONAL_EFFECTS,
            self::VALUE_REPAIR_AND_RETURN,
            self::VALUE_SAMPLE,
            self::VALUE_SOLD,
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
