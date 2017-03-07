<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureProofOfDeliveryLetterRequest StructType
 * Meta informations extracted from the WSDL
 * - type: ns:SignatureProofOfDeliveryLetterRequest
 * @subpackage Structs
 */
class SignatureProofOfDeliveryLetterRequest extends AbstractStructBase
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
     * The LetterFormat
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the set of SPOD image types.
     * - minOccurs: 0
     * @var string
     */
    public $LetterFormat;
    /**
     * The Consignee
     * Meta informations extracted from the WSDL
     * - documentation: If provided this information will be print on the letter.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress
     */
    public $Consignee;
    /**
     * Constructor method for SignatureProofOfDeliveryLetterRequest
     * @uses SignatureProofOfDeliveryLetterRequest::setWebAuthenticationDetail()
     * @uses SignatureProofOfDeliveryLetterRequest::setClientDetail()
     * @uses SignatureProofOfDeliveryLetterRequest::setVersion()
     * @uses SignatureProofOfDeliveryLetterRequest::setTransactionDetail()
     * @uses SignatureProofOfDeliveryLetterRequest::setQualifiedTrackingNumber()
     * @uses SignatureProofOfDeliveryLetterRequest::setAdditionalComments()
     * @uses SignatureProofOfDeliveryLetterRequest::setLetterFormat()
     * @uses SignatureProofOfDeliveryLetterRequest::setConsignee()
     * @param \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail $webAuthenticationDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\ClientDetail $clientDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\VersionId $version
     * @param \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber $qualifiedTrackingNumber
     * @param string $additionalComments
     * @param string $letterFormat
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $consignee
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail $webAuthenticationDetail = null, \Drupal\commerce_fedex\FedEx\StructType\ClientDetail $clientDetail = null, \Drupal\commerce_fedex\FedEx\StructType\VersionId $version = null, \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail = null, \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber $qualifiedTrackingNumber = null, $additionalComments = null, $letterFormat = null, \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $consignee = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setQualifiedTrackingNumber($qualifiedTrackingNumber)
            ->setAdditionalComments($additionalComments)
            ->setLetterFormat($letterFormat)
            ->setConsignee($consignee);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterRequest
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterRequest
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterRequest
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterRequest
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterRequest
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterRequest
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
     * Get LetterFormat value
     * @return string|null
     */
    public function getLetterFormat()
    {
        return $this->LetterFormat;
    }
    /**
     * Set LetterFormat value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SignatureProofOfDeliveryImageType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SignatureProofOfDeliveryImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $letterFormat
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterRequest
     */
    public function setLetterFormat($letterFormat = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\SignatureProofOfDeliveryImageType::valueIsValid($letterFormat)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $letterFormat, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\SignatureProofOfDeliveryImageType::getValidValues())), __LINE__);
        }
        $this->LetterFormat = $letterFormat;
        return $this;
    }
    /**
     * Get Consignee value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress|null
     */
    public function getConsignee()
    {
        return $this->Consignee;
    }
    /**
     * Set Consignee value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $consignee
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterRequest
     */
    public function setConsignee(\Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $consignee = null)
    {
        $this->Consignee = $consignee;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterRequest
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
