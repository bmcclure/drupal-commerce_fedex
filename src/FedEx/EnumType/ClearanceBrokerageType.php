<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ClearanceBrokerageType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of brokerage to be applied to a shipment.
 * @subpackage Enumerations
 */
class ClearanceBrokerageType
{
    /**
     * Constant for value 'BROKER_INCLUSIVE'
     * @return string 'BROKER_INCLUSIVE'
     */
    const VALUE_BROKER_INCLUSIVE = 'BROKER_INCLUSIVE';
    /**
     * Constant for value 'BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER'
     * @return string 'BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER'
     */
    const VALUE_BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER = 'BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER';
    /**
     * Constant for value 'BROKER_SELECT'
     * @return string 'BROKER_SELECT'
     */
    const VALUE_BROKER_SELECT = 'BROKER_SELECT';
    /**
     * Constant for value 'BROKER_SELECT_NON_RESIDENT_IMPORTER'
     * @return string 'BROKER_SELECT_NON_RESIDENT_IMPORTER'
     */
    const VALUE_BROKER_SELECT_NON_RESIDENT_IMPORTER = 'BROKER_SELECT_NON_RESIDENT_IMPORTER';
    /**
     * Constant for value 'BROKER_UNASSIGNED'
     * @return string 'BROKER_UNASSIGNED'
     */
    const VALUE_BROKER_UNASSIGNED = 'BROKER_UNASSIGNED';
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
     * @uses self::VALUE_BROKER_INCLUSIVE
     * @uses self::VALUE_BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER
     * @uses self::VALUE_BROKER_SELECT
     * @uses self::VALUE_BROKER_SELECT_NON_RESIDENT_IMPORTER
     * @uses self::VALUE_BROKER_UNASSIGNED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BROKER_INCLUSIVE,
            self::VALUE_BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER,
            self::VALUE_BROKER_SELECT,
            self::VALUE_BROKER_SELECT_NON_RESIDENT_IMPORTER,
            self::VALUE_BROKER_UNASSIGNED,
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
