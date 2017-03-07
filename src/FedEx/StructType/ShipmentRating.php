<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentRating StructType
 * Meta informations extracted from the WSDL
 * - documentation: This class groups together all shipment-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 * @subpackage Structs
 */
class ShipmentRating extends AbstractStructBase
{
    /**
     * The ActualRateType
     * Meta informations extracted from the WSDL
     * - documentation: This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $ActualRateType;
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The "list" total net charge minus "actual" total net charge.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The ShipmentRateDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each element of this field provides shipment-level rate totals for a specific rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail[]
     */
    public $ShipmentRateDetails;
    /**
     * Constructor method for ShipmentRating
     * @uses ShipmentRating::setActualRateType()
     * @uses ShipmentRating::setEffectiveNetDiscount()
     * @uses ShipmentRating::setShipmentRateDetails()
     * @param string $actualRateType
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail[] $shipmentRateDetails
     */
    public function __construct($actualRateType = null, \Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount = null, array $shipmentRateDetails = array())
    {
        $this
            ->setActualRateType($actualRateType)
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setShipmentRateDetails($shipmentRateDetails);
    }
    /**
     * Get ActualRateType value
     * @return string|null
     */
    public function getActualRateType()
    {
        return $this->ActualRateType;
    }
    /**
     * Set ActualRateType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actualRateType
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentRating
     */
    public function setActualRateType($actualRateType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::valueIsValid($actualRateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actualRateType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->ActualRateType = $actualRateType;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentRating
     */
    public function setEffectiveNetDiscount(\Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get ShipmentRateDetails value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail[]|null
     */
    public function getShipmentRateDetails()
    {
        return $this->ShipmentRateDetails;
    }
    /**
     * Set ShipmentRateDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail[] $shipmentRateDetails
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentRating
     */
    public function setShipmentRateDetails(array $shipmentRateDetails = array())
    {
        foreach ($shipmentRateDetails as $shipmentRatingShipmentRateDetailsItem) {
            // validation for constraint: itemType
            if (!$shipmentRatingShipmentRateDetailsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail) {
                throw new \InvalidArgumentException(sprintf('The ShipmentRateDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail, "%s" given', is_object($shipmentRatingShipmentRateDetailsItem) ? get_class($shipmentRatingShipmentRateDetailsItem) : gettype($shipmentRatingShipmentRateDetailsItem)), __LINE__);
            }
        }
        $this->ShipmentRateDetails = $shipmentRateDetails;
        return $this;
    }
    /**
     * Add item to ShipmentRateDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentRating
     */
    public function addToShipmentRateDetails(\Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail) {
            throw new \InvalidArgumentException(sprintf('The ShipmentRateDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShipmentRateDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipmentRateDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentRating
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
