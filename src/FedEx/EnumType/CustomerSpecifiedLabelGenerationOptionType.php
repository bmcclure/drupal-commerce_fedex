<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CustomerSpecifiedLabelGenerationOptionType EnumType
 * @subpackage Enumerations
 */
class CustomerSpecifiedLabelGenerationOptionType
{
    /**
     * Constant for value 'CONTENT_ON_SHIPPING_LABEL_ONLY'
     * @return string 'CONTENT_ON_SHIPPING_LABEL_ONLY'
     */
    const VALUE_CONTENT_ON_SHIPPING_LABEL_ONLY = 'CONTENT_ON_SHIPPING_LABEL_ONLY';
    /**
     * Constant for value 'CONTENT_ON_SHIPPING_LABEL_PREFERRED'
     * @return string 'CONTENT_ON_SHIPPING_LABEL_PREFERRED'
     */
    const VALUE_CONTENT_ON_SHIPPING_LABEL_PREFERRED = 'CONTENT_ON_SHIPPING_LABEL_PREFERRED';
    /**
     * Constant for value 'CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY'
     * @return string 'CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY'
     */
    const VALUE_CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY = 'CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY';
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
     * @uses self::VALUE_CONTENT_ON_SHIPPING_LABEL_ONLY
     * @uses self::VALUE_CONTENT_ON_SHIPPING_LABEL_PREFERRED
     * @uses self::VALUE_CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONTENT_ON_SHIPPING_LABEL_ONLY,
            self::VALUE_CONTENT_ON_SHIPPING_LABEL_PREFERRED,
            self::VALUE_CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY,
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
