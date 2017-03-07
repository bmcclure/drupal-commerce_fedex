<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedPackageDetail StructType
 * @subpackage Structs
 */
class CompletedPackageDetail extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackingId[]
     */
    public $TrackingIds;
    /**
     * The GroupNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     * - minOccurs: 0
     * @var int
     */
    public $GroupNumber;
    /**
     * The OversizeClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OversizeClass;
    /**
     * The PackageRating
     * Meta informations extracted from the WSDL
     * - documentation: All package-level rating data for this package, which may include data for multiple rate types.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PackageRating
     */
    public $PackageRating;
    /**
     * The OperationalDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail
     */
    public $OperationalDetail;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public $Label;
    /**
     * The PackageDocuments
     * Meta informations extracted from the WSDL
     * - documentation: All package-level shipping documents (other than labels and barcodes). For use in loads after January, 2008.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument[]
     */
    public $PackageDocuments;
    /**
     * The CodReturnDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the information associated with this package that has COD special service in a ground shipment.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail
     */
    public $CodReturnDetail;
    /**
     * The SignatureOption
     * Meta informations extracted from the WSDL
     * - documentation: Actual signature option applied, to allow for cases in which the original value conflicted with other service features in the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $SignatureOption;
    /**
     * The DryIceWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Weight
     */
    public $DryIceWeight;
    /**
     * The HazardousPackageDetail
     * Meta informations extracted from the WSDL
     * - documentation: Documents the kinds and quantities of all hazardous commodities in the current package, using updated hazardous commodity description data.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CompletedHazardousPackageDetail
     */
    public $HazardousPackageDetail;
    /**
     * Constructor method for CompletedPackageDetail
     * @uses CompletedPackageDetail::setSequenceNumber()
     * @uses CompletedPackageDetail::setTrackingIds()
     * @uses CompletedPackageDetail::setGroupNumber()
     * @uses CompletedPackageDetail::setOversizeClass()
     * @uses CompletedPackageDetail::setPackageRating()
     * @uses CompletedPackageDetail::setOperationalDetail()
     * @uses CompletedPackageDetail::setLabel()
     * @uses CompletedPackageDetail::setPackageDocuments()
     * @uses CompletedPackageDetail::setCodReturnDetail()
     * @uses CompletedPackageDetail::setSignatureOption()
     * @uses CompletedPackageDetail::setDryIceWeight()
     * @uses CompletedPackageDetail::setHazardousPackageDetail()
     * @param int $sequenceNumber
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackingId[] $trackingIds
     * @param int $groupNumber
     * @param string $oversizeClass
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageRating $packageRating
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail $operationalDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $label
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument[] $packageDocuments
     * @param \Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail $codReturnDetail
     * @param string $signatureOption
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $dryIceWeight
     * @param \Drupal\commerce_fedex\FedEx\StructType\CompletedHazardousPackageDetail $hazardousPackageDetail
     */
    public function __construct($sequenceNumber = null, array $trackingIds = array(), $groupNumber = null, $oversizeClass = null, \Drupal\commerce_fedex\FedEx\StructType\PackageRating $packageRating = null, \Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail $operationalDetail = null, \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $label = null, array $packageDocuments = array(), \Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail $codReturnDetail = null, $signatureOption = null, \Drupal\commerce_fedex\FedEx\StructType\Weight $dryIceWeight = null, \Drupal\commerce_fedex\FedEx\StructType\CompletedHazardousPackageDetail $hazardousPackageDetail = null)
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setTrackingIds($trackingIds)
            ->setGroupNumber($groupNumber)
            ->setOversizeClass($oversizeClass)
            ->setPackageRating($packageRating)
            ->setOperationalDetail($operationalDetail)
            ->setLabel($label)
            ->setPackageDocuments($packageDocuments)
            ->setCodReturnDetail($codReturnDetail)
            ->setSignatureOption($signatureOption)
            ->setDryIceWeight($dryIceWeight)
            ->setHazardousPackageDetail($hazardousPackageDetail);
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get TrackingIds value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackingId[]|null
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }
    /**
     * Set TrackingIds value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackingId[] $trackingIds
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setTrackingIds(array $trackingIds = array())
    {
        foreach ($trackingIds as $completedPackageDetailTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$completedPackageDetailTrackingIdsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackingId) {
                throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackingId, "%s" given', is_object($completedPackageDetailTrackingIdsItem) ? get_class($completedPackageDetailTrackingIdsItem) : gettype($completedPackageDetailTrackingIdsItem)), __LINE__);
            }
        }
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Add item to TrackingIds value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackingId $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function addToTrackingIds(\Drupal\commerce_fedex\FedEx\StructType\TrackingId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackingId) {
            throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackingId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackingIds[] = $item;
        return $this;
    }
    /**
     * Get GroupNumber value
     * @return int|null
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }
    /**
     * Set GroupNumber value
     * @param int $groupNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setGroupNumber($groupNumber = null)
    {
        // validation for constraint: int
        if (!is_null($groupNumber) && !is_numeric($groupNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupNumber)), __LINE__);
        }
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    /**
     * Get OversizeClass value
     * @return string|null
     */
    public function getOversizeClass()
    {
        return $this->OversizeClass;
    }
    /**
     * Set OversizeClass value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\OversizeClassType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\OversizeClassType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $oversizeClass
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setOversizeClass($oversizeClass = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\OversizeClassType::valueIsValid($oversizeClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $oversizeClass, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\OversizeClassType::getValidValues())), __LINE__);
        }
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    /**
     * Get PackageRating value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRating|null
     */
    public function getPackageRating()
    {
        return $this->PackageRating;
    }
    /**
     * Set PackageRating value
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageRating $packageRating
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setPackageRating(\Drupal\commerce_fedex\FedEx\StructType\PackageRating $packageRating = null)
    {
        $this->PackageRating = $packageRating;
        return $this;
    }
    /**
     * Get OperationalDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail|null
     */
    public function getOperationalDetail()
    {
        return $this->OperationalDetail;
    }
    /**
     * Set OperationalDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail $operationalDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setOperationalDetail(\Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail $operationalDetail = null)
    {
        $this->OperationalDetail = $operationalDetail;
        return $this;
    }
    /**
     * Get Label value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $label
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setLabel(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Get PackageDocuments value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument[]|null
     */
    public function getPackageDocuments()
    {
        return $this->PackageDocuments;
    }
    /**
     * Set PackageDocuments value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument[] $packageDocuments
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setPackageDocuments(array $packageDocuments = array())
    {
        foreach ($packageDocuments as $completedPackageDetailPackageDocumentsItem) {
            // validation for constraint: itemType
            if (!$completedPackageDetailPackageDocumentsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument) {
                throw new \InvalidArgumentException(sprintf('The PackageDocuments property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument, "%s" given', is_object($completedPackageDetailPackageDocumentsItem) ? get_class($completedPackageDetailPackageDocumentsItem) : gettype($completedPackageDetailPackageDocumentsItem)), __LINE__);
            }
        }
        $this->PackageDocuments = $packageDocuments;
        return $this;
    }
    /**
     * Add item to PackageDocuments value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function addToPackageDocuments(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument) {
            throw new \InvalidArgumentException(sprintf('The PackageDocuments property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageDocuments[] = $item;
        return $this;
    }
    /**
     * Get CodReturnDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail|null
     */
    public function getCodReturnDetail()
    {
        return $this->CodReturnDetail;
    }
    /**
     * Set CodReturnDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail $codReturnDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setCodReturnDetail(\Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail $codReturnDetail = null)
    {
        $this->CodReturnDetail = $codReturnDetail;
        return $this;
    }
    /**
     * Get SignatureOption value
     * @return string|null
     */
    public function getSignatureOption()
    {
        return $this->SignatureOption;
    }
    /**
     * Set SignatureOption value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SignatureOptionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SignatureOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $signatureOption
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setSignatureOption($signatureOption = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\SignatureOptionType::valueIsValid($signatureOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $signatureOption, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\SignatureOptionType::getValidValues())), __LINE__);
        }
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    /**
     * Get DryIceWeight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Weight|null
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }
    /**
     * Set DryIceWeight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $dryIceWeight
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setDryIceWeight(\Drupal\commerce_fedex\FedEx\StructType\Weight $dryIceWeight = null)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Get HazardousPackageDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedHazardousPackageDetail|null
     */
    public function getHazardousPackageDetail()
    {
        return $this->HazardousPackageDetail;
    }
    /**
     * Set HazardousPackageDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\CompletedHazardousPackageDetail $hazardousPackageDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
     */
    public function setHazardousPackageDetail(\Drupal\commerce_fedex\FedEx\StructType\CompletedHazardousPackageDetail $hazardousPackageDetail = null)
    {
        $this->HazardousPackageDetail = $hazardousPackageDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedPackageDetail
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
