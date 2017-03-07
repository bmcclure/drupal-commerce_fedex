<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for ImageSizeType EnumType
 * @subpackage Enumerations
 */
class ImageSizeType
{
    /**
     * Constant for value 'LARGE'
     * @return string 'LARGE'
     */
    const VALUE_LARGE = 'LARGE';
    /**
     * Constant for value 'SMALL'
     * @return string 'SMALL'
     */
    const VALUE_SMALL = 'SMALL';
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
     * @uses self::VALUE_LARGE
     * @uses self::VALUE_SMALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LARGE,
            self::VALUE_SMALL,
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
