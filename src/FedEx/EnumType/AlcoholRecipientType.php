<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for AlcoholRecipientType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of license that the recipient of the alcohol shipment has.
 * @subpackage Enumerations
 */
class AlcoholRecipientType
{
    /**
     * Constant for value 'CONSUMER'
     * @return string 'CONSUMER'
     */
    const VALUE_CONSUMER = 'CONSUMER';
    /**
     * Constant for value 'LICENSEE'
     * @return string 'LICENSEE'
     */
    const VALUE_LICENSEE = 'LICENSEE';
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
     * @uses self::VALUE_CONSUMER
     * @uses self::VALUE_LICENSEE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONSUMER,
            self::VALUE_LICENSEE,
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
