<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackPaymentType EnumType
 * @subpackage Enumerations
 */
class TrackPaymentType
{
    /**
     * Constant for value 'CASH_OR_CHECK_AT_DESTINATION'
     * @return string 'CASH_OR_CHECK_AT_DESTINATION'
     */
    const VALUE_CASH_OR_CHECK_AT_DESTINATION = 'CASH_OR_CHECK_AT_DESTINATION';
    /**
     * Constant for value 'CASH_OR_CHECK_AT_ORIGIN'
     * @return string 'CASH_OR_CHECK_AT_ORIGIN'
     */
    const VALUE_CASH_OR_CHECK_AT_ORIGIN = 'CASH_OR_CHECK_AT_ORIGIN';
    /**
     * Constant for value 'CREDIT_CARD_AT_DESTINATION'
     * @return string 'CREDIT_CARD_AT_DESTINATION'
     */
    const VALUE_CREDIT_CARD_AT_DESTINATION = 'CREDIT_CARD_AT_DESTINATION';
    /**
     * Constant for value 'CREDIT_CARD_AT_ORIGIN'
     * @return string 'CREDIT_CARD_AT_ORIGIN'
     */
    const VALUE_CREDIT_CARD_AT_ORIGIN = 'CREDIT_CARD_AT_ORIGIN';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'RECIPIENT_ACCOUNT'
     * @return string 'RECIPIENT_ACCOUNT'
     */
    const VALUE_RECIPIENT_ACCOUNT = 'RECIPIENT_ACCOUNT';
    /**
     * Constant for value 'SHIPPER_ACCOUNT'
     * @return string 'SHIPPER_ACCOUNT'
     */
    const VALUE_SHIPPER_ACCOUNT = 'SHIPPER_ACCOUNT';
    /**
     * Constant for value 'THIRD_PARTY_ACCOUNT'
     * @return string 'THIRD_PARTY_ACCOUNT'
     */
    const VALUE_THIRD_PARTY_ACCOUNT = 'THIRD_PARTY_ACCOUNT';
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
     * @uses self::VALUE_CASH_OR_CHECK_AT_DESTINATION
     * @uses self::VALUE_CASH_OR_CHECK_AT_ORIGIN
     * @uses self::VALUE_CREDIT_CARD_AT_DESTINATION
     * @uses self::VALUE_CREDIT_CARD_AT_ORIGIN
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_RECIPIENT_ACCOUNT
     * @uses self::VALUE_SHIPPER_ACCOUNT
     * @uses self::VALUE_THIRD_PARTY_ACCOUNT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CASH_OR_CHECK_AT_DESTINATION,
            self::VALUE_CASH_OR_CHECK_AT_ORIGIN,
            self::VALUE_CREDIT_CARD_AT_DESTINATION,
            self::VALUE_CREDIT_CARD_AT_ORIGIN,
            self::VALUE_OTHER,
            self::VALUE_RECIPIENT_ACCOUNT,
            self::VALUE_SHIPPER_ACCOUNT,
            self::VALUE_THIRD_PARTY_ACCOUNT,
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
