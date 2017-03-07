<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedShipment StructType
 * @subpackage Structs
 */
class RequestedShipment extends AbstractStructBase
{
    /**
     * The ShipTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShipTimestamp;
    /**
     * The DropoffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DropoffType;
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
     * The VariationOptions
     * Meta informations extracted from the WSDL
     * - documentation: The shipment variations for the current shipment expressed in key-value pairs.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail[]
     */
    public $VariationOptions;
    /**
     * The TotalWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Weight
     */
    public $TotalWeight;
    /**
     * The TotalInsuredValue
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the total declared value for carriage of the shipment. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay,
     * mis-delivery, nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the shipment.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $TotalInsuredValue;
    /**
     * The PreferredCurrency
     * Meta informations extracted from the WSDL
     * - documentation: This attribute indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).
     * - minOccurs: 0
     * @var string
     */
    public $PreferredCurrency;
    /**
     * The ShipmentAuthorizationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details about the entity responsible for the shipment.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShipmentAuthorizationDetail
     */
    public $ShipmentAuthorizationDetail;
    /**
     * The Shipper
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Party
     */
    public $Shipper;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Party
     */
    public $Recipient;
    /**
     * The RecipientLocationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecipientLocationNumber;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - documentation: Physical starting address for the shipment, if different from shipper's address.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress
     */
    public $Origin;
    /**
     * The SoldTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Party
     */
    public $SoldTo;
    /**
     * The ShippingChargesPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Payment
     */
    public $ShippingChargesPayment;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The ExpressFreightDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ExpressFreightDetail
     */
    public $ExpressFreightDetail;
    /**
     * The FreightShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentDetail
     */
    public $FreightShipmentDetail;
    /**
     * The DeliveryInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Used with Ground Home Delivery and Freight.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryInstructions;
    /**
     * The VariableHandlingChargeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingChargeDetail
     */
    public $VariableHandlingChargeDetail;
    /**
     * The CustomsClearanceDetail
     * Meta informations extracted from the WSDL
     * - documentation: Customs clearance data, used for both international and intra-country shipping.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomsClearanceDetail
     */
    public $CustomsClearanceDetail;
    /**
     * The PickupDetail
     * Meta informations extracted from the WSDL
     * - documentation: For use in "process tag" transaction.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PickupDetail
     */
    public $PickupDetail;
    /**
     * The SmartPostDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the characteristics of a shipment pertaining to SmartPost services.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\SmartPostShipmentDetail
     */
    public $SmartPostDetail;
    /**
     * The BlockInsightVisibility
     * Meta informations extracted from the WSDL
     * - documentation: If true, only the shipper/payor will have visibility of this shipment.
     * - minOccurs: 0
     * @var bool
     */
    public $BlockInsightVisibility;
    /**
     * The LabelSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification
     */
    public $LabelSpecification;
    /**
     * The ShippingDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Contains data used to create additional (non-label) shipping documents.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentSpecification
     */
    public $ShippingDocumentSpecification;
    /**
     * The RateRequestTypes
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether and what kind of rates the customer wishes to have quoted on this shipment. The reply will also be constrained by other data on the shipment and customer.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RateRequestTypes;
    /**
     * The EdtRequestType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     * - minOccurs: 0
     * @var string
     */
    public $EdtRequestType;
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of packages in the entire shipment (even when the shipment spans multiple transactions.)
     * - minOccurs: 0
     * @var int
     */
    public $PackageCount;
    /**
     * The ShipmentOnlyFields
     * Meta informations extracted from the WSDL
     * - documentation: Specifies which package-level data values are provided at the shipment-level only. The package-level data values types specified here will not be provided at the package-level.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShipmentOnlyFields;
    /**
     * The ConfigurationData
     * Meta informations extracted from the WSDL
     * - documentation: Specifies data structures that may be re-used multiple times with s single shipment.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShipmentConfigurationData
     */
    public $ConfigurationData;
    /**
     * The RequestedPackageLineItems
     * Meta informations extracted from the WSDL
     * - documentation: One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics all packages in the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\RequestedPackageLineItem[]
     */
    public $RequestedPackageLineItems;
    /**
     * Constructor method for RequestedShipment
     * @uses RequestedShipment::setShipTimestamp()
     * @uses RequestedShipment::setDropoffType()
     * @uses RequestedShipment::setServiceType()
     * @uses RequestedShipment::setPackagingType()
     * @uses RequestedShipment::setVariationOptions()
     * @uses RequestedShipment::setTotalWeight()
     * @uses RequestedShipment::setTotalInsuredValue()
     * @uses RequestedShipment::setPreferredCurrency()
     * @uses RequestedShipment::setShipmentAuthorizationDetail()
     * @uses RequestedShipment::setShipper()
     * @uses RequestedShipment::setRecipient()
     * @uses RequestedShipment::setRecipientLocationNumber()
     * @uses RequestedShipment::setOrigin()
     * @uses RequestedShipment::setSoldTo()
     * @uses RequestedShipment::setShippingChargesPayment()
     * @uses RequestedShipment::setSpecialServicesRequested()
     * @uses RequestedShipment::setExpressFreightDetail()
     * @uses RequestedShipment::setFreightShipmentDetail()
     * @uses RequestedShipment::setDeliveryInstructions()
     * @uses RequestedShipment::setVariableHandlingChargeDetail()
     * @uses RequestedShipment::setCustomsClearanceDetail()
     * @uses RequestedShipment::setPickupDetail()
     * @uses RequestedShipment::setSmartPostDetail()
     * @uses RequestedShipment::setBlockInsightVisibility()
     * @uses RequestedShipment::setLabelSpecification()
     * @uses RequestedShipment::setShippingDocumentSpecification()
     * @uses RequestedShipment::setRateRequestTypes()
     * @uses RequestedShipment::setEdtRequestType()
     * @uses RequestedShipment::setPackageCount()
     * @uses RequestedShipment::setShipmentOnlyFields()
     * @uses RequestedShipment::setConfigurationData()
     * @uses RequestedShipment::setRequestedPackageLineItems()
     * @param string $shipTimestamp
     * @param string $dropoffType
     * @param string $serviceType
     * @param string $packagingType
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail[] $variationOptions
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $totalWeight
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalInsuredValue
     * @param string $preferredCurrency
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentAuthorizationDetail $shipmentAuthorizationDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\Party $shipper
     * @param \Drupal\commerce_fedex\FedEx\StructType\Party $recipient
     * @param string $recipientLocationNumber
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $origin
     * @param \Drupal\commerce_fedex\FedEx\StructType\Party $soldTo
     * @param \Drupal\commerce_fedex\FedEx\StructType\Payment $shippingChargesPayment
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested $specialServicesRequested
     * @param \Drupal\commerce_fedex\FedEx\StructType\ExpressFreightDetail $expressFreightDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentDetail $freightShipmentDetail
     * @param string $deliveryInstructions
     * @param \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomsClearanceDetail $customsClearanceDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\PickupDetail $pickupDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\SmartPostShipmentDetail $smartPostDetail
     * @param bool $blockInsightVisibility
     * @param \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification $labelSpecification
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentSpecification $shippingDocumentSpecification
     * @param string[] $rateRequestTypes
     * @param string $edtRequestType
     * @param int $packageCount
     * @param string[] $shipmentOnlyFields
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentConfigurationData $configurationData
     * @param \Drupal\commerce_fedex\FedEx\StructType\RequestedPackageLineItem[] $requestedPackageLineItems
     */
    public function __construct($shipTimestamp = null, $dropoffType = null, $serviceType = null, $packagingType = null, array $variationOptions = array(), \Drupal\commerce_fedex\FedEx\StructType\Weight $totalWeight = null, \Drupal\commerce_fedex\FedEx\StructType\Money $totalInsuredValue = null, $preferredCurrency = null, \Drupal\commerce_fedex\FedEx\StructType\ShipmentAuthorizationDetail $shipmentAuthorizationDetail = null, \Drupal\commerce_fedex\FedEx\StructType\Party $shipper = null, \Drupal\commerce_fedex\FedEx\StructType\Party $recipient = null, $recipientLocationNumber = null, \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $origin = null, \Drupal\commerce_fedex\FedEx\StructType\Party $soldTo = null, \Drupal\commerce_fedex\FedEx\StructType\Payment $shippingChargesPayment = null, \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested $specialServicesRequested = null, \Drupal\commerce_fedex\FedEx\StructType\ExpressFreightDetail $expressFreightDetail = null, \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentDetail $freightShipmentDetail = null, $deliveryInstructions = null, \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail = null, \Drupal\commerce_fedex\FedEx\StructType\CustomsClearanceDetail $customsClearanceDetail = null, \Drupal\commerce_fedex\FedEx\StructType\PickupDetail $pickupDetail = null, \Drupal\commerce_fedex\FedEx\StructType\SmartPostShipmentDetail $smartPostDetail = null, $blockInsightVisibility = null, \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification $labelSpecification = null, \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentSpecification $shippingDocumentSpecification = null, array $rateRequestTypes = array(), $edtRequestType = null, $packageCount = null, array $shipmentOnlyFields = array(), \Drupal\commerce_fedex\FedEx\StructType\ShipmentConfigurationData $configurationData = null, array $requestedPackageLineItems = array())
    {
        $this
            ->setShipTimestamp($shipTimestamp)
            ->setDropoffType($dropoffType)
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setVariationOptions($variationOptions)
            ->setTotalWeight($totalWeight)
            ->setTotalInsuredValue($totalInsuredValue)
            ->setPreferredCurrency($preferredCurrency)
            ->setShipmentAuthorizationDetail($shipmentAuthorizationDetail)
            ->setShipper($shipper)
            ->setRecipient($recipient)
            ->setRecipientLocationNumber($recipientLocationNumber)
            ->setOrigin($origin)
            ->setSoldTo($soldTo)
            ->setShippingChargesPayment($shippingChargesPayment)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setExpressFreightDetail($expressFreightDetail)
            ->setFreightShipmentDetail($freightShipmentDetail)
            ->setDeliveryInstructions($deliveryInstructions)
            ->setVariableHandlingChargeDetail($variableHandlingChargeDetail)
            ->setCustomsClearanceDetail($customsClearanceDetail)
            ->setPickupDetail($pickupDetail)
            ->setSmartPostDetail($smartPostDetail)
            ->setBlockInsightVisibility($blockInsightVisibility)
            ->setLabelSpecification($labelSpecification)
            ->setShippingDocumentSpecification($shippingDocumentSpecification)
            ->setRateRequestTypes($rateRequestTypes)
            ->setEdtRequestType($edtRequestType)
            ->setPackageCount($packageCount)
            ->setShipmentOnlyFields($shipmentOnlyFields)
            ->setConfigurationData($configurationData)
            ->setRequestedPackageLineItems($requestedPackageLineItems);
    }
    /**
     * Get ShipTimestamp value
     * @return string|null
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    /**
     * Set ShipTimestamp value
     * @param string $shipTimestamp
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setShipTimestamp($shipTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($shipTimestamp) && !is_string($shipTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipTimestamp)), __LINE__);
        }
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    /**
     * Get DropoffType value
     * @return string|null
     */
    public function getDropoffType()
    {
        return $this->DropoffType;
    }
    /**
     * Set DropoffType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DropoffType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DropoffType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dropoffType
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setDropoffType($dropoffType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\DropoffType::valueIsValid($dropoffType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dropoffType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\DropoffType::getValidValues())), __LINE__);
        }
        $this->DropoffType = $dropoffType;
        return $this;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
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
     * Get VariationOptions value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail[]|null
     */
    public function getVariationOptions()
    {
        return $this->VariationOptions;
    }
    /**
     * Set VariationOptions value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail[] $variationOptions
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setVariationOptions(array $variationOptions = array())
    {
        foreach ($variationOptions as $requestedShipmentVariationOptionsItem) {
            // validation for constraint: itemType
            if (!$requestedShipmentVariationOptionsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail) {
                throw new \InvalidArgumentException(sprintf('The VariationOptions property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail, "%s" given', is_object($requestedShipmentVariationOptionsItem) ? get_class($requestedShipmentVariationOptionsItem) : gettype($requestedShipmentVariationOptionsItem)), __LINE__);
            }
        }
        $this->VariationOptions = $variationOptions;
        return $this;
    }
    /**
     * Add item to VariationOptions value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function addToVariationOptions(\Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail) {
            throw new \InvalidArgumentException(sprintf('The VariationOptions property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VariationOptions[] = $item;
        return $this;
    }
    /**
     * Get TotalWeight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $totalWeight
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setTotalWeight(\Drupal\commerce_fedex\FedEx\StructType\Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Get TotalInsuredValue value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getTotalInsuredValue()
    {
        return $this->TotalInsuredValue;
    }
    /**
     * Set TotalInsuredValue value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalInsuredValue
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setTotalInsuredValue(\Drupal\commerce_fedex\FedEx\StructType\Money $totalInsuredValue = null)
    {
        $this->TotalInsuredValue = $totalInsuredValue;
        return $this;
    }
    /**
     * Get PreferredCurrency value
     * @return string|null
     */
    public function getPreferredCurrency()
    {
        return $this->PreferredCurrency;
    }
    /**
     * Set PreferredCurrency value
     * @param string $preferredCurrency
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setPreferredCurrency($preferredCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($preferredCurrency) && !is_string($preferredCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preferredCurrency)), __LINE__);
        }
        $this->PreferredCurrency = $preferredCurrency;
        return $this;
    }
    /**
     * Get ShipmentAuthorizationDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentAuthorizationDetail|null
     */
    public function getShipmentAuthorizationDetail()
    {
        return $this->ShipmentAuthorizationDetail;
    }
    /**
     * Set ShipmentAuthorizationDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentAuthorizationDetail $shipmentAuthorizationDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setShipmentAuthorizationDetail(\Drupal\commerce_fedex\FedEx\StructType\ShipmentAuthorizationDetail $shipmentAuthorizationDetail = null)
    {
        $this->ShipmentAuthorizationDetail = $shipmentAuthorizationDetail;
        return $this;
    }
    /**
     * Get Shipper value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Party|null
     */
    public function getShipper()
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Party $shipper
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setShipper(\Drupal\commerce_fedex\FedEx\StructType\Party $shipper = null)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Party|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Party $recipient
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setRecipient(\Drupal\commerce_fedex\FedEx\StructType\Party $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get RecipientLocationNumber value
     * @return string|null
     */
    public function getRecipientLocationNumber()
    {
        return $this->RecipientLocationNumber;
    }
    /**
     * Set RecipientLocationNumber value
     * @param string $recipientLocationNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setRecipientLocationNumber($recipientLocationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($recipientLocationNumber) && !is_string($recipientLocationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientLocationNumber)), __LINE__);
        }
        $this->RecipientLocationNumber = $recipientLocationNumber;
        return $this;
    }
    /**
     * Get Origin value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $origin
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setOrigin(\Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $origin = null)
    {
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get SoldTo value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Party|null
     */
    public function getSoldTo()
    {
        return $this->SoldTo;
    }
    /**
     * Set SoldTo value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Party $soldTo
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setSoldTo(\Drupal\commerce_fedex\FedEx\StructType\Party $soldTo = null)
    {
        $this->SoldTo = $soldTo;
        return $this;
    }
    /**
     * Get ShippingChargesPayment value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Payment|null
     */
    public function getShippingChargesPayment()
    {
        return $this->ShippingChargesPayment;
    }
    /**
     * Set ShippingChargesPayment value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Payment $shippingChargesPayment
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setShippingChargesPayment(\Drupal\commerce_fedex\FedEx\StructType\Payment $shippingChargesPayment = null)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * Get SpecialServicesRequested value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested $specialServicesRequested
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setSpecialServicesRequested(\Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get ExpressFreightDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ExpressFreightDetail|null
     */
    public function getExpressFreightDetail()
    {
        return $this->ExpressFreightDetail;
    }
    /**
     * Set ExpressFreightDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ExpressFreightDetail $expressFreightDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setExpressFreightDetail(\Drupal\commerce_fedex\FedEx\StructType\ExpressFreightDetail $expressFreightDetail = null)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    /**
     * Get FreightShipmentDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentDetail|null
     */
    public function getFreightShipmentDetail()
    {
        return $this->FreightShipmentDetail;
    }
    /**
     * Set FreightShipmentDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentDetail $freightShipmentDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setFreightShipmentDetail(\Drupal\commerce_fedex\FedEx\StructType\FreightShipmentDetail $freightShipmentDetail = null)
    {
        $this->FreightShipmentDetail = $freightShipmentDetail;
        return $this;
    }
    /**
     * Get DeliveryInstructions value
     * @return string|null
     */
    public function getDeliveryInstructions()
    {
        return $this->DeliveryInstructions;
    }
    /**
     * Set DeliveryInstructions value
     * @param string $deliveryInstructions
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setDeliveryInstructions($deliveryInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryInstructions) && !is_string($deliveryInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryInstructions)), __LINE__);
        }
        $this->DeliveryInstructions = $deliveryInstructions;
        return $this;
    }
    /**
     * Get VariableHandlingChargeDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingChargeDetail|null
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->VariableHandlingChargeDetail;
    }
    /**
     * Set VariableHandlingChargeDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setVariableHandlingChargeDetail(\Drupal\commerce_fedex\FedEx\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail = null)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * Get CustomsClearanceDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomsClearanceDetail|null
     */
    public function getCustomsClearanceDetail()
    {
        return $this->CustomsClearanceDetail;
    }
    /**
     * Set CustomsClearanceDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomsClearanceDetail $customsClearanceDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setCustomsClearanceDetail(\Drupal\commerce_fedex\FedEx\StructType\CustomsClearanceDetail $customsClearanceDetail = null)
    {
        $this->CustomsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    /**
     * Get PickupDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PickupDetail|null
     */
    public function getPickupDetail()
    {
        return $this->PickupDetail;
    }
    /**
     * Set PickupDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\PickupDetail $pickupDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setPickupDetail(\Drupal\commerce_fedex\FedEx\StructType\PickupDetail $pickupDetail = null)
    {
        $this->PickupDetail = $pickupDetail;
        return $this;
    }
    /**
     * Get SmartPostDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\SmartPostShipmentDetail|null
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }
    /**
     * Set SmartPostDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\SmartPostShipmentDetail $smartPostDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setSmartPostDetail(\Drupal\commerce_fedex\FedEx\StructType\SmartPostShipmentDetail $smartPostDetail = null)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    /**
     * Get BlockInsightVisibility value
     * @return bool|null
     */
    public function getBlockInsightVisibility()
    {
        return $this->BlockInsightVisibility;
    }
    /**
     * Set BlockInsightVisibility value
     * @param bool $blockInsightVisibility
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setBlockInsightVisibility($blockInsightVisibility = null)
    {
        $this->BlockInsightVisibility = $blockInsightVisibility;
        return $this;
    }
    /**
     * Get LabelSpecification value
     * @return \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification|null
     */
    public function getLabelSpecification()
    {
        return $this->LabelSpecification;
    }
    /**
     * Set LabelSpecification value
     * @param \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification $labelSpecification
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setLabelSpecification(\Drupal\commerce_fedex\FedEx\StructType\LabelSpecification $labelSpecification = null)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Get ShippingDocumentSpecification value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentSpecification|null
     */
    public function getShippingDocumentSpecification()
    {
        return $this->ShippingDocumentSpecification;
    }
    /**
     * Set ShippingDocumentSpecification value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentSpecification $shippingDocumentSpecification
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setShippingDocumentSpecification(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentSpecification $shippingDocumentSpecification = null)
    {
        $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    /**
     * Get RateRequestTypes value
     * @return string[]|null
     */
    public function getRateRequestTypes()
    {
        return $this->RateRequestTypes;
    }
    /**
     * Set RateRequestTypes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RateRequestType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $rateRequestTypes
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setRateRequestTypes(array $rateRequestTypes = array())
    {
        $invalidValues = array();
        foreach ($rateRequestTypes as $requestedShipmentRateRequestTypesItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\RateRequestType::valueIsValid($requestedShipmentRateRequestTypesItem)) {
                $invalidValues[] = var_export($requestedShipmentRateRequestTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes = $rateRequestTypes;
        return $this;
    }
    /**
     * Add item to RateRequestTypes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RateRequestType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function addToRateRequestTypes($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\RateRequestType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes[] = $item;
        return $this;
    }
    /**
     * Get EdtRequestType value
     * @return string|null
     */
    public function getEdtRequestType()
    {
        return $this->EdtRequestType;
    }
    /**
     * Set EdtRequestType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\EdtRequestType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\EdtRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $edtRequestType
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setEdtRequestType($edtRequestType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\EdtRequestType::valueIsValid($edtRequestType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $edtRequestType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\EdtRequestType::getValidValues())), __LINE__);
        }
        $this->EdtRequestType = $edtRequestType;
        return $this;
    }
    /**
     * Get PackageCount value
     * @return int|null
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    /**
     * Set PackageCount value
     * @param int $packageCount
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setPackageCount($packageCount = null)
    {
        // validation for constraint: int
        if (!is_null($packageCount) && !is_numeric($packageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageCount)), __LINE__);
        }
        $this->PackageCount = $packageCount;
        return $this;
    }
    /**
     * Get ShipmentOnlyFields value
     * @return string[]|null
     */
    public function getShipmentOnlyFields()
    {
        return $this->ShipmentOnlyFields;
    }
    /**
     * Set ShipmentOnlyFields value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentOnlyFieldsType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentOnlyFieldsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shipmentOnlyFields
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setShipmentOnlyFields(array $shipmentOnlyFields = array())
    {
        $invalidValues = array();
        foreach ($shipmentOnlyFields as $requestedShipmentShipmentOnlyFieldsItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\ShipmentOnlyFieldsType::valueIsValid($requestedShipmentShipmentOnlyFieldsItem)) {
                $invalidValues[] = var_export($requestedShipmentShipmentOnlyFieldsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ShipmentOnlyFieldsType::getValidValues())), __LINE__);
        }
        $this->ShipmentOnlyFields = $shipmentOnlyFields;
        return $this;
    }
    /**
     * Add item to ShipmentOnlyFields value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentOnlyFieldsType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentOnlyFieldsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function addToShipmentOnlyFields($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ShipmentOnlyFieldsType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ShipmentOnlyFieldsType::getValidValues())), __LINE__);
        }
        $this->ShipmentOnlyFields[] = $item;
        return $this;
    }
    /**
     * Get ConfigurationData value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentConfigurationData|null
     */
    public function getConfigurationData()
    {
        return $this->ConfigurationData;
    }
    /**
     * Set ConfigurationData value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentConfigurationData $configurationData
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setConfigurationData(\Drupal\commerce_fedex\FedEx\StructType\ShipmentConfigurationData $configurationData = null)
    {
        $this->ConfigurationData = $configurationData;
        return $this;
    }
    /**
     * Get RequestedPackageLineItems value
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedPackageLineItem[]|null
     */
    public function getRequestedPackageLineItems()
    {
        return $this->RequestedPackageLineItems;
    }
    /**
     * Set RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\RequestedPackageLineItem[] $requestedPackageLineItems
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems = array())
    {
        foreach ($requestedPackageLineItems as $requestedShipmentRequestedPackageLineItemsItem) {
            // validation for constraint: itemType
            if (!$requestedShipmentRequestedPackageLineItemsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\RequestedPackageLineItem) {
                throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\RequestedPackageLineItem, "%s" given', is_object($requestedShipmentRequestedPackageLineItemsItem) ? get_class($requestedShipmentRequestedPackageLineItemsItem) : gettype($requestedShipmentRequestedPackageLineItemsItem)), __LINE__);
            }
        }
        $this->RequestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    /**
     * Add item to RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\RequestedPackageLineItem $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public function addToRequestedPackageLineItems(\Drupal\commerce_fedex\FedEx\StructType\RequestedPackageLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\RequestedPackageLineItem) {
            throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\RequestedPackageLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RequestedPackageLineItems[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
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
