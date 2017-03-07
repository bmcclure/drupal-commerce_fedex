<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentOperationalDetail StructType
 * @subpackage Structs
 */
class ShipmentOperationalDetail extends AbstractStructBase
{
    /**
     * The UrsaPrefixCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UrsaPrefixCode;
    /**
     * The UrsaSuffixCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UrsaSuffixCode;
    /**
     * The OriginLocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginLocationId;
    /**
     * The OriginLocationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OriginLocationNumber;
    /**
     * The OriginServiceArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginServiceArea;
    /**
     * The DestinationLocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationLocationId;
    /**
     * The DestinationLocationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DestinationLocationNumber;
    /**
     * The DestinationServiceArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceArea;
    /**
     * The DestinationLocationStateOrProvinceCode
     * Meta informations extracted from the WSDL
     * - documentation: This is the state of the destination location ID, and is not necessarily the same as the postal state.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationLocationStateOrProvinceCode;
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - documentation: Expected/estimated date of delivery.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDate;
    /**
     * The DeliveryDay
     * Meta informations extracted from the WSDL
     * - documentation: Expected/estimated day of week of delivery.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDay;
    /**
     * The PublishedDeliveryTime
     * Meta informations extracted from the WSDL
     * - documentation: Delivery time, as published in Service Guide.
     * - minOccurs: 0
     * @var string
     */
    public $PublishedDeliveryTime;
    /**
     * The CommitDate
     * Meta informations extracted from the WSDL
     * - documentation: Committed date of delivery.
     * - minOccurs: 0
     * @var string
     */
    public $CommitDate;
    /**
     * The CommitDay
     * Meta informations extracted from the WSDL
     * - documentation: Committed day of week of delivery.
     * - minOccurs: 0
     * @var string
     */
    public $CommitDay;
    /**
     * The TransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Standard transit time per origin, destination, and service.
     * - minOccurs: 0
     * @var string
     */
    public $TransitTime;
    /**
     * The MaximumTransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Maximum expected transit time
     * - minOccurs: 0
     * @var string
     */
    public $MaximumTransitTime;
    /**
     * The CustomTransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Transit time based on customer eligibility.
     * - minOccurs: 0
     * @var string
     */
    public $CustomTransitTime;
    /**
     * The IneligibleForMoneyBackGuarantee
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that this shipment is not eligible for money back guarantee.
     * - minOccurs: 0
     * @var bool
     */
    public $IneligibleForMoneyBackGuarantee;
    /**
     * The DeliveryEligibilities
     * Meta informations extracted from the WSDL
     * - documentation: FedEx Ground delivery features for which this shipment may be eligible.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DeliveryEligibilities;
    /**
     * The AstraPlannedServiceLevel
     * Meta informations extracted from the WSDL
     * - documentation: Text describing planned delivery.
     * - minOccurs: 0
     * @var string
     */
    public $AstraPlannedServiceLevel;
    /**
     * The AstraDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AstraDescription;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The StateOrProvinceCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StateOrProvinceCode;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The AirportId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirportId;
    /**
     * The ServiceCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceCode;
    /**
     * The PackagingCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackagingCode;
    /**
     * The Scac
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Scac;
    /**
     * Constructor method for ShipmentOperationalDetail
     * @uses ShipmentOperationalDetail::setUrsaPrefixCode()
     * @uses ShipmentOperationalDetail::setUrsaSuffixCode()
     * @uses ShipmentOperationalDetail::setOriginLocationId()
     * @uses ShipmentOperationalDetail::setOriginLocationNumber()
     * @uses ShipmentOperationalDetail::setOriginServiceArea()
     * @uses ShipmentOperationalDetail::setDestinationLocationId()
     * @uses ShipmentOperationalDetail::setDestinationLocationNumber()
     * @uses ShipmentOperationalDetail::setDestinationServiceArea()
     * @uses ShipmentOperationalDetail::setDestinationLocationStateOrProvinceCode()
     * @uses ShipmentOperationalDetail::setDeliveryDate()
     * @uses ShipmentOperationalDetail::setDeliveryDay()
     * @uses ShipmentOperationalDetail::setPublishedDeliveryTime()
     * @uses ShipmentOperationalDetail::setCommitDate()
     * @uses ShipmentOperationalDetail::setCommitDay()
     * @uses ShipmentOperationalDetail::setTransitTime()
     * @uses ShipmentOperationalDetail::setMaximumTransitTime()
     * @uses ShipmentOperationalDetail::setCustomTransitTime()
     * @uses ShipmentOperationalDetail::setIneligibleForMoneyBackGuarantee()
     * @uses ShipmentOperationalDetail::setDeliveryEligibilities()
     * @uses ShipmentOperationalDetail::setAstraPlannedServiceLevel()
     * @uses ShipmentOperationalDetail::setAstraDescription()
     * @uses ShipmentOperationalDetail::setPostalCode()
     * @uses ShipmentOperationalDetail::setStateOrProvinceCode()
     * @uses ShipmentOperationalDetail::setCountryCode()
     * @uses ShipmentOperationalDetail::setAirportId()
     * @uses ShipmentOperationalDetail::setServiceCode()
     * @uses ShipmentOperationalDetail::setPackagingCode()
     * @uses ShipmentOperationalDetail::setScac()
     * @param string $ursaPrefixCode
     * @param string $ursaSuffixCode
     * @param string $originLocationId
     * @param int $originLocationNumber
     * @param string $originServiceArea
     * @param string $destinationLocationId
     * @param int $destinationLocationNumber
     * @param string $destinationServiceArea
     * @param string $destinationLocationStateOrProvinceCode
     * @param string $deliveryDate
     * @param string $deliveryDay
     * @param string $publishedDeliveryTime
     * @param string $commitDate
     * @param string $commitDay
     * @param string $transitTime
     * @param string $maximumTransitTime
     * @param string $customTransitTime
     * @param bool $ineligibleForMoneyBackGuarantee
     * @param string[] $deliveryEligibilities
     * @param string $astraPlannedServiceLevel
     * @param string $astraDescription
     * @param string $postalCode
     * @param string $stateOrProvinceCode
     * @param string $countryCode
     * @param string $airportId
     * @param string $serviceCode
     * @param string $packagingCode
     * @param string $scac
     */
    public function __construct($ursaPrefixCode = null, $ursaSuffixCode = null, $originLocationId = null, $originLocationNumber = null, $originServiceArea = null, $destinationLocationId = null, $destinationLocationNumber = null, $destinationServiceArea = null, $destinationLocationStateOrProvinceCode = null, $deliveryDate = null, $deliveryDay = null, $publishedDeliveryTime = null, $commitDate = null, $commitDay = null, $transitTime = null, $maximumTransitTime = null, $customTransitTime = null, $ineligibleForMoneyBackGuarantee = null, array $deliveryEligibilities = array(), $astraPlannedServiceLevel = null, $astraDescription = null, $postalCode = null, $stateOrProvinceCode = null, $countryCode = null, $airportId = null, $serviceCode = null, $packagingCode = null, $scac = null)
    {
        $this
            ->setUrsaPrefixCode($ursaPrefixCode)
            ->setUrsaSuffixCode($ursaSuffixCode)
            ->setOriginLocationId($originLocationId)
            ->setOriginLocationNumber($originLocationNumber)
            ->setOriginServiceArea($originServiceArea)
            ->setDestinationLocationId($destinationLocationId)
            ->setDestinationLocationNumber($destinationLocationNumber)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setDestinationLocationStateOrProvinceCode($destinationLocationStateOrProvinceCode)
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryDay($deliveryDay)
            ->setPublishedDeliveryTime($publishedDeliveryTime)
            ->setCommitDate($commitDate)
            ->setCommitDay($commitDay)
            ->setTransitTime($transitTime)
            ->setMaximumTransitTime($maximumTransitTime)
            ->setCustomTransitTime($customTransitTime)
            ->setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
            ->setDeliveryEligibilities($deliveryEligibilities)
            ->setAstraPlannedServiceLevel($astraPlannedServiceLevel)
            ->setAstraDescription($astraDescription)
            ->setPostalCode($postalCode)
            ->setStateOrProvinceCode($stateOrProvinceCode)
            ->setCountryCode($countryCode)
            ->setAirportId($airportId)
            ->setServiceCode($serviceCode)
            ->setPackagingCode($packagingCode)
            ->setScac($scac);
    }
    /**
     * Get UrsaPrefixCode value
     * @return string|null
     */
    public function getUrsaPrefixCode()
    {
        return $this->UrsaPrefixCode;
    }
    /**
     * Set UrsaPrefixCode value
     * @param string $ursaPrefixCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setUrsaPrefixCode($ursaPrefixCode = null)
    {
        // validation for constraint: string
        if (!is_null($ursaPrefixCode) && !is_string($ursaPrefixCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ursaPrefixCode)), __LINE__);
        }
        $this->UrsaPrefixCode = $ursaPrefixCode;
        return $this;
    }
    /**
     * Get UrsaSuffixCode value
     * @return string|null
     */
    public function getUrsaSuffixCode()
    {
        return $this->UrsaSuffixCode;
    }
    /**
     * Set UrsaSuffixCode value
     * @param string $ursaSuffixCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setUrsaSuffixCode($ursaSuffixCode = null)
    {
        // validation for constraint: string
        if (!is_null($ursaSuffixCode) && !is_string($ursaSuffixCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ursaSuffixCode)), __LINE__);
        }
        $this->UrsaSuffixCode = $ursaSuffixCode;
        return $this;
    }
    /**
     * Get OriginLocationId value
     * @return string|null
     */
    public function getOriginLocationId()
    {
        return $this->OriginLocationId;
    }
    /**
     * Set OriginLocationId value
     * @param string $originLocationId
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setOriginLocationId($originLocationId = null)
    {
        // validation for constraint: string
        if (!is_null($originLocationId) && !is_string($originLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originLocationId)), __LINE__);
        }
        $this->OriginLocationId = $originLocationId;
        return $this;
    }
    /**
     * Get OriginLocationNumber value
     * @return int|null
     */
    public function getOriginLocationNumber()
    {
        return $this->OriginLocationNumber;
    }
    /**
     * Set OriginLocationNumber value
     * @param int $originLocationNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setOriginLocationNumber($originLocationNumber = null)
    {
        // validation for constraint: int
        if (!is_null($originLocationNumber) && !is_numeric($originLocationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($originLocationNumber)), __LINE__);
        }
        $this->OriginLocationNumber = $originLocationNumber;
        return $this;
    }
    /**
     * Get OriginServiceArea value
     * @return string|null
     */
    public function getOriginServiceArea()
    {
        return $this->OriginServiceArea;
    }
    /**
     * Set OriginServiceArea value
     * @param string $originServiceArea
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setOriginServiceArea($originServiceArea = null)
    {
        // validation for constraint: string
        if (!is_null($originServiceArea) && !is_string($originServiceArea)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originServiceArea)), __LINE__);
        }
        $this->OriginServiceArea = $originServiceArea;
        return $this;
    }
    /**
     * Get DestinationLocationId value
     * @return string|null
     */
    public function getDestinationLocationId()
    {
        return $this->DestinationLocationId;
    }
    /**
     * Set DestinationLocationId value
     * @param string $destinationLocationId
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setDestinationLocationId($destinationLocationId = null)
    {
        // validation for constraint: string
        if (!is_null($destinationLocationId) && !is_string($destinationLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationLocationId)), __LINE__);
        }
        $this->DestinationLocationId = $destinationLocationId;
        return $this;
    }
    /**
     * Get DestinationLocationNumber value
     * @return int|null
     */
    public function getDestinationLocationNumber()
    {
        return $this->DestinationLocationNumber;
    }
    /**
     * Set DestinationLocationNumber value
     * @param int $destinationLocationNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setDestinationLocationNumber($destinationLocationNumber = null)
    {
        // validation for constraint: int
        if (!is_null($destinationLocationNumber) && !is_numeric($destinationLocationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($destinationLocationNumber)), __LINE__);
        }
        $this->DestinationLocationNumber = $destinationLocationNumber;
        return $this;
    }
    /**
     * Get DestinationServiceArea value
     * @return string|null
     */
    public function getDestinationServiceArea()
    {
        return $this->DestinationServiceArea;
    }
    /**
     * Set DestinationServiceArea value
     * @param string $destinationServiceArea
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setDestinationServiceArea($destinationServiceArea = null)
    {
        // validation for constraint: string
        if (!is_null($destinationServiceArea) && !is_string($destinationServiceArea)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationServiceArea)), __LINE__);
        }
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    /**
     * Get DestinationLocationStateOrProvinceCode value
     * @return string|null
     */
    public function getDestinationLocationStateOrProvinceCode()
    {
        return $this->DestinationLocationStateOrProvinceCode;
    }
    /**
     * Set DestinationLocationStateOrProvinceCode value
     * @param string $destinationLocationStateOrProvinceCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setDestinationLocationStateOrProvinceCode($destinationLocationStateOrProvinceCode = null)
    {
        // validation for constraint: string
        if (!is_null($destinationLocationStateOrProvinceCode) && !is_string($destinationLocationStateOrProvinceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationLocationStateOrProvinceCode)), __LINE__);
        }
        $this->DestinationLocationStateOrProvinceCode = $destinationLocationStateOrProvinceCode;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get DeliveryDay value
     * @return string|null
     */
    public function getDeliveryDay()
    {
        return $this->DeliveryDay;
    }
    /**
     * Set DeliveryDay value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryDay
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setDeliveryDay($deliveryDay = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::valueIsValid($deliveryDay)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryDay, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    /**
     * Get PublishedDeliveryTime value
     * @return string|null
     */
    public function getPublishedDeliveryTime()
    {
        return $this->PublishedDeliveryTime;
    }
    /**
     * Set PublishedDeliveryTime value
     * @param string $publishedDeliveryTime
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setPublishedDeliveryTime($publishedDeliveryTime = null)
    {
        // validation for constraint: string
        if (!is_null($publishedDeliveryTime) && !is_string($publishedDeliveryTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publishedDeliveryTime)), __LINE__);
        }
        $this->PublishedDeliveryTime = $publishedDeliveryTime;
        return $this;
    }
    /**
     * Get CommitDate value
     * @return string|null
     */
    public function getCommitDate()
    {
        return $this->CommitDate;
    }
    /**
     * Set CommitDate value
     * @param string $commitDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setCommitDate($commitDate = null)
    {
        // validation for constraint: string
        if (!is_null($commitDate) && !is_string($commitDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commitDate)), __LINE__);
        }
        $this->CommitDate = $commitDate;
        return $this;
    }
    /**
     * Get CommitDay value
     * @return string|null
     */
    public function getCommitDay()
    {
        return $this->CommitDay;
    }
    /**
     * Set CommitDay value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $commitDay
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setCommitDay($commitDay = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::valueIsValid($commitDay)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $commitDay, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->CommitDay = $commitDay;
        return $this;
    }
    /**
     * Get TransitTime value
     * @return string|null
     */
    public function getTransitTime()
    {
        return $this->TransitTime;
    }
    /**
     * Set TransitTime value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transitTime
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setTransitTime($transitTime = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::valueIsValid($transitTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transitTime, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::getValidValues())), __LINE__);
        }
        $this->TransitTime = $transitTime;
        return $this;
    }
    /**
     * Get MaximumTransitTime value
     * @return string|null
     */
    public function getMaximumTransitTime()
    {
        return $this->MaximumTransitTime;
    }
    /**
     * Set MaximumTransitTime value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $maximumTransitTime
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setMaximumTransitTime($maximumTransitTime = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::valueIsValid($maximumTransitTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $maximumTransitTime, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::getValidValues())), __LINE__);
        }
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    /**
     * Get CustomTransitTime value
     * @return string|null
     */
    public function getCustomTransitTime()
    {
        return $this->CustomTransitTime;
    }
    /**
     * Set CustomTransitTime value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customTransitTime
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setCustomTransitTime($customTransitTime = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::valueIsValid($customTransitTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customTransitTime, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\TransitTimeType::getValidValues())), __LINE__);
        }
        $this->CustomTransitTime = $customTransitTime;
        return $this;
    }
    /**
     * Get IneligibleForMoneyBackGuarantee value
     * @return bool|null
     */
    public function getIneligibleForMoneyBackGuarantee()
    {
        return $this->IneligibleForMoneyBackGuarantee;
    }
    /**
     * Set IneligibleForMoneyBackGuarantee value
     * @param bool $ineligibleForMoneyBackGuarantee
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee = null)
    {
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
        return $this;
    }
    /**
     * Get DeliveryEligibilities value
     * @return string[]|null
     */
    public function getDeliveryEligibilities()
    {
        return $this->DeliveryEligibilities;
    }
    /**
     * Set DeliveryEligibilities value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\GroundDeliveryEligibilityType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\GroundDeliveryEligibilityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $deliveryEligibilities
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setDeliveryEligibilities(array $deliveryEligibilities = array())
    {
        $invalidValues = array();
        foreach ($deliveryEligibilities as $shipmentOperationalDetailDeliveryEligibilitiesItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\GroundDeliveryEligibilityType::valueIsValid($shipmentOperationalDetailDeliveryEligibilitiesItem)) {
                $invalidValues[] = var_export($shipmentOperationalDetailDeliveryEligibilitiesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\GroundDeliveryEligibilityType::getValidValues())), __LINE__);
        }
        $this->DeliveryEligibilities = $deliveryEligibilities;
        return $this;
    }
    /**
     * Add item to DeliveryEligibilities value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\GroundDeliveryEligibilityType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\GroundDeliveryEligibilityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function addToDeliveryEligibilities($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\GroundDeliveryEligibilityType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\GroundDeliveryEligibilityType::getValidValues())), __LINE__);
        }
        $this->DeliveryEligibilities[] = $item;
        return $this;
    }
    /**
     * Get AstraPlannedServiceLevel value
     * @return string|null
     */
    public function getAstraPlannedServiceLevel()
    {
        return $this->AstraPlannedServiceLevel;
    }
    /**
     * Set AstraPlannedServiceLevel value
     * @param string $astraPlannedServiceLevel
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setAstraPlannedServiceLevel($astraPlannedServiceLevel = null)
    {
        // validation for constraint: string
        if (!is_null($astraPlannedServiceLevel) && !is_string($astraPlannedServiceLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($astraPlannedServiceLevel)), __LINE__);
        }
        $this->AstraPlannedServiceLevel = $astraPlannedServiceLevel;
        return $this;
    }
    /**
     * Get AstraDescription value
     * @return string|null
     */
    public function getAstraDescription()
    {
        return $this->AstraDescription;
    }
    /**
     * Set AstraDescription value
     * @param string $astraDescription
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setAstraDescription($astraDescription = null)
    {
        // validation for constraint: string
        if (!is_null($astraDescription) && !is_string($astraDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($astraDescription)), __LINE__);
        }
        $this->AstraDescription = $astraDescription;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get StateOrProvinceCode value
     * @return string|null
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    /**
     * Set StateOrProvinceCode value
     * @param string $stateOrProvinceCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setStateOrProvinceCode($stateOrProvinceCode = null)
    {
        // validation for constraint: string
        if (!is_null($stateOrProvinceCode) && !is_string($stateOrProvinceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateOrProvinceCode)), __LINE__);
        }
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get AirportId value
     * @return string|null
     */
    public function getAirportId()
    {
        return $this->AirportId;
    }
    /**
     * Set AirportId value
     * @param string $airportId
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setAirportId($airportId = null)
    {
        // validation for constraint: string
        if (!is_null($airportId) && !is_string($airportId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportId)), __LINE__);
        }
        $this->AirportId = $airportId;
        return $this;
    }
    /**
     * Get ServiceCode value
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->ServiceCode;
    }
    /**
     * Set ServiceCode value
     * @param string $serviceCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setServiceCode($serviceCode = null)
    {
        // validation for constraint: string
        if (!is_null($serviceCode) && !is_string($serviceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceCode)), __LINE__);
        }
        $this->ServiceCode = $serviceCode;
        return $this;
    }
    /**
     * Get PackagingCode value
     * @return string|null
     */
    public function getPackagingCode()
    {
        return $this->PackagingCode;
    }
    /**
     * Set PackagingCode value
     * @param string $packagingCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setPackagingCode($packagingCode = null)
    {
        // validation for constraint: string
        if (!is_null($packagingCode) && !is_string($packagingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packagingCode)), __LINE__);
        }
        $this->PackagingCode = $packagingCode;
        return $this;
    }
    /**
     * Get Scac value
     * @return string|null
     */
    public function getScac()
    {
        return $this->Scac;
    }
    /**
     * Set Scac value
     * @param string $scac
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public function setScac($scac = null)
    {
        // validation for constraint: string
        if (!is_null($scac) && !is_string($scac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scac)), __LINE__);
        }
        $this->Scac = $scac;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
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
