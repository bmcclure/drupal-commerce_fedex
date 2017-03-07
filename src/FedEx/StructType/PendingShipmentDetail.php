<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PendingShipmentDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: This information describes the kind of pending shipment being requested.
 * @subpackage Structs
 */
class PendingShipmentDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - documentation: Date after which the pending shipment will no longer be available for completion.
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDate;
    /**
     * The ProcessingOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentProcessingOptionsRequested
     */
    public $ProcessingOptions;
    /**
     * The RecommendedDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: These are documents that are recommended to be included with the shipment.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\RecommendedDocumentSpecification
     */
    public $RecommendedDocumentSpecification;
    /**
     * Constructor method for PendingShipmentDetail
     * @uses PendingShipmentDetail::setType()
     * @uses PendingShipmentDetail::setExpirationDate()
     * @uses PendingShipmentDetail::setProcessingOptions()
     * @uses PendingShipmentDetail::setRecommendedDocumentSpecification()
     * @param string $type
     * @param string $expirationDate
     * @param \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentProcessingOptionsRequested $processingOptions
     * @param \Drupal\commerce_fedex\FedEx\StructType\RecommendedDocumentSpecification $recommendedDocumentSpecification
     */
    public function __construct($type = null, $expirationDate = null, \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentProcessingOptionsRequested $processingOptions = null, \Drupal\commerce_fedex\FedEx\StructType\RecommendedDocumentSpecification $recommendedDocumentSpecification = null)
    {
        $this
            ->setType($type)
            ->setExpirationDate($expirationDate)
            ->setProcessingOptions($processingOptions)
            ->setRecommendedDocumentSpecification($recommendedDocumentSpecification);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PendingShipmentType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PendingShipmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\PendingShipmentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\PendingShipmentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get ProcessingOptions value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentProcessingOptionsRequested|null
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    /**
     * Set ProcessingOptions value
     * @param \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentProcessingOptionsRequested $processingOptions
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentDetail
     */
    public function setProcessingOptions(\Drupal\commerce_fedex\FedEx\StructType\PendingShipmentProcessingOptionsRequested $processingOptions = null)
    {
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    /**
     * Get RecommendedDocumentSpecification value
     * @return \Drupal\commerce_fedex\FedEx\StructType\RecommendedDocumentSpecification|null
     */
    public function getRecommendedDocumentSpecification()
    {
        return $this->RecommendedDocumentSpecification;
    }
    /**
     * Set RecommendedDocumentSpecification value
     * @param \Drupal\commerce_fedex\FedEx\StructType\RecommendedDocumentSpecification $recommendedDocumentSpecification
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentDetail
     */
    public function setRecommendedDocumentSpecification(\Drupal\commerce_fedex\FedEx\StructType\RecommendedDocumentSpecification $recommendedDocumentSpecification = null)
    {
        $this->RecommendedDocumentSpecification = $recommendedDocumentSpecification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentDetail
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
