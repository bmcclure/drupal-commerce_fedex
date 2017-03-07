<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for InternationalDocumentContentType EnumType
 * @subpackage Enumerations
 */
class InternationalDocumentContentType
{
    /**
     * Constant for value 'DOCUMENTS_ONLY'
     * @return string 'DOCUMENTS_ONLY'
     */
    const VALUE_DOCUMENTS_ONLY = 'DOCUMENTS_ONLY';
    /**
     * Constant for value 'NON_DOCUMENTS'
     * @return string 'NON_DOCUMENTS'
     */
    const VALUE_NON_DOCUMENTS = 'NON_DOCUMENTS';
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
     * @uses self::VALUE_DOCUMENTS_ONLY
     * @uses self::VALUE_NON_DOCUMENTS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DOCUMENTS_ONLY,
            self::VALUE_NON_DOCUMENTS,
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
