<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryOptionEligibilityDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details about the eligibility for a delivery option.
 * @subpackage Structs
 */
class DeliveryOptionEligibilityDetail extends AbstractStructBase
{
    /**
     * The Option
     * Meta informations extracted from the WSDL
     * - documentation: Type of delivery option.
     * - minOccurs: 0
     * @var string
     */
    public $Option;
    /**
     * The Eligibility
     * Meta informations extracted from the WSDL
     * - documentation: Eligibility of the customer for the specific delivery option.
     * - minOccurs: 0
     * @var string
     */
    public $Eligibility;
    /**
     * Constructor method for DeliveryOptionEligibilityDetail
     * @uses DeliveryOptionEligibilityDetail::setOption()
     * @uses DeliveryOptionEligibilityDetail::setEligibility()
     * @param string $option
     * @param string $eligibility
     */
    public function __construct($option = null, $eligibility = null)
    {
        $this
            ->setOption($option)
            ->setEligibility($eligibility);
    }
    /**
     * Get Option value
     * @return string|null
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DeliveryOptionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DeliveryOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $option
     * @return \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail
     */
    public function setOption($option = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\DeliveryOptionType::valueIsValid($option)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $option, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\DeliveryOptionType::getValidValues())), __LINE__);
        }
        $this->Option = $option;
        return $this;
    }
    /**
     * Get Eligibility value
     * @return string|null
     */
    public function getEligibility()
    {
        return $this->Eligibility;
    }
    /**
     * Set Eligibility value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\EligibilityType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\EligibilityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eligibility
     * @return \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail
     */
    public function setEligibility($eligibility = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\EligibilityType::valueIsValid($eligibility)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eligibility, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\EligibilityType::getValidValues())), __LINE__);
        }
        $this->Eligibility = $eligibility;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail
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
