<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TaxesOrMiscellaneousChargeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifice the kind of tax or miscellaneous charge being reported on a Commercial Invoice.
 * @subpackage Enumerations
 */
class TaxesOrMiscellaneousChargeType
{
    /**
     * Constant for value 'COMMISSIONS'
     * @return string 'COMMISSIONS'
     */
    const VALUE_COMMISSIONS = 'COMMISSIONS';
    /**
     * Constant for value 'DISCOUNTS'
     * @return string 'DISCOUNTS'
     */
    const VALUE_DISCOUNTS = 'DISCOUNTS';
    /**
     * Constant for value 'HANDLING_FEES'
     * @return string 'HANDLING_FEES'
     */
    const VALUE_HANDLING_FEES = 'HANDLING_FEES';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'ROYALTIES_AND_LICENSE_FEES'
     * @return string 'ROYALTIES_AND_LICENSE_FEES'
     */
    const VALUE_ROYALTIES_AND_LICENSE_FEES = 'ROYALTIES_AND_LICENSE_FEES';
    /**
     * Constant for value 'TAXES'
     * @return string 'TAXES'
     */
    const VALUE_TAXES = 'TAXES';
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
     * @uses self::VALUE_COMMISSIONS
     * @uses self::VALUE_DISCOUNTS
     * @uses self::VALUE_HANDLING_FEES
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_ROYALTIES_AND_LICENSE_FEES
     * @uses self::VALUE_TAXES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMMISSIONS,
            self::VALUE_DISCOUNTS,
            self::VALUE_HANDLING_FEES,
            self::VALUE_OTHER,
            self::VALUE_ROYALTIES_AND_LICENSE_FEES,
            self::VALUE_TAXES,
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
