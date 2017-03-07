<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CodAddTransportationChargeBasisType EnumType
 * @subpackage Enumerations
 */
class CodAddTransportationChargeBasisType
{
    /**
     * Constant for value 'COD_SURCHARGE'
     * @return string 'COD_SURCHARGE'
     */
    const VALUE_COD_SURCHARGE = 'COD_SURCHARGE';
    /**
     * Constant for value 'NET_CHARGE'
     * @return string 'NET_CHARGE'
     */
    const VALUE_NET_CHARGE = 'NET_CHARGE';
    /**
     * Constant for value 'NET_FREIGHT'
     * @return string 'NET_FREIGHT'
     */
    const VALUE_NET_FREIGHT = 'NET_FREIGHT';
    /**
     * Constant for value 'TOTAL_CUSTOMER_CHARGE'
     * @return string 'TOTAL_CUSTOMER_CHARGE'
     */
    const VALUE_TOTAL_CUSTOMER_CHARGE = 'TOTAL_CUSTOMER_CHARGE';
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
     * @uses self::VALUE_COD_SURCHARGE
     * @uses self::VALUE_NET_CHARGE
     * @uses self::VALUE_NET_FREIGHT
     * @uses self::VALUE_TOTAL_CUSTOMER_CHARGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COD_SURCHARGE,
            self::VALUE_NET_CHARGE,
            self::VALUE_NET_FREIGHT,
            self::VALUE_TOTAL_CUSTOMER_CHARGE,
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
