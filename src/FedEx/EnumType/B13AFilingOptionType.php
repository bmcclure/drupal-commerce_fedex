<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for B13AFilingOptionType EnumType
 * @subpackage Enumerations
 */
class B13AFilingOptionType
{
    /**
     * Constant for value 'FEDEX_TO_STAMP'
     * @return string 'FEDEX_TO_STAMP'
     */
    const VALUE_FEDEX_TO_STAMP = 'FEDEX_TO_STAMP';
    /**
     * Constant for value 'FILED_ELECTRONICALLY'
     * @return string 'FILED_ELECTRONICALLY'
     */
    const VALUE_FILED_ELECTRONICALLY = 'FILED_ELECTRONICALLY';
    /**
     * Constant for value 'MANUALLY_ATTACHED'
     * @return string 'MANUALLY_ATTACHED'
     */
    const VALUE_MANUALLY_ATTACHED = 'MANUALLY_ATTACHED';
    /**
     * Constant for value 'NOT_REQUIRED'
     * @return string 'NOT_REQUIRED'
     */
    const VALUE_NOT_REQUIRED = 'NOT_REQUIRED';
    /**
     * Constant for value 'SUMMARY_REPORTING'
     * @return string 'SUMMARY_REPORTING'
     */
    const VALUE_SUMMARY_REPORTING = 'SUMMARY_REPORTING';
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
     * @uses self::VALUE_FEDEX_TO_STAMP
     * @uses self::VALUE_FILED_ELECTRONICALLY
     * @uses self::VALUE_MANUALLY_ATTACHED
     * @uses self::VALUE_NOT_REQUIRED
     * @uses self::VALUE_SUMMARY_REPORTING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_TO_STAMP,
            self::VALUE_FILED_ELECTRONICALLY,
            self::VALUE_MANUALLY_ATTACHED,
            self::VALUE_NOT_REQUIRED,
            self::VALUE_SUMMARY_REPORTING,
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
