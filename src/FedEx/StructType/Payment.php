<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payment StructType
 * @subpackage Structs
 */
class Payment extends AbstractStructBase
{
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The Payor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Payor
     */
    public $Payor;
    /**
     * Constructor method for Payment
     * @uses Payment::setPaymentType()
     * @uses Payment::setPayor()
     * @param string $paymentType
     * @param \Drupal\commerce_fedex\FedEx\StructType\Payor $payor
     */
    public function __construct($paymentType = null, \Drupal\commerce_fedex\FedEx\StructType\Payor $payor = null)
    {
        $this
            ->setPaymentType($paymentType)
            ->setPayor($payor);
    }
    /**
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PaymentType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \Drupal\commerce_fedex\FedEx\StructType\Payment
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\PaymentType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\PaymentType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get Payor value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Payor|null
     */
    public function getPayor()
    {
        return $this->Payor;
    }
    /**
     * Set Payor value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Payor $payor
     * @return \Drupal\commerce_fedex\FedEx\StructType\Payment
     */
    public function setPayor(\Drupal\commerce_fedex\FedEx\StructType\Payor $payor = null)
    {
        $this->Payor = $payor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\Payment
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
