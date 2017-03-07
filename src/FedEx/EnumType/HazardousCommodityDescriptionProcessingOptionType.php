<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for HazardousCommodityDescriptionProcessingOptionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies any special processing to be applied to the dangerous goods commodity description validation.
 * @subpackage Enumerations
 */
class HazardousCommodityDescriptionProcessingOptionType
{
    /**
     * Constant for value 'INCLUDE_SPECIAL_PROVISIONS'
     * @return string 'INCLUDE_SPECIAL_PROVISIONS'
     */
    const VALUE_INCLUDE_SPECIAL_PROVISIONS = 'INCLUDE_SPECIAL_PROVISIONS';
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
     * @uses self::VALUE_INCLUDE_SPECIAL_PROVISIONS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCLUDE_SPECIAL_PROVISIONS,
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
