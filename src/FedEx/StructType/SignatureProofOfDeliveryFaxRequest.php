<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureProofOfDeliveryFaxRequest StructType
 * Meta informations extracted from the WSDL
 * - type: ns:SignatureProofOfDeliveryFaxRequest
 * @subpackage Structs
 */
class SignatureProofOfDeliveryFaxRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data identifying the client submitting the transaction.
     * - minOccurs: 1
     * @var \Drupal\commerce_fedex\FedEx\StructType\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: The version of the request being used.
     * - minOccurs: 1
     * @var \Drupal\commerce_fedex\FedEx\StructType\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The QualifiedTrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber
     */
    public $QualifiedTrackingNumber;
    /**
     * The AdditionalComments
     * Meta informations extracted from the WSDL
     * - documentation: Additional customer-supplied text to be added to the body of the letter.
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalComments;
    /**
     * The FaxSender
     * Meta informations extracted from the WSDL
     * - documentation: Contact and address information about the person requesting the fax to be sent.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress
     */
    public $FaxSender;
    /**
     * The FaxRecipient
     * Meta informations extracted from the WSDL
     * - documentation: Contact and address information, including the fax number, about the person to receive the fax.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress
     */
    public $FaxRecipient;
    /**
     * Constructor method for SignatureProofOfDeliveryFaxRequest
     * @uses SignatureProofOfDeliveryFaxRequest::setWebAuthenticationDetail()
     * @uses SignatureProofOfDeliveryFaxRequest::setClientDetail()
     * @uses SignatureProofOfDeliveryFaxRequest::setVersion()
     * @uses SignatureProofOfDeliveryFaxRequest::setTransactionDetail()
     * @uses SignatureProofOfDeliveryFaxRequest::setQualifiedTrackingNumber()
     * @uses SignatureProofOfDeliveryFaxRequest::setAdditionalComments()
     * @uses SignatureProofOfDeliveryFaxRequest::setFaxSender()
     * @uses SignatureProofOfDeliveryFaxRequest::setFaxRecipient()
     * @param \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail $webAuthenticationDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\ClientDetail $clientDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\VersionId $version
     * @param \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber $qualifiedTrackingNumber
     * @param string $additionalComments
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $faxSender
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $faxRecipient
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail $webAuthenticationDetail = null, \Drupal\commerce_fedex\FedEx\StructType\ClientDetail $clientDetail = null, \Drupal\commerce_fedex\FedEx\StructType\VersionId $version = null, \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail = null, \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber $qualifiedTrackingNumber = null, $additionalComments = null, \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $faxSender = null, \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $faxRecipient = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setQualifiedTrackingNumber($qualifiedTrackingNumber)
            ->setAdditionalComments($additionalComments)
            ->setFaxSender($faxSender)
            ->setFaxRecipient($faxRecipient);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail $webAuthenticationDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxRequest
     */
    public function setWebAuthenticationDetail(\Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ClientDetail $clientDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxRequest
     */
    public function setClientDetail(\Drupal\commerce_fedex\FedEx\StructType\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    /**
     * Get Version value
     * @return \Drupal\commerce_fedex\FedEx\StructType\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \Drupal\commerce_fedex\FedEx\StructType\VersionId $version
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxRequest
     */
    public function setVersion(\Drupal\commerce_fedex\FedEx\StructType\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxRequest
     */
    public function setTransactionDetail(\Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get QualifiedTrackingNumber value
     * @return \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber|null
     */
    public function getQualifiedTrackingNumber()
    {
        return $this->QualifiedTrackingNumber;
    }
    /**
     * Set QualifiedTrackingNumber value
     * @param \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber $qualifiedTrackingNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxRequest
     */
    public function setQualifiedTrackingNumber(\Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber $qualifiedTrackingNumber = null)
    {
        $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
        return $this;
    }
    /**
     * Get AdditionalComments value
     * @return string|null
     */
    public function getAdditionalComments()
    {
        return $this->AdditionalComments;
    }
    /**
     * Set AdditionalComments value
     * @param string $additionalComments
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxRequest
     */
    public function setAdditionalComments($additionalComments = null)
    {
        // validation for constraint: string
        if (!is_null($additionalComments) && !is_string($additionalComments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalComments)), __LINE__);
        }
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    /**
     * Get FaxSender value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress|null
     */
    public function getFaxSender()
    {
        return $this->FaxSender;
    }
    /**
     * Set FaxSender value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $faxSender
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxSender(\Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $faxSender = null)
    {
        $this->FaxSender = $faxSender;
        return $this;
    }
    /**
     * Get FaxRecipient value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress|null
     */
    public function getFaxRecipient()
    {
        return $this->FaxRecipient;
    }
    /**
     * Set FaxRecipient value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $faxRecipient
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxRecipient(\Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $faxRecipient = null)
    {
        $this->FaxRecipient = $faxRecipient;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxRequest
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
