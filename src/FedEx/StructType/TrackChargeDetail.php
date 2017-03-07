<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackChargeDetail StructType
 * @subpackage Structs
 */
class TrackChargeDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ChargeAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $ChargeAmount;
    /**
     * Constructor method for TrackChargeDetail
     * @uses TrackChargeDetail::setType()
     * @uses TrackChargeDetail::setChargeAmount()
     * @param string $type
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $chargeAmount
     */
    public function __construct($type = null, \Drupal\commerce_fedex\FedEx\StructType\Money $chargeAmount = null)
    {
        $this
            ->setType($type)
            ->setChargeAmount($chargeAmount);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TrackChargeDetailType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TrackChargeDetailType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\TrackChargeDetailType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\TrackChargeDetailType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ChargeAmount value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getChargeAmount()
    {
        return $this->ChargeAmount;
    }
    /**
     * Set ChargeAmount value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $chargeAmount
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail
     */
    public function setChargeAmount(\Drupal\commerce_fedex\FedEx\StructType\Money $chargeAmount = null)
    {
        $this->ChargeAmount = $chargeAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
