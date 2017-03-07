<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedEtdDetail StructType
 * @subpackage Structs
 */
class CompletedEtdDetail extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta informations extracted from the WSDL
     * - documentation: The identifier for all clearance documents associated with this shipment.
     * - minOccurs: 0
     * @var string
     */
    public $FolderId;
    /**
     * The UploadDocumentReferenceDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail[]
     */
    public $UploadDocumentReferenceDetails;
    /**
     * Constructor method for CompletedEtdDetail
     * @uses CompletedEtdDetail::setFolderId()
     * @uses CompletedEtdDetail::setUploadDocumentReferenceDetails()
     * @param string $folderId
     * @param \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail[] $uploadDocumentReferenceDetails
     */
    public function __construct($folderId = null, array $uploadDocumentReferenceDetails = array())
    {
        $this
            ->setFolderId($folderId)
            ->setUploadDocumentReferenceDetails($uploadDocumentReferenceDetails);
    }
    /**
     * Get FolderId value
     * @return string|null
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param string $folderId
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedEtdDetail
     */
    public function setFolderId($folderId = null)
    {
        // validation for constraint: string
        if (!is_null($folderId) && !is_string($folderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($folderId)), __LINE__);
        }
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Get UploadDocumentReferenceDetails value
     * @return \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail[]|null
     */
    public function getUploadDocumentReferenceDetails()
    {
        return $this->UploadDocumentReferenceDetails;
    }
    /**
     * Set UploadDocumentReferenceDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail[] $uploadDocumentReferenceDetails
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedEtdDetail
     */
    public function setUploadDocumentReferenceDetails(array $uploadDocumentReferenceDetails = array())
    {
        foreach ($uploadDocumentReferenceDetails as $completedEtdDetailUploadDocumentReferenceDetailsItem) {
            // validation for constraint: itemType
            if (!$completedEtdDetailUploadDocumentReferenceDetailsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail) {
                throw new \InvalidArgumentException(sprintf('The UploadDocumentReferenceDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail, "%s" given', is_object($completedEtdDetailUploadDocumentReferenceDetailsItem) ? get_class($completedEtdDetailUploadDocumentReferenceDetailsItem) : gettype($completedEtdDetailUploadDocumentReferenceDetailsItem)), __LINE__);
            }
        }
        $this->UploadDocumentReferenceDetails = $uploadDocumentReferenceDetails;
        return $this;
    }
    /**
     * Add item to UploadDocumentReferenceDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedEtdDetail
     */
    public function addToUploadDocumentReferenceDetails(\Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail) {
            throw new \InvalidArgumentException(sprintf('The UploadDocumentReferenceDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\UploadDocumentReferenceDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UploadDocumentReferenceDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedEtdDetail
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
