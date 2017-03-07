<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for EligibilityType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies different values of eligibility status
 * @subpackage Enumerations
 */
class EligibilityType
{
    /**
     * Constant for value 'ELIGIBLE'
     * @return string 'ELIGIBLE'
     */
    const VALUE_ELIGIBLE = 'ELIGIBLE';
    /**
     * Constant for value 'INELIGIBLE'
     * @return string 'INELIGIBLE'
     */
    const VALUE_INELIGIBLE = 'INELIGIBLE';
    /**
     * Constant for value 'POSSIBLY_ELIGIBLE'
     * @return string 'POSSIBLY_ELIGIBLE'
     */
    const VALUE_POSSIBLY_ELIGIBLE = 'POSSIBLY_ELIGIBLE';
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
     * @uses self::VALUE_ELIGIBLE
     * @uses self::VALUE_INELIGIBLE
     * @uses self::VALUE_POSSIBLY_ELIGIBLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ELIGIBLE,
            self::VALUE_INELIGIBLE,
            self::VALUE_POSSIBLY_ELIGIBLE,
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
