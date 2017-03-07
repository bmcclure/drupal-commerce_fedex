<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ExpressRegionCode EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates a FedEx Express operating region.
 * @subpackage Enumerations
 */
class ExpressRegionCode
{
    /**
     * Constant for value 'APAC'
     * @return string 'APAC'
     */
    const VALUE_APAC = 'APAC';
    /**
     * Constant for value 'CA'
     * @return string 'CA'
     */
    const VALUE_CA = 'CA';
    /**
     * Constant for value 'EMEA'
     * @return string 'EMEA'
     */
    const VALUE_EMEA = 'EMEA';
    /**
     * Constant for value 'LAC'
     * @return string 'LAC'
     */
    const VALUE_LAC = 'LAC';
    /**
     * Constant for value 'US'
     * @return string 'US'
     */
    const VALUE_US = 'US';
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
     * @uses self::VALUE_APAC
     * @uses self::VALUE_CA
     * @uses self::VALUE_EMEA
     * @uses self::VALUE_LAC
     * @uses self::VALUE_US
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APAC,
            self::VALUE_CA,
            self::VALUE_EMEA,
            self::VALUE_LAC,
            self::VALUE_US,
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
