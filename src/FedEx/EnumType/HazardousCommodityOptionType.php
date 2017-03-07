<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for HazardousCommodityOptionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates which kind of hazardous content is being reported.
 * @subpackage Enumerations
 */
class HazardousCommodityOptionType
{
    /**
     * Constant for value 'BATTERY'
     * @return string 'BATTERY'
     */
    const VALUE_BATTERY = 'BATTERY';
    /**
     * Constant for value 'HAZARDOUS_MATERIALS'
     * @return string 'HAZARDOUS_MATERIALS'
     */
    const VALUE_HAZARDOUS_MATERIALS = 'HAZARDOUS_MATERIALS';
    /**
     * Constant for value 'LIMITED_QUANTITIES_COMMODITIES'
     * @return string 'LIMITED_QUANTITIES_COMMODITIES'
     */
    const VALUE_LIMITED_QUANTITIES_COMMODITIES = 'LIMITED_QUANTITIES_COMMODITIES';
    /**
     * Constant for value 'ORM_D'
     * @return string 'ORM_D'
     */
    const VALUE_ORM_D = 'ORM_D';
    /**
     * Constant for value 'REPORTABLE_QUANTITIES'
     * @return string 'REPORTABLE_QUANTITIES'
     */
    const VALUE_REPORTABLE_QUANTITIES = 'REPORTABLE_QUANTITIES';
    /**
     * Constant for value 'SMALL_QUANTITY_EXCEPTION'
     * @return string 'SMALL_QUANTITY_EXCEPTION'
     */
    const VALUE_SMALL_QUANTITY_EXCEPTION = 'SMALL_QUANTITY_EXCEPTION';
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
     * @uses self::VALUE_BATTERY
     * @uses self::VALUE_HAZARDOUS_MATERIALS
     * @uses self::VALUE_LIMITED_QUANTITIES_COMMODITIES
     * @uses self::VALUE_ORM_D
     * @uses self::VALUE_REPORTABLE_QUANTITIES
     * @uses self::VALUE_SMALL_QUANTITY_EXCEPTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BATTERY,
            self::VALUE_HAZARDOUS_MATERIALS,
            self::VALUE_LIMITED_QUANTITIES_COMMODITIES,
            self::VALUE_ORM_D,
            self::VALUE_REPORTABLE_QUANTITIES,
            self::VALUE_SMALL_QUANTITY_EXCEPTION,
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
