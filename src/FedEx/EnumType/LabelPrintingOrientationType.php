<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for LabelPrintingOrientationType EnumType
 * @subpackage Enumerations
 */
class LabelPrintingOrientationType
{
    /**
     * Constant for value 'BOTTOM_EDGE_OF_TEXT_FIRST'
     * @return string 'BOTTOM_EDGE_OF_TEXT_FIRST'
     */
    const VALUE_BOTTOM_EDGE_OF_TEXT_FIRST = 'BOTTOM_EDGE_OF_TEXT_FIRST';
    /**
     * Constant for value 'TOP_EDGE_OF_TEXT_FIRST'
     * @return string 'TOP_EDGE_OF_TEXT_FIRST'
     */
    const VALUE_TOP_EDGE_OF_TEXT_FIRST = 'TOP_EDGE_OF_TEXT_FIRST';
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
     * @uses self::VALUE_BOTTOM_EDGE_OF_TEXT_FIRST
     * @uses self::VALUE_TOP_EDGE_OF_TEXT_FIRST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BOTTOM_EDGE_OF_TEXT_FIRST,
            self::VALUE_TOP_EDGE_OF_TEXT_FIRST,
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
