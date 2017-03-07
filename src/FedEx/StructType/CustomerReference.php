<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerReference StructType
 * @subpackage Structs
 */
class CustomerReference extends AbstractStructBase
{
    /**
     * The CustomerReferenceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerReferenceType;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for CustomerReference
     * @uses CustomerReference::setCustomerReferenceType()
     * @uses CustomerReference::setValue()
     * @param string $customerReferenceType
     * @param string $value
     */
    public function __construct($customerReferenceType = null, $value = null)
    {
        $this
            ->setCustomerReferenceType($customerReferenceType)
            ->setValue($value);
    }
    /**
     * Get CustomerReferenceType value
     * @return string|null
     */
    public function getCustomerReferenceType()
    {
        return $this->CustomerReferenceType;
    }
    /**
     * Set CustomerReferenceType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomerReferenceType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomerReferenceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customerReferenceType
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerReference
     */
    public function setCustomerReferenceType($customerReferenceType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\CustomerReferenceType::valueIsValid($customerReferenceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customerReferenceType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CustomerReferenceType::getValidValues())), __LINE__);
        }
        $this->CustomerReferenceType = $customerReferenceType;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerReference
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerReference
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
