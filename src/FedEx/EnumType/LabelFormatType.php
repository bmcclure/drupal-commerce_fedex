<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for LabelFormatType EnumType
 * @subpackage Enumerations
 */
class LabelFormatType
{
    /**
     * Constant for value 'COMMON2D'
     * @return string 'COMMON2D'
     */
    const VALUE_COMMON_2_D = 'COMMON2D';
    /**
     * Constant for value 'LABEL_DATA_ONLY'
     * @return string 'LABEL_DATA_ONLY'
     */
    const VALUE_LABEL_DATA_ONLY = 'LABEL_DATA_ONLY';
    /**
     * Constant for value 'MAILROOM'
     * @return string 'MAILROOM'
     */
    const VALUE_MAILROOM = 'MAILROOM';
    /**
     * Constant for value 'NO_LABEL'
     * @return string 'NO_LABEL'
     */
    const VALUE_NO_LABEL = 'NO_LABEL';
    /**
     * Constant for value 'OPERATIONAL_LABEL'
     * @return string 'OPERATIONAL_LABEL'
     */
    const VALUE_OPERATIONAL_LABEL = 'OPERATIONAL_LABEL';
    /**
     * Constant for value 'PRE_COMMON2D'
     * @return string 'PRE_COMMON2D'
     */
    const VALUE_PRE_COMMON_2_D = 'PRE_COMMON2D';
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
     * @uses self::VALUE_COMMON_2_D
     * @uses self::VALUE_LABEL_DATA_ONLY
     * @uses self::VALUE_MAILROOM
     * @uses self::VALUE_NO_LABEL
     * @uses self::VALUE_OPERATIONAL_LABEL
     * @uses self::VALUE_PRE_COMMON_2_D
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMMON_2_D,
            self::VALUE_LABEL_DATA_ONLY,
            self::VALUE_MAILROOM,
            self::VALUE_NO_LABEL,
            self::VALUE_OPERATIONAL_LABEL,
            self::VALUE_PRE_COMMON_2_D,
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
