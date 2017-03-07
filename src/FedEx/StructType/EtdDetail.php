<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EtdDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Electronic Trade document references used with the ETD special service.
 * @subpackage Structs
 */
class EtdDetail extends AbstractStructBase
{
    /**
     * The RequestedDocumentCopies
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RequestedDocumentCopies;
    /**
     * The DocumentReferences
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail[]
     */
    public $DocumentReferences;
    /**
     * Constructor method for EtdDetail
     * @uses EtdDetail::setRequestedDocumentCopies()
     * @uses EtdDetail::setDocumentReferences()
     * @param string[] $requestedDocumentCopies
     * @param \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail[] $documentReferences
     */
    public function __construct(array $requestedDocumentCopies = array(), array $documentReferences = array())
    {
        $this
            ->setRequestedDocumentCopies($requestedDocumentCopies)
            ->setDocumentReferences($documentReferences);
    }
    /**
     * Get RequestedDocumentCopies value
     * @return string[]|null
     */
    public function getRequestedDocumentCopies()
    {
        return $this->RequestedDocumentCopies;
    }
    /**
     * Set RequestedDocumentCopies value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RequestedShippingDocumentType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $requestedDocumentCopies
     * @return \Drupal\commerce_fedex\FedEx\StructType\EtdDetail
     */
    public function setRequestedDocumentCopies(array $requestedDocumentCopies = array())
    {
        $invalidValues = array();
        foreach ($requestedDocumentCopies as $etdDetailRequestedDocumentCopiesItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\RequestedShippingDocumentType::valueIsValid($etdDetailRequestedDocumentCopiesItem)) {
                $invalidValues[] = var_export($etdDetailRequestedDocumentCopiesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->RequestedDocumentCopies = $requestedDocumentCopies;
        return $this;
    }
    /**
     * Add item to RequestedDocumentCopies value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RequestedShippingDocumentType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\EtdDetail
     */
    public function addToRequestedDocumentCopies($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\RequestedShippingDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->RequestedDocumentCopies[] = $item;
        return $this;
    }
    /**
     * Get DocumentReferences value
     * @return \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail[]|null
     */
    public function getDocumentReferences()
    {
        return $this->DocumentReferences;
    }
    /**
     * Set DocumentReferences value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail[] $documentReferences
     * @return \Drupal\commerce_fedex\FedEx\StructType\EtdDetail
     */
    public function setDocumentReferences(array $documentReferences = array())
    {
        foreach ($documentReferences as $etdDetailDocumentReferencesItem) {
            // validation for constraint: itemType
            if (!$etdDetailDocumentReferencesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail) {
                throw new \InvalidArgumentException(sprintf('The DocumentReferences property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail, "%s" given', is_object($etdDetailDocumentReferencesItem) ? get_class($etdDetailDocumentReferencesItem) : gettype($etdDetailDocumentReferencesItem)), __LINE__);
            }
        }
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    /**
     * Add item to DocumentReferences value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\EtdDetail
     */
    public function addToDocumentReferences(\Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail) {
            throw new \InvalidArgumentException(sprintf('The DocumentReferences property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DocumentReferences[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\EtdDetail
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
