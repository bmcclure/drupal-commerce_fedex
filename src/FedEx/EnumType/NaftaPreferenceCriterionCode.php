<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for NaftaPreferenceCriterionCode EnumType
 * Meta informations extracted from the WSDL
 * - documentation: See instructions for NAFTA Certificate of Origin for code definitions.
 * @subpackage Enumerations
 */
class NaftaPreferenceCriterionCode
{
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'B'
     * @return string 'B'
     */
    const VALUE_B = 'B';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const VALUE_E = 'E';
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const VALUE_F = 'F';
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
     * @uses self::VALUE_A
     * @uses self::VALUE_B
     * @uses self::VALUE_C
     * @uses self::VALUE_D
     * @uses self::VALUE_E
     * @uses self::VALUE_F
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_A,
            self::VALUE_B,
            self::VALUE_C,
            self::VALUE_D,
            self::VALUE_E,
            self::VALUE_F,
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
