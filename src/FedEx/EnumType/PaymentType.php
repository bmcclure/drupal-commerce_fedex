<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PaymentType EnumType
 * @subpackage Enumerations
 */
class PaymentType
{
    /**
     * Constant for value 'SENDER'
     * @return string 'SENDER'
     */
    const VALUE_SENDER = 'SENDER';
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
     * @uses self::VALUE_SENDER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SENDER,
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
