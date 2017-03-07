<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ShippingDocumentDispositionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how to return a shipping document to the caller.
 * @subpackage Enumerations
 */
class ShippingDocumentDispositionType
{
    /**
     * Constant for value 'CONFIRMED'
     * @return string 'CONFIRMED'
     */
    const VALUE_CONFIRMED = 'CONFIRMED';
    /**
     * Constant for value 'DEFERRED_QUEUED'
     * @return string 'DEFERRED_QUEUED'
     */
    const VALUE_DEFERRED_QUEUED = 'DEFERRED_QUEUED';
    /**
     * Constant for value 'DEFERRED_RETURNED'
     * @return string 'DEFERRED_RETURNED'
     */
    const VALUE_DEFERRED_RETURNED = 'DEFERRED_RETURNED';
    /**
     * Constant for value 'DEFERRED_STORED'
     * @return string 'DEFERRED_STORED'
     */
    const VALUE_DEFERRED_STORED = 'DEFERRED_STORED';
    /**
     * Constant for value 'EMAILED'
     * @return string 'EMAILED'
     */
    const VALUE_EMAILED = 'EMAILED';
    /**
     * Constant for value 'QUEUED'
     * @return string 'QUEUED'
     */
    const VALUE_QUEUED = 'QUEUED';
    /**
     * Constant for value 'RETURNED'
     * @return string 'RETURNED'
     */
    const VALUE_RETURNED = 'RETURNED';
    /**
     * Constant for value 'STORED'
     * @return string 'STORED'
     */
    const VALUE_STORED = 'STORED';
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
     * @uses self::VALUE_CONFIRMED
     * @uses self::VALUE_DEFERRED_QUEUED
     * @uses self::VALUE_DEFERRED_RETURNED
     * @uses self::VALUE_DEFERRED_STORED
     * @uses self::VALUE_EMAILED
     * @uses self::VALUE_QUEUED
     * @uses self::VALUE_RETURNED
     * @uses self::VALUE_STORED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONFIRMED,
            self::VALUE_DEFERRED_QUEUED,
            self::VALUE_DEFERRED_RETURNED,
            self::VALUE_DEFERRED_STORED,
            self::VALUE_EMAILED,
            self::VALUE_QUEUED,
            self::VALUE_RETURNED,
            self::VALUE_STORED,
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
