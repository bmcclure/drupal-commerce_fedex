<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for AssociatedShipmentType EnumType
 * @subpackage Enumerations
 */
class AssociatedShipmentType
{
    /**
     * Constant for value 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     * @return string 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     */
    const VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN = 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN';
    /**
     * Constant for value 'COD_RETURN'
     * @return string 'COD_RETURN'
     */
    const VALUE_COD_RETURN = 'COD_RETURN';
    /**
     * Constant for value 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     * @return string 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     */
    const VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN = 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN';
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
     * @uses self::VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN
     * @uses self::VALUE_COD_RETURN
     * @uses self::VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN,
            self::VALUE_COD_RETURN,
            self::VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN,
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
