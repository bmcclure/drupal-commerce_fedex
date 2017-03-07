<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for HazardousCommodityAttributeType EnumType
 * @subpackage Enumerations
 */
class HazardousCommodityAttributeType
{
    /**
     * Constant for value 'NOT_SUBJECT_TO_REGULATIONS'
     * @return string 'NOT_SUBJECT_TO_REGULATIONS'
     */
    const VALUE_NOT_SUBJECT_TO_REGULATIONS = 'NOT_SUBJECT_TO_REGULATIONS';
    /**
     * Constant for value 'PLACARDED_VEHICLE_REQUIRED'
     * @return string 'PLACARDED_VEHICLE_REQUIRED'
     */
    const VALUE_PLACARDED_VEHICLE_REQUIRED = 'PLACARDED_VEHICLE_REQUIRED';
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
     * @uses self::VALUE_NOT_SUBJECT_TO_REGULATIONS
     * @uses self::VALUE_PLACARDED_VEHICLE_REQUIRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SUBJECT_TO_REGULATIONS,
            self::VALUE_PLACARDED_VEHICLE_REQUIRED,
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
