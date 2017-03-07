<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for AccessorRoleType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the role that identifies the permissions the accessor of the pending shipment.
 * @subpackage Enumerations
 */
class AccessorRoleType
{
    /**
     * Constant for value 'SHIPMENT_COMPLETOR'
     * @return string 'SHIPMENT_COMPLETOR'
     */
    const VALUE_SHIPMENT_COMPLETOR = 'SHIPMENT_COMPLETOR';
    /**
     * Constant for value 'SHIPMENT_INITIATOR'
     * @return string 'SHIPMENT_INITIATOR'
     */
    const VALUE_SHIPMENT_INITIATOR = 'SHIPMENT_INITIATOR';
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
     * @uses self::VALUE_SHIPMENT_COMPLETOR
     * @uses self::VALUE_SHIPMENT_INITIATOR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHIPMENT_COMPLETOR,
            self::VALUE_SHIPMENT_INITIATOR,
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
