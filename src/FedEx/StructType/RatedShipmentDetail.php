<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatedShipmentDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: This class groups the shipment and package rating data for a specific rate type for use in a rating reply, which groups result data by rate type.
 * @subpackage Structs
 */
class RatedShipmentDetail extends AbstractStructBase
{
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The difference between "list" and "account" total net charge.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The AdjustedCodCollectionAmount
     * Meta informations extracted from the WSDL
     * - documentation: Express COD is shipment level.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $AdjustedCodCollectionAmount;
    /**
     * The ShipmentRateDetail
     * Meta informations extracted from the WSDL
     * - documentation: The shipment-level totals for this rate type.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail
     */
    public $ShipmentRateDetail;
    /**
     * The RatedPackages
     * Meta informations extracted from the WSDL
     * - documentation: The package-level data for this rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail[]
     */
    public $RatedPackages;
    /**
     * Constructor method for RatedShipmentDetail
     * @uses RatedShipmentDetail::setEffectiveNetDiscount()
     * @uses RatedShipmentDetail::setAdjustedCodCollectionAmount()
     * @uses RatedShipmentDetail::setShipmentRateDetail()
     * @uses RatedShipmentDetail::setRatedPackages()
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $adjustedCodCollectionAmount
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail $shipmentRateDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail[] $ratedPackages
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount = null, \Drupal\commerce_fedex\FedEx\StructType\Money $adjustedCodCollectionAmount = null, \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail $shipmentRateDetail = null, array $ratedPackages = array())
    {
        $this
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setAdjustedCodCollectionAmount($adjustedCodCollectionAmount)
            ->setShipmentRateDetail($shipmentRateDetail)
            ->setRatedPackages($ratedPackages);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail
     */
    public function setAdjustedCodCollectionAmount(\Drupal\commerce_fedex\FedEx\StructType\Money $adjustedCodCollectionAmount = null)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    /**
     * Get ShipmentRateDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail|null
     */
    public function getShipmentRateDetail()
    {
        return $this->ShipmentRateDetail;
    }
    /**
     * Set ShipmentRateDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail $shipmentRateDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail
     */
    public function setShipmentRateDetail(\Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail $shipmentRateDetail = null)
    {
        $this->ShipmentRateDetail = $shipmentRateDetail;
        return $this;
    }
    /**
     * Get RatedPackages value
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail[]|null
     */
    public function getRatedPackages()
    {
        return $this->RatedPackages;
    }
    /**
     * Set RatedPackages value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail[] $ratedPackages
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail
     */
    public function setRatedPackages(array $ratedPackages = array())
    {
        foreach ($ratedPackages as $ratedShipmentDetailRatedPackagesItem) {
            // validation for constraint: itemType
            if (!$ratedShipmentDetailRatedPackagesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail) {
                throw new \InvalidArgumentException(sprintf('The RatedPackages property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail, "%s" given', is_object($ratedShipmentDetailRatedPackagesItem) ? get_class($ratedShipmentDetailRatedPackagesItem) : gettype($ratedShipmentDetailRatedPackagesItem)), __LINE__);
            }
        }
        $this->RatedPackages = $ratedPackages;
        return $this;
    }
    /**
     * Add item to RatedPackages value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail
     */
    public function addToRatedPackages(\Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail) {
            throw new \InvalidArgumentException(sprintf('The RatedPackages property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\RatedPackageDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatedPackages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail
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
