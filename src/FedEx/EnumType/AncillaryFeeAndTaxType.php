<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for AncillaryFeeAndTaxType EnumType
 * @subpackage Enumerations
 */
class AncillaryFeeAndTaxType
{
    /**
     * Constant for value 'CLEARANCE_ENTRY_FEE'
     * @return string 'CLEARANCE_ENTRY_FEE'
     */
    const VALUE_CLEARANCE_ENTRY_FEE = 'CLEARANCE_ENTRY_FEE';
    /**
     * Constant for value 'GOODS_AND_SERVICES_TAX'
     * @return string 'GOODS_AND_SERVICES_TAX'
     */
    const VALUE_GOODS_AND_SERVICES_TAX = 'GOODS_AND_SERVICES_TAX';
    /**
     * Constant for value 'HARMONIZED_SALES_TAX'
     * @return string 'HARMONIZED_SALES_TAX'
     */
    const VALUE_HARMONIZED_SALES_TAX = 'HARMONIZED_SALES_TAX';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
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
     * @uses self::VALUE_CLEARANCE_ENTRY_FEE
     * @uses self::VALUE_GOODS_AND_SERVICES_TAX
     * @uses self::VALUE_HARMONIZED_SALES_TAX
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLEARANCE_ENTRY_FEE,
            self::VALUE_GOODS_AND_SERVICES_TAX,
            self::VALUE_HARMONIZED_SALES_TAX,
            self::VALUE_OTHER,
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
