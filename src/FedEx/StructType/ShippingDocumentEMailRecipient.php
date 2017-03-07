<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentEMailRecipient StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies an individual recipient of e-mailed shipping document(s).
 * @subpackage Structs
 */
class ShippingDocumentEMailRecipient extends AbstractStructBase
{
    /**
     * The RecipientType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the relationship of this recipient in the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $RecipientType;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Address to which the document is to be sent.
     * - minOccurs: 0
     * @var string
     */
    public $Address;
    /**
     * Constructor method for ShippingDocumentEMailRecipient
     * @uses ShippingDocumentEMailRecipient::setRecipientType()
     * @uses ShippingDocumentEMailRecipient::setAddress()
     * @param string $recipientType
     * @param string $address
     */
    public function __construct($recipientType = null, $address = null)
    {
        $this
            ->setRecipientType($recipientType)
            ->setAddress($address);
    }
    /**
     * Get RecipientType value
     * @return string|null
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }
    /**
     * Set RecipientType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\EMailNotificationRecipientType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\EMailNotificationRecipientType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $recipientType
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient
     */
    public function setRecipientType($recipientType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\EMailNotificationRecipientType::valueIsValid($recipientType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $recipientType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\EMailNotificationRecipientType::getValidValues())), __LINE__);
        }
        $this->RecipientType = $recipientType;
        return $this;
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient
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
