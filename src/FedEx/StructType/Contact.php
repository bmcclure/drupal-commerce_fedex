<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contact StructType
 * Meta informations extracted from the WSDL
 * - documentation: The descriptive data for a point-of-contact person.
 * @subpackage Structs
 */
class Contact extends AbstractStructBase
{
    /**
     * The ContactId
     * Meta informations extracted from the WSDL
     * - documentation: Client provided identifier corresponding to this contact information.
     * - minOccurs: 0
     * @var string
     */
    public $ContactId;
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the contact person's name.
     * - minOccurs: 0
     * @var string
     */
    public $PersonName;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the contact person's title.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the company this contact is associated with.
     * - minOccurs: 0
     * @var string
     */
    public $CompanyName;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the phone number associated with this contact.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The PhoneExtension
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the phone extension associated with this contact.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneExtension;
    /**
     * The TollFreePhoneNumber
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a toll free number, if any, associated with this contact.
     * - minOccurs: 0
     * @var string
     */
    public $TollFreePhoneNumber;
    /**
     * The PagerNumber
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the pager number associated with this contact.
     * - minOccurs: 0
     * @var string
     */
    public $PagerNumber;
    /**
     * The FaxNumber
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the fax number associated with this contact.
     * - minOccurs: 0
     * @var string
     */
    public $FaxNumber;
    /**
     * The EMailAddress
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the email address associated with this contact.
     * - minOccurs: 0
     * @var string
     */
    public $EMailAddress;
    /**
     * Constructor method for Contact
     * @uses Contact::setContactId()
     * @uses Contact::setPersonName()
     * @uses Contact::setTitle()
     * @uses Contact::setCompanyName()
     * @uses Contact::setPhoneNumber()
     * @uses Contact::setPhoneExtension()
     * @uses Contact::setTollFreePhoneNumber()
     * @uses Contact::setPagerNumber()
     * @uses Contact::setFaxNumber()
     * @uses Contact::setEMailAddress()
     * @param string $contactId
     * @param string $personName
     * @param string $title
     * @param string $companyName
     * @param string $phoneNumber
     * @param string $phoneExtension
     * @param string $tollFreePhoneNumber
     * @param string $pagerNumber
     * @param string $faxNumber
     * @param string $eMailAddress
     */
    public function __construct($contactId = null, $personName = null, $title = null, $companyName = null, $phoneNumber = null, $phoneExtension = null, $tollFreePhoneNumber = null, $pagerNumber = null, $faxNumber = null, $eMailAddress = null)
    {
        $this
            ->setContactId($contactId)
            ->setPersonName($personName)
            ->setTitle($title)
            ->setCompanyName($companyName)
            ->setPhoneNumber($phoneNumber)
            ->setPhoneExtension($phoneExtension)
            ->setTollFreePhoneNumber($tollFreePhoneNumber)
            ->setPagerNumber($pagerNumber)
            ->setFaxNumber($faxNumber)
            ->setEMailAddress($eMailAddress);
    }
    /**
     * Get ContactId value
     * @return string|null
     */
    public function getContactId()
    {
        return $this->ContactId;
    }
    /**
     * Set ContactId value
     * @param string $contactId
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public function setContactId($contactId = null)
    {
        // validation for constraint: string
        if (!is_null($contactId) && !is_string($contactId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactId)), __LINE__);
        }
        $this->ContactId = $contactId;
        return $this;
    }
    /**
     * Get PersonName value
     * @return string|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param string $personName
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public function setPersonName($personName = null)
    {
        // validation for constraint: string
        if (!is_null($personName) && !is_string($personName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personName)), __LINE__);
        }
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        $this->CompanyName = $companyName;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact
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
     * Get PhoneExtension value
     * @return string|null
     */
    public function getPhoneExtension()
    {
        return $this->PhoneExtension;
    }
    /**
     * Set PhoneExtension value
     * @param string $phoneExtension
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public function setPhoneExtension($phoneExtension = null)
    {
        // validation for constraint: string
        if (!is_null($phoneExtension) && !is_string($phoneExtension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneExtension)), __LINE__);
        }
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    /**
     * Get TollFreePhoneNumber value
     * @return string|null
     */
    public function getTollFreePhoneNumber()
    {
        return $this->TollFreePhoneNumber;
    }
    /**
     * Set TollFreePhoneNumber value
     * @param string $tollFreePhoneNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public function setTollFreePhoneNumber($tollFreePhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($tollFreePhoneNumber) && !is_string($tollFreePhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tollFreePhoneNumber)), __LINE__);
        }
        $this->TollFreePhoneNumber = $tollFreePhoneNumber;
        return $this;
    }
    /**
     * Get PagerNumber value
     * @return string|null
     */
    public function getPagerNumber()
    {
        return $this->PagerNumber;
    }
    /**
     * Set PagerNumber value
     * @param string $pagerNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public function setPagerNumber($pagerNumber = null)
    {
        // validation for constraint: string
        if (!is_null($pagerNumber) && !is_string($pagerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pagerNumber)), __LINE__);
        }
        $this->PagerNumber = $pagerNumber;
        return $this;
    }
    /**
     * Get FaxNumber value
     * @return string|null
     */
    public function getFaxNumber()
    {
        return $this->FaxNumber;
    }
    /**
     * Set FaxNumber value
     * @param string $faxNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public function setFaxNumber($faxNumber = null)
    {
        // validation for constraint: string
        if (!is_null($faxNumber) && !is_string($faxNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faxNumber)), __LINE__);
        }
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    /**
     * Get EMailAddress value
     * @return string|null
     */
    public function getEMailAddress()
    {
        return $this->EMailAddress;
    }
    /**
     * Set EMailAddress value
     * @param string $eMailAddress
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public function setEMailAddress($eMailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($eMailAddress) && !is_string($eMailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMailAddress)), __LINE__);
        }
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact
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
