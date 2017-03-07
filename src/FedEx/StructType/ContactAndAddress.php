<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactAndAddress StructType
 * @subpackage Structs
 */
class ContactAndAddress extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public $Contact;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $Address;
    /**
     * Constructor method for ContactAndAddress
     * @uses ContactAndAddress::setContact()
     * @uses ContactAndAddress::setAddress()
     * @param \Drupal\commerce_fedex\FedEx\StructType\Contact $contact
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $address
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\Contact $contact = null, \Drupal\commerce_fedex\FedEx\StructType\Address $address = null)
    {
        $this
            ->setContact($contact)
            ->setAddress($address);
    }
    /**
     * Get Contact value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Contact $contact
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress
     */
    public function setContact(\Drupal\commerce_fedex\FedEx\StructType\Contact $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get Address value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $address
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress
     */
    public function setAddress(\Drupal\commerce_fedex\FedEx\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress
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
