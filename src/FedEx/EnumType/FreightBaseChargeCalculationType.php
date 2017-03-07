<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for FreightBaseChargeCalculationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the way in which base charges for a Freight shipment or shipment leg are calculated.
 * @subpackage Enumerations
 */
class FreightBaseChargeCalculationType
{
    /**
     * Constant for value 'LINE_ITEMS'
     * @return string 'LINE_ITEMS'
     */
    const VALUE_LINE_ITEMS = 'LINE_ITEMS';
    /**
     * Constant for value 'UNIT_PRICING'
     * @return string 'UNIT_PRICING'
     */
    const VALUE_UNIT_PRICING = 'UNIT_PRICING';
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
     * @uses self::VALUE_LINE_ITEMS
     * @uses self::VALUE_UNIT_PRICING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LINE_ITEMS,
            self::VALUE_UNIT_PRICING,
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
