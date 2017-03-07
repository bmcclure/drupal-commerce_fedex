<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CarrierCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identification of a FedEx operating company (transportation).
 * @subpackage Enumerations
 */
class CarrierCodeType
{
    /**
     * Constant for value 'FDXC'
     * @return string 'FDXC'
     */
    const VALUE_FDXC = 'FDXC';
    /**
     * Constant for value 'FDXE'
     * @return string 'FDXE'
     */
    const VALUE_FDXE = 'FDXE';
    /**
     * Constant for value 'FDXG'
     * @return string 'FDXG'
     */
    const VALUE_FDXG = 'FDXG';
    /**
     * Constant for value 'FXCC'
     * @return string 'FXCC'
     */
    const VALUE_FXCC = 'FXCC';
    /**
     * Constant for value 'FXFR'
     * @return string 'FXFR'
     */
    const VALUE_FXFR = 'FXFR';
    /**
     * Constant for value 'FXSP'
     * @return string 'FXSP'
     */
    const VALUE_FXSP = 'FXSP';
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
     * @uses self::VALUE_FDXC
     * @uses self::VALUE_FDXE
     * @uses self::VALUE_FDXG
     * @uses self::VALUE_FXCC
     * @uses self::VALUE_FXFR
     * @uses self::VALUE_FXSP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FDXC,
            self::VALUE_FDXE,
            self::VALUE_FDXG,
            self::VALUE_FXCC,
            self::VALUE_FXFR,
            self::VALUE_FXSP,
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
