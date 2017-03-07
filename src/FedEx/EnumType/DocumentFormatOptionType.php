<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for DocumentFormatOptionType EnumType
 * @subpackage Enumerations
 */
class DocumentFormatOptionType
{
    /**
     * Constant for value 'SUPPRESS_ADDITIONAL_LANGUAGES'
     * @return string 'SUPPRESS_ADDITIONAL_LANGUAGES'
     */
    const VALUE_SUPPRESS_ADDITIONAL_LANGUAGES = 'SUPPRESS_ADDITIONAL_LANGUAGES';
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
     * @uses self::VALUE_SUPPRESS_ADDITIONAL_LANGUAGES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUPPRESS_ADDITIONAL_LANGUAGES,
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
