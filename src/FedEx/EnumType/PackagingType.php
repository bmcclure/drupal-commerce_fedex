<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for PackagingType EnumType
 * @subpackage Enumerations
 */
class PackagingType
{
    /**
     * Constant for value 'FEDEX_10KG_BOX'
     * @return string 'FEDEX_10KG_BOX'
     */
    const VALUE_FEDEX_10_KG_BOX = 'FEDEX_10KG_BOX';
    /**
     * Constant for value 'FEDEX_25KG_BOX'
     * @return string 'FEDEX_25KG_BOX'
     */
    const VALUE_FEDEX_25_KG_BOX = 'FEDEX_25KG_BOX';
    /**
     * Constant for value 'FEDEX_BOX'
     * @return string 'FEDEX_BOX'
     */
    const VALUE_FEDEX_BOX = 'FEDEX_BOX';
    /**
     * Constant for value 'FEDEX_ENVELOPE'
     * @return string 'FEDEX_ENVELOPE'
     */
    const VALUE_FEDEX_ENVELOPE = 'FEDEX_ENVELOPE';
    /**
     * Constant for value 'FEDEX_EXTRA_LARGE_BOX'
     * @return string 'FEDEX_EXTRA_LARGE_BOX'
     */
    const VALUE_FEDEX_EXTRA_LARGE_BOX = 'FEDEX_EXTRA_LARGE_BOX';
    /**
     * Constant for value 'FEDEX_LARGE_BOX'
     * @return string 'FEDEX_LARGE_BOX'
     */
    const VALUE_FEDEX_LARGE_BOX = 'FEDEX_LARGE_BOX';
    /**
     * Constant for value 'FEDEX_MEDIUM_BOX'
     * @return string 'FEDEX_MEDIUM_BOX'
     */
    const VALUE_FEDEX_MEDIUM_BOX = 'FEDEX_MEDIUM_BOX';
    /**
     * Constant for value 'FEDEX_PAK'
     * @return string 'FEDEX_PAK'
     */
    const VALUE_FEDEX_PAK = 'FEDEX_PAK';
    /**
     * Constant for value 'FEDEX_SMALL_BOX'
     * @return string 'FEDEX_SMALL_BOX'
     */
    const VALUE_FEDEX_SMALL_BOX = 'FEDEX_SMALL_BOX';
    /**
     * Constant for value 'FEDEX_TUBE'
     * @return string 'FEDEX_TUBE'
     */
    const VALUE_FEDEX_TUBE = 'FEDEX_TUBE';
    /**
     * Constant for value 'YOUR_PACKAGING'
     * @return string 'YOUR_PACKAGING'
     */
    const VALUE_YOUR_PACKAGING = 'YOUR_PACKAGING';
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
     * @uses self::VALUE_FEDEX_10_KG_BOX
     * @uses self::VALUE_FEDEX_25_KG_BOX
     * @uses self::VALUE_FEDEX_BOX
     * @uses self::VALUE_FEDEX_ENVELOPE
     * @uses self::VALUE_FEDEX_EXTRA_LARGE_BOX
     * @uses self::VALUE_FEDEX_LARGE_BOX
     * @uses self::VALUE_FEDEX_MEDIUM_BOX
     * @uses self::VALUE_FEDEX_PAK
     * @uses self::VALUE_FEDEX_SMALL_BOX
     * @uses self::VALUE_FEDEX_TUBE
     * @uses self::VALUE_YOUR_PACKAGING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_10_KG_BOX,
            self::VALUE_FEDEX_25_KG_BOX,
            self::VALUE_FEDEX_BOX,
            self::VALUE_FEDEX_ENVELOPE,
            self::VALUE_FEDEX_EXTRA_LARGE_BOX,
            self::VALUE_FEDEX_LARGE_BOX,
            self::VALUE_FEDEX_MEDIUM_BOX,
            self::VALUE_FEDEX_PAK,
            self::VALUE_FEDEX_SMALL_BOX,
            self::VALUE_FEDEX_TUBE,
            self::VALUE_YOUR_PACKAGING,
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
