<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for HazardousCommodityRegulationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the source of regulation for hazardous commodity data.
 * @subpackage Enumerations
 */
class HazardousCommodityRegulationType
{
    /**
     * Constant for value 'ADR'
     * @return string 'ADR'
     */
    const VALUE_ADR = 'ADR';
    /**
     * Constant for value 'DOT'
     * @return string 'DOT'
     */
    const VALUE_DOT = 'DOT';
    /**
     * Constant for value 'IATA'
     * @return string 'IATA'
     */
    const VALUE_IATA = 'IATA';
    /**
     * Constant for value 'ORMD'
     * @return string 'ORMD'
     */
    const VALUE_ORMD = 'ORMD';
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
     * @uses self::VALUE_ADR
     * @uses self::VALUE_DOT
     * @uses self::VALUE_IATA
     * @uses self::VALUE_ORMD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADR,
            self::VALUE_DOT,
            self::VALUE_IATA,
            self::VALUE_ORMD,
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
