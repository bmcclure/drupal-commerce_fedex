<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateReplyDetail StructType
 * @subpackage Structs
 */
class RateReplyDetail extends AbstractStructBase
{
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackagingType;
    /**
     * The AppliedOptions
     * Meta informations extracted from the WSDL
     * - documentation: Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AppliedOptions;
    /**
     * The AppliedSubOptions
     * Meta informations extracted from the WSDL
     * - documentation: Supporting detail for applied options identified in preceding field.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ServiceSubOptionDetail
     */
    public $AppliedSubOptions;
    /**
     * The DeliveryStation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryStation;
    /**
     * The DeliveryDayOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDayOfWeek;
    /**
     * The DeliveryTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryTimestamp;
    /**
     * The CommitDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CommitDetail[]
     */
    public $CommitDetails;
    /**
     * The DestinationAirportId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationAirportId;
    /**
     * The IneligibleForMoneyBackGuarantee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IneligibleForMoneyBackGuarantee;
    /**
     * The OriginServiceArea
     * Meta informations extracted from the WSDL
     * - documentation: Not populated by FAST service in Jan07.
     * - minOccurs: 0
     * @var string
     */
    public $OriginServiceArea;
    /**
     * The DestinationServiceArea
     * Meta informations extracted from the WSDL
     * - documentation: Not populated by FAST service in Jan07.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceArea;
    /**
     * The TransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Not populated by FAST service in Jan07.
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
     * The SignatureOption
     * Meta informations extracted from the WSDL
     * - documentation: Not populated by FAST service in Jan07. Actual signature option applied, to allow for cases in wihch the original value conflicted with other service features in the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $SignatureOption;
    /**
     * The ActualRateType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActualRateType;
    /**
     * The RatedShipmentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each element contains all rate data for a single rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail[]
     */
    public $RatedShipmentDetails;
    /**
     * Constructor method for RateReplyDetail
     * @uses RateReplyDetail::setServiceType()
     * @uses RateReplyDetail::setPackagingType()
     * @uses RateReplyDetail::setAppliedOptions()
     * @uses RateReplyDetail::setAppliedSubOptions()
     * @uses RateReplyDetail::setDeliveryStation()
     * @uses RateReplyDetail::setDeliveryDayOfWeek()
     * @uses RateReplyDetail::setDeliveryTimestamp()
     * @uses RateReplyDetail::setCommitDetails()
     * @uses RateReplyDetail::setDestinationAirportId()
     * @uses RateReplyDetail::setIneligibleForMoneyBackGuarantee()
     * @uses RateReplyDetail::setOriginServiceArea()
     * @uses RateReplyDetail::setDestinationServiceArea()
     * @uses RateReplyDetail::setTransitTime()
     * @uses RateReplyDetail::setMaximumTransitTime()
     * @uses RateReplyDetail::setSignatureOption()
     * @uses RateReplyDetail::setActualRateType()
     * @uses RateReplyDetail::setRatedShipmentDetails()
     * @param string $serviceType
     * @param string $packagingType
     * @param string[] $appliedOptions
     * @param \Drupal\commerce_fedex\FedEx\StructType\ServiceSubOptionDetail $appliedSubOptions
     * @param string $deliveryStation
     * @param string $deliveryDayOfWeek
     * @param string $deliveryTimestamp
     * @param \Drupal\commerce_fedex\FedEx\StructType\CommitDetail[] $commitDetails
     * @param string $destinationAirportId
     * @param bool $ineligibleForMoneyBackGuarantee
     * @param string $originServiceArea
     * @param string $destinationServiceArea
     * @param string $transitTime
     * @param string $maximumTransitTime
     * @param string $signatureOption
     * @param string $actualRateType
     * @param \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail[] $ratedShipmentDetails
     */
    public function __construct($serviceType = null, $packagingType = null, array $appliedOptions = array(), \Drupal\commerce_fedex\FedEx\StructType\ServiceSubOptionDetail $appliedSubOptions = null, $deliveryStation = null, $deliveryDayOfWeek = null, $deliveryTimestamp = null, array $commitDetails = array(), $destinationAirportId = null, $ineligibleForMoneyBackGuarantee = null, $originServiceArea = null, $destinationServiceArea = null, $transitTime = null, $maximumTransitTime = null, $signatureOption = null, $actualRateType = null, array $ratedShipmentDetails = array())
    {
        $this
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setAppliedOptions($appliedOptions)
            ->setAppliedSubOptions($appliedSubOptions)
            ->setDeliveryStation($deliveryStation)
            ->setDeliveryDayOfWeek($deliveryDayOfWeek)
            ->setDeliveryTimestamp($deliveryTimestamp)
            ->setCommitDetails($commitDetails)
            ->setDestinationAirportId($destinationAirportId)
            ->setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
            ->setOriginServiceArea($originServiceArea)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setTransitTime($transitTime)
            ->setMaximumTransitTime($maximumTransitTime)
            ->setSignatureOption($signatureOption)
            ->setActualRateType($actualRateType)
            ->setRatedShipmentDetails($ratedShipmentDetails);
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $serviceType
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ServiceType::valueIsValid($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $serviceType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ServiceType::getValidValues())), __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Get PackagingType value
     * @return string|null
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    /**
     * Set PackagingType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PackagingType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packagingType
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function setPackagingType($packagingType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\PackagingType::valueIsValid($packagingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packagingType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\PackagingType::getValidValues())), __LINE__);
        }
        $this->PackagingType = $packagingType;
        return $this;
    }
    /**
     * Get AppliedOptions value
     * @return string[]|null
     */
    public function getAppliedOptions()
    {
        return $this->AppliedOptions;
    }
    /**
     * Set AppliedOptions value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $appliedOptions
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function setAppliedOptions(array $appliedOptions = array())
    {
        $invalidValues = array();
        foreach ($appliedOptions as $rateReplyDetailAppliedOptionsItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::valueIsValid($rateReplyDetailAppliedOptionsItem)) {
                $invalidValues[] = var_export($rateReplyDetailAppliedOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->AppliedOptions = $appliedOptions;
        return $this;
    }
    /**
     * Add item to AppliedOptions value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function addToAppliedOptions($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->AppliedOptions[] = $item;
        return $this;
    }
    /**
     * Get AppliedSubOptions value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ServiceSubOptionDetail|null
     */
    public function getAppliedSubOptions()
    {
        return $this->AppliedSubOptions;
    }
    /**
     * Set AppliedSubOptions value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ServiceSubOptionDetail $appliedSubOptions
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function setAppliedSubOptions(\Drupal\commerce_fedex\FedEx\StructType\ServiceSubOptionDetail $appliedSubOptions = null)
    {
        $this->AppliedSubOptions = $appliedSubOptions;
        return $this;
    }
    /**
     * Get DeliveryStation value
     * @return string|null
     */
    public function getDeliveryStation()
    {
        return $this->DeliveryStation;
    }
    /**
     * Set DeliveryStation value
     * @param string $deliveryStation
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function setDeliveryStation($deliveryStation = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryStation) && !is_string($deliveryStation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryStation)), __LINE__);
        }
        $this->DeliveryStation = $deliveryStation;
        return $this;
    }
    /**
     * Get DeliveryDayOfWeek value
     * @return string|null
     */
    public function getDeliveryDayOfWeek()
    {
        return $this->DeliveryDayOfWeek;
    }
    /**
     * Set DeliveryDayOfWeek value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryDayOfWeek
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function setDeliveryDayOfWeek($deliveryDayOfWeek = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::valueIsValid($deliveryDayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryDayOfWeek, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DeliveryDayOfWeek = $deliveryDayOfWeek;
        return $this;
    }
    /**
     * Get DeliveryTimestamp value
     * @return string|null
     */
    public function getDeliveryTimestamp()
    {
        return $this->DeliveryTimestamp;
    }
    /**
     * Set DeliveryTimestamp value
     * @param string $deliveryTimestamp
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function setDeliveryTimestamp($deliveryTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryTimestamp) && !is_string($deliveryTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryTimestamp)), __LINE__);
        }
        $this->DeliveryTimestamp = $deliveryTimestamp;
        return $this;
    }
    /**
     * Get CommitDetails value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CommitDetail[]|null
     */
    public function getCommitDetails()
    {
        return $this->CommitDetails;
    }
    /**
     * Set CommitDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CommitDetail[] $commitDetails
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function setCommitDetails(array $commitDetails = array())
    {
        foreach ($commitDetails as $rateReplyDetailCommitDetailsItem) {
            // validation for constraint: itemType
            if (!$rateReplyDetailCommitDetailsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\CommitDetail) {
                throw new \InvalidArgumentException(sprintf('The CommitDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CommitDetail, "%s" given', is_object($rateReplyDetailCommitDetailsItem) ? get_class($rateReplyDetailCommitDetailsItem) : gettype($rateReplyDetailCommitDetailsItem)), __LINE__);
            }
        }
        $this->CommitDetails = $commitDetails;
        return $this;
    }
    /**
     * Add item to CommitDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CommitDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function addToCommitDetails(\Drupal\commerce_fedex\FedEx\StructType\CommitDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\CommitDetail) {
            throw new \InvalidArgumentException(sprintf('The CommitDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CommitDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CommitDetails[] = $item;
        return $this;
    }
    /**
     * Get DestinationAirportId value
     * @return string|null
     */
    public function getDestinationAirportId()
    {
        return $this->DestinationAirportId;
    }
    /**
     * Set DestinationAirportId value
     * @param string $destinationAirportId
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function setDestinationAirportId($destinationAirportId = null)
    {
        // validation for constraint: string
        if (!is_null($destinationAirportId) && !is_string($destinationAirportId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationAirportId)), __LINE__);
        }
        $this->DestinationAirportId = $destinationAirportId;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee = null)
    {
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
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
     * Get RatedShipmentDetails value
     * @return \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail[]|null
     */
    public function getRatedShipmentDetails()
    {
        return $this->RatedShipmentDetails;
    }
    /**
     * Set RatedShipmentDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail[] $ratedShipmentDetails
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function setRatedShipmentDetails(array $ratedShipmentDetails = array())
    {
        foreach ($ratedShipmentDetails as $rateReplyDetailRatedShipmentDetailsItem) {
            // validation for constraint: itemType
            if (!$rateReplyDetailRatedShipmentDetailsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail) {
                throw new \InvalidArgumentException(sprintf('The RatedShipmentDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail, "%s" given', is_object($rateReplyDetailRatedShipmentDetailsItem) ? get_class($rateReplyDetailRatedShipmentDetailsItem) : gettype($rateReplyDetailRatedShipmentDetailsItem)), __LINE__);
            }
        }
        $this->RatedShipmentDetails = $ratedShipmentDetails;
        return $this;
    }
    /**
     * Add item to RatedShipmentDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
     */
    public function addToRatedShipmentDetails(\Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail) {
            throw new \InvalidArgumentException(sprintf('The RatedShipmentDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\RatedShipmentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatedShipmentDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateReplyDetail
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
