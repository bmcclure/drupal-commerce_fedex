<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for FreightGuaranteeType EnumType
 * @subpackage Enumerations
 */
class FreightGuaranteeType
{
    /**
     * Constant for value 'GUARANTEED_DATE'
     * @return string 'GUARANTEED_DATE'
     */
    const VALUE_GUARANTEED_DATE = 'GUARANTEED_DATE';
    /**
     * Constant for value 'GUARANTEED_MORNING'
     * @return string 'GUARANTEED_MORNING'
     */
    const VALUE_GUARANTEED_MORNING = 'GUARANTEED_MORNING';
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
     * @uses self::VALUE_GUARANTEED_DATE
     * @uses self::VALUE_GUARANTEED_MORNING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GUARANTEED_DATE,
            self::VALUE_GUARANTEED_MORNING,
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
