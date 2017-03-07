<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for NaftaNetCostMethodCode EnumType
 * @subpackage Enumerations
 */
class NaftaNetCostMethodCode
{
    /**
     * Constant for value 'NC'
     * @return string 'NC'
     */
    const VALUE_NC = 'NC';
    /**
     * Constant for value 'NO'
     * @return string 'NO'
     */
    const VALUE_NO = 'NO';
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
     * @uses self::VALUE_NC
     * @uses self::VALUE_NO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NC,
            self::VALUE_NO,
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
