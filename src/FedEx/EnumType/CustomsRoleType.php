<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CustomsRoleType EnumType
 * @subpackage Enumerations
 */
class CustomsRoleType
{
    /**
     * Constant for value 'EXPORTER'
     * @return string 'EXPORTER'
     */
    const VALUE_EXPORTER = 'EXPORTER';
    /**
     * Constant for value 'IMPORTER'
     * @return string 'IMPORTER'
     */
    const VALUE_IMPORTER = 'IMPORTER';
    /**
     * Constant for value 'LEGAL_AGENT'
     * @return string 'LEGAL_AGENT'
     */
    const VALUE_LEGAL_AGENT = 'LEGAL_AGENT';
    /**
     * Constant for value 'PRODUCER'
     * @return string 'PRODUCER'
     */
    const VALUE_PRODUCER = 'PRODUCER';
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
     * @uses self::VALUE_EXPORTER
     * @uses self::VALUE_IMPORTER
     * @uses self::VALUE_LEGAL_AGENT
     * @uses self::VALUE_PRODUCER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXPORTER,
            self::VALUE_IMPORTER,
            self::VALUE_LEGAL_AGENT,
            self::VALUE_PRODUCER,
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
