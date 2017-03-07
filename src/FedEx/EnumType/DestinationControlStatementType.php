<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for DestinationControlStatementType EnumType
 * @subpackage Enumerations
 */
class DestinationControlStatementType
{
    /**
     * Constant for value 'DEPARTMENT_OF_COMMERCE'
     * @return string 'DEPARTMENT_OF_COMMERCE'
     */
    const VALUE_DEPARTMENT_OF_COMMERCE = 'DEPARTMENT_OF_COMMERCE';
    /**
     * Constant for value 'DEPARTMENT_OF_STATE'
     * @return string 'DEPARTMENT_OF_STATE'
     */
    const VALUE_DEPARTMENT_OF_STATE = 'DEPARTMENT_OF_STATE';
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
     * @uses self::VALUE_DEPARTMENT_OF_COMMERCE
     * @uses self::VALUE_DEPARTMENT_OF_STATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEPARTMENT_OF_COMMERCE,
            self::VALUE_DEPARTMENT_OF_STATE,
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
