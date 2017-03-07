<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnEMailDetail StructType
 * @subpackage Structs
 */
class ReturnEMailDetail extends AbstractStructBase
{
    /**
     * The MerchantPhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MerchantPhoneNumber;
    /**
     * The AllowedSpecialServices
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created. Only services represented in EMailLabelAllowedSpecialServiceType will be controlled by this list.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AllowedSpecialServices;
    /**
     * Constructor method for ReturnEMailDetail
     * @uses ReturnEMailDetail::setMerchantPhoneNumber()
     * @uses ReturnEMailDetail::setAllowedSpecialServices()
     * @param string $merchantPhoneNumber
     * @param string[] $allowedSpecialServices
     */
    public function __construct($merchantPhoneNumber = null, array $allowedSpecialServices = array())
    {
        $this
            ->setMerchantPhoneNumber($merchantPhoneNumber)
            ->setAllowedSpecialServices($allowedSpecialServices);
    }
    /**
     * Get MerchantPhoneNumber value
     * @return string|null
     */
    public function getMerchantPhoneNumber()
    {
        return $this->MerchantPhoneNumber;
    }
    /**
     * Set MerchantPhoneNumber value
     * @param string $merchantPhoneNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnEMailDetail
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($merchantPhoneNumber) && !is_string($merchantPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchantPhoneNumber)), __LINE__);
        }
        $this->MerchantPhoneNumber = $merchantPhoneNumber;
        return $this;
    }
    /**
     * Get AllowedSpecialServices value
     * @return string[]|null
     */
    public function getAllowedSpecialServices()
    {
        return $this->AllowedSpecialServices;
    }
    /**
     * Set AllowedSpecialServices value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnEMailAllowedSpecialServiceType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnEMailAllowedSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $allowedSpecialServices
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnEMailDetail
     */
    public function setAllowedSpecialServices(array $allowedSpecialServices = array())
    {
        $invalidValues = array();
        foreach ($allowedSpecialServices as $returnEMailDetailAllowedSpecialServicesItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\ReturnEMailAllowedSpecialServiceType::valueIsValid($returnEMailDetailAllowedSpecialServicesItem)) {
                $invalidValues[] = var_export($returnEMailDetailAllowedSpecialServicesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ReturnEMailAllowedSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->AllowedSpecialServices = $allowedSpecialServices;
        return $this;
    }
    /**
     * Add item to AllowedSpecialServices value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnEMailAllowedSpecialServiceType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnEMailAllowedSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnEMailDetail
     */
    public function addToAllowedSpecialServices($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ReturnEMailAllowedSpecialServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ReturnEMailAllowedSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->AllowedSpecialServices[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnEMailDetail
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
