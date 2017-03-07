<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatedPackageDetail StructType
 * @subpackage Structs
 */
class RatedPackageDetail extends AbstractStructBase
{
    /**
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - documentation: Echoed from the corresponding package in the rate request (if provided).
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
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The difference between "list" and "account" net charge.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The AdjustedCodCollectionAmount
     * Meta informations extracted from the WSDL
     * - documentation: Ground COD is shipment level.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $AdjustedCodCollectionAmount;
    /**
     * The OversizeClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OversizeClass;
    /**
     * The PackageRateDetail
     * Meta informations extracted from the WSDL
     * - documentation: Rate data that are tied to a specific package and rate type combination.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public $PackageRateDetail;
    /**
     * Constructor method for RatedPackageDetail
     * @uses RatedPackageDetail::setTrackingIds()
     * @uses RatedPackageDetail::setGroupNumber()
     * @uses RatedPackageDetail::setEffectiveNetDiscount()
     * @uses RatedPackageDetail::setAdjustedCodCollectionAmount()
     * @uses RatedPackageDetail::setOversizeClass()
     * @uses RatedPackageDetail::setPackageRateDetail()
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackingId[] $trackingIds
     * @param int $groupNumber
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $adjustedCodCollectionAmount
     * @param string $oversizeClass
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail $packageRateDetail
     */
    public function __construct(array $trackingIds = array(), $groupNumber = null, \Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount = null, \Drupal\commerce_fedex\FedEx\StructType\Money $adjustedCodCollectionAmount = null, $oversizeClass = null, \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail $packageRateDetail = null)
    {
        $this
            ->setTrackingIds($trackingIds)
            ->setGroupNumber($groupNumber)
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setAdjustedCodCollectionAmount($adjustedCodCollectionAmount)
            ->setOversizeClass($oversizeClass)
            ->setPackageRateDetail($packageRateDetail);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail
     */
    public function setTrackingIds(array $trackingIds = array())
    {
        foreach ($trackingIds as $ratedPackageDetailTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$ratedPackageDetailTrackingIdsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackingId) {
                throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackingId, "%s" given', is_object($ratedPackageDetailTrackingIdsItem) ? get_class($ratedPackageDetailTrackingIdsItem) : gettype($ratedPackageDetailTrackingIdsItem)), __LINE__);
            }
        }
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Add item to TrackingIds value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackingId $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail
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
     * Get EffectiveNetDiscount value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    /**
     * Set EffectiveNetDiscount value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail
     */
    public function setEffectiveNetDiscount(\Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get AdjustedCodCollectionAmount value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getAdjustedCodCollectionAmount()
    {
        return $this->AdjustedCodCollectionAmount;
    }
    /**
     * Set AdjustedCodCollectionAmount value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $adjustedCodCollectionAmount
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail
     */
    public function setAdjustedCodCollectionAmount(\Drupal\commerce_fedex\FedEx\StructType\Money $adjustedCodCollectionAmount = null)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail
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
     * Get PackageRateDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail|null
     */
    public function getPackageRateDetail()
    {
        return $this->PackageRateDetail;
    }
    /**
     * Set PackageRateDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail $packageRateDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail
     */
    public function setPackageRateDetail(\Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail $packageRateDetail = null)
    {
        $this->PackageRateDetail = $packageRateDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail
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
