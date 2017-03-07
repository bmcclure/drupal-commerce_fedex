<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for FreightClassType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: These values represent the industry-standard freight classes used for FedEx Freight and FedEx National Freight shipment description. (Note: The alphabetic prefixes are required to distinguish these values from decimal numbers on some
 * client platforms.)
 * @subpackage Enumerations
 */
class FreightClassType
{
    /**
     * Constant for value 'CLASS_050'
     * @return string 'CLASS_050'
     */
    const VALUE_CLASS_050 = 'CLASS_050';
    /**
     * Constant for value 'CLASS_055'
     * @return string 'CLASS_055'
     */
    const VALUE_CLASS_055 = 'CLASS_055';
    /**
     * Constant for value 'CLASS_060'
     * @return string 'CLASS_060'
     */
    const VALUE_CLASS_060 = 'CLASS_060';
    /**
     * Constant for value 'CLASS_065'
     * @return string 'CLASS_065'
     */
    const VALUE_CLASS_065 = 'CLASS_065';
    /**
     * Constant for value 'CLASS_070'
     * @return string 'CLASS_070'
     */
    const VALUE_CLASS_070 = 'CLASS_070';
    /**
     * Constant for value 'CLASS_077_5'
     * @return string 'CLASS_077_5'
     */
    const VALUE_CLASS_077_5 = 'CLASS_077_5';
    /**
     * Constant for value 'CLASS_085'
     * @return string 'CLASS_085'
     */
    const VALUE_CLASS_085 = 'CLASS_085';
    /**
     * Constant for value 'CLASS_092_5'
     * @return string 'CLASS_092_5'
     */
    const VALUE_CLASS_092_5 = 'CLASS_092_5';
    /**
     * Constant for value 'CLASS_100'
     * @return string 'CLASS_100'
     */
    const VALUE_CLASS_100 = 'CLASS_100';
    /**
     * Constant for value 'CLASS_110'
     * @return string 'CLASS_110'
     */
    const VALUE_CLASS_110 = 'CLASS_110';
    /**
     * Constant for value 'CLASS_125'
     * @return string 'CLASS_125'
     */
    const VALUE_CLASS_125 = 'CLASS_125';
    /**
     * Constant for value 'CLASS_150'
     * @return string 'CLASS_150'
     */
    const VALUE_CLASS_150 = 'CLASS_150';
    /**
     * Constant for value 'CLASS_175'
     * @return string 'CLASS_175'
     */
    const VALUE_CLASS_175 = 'CLASS_175';
    /**
     * Constant for value 'CLASS_200'
     * @return string 'CLASS_200'
     */
    const VALUE_CLASS_200 = 'CLASS_200';
    /**
     * Constant for value 'CLASS_250'
     * @return string 'CLASS_250'
     */
    const VALUE_CLASS_250 = 'CLASS_250';
    /**
     * Constant for value 'CLASS_300'
     * @return string 'CLASS_300'
     */
    const VALUE_CLASS_300 = 'CLASS_300';
    /**
     * Constant for value 'CLASS_400'
     * @return string 'CLASS_400'
     */
    const VALUE_CLASS_400 = 'CLASS_400';
    /**
     * Constant for value 'CLASS_500'
     * @return string 'CLASS_500'
     */
    const VALUE_CLASS_500 = 'CLASS_500';
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
     * @uses self::VALUE_CLASS_050
     * @uses self::VALUE_CLASS_055
     * @uses self::VALUE_CLASS_060
     * @uses self::VALUE_CLASS_065
     * @uses self::VALUE_CLASS_070
     * @uses self::VALUE_CLASS_077_5
     * @uses self::VALUE_CLASS_085
     * @uses self::VALUE_CLASS_092_5
     * @uses self::VALUE_CLASS_100
     * @uses self::VALUE_CLASS_110
     * @uses self::VALUE_CLASS_125
     * @uses self::VALUE_CLASS_150
     * @uses self::VALUE_CLASS_175
     * @uses self::VALUE_CLASS_200
     * @uses self::VALUE_CLASS_250
     * @uses self::VALUE_CLASS_300
     * @uses self::VALUE_CLASS_400
     * @uses self::VALUE_CLASS_500
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLASS_050,
            self::VALUE_CLASS_055,
            self::VALUE_CLASS_060,
            self::VALUE_CLASS_065,
            self::VALUE_CLASS_070,
            self::VALUE_CLASS_077_5,
            self::VALUE_CLASS_085,
            self::VALUE_CLASS_092_5,
            self::VALUE_CLASS_100,
            self::VALUE_CLASS_110,
            self::VALUE_CLASS_125,
            self::VALUE_CLASS_150,
            self::VALUE_CLASS_175,
            self::VALUE_CLASS_200,
            self::VALUE_CLASS_250,
            self::VALUE_CLASS_300,
            self::VALUE_CLASS_400,
            self::VALUE_CLASS_500,
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
