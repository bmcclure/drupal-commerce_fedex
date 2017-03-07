<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for NaftaImporterSpecificationType EnumType
 * @subpackage Enumerations
 */
class NaftaImporterSpecificationType
{
    /**
     * Constant for value 'IMPORTER_OF_RECORD'
     * @return string 'IMPORTER_OF_RECORD'
     */
    const VALUE_IMPORTER_OF_RECORD = 'IMPORTER_OF_RECORD';
    /**
     * Constant for value 'RECIPIENT'
     * @return string 'RECIPIENT'
     */
    const VALUE_RECIPIENT = 'RECIPIENT';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Constant for value 'VARIOUS'
     * @return string 'VARIOUS'
     */
    const VALUE_VARIOUS = 'VARIOUS';
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
     * @uses self::VALUE_IMPORTER_OF_RECORD
     * @uses self::VALUE_RECIPIENT
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_VARIOUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IMPORTER_OF_RECORD,
            self::VALUE_RECIPIENT,
            self::VALUE_UNKNOWN,
            self::VALUE_VARIOUS,
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
