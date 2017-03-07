<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for LabelOrderType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the order in which the labels will be returned
 * @subpackage Enumerations
 */
class LabelOrderType
{
    /**
     * Constant for value 'SHIPPING_LABEL_FIRST'
     * @return string 'SHIPPING_LABEL_FIRST'
     */
    const VALUE_SHIPPING_LABEL_FIRST = 'SHIPPING_LABEL_FIRST';
    /**
     * Constant for value 'SHIPPING_LABEL_LAST'
     * @return string 'SHIPPING_LABEL_LAST'
     */
    const VALUE_SHIPPING_LABEL_LAST = 'SHIPPING_LABEL_LAST';
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
     * @uses self::VALUE_SHIPPING_LABEL_FIRST
     * @uses self::VALUE_SHIPPING_LABEL_LAST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHIPPING_LABEL_FIRST,
            self::VALUE_SHIPPING_LABEL_LAST,
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
