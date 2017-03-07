<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for RadioactiveContainerClassType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the packaging type of the container used to package radioactive hazardous materials.
 * @subpackage Enumerations
 */
class RadioactiveContainerClassType
{
    /**
     * Constant for value 'EXCEPTED_PACKAGE'
     * @return string 'EXCEPTED_PACKAGE'
     */
    const VALUE_EXCEPTED_PACKAGE = 'EXCEPTED_PACKAGE';
    /**
     * Constant for value 'INDUSTRIAL_IP1'
     * @return string 'INDUSTRIAL_IP1'
     */
    const VALUE_INDUSTRIAL_IP_1 = 'INDUSTRIAL_IP1';
    /**
     * Constant for value 'INDUSTRIAL_IP2'
     * @return string 'INDUSTRIAL_IP2'
     */
    const VALUE_INDUSTRIAL_IP_2 = 'INDUSTRIAL_IP2';
    /**
     * Constant for value 'INDUSTRIAL_IP3'
     * @return string 'INDUSTRIAL_IP3'
     */
    const VALUE_INDUSTRIAL_IP_3 = 'INDUSTRIAL_IP3';
    /**
     * Constant for value 'TYPE_A'
     * @return string 'TYPE_A'
     */
    const VALUE_TYPE_A = 'TYPE_A';
    /**
     * Constant for value 'TYPE_B_M'
     * @return string 'TYPE_B_M'
     */
    const VALUE_TYPE_B_M = 'TYPE_B_M';
    /**
     * Constant for value 'TYPE_B_U'
     * @return string 'TYPE_B_U'
     */
    const VALUE_TYPE_B_U = 'TYPE_B_U';
    /**
     * Constant for value 'TYPE_C'
     * @return string 'TYPE_C'
     */
    const VALUE_TYPE_C = 'TYPE_C';
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
     * @uses self::VALUE_EXCEPTED_PACKAGE
     * @uses self::VALUE_INDUSTRIAL_IP_1
     * @uses self::VALUE_INDUSTRIAL_IP_2
     * @uses self::VALUE_INDUSTRIAL_IP_3
     * @uses self::VALUE_TYPE_A
     * @uses self::VALUE_TYPE_B_M
     * @uses self::VALUE_TYPE_B_U
     * @uses self::VALUE_TYPE_C
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXCEPTED_PACKAGE,
            self::VALUE_INDUSTRIAL_IP_1,
            self::VALUE_INDUSTRIAL_IP_2,
            self::VALUE_INDUSTRIAL_IP_3,
            self::VALUE_TYPE_A,
            self::VALUE_TYPE_B_M,
            self::VALUE_TYPE_B_U,
            self::VALUE_TYPE_C,
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
