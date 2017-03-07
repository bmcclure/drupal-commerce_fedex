<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for InternationalControlledExportType EnumType
 * @subpackage Enumerations
 */
class InternationalControlledExportType
{
    /**
     * Constant for value 'DEA_036'
     * @return string 'DEA_036'
     */
    const VALUE_DEA_036 = 'DEA_036';
    /**
     * Constant for value 'DEA_236'
     * @return string 'DEA_236'
     */
    const VALUE_DEA_236 = 'DEA_236';
    /**
     * Constant for value 'DEA_486'
     * @return string 'DEA_486'
     */
    const VALUE_DEA_486 = 'DEA_486';
    /**
     * Constant for value 'DSP_05'
     * @return string 'DSP_05'
     */
    const VALUE_DSP_05 = 'DSP_05';
    /**
     * Constant for value 'DSP_61'
     * @return string 'DSP_61'
     */
    const VALUE_DSP_61 = 'DSP_61';
    /**
     * Constant for value 'DSP_73'
     * @return string 'DSP_73'
     */
    const VALUE_DSP_73 = 'DSP_73';
    /**
     * Constant for value 'DSP_85'
     * @return string 'DSP_85'
     */
    const VALUE_DSP_85 = 'DSP_85';
    /**
     * Constant for value 'DSP_94'
     * @return string 'DSP_94'
     */
    const VALUE_DSP_94 = 'DSP_94';
    /**
     * Constant for value 'DSP_LICENSE_AGREEMENT'
     * @return string 'DSP_LICENSE_AGREEMENT'
     */
    const VALUE_DSP_LICENSE_AGREEMENT = 'DSP_LICENSE_AGREEMENT';
    /**
     * Constant for value 'FROM_FOREIGN_TRADE_ZONE'
     * @return string 'FROM_FOREIGN_TRADE_ZONE'
     */
    const VALUE_FROM_FOREIGN_TRADE_ZONE = 'FROM_FOREIGN_TRADE_ZONE';
    /**
     * Constant for value 'WAREHOUSE_WITHDRAWAL'
     * @return string 'WAREHOUSE_WITHDRAWAL'
     */
    const VALUE_WAREHOUSE_WITHDRAWAL = 'WAREHOUSE_WITHDRAWAL';
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
     * @uses self::VALUE_DEA_036
     * @uses self::VALUE_DEA_236
     * @uses self::VALUE_DEA_486
     * @uses self::VALUE_DSP_05
     * @uses self::VALUE_DSP_61
     * @uses self::VALUE_DSP_73
     * @uses self::VALUE_DSP_85
     * @uses self::VALUE_DSP_94
     * @uses self::VALUE_DSP_LICENSE_AGREEMENT
     * @uses self::VALUE_FROM_FOREIGN_TRADE_ZONE
     * @uses self::VALUE_WAREHOUSE_WITHDRAWAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEA_036,
            self::VALUE_DEA_236,
            self::VALUE_DEA_486,
            self::VALUE_DSP_05,
            self::VALUE_DSP_61,
            self::VALUE_DSP_73,
            self::VALUE_DSP_85,
            self::VALUE_DSP_94,
            self::VALUE_DSP_LICENSE_AGREEMENT,
            self::VALUE_FROM_FOREIGN_TRADE_ZONE,
            self::VALUE_WAREHOUSE_WITHDRAWAL,
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
