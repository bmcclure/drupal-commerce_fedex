<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CodReturnReferenceIndicatorType EnumType
 * @subpackage Enumerations
 */
class CodReturnReferenceIndicatorType
{
    /**
     * Constant for value 'INVOICE'
     * @return string 'INVOICE'
     */
    const VALUE_INVOICE = 'INVOICE';
    /**
     * Constant for value 'PO'
     * @return string 'PO'
     */
    const VALUE_PO = 'PO';
    /**
     * Constant for value 'REFERENCE'
     * @return string 'REFERENCE'
     */
    const VALUE_REFERENCE = 'REFERENCE';
    /**
     * Constant for value 'TRACKING'
     * @return string 'TRACKING'
     */
    const VALUE_TRACKING = 'TRACKING';
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
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_PO
     * @uses self::VALUE_REFERENCE
     * @uses self::VALUE_TRACKING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INVOICE,
            self::VALUE_PO,
            self::VALUE_REFERENCE,
            self::VALUE_TRACKING,
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
