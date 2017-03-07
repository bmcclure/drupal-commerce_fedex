<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HomeDeliveryPremiumDetail StructType
 * @subpackage Structs
 */
class HomeDeliveryPremiumDetail extends AbstractStructBase
{
    /**
     * The HomeDeliveryPremiumType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HomeDeliveryPremiumType;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * Constructor method for HomeDeliveryPremiumDetail
     * @uses HomeDeliveryPremiumDetail::setHomeDeliveryPremiumType()
     * @uses HomeDeliveryPremiumDetail::setDate()
     * @uses HomeDeliveryPremiumDetail::setPhoneNumber()
     * @param string $homeDeliveryPremiumType
     * @param string $date
     * @param string $phoneNumber
     */
    public function __construct($homeDeliveryPremiumType = null, $date = null, $phoneNumber = null)
    {
        $this
            ->setHomeDeliveryPremiumType($homeDeliveryPremiumType)
            ->setDate($date)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get HomeDeliveryPremiumType value
     * @return string|null
     */
    public function getHomeDeliveryPremiumType()
    {
        return $this->HomeDeliveryPremiumType;
    }
    /**
     * Set HomeDeliveryPremiumType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HomeDeliveryPremiumType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HomeDeliveryPremiumType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $homeDeliveryPremiumType
     * @return \Drupal\commerce_fedex\FedEx\StructType\HomeDeliveryPremiumDetail
     */
    public function setHomeDeliveryPremiumType($homeDeliveryPremiumType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\HomeDeliveryPremiumType::valueIsValid($homeDeliveryPremiumType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $homeDeliveryPremiumType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\HomeDeliveryPremiumType::getValidValues())), __LINE__);
        }
        $this->HomeDeliveryPremiumType = $homeDeliveryPremiumType;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Drupal\commerce_fedex\FedEx\StructType\HomeDeliveryPremiumDetail
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\HomeDeliveryPremiumDetail
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\HomeDeliveryPremiumDetail
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
