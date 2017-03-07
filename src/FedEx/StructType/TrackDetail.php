<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackDetail StructType
 * @subpackage Structs
 */
class TrackDetail extends AbstractStructBase
{
    /**
     * The Notification
     * Meta informations extracted from the WSDL
     * - documentation: To report soft error on an individual track detail.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Notification
     */
    public $Notification;
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx package identifier.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The Barcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\StringBarcode
     */
    public $Barcode;
    /**
     * The TrackingNumberUniqueIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is
     * used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumberUniqueIdentifier;
    /**
     * The StatusDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details about the status of the shipment being tracked.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail
     */
    public $StatusDetail;
    /**
     * The InformationNotes
     * Meta informations extracted from the WSDL
     * - documentation: Notifications to the end user that provide additional information relevant to the tracked shipment. For example, a notification may indicate that a change in behavior has occurred.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackInformationNoteDetail[]
     */
    public $InformationNotes;
    /**
     * The CustomerExceptionRequests
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail[]
     */
    public $CustomerExceptionRequests;
    /**
     * The Reconciliation
     * Meta informations extracted from the WSDL
     * - documentation: Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackReconciliation
     */
    public $Reconciliation;
    /**
     * The ServiceCommitMessage
     * Meta informations extracted from the WSDL
     * - documentation: Used to convey information such as. 1. FedEx has received information about a package but has not yet taken possession of it. 2. FedEx has handed the package off to a third party for final delivery. 3. The package delivery has been
     * cancelled
     * - minOccurs: 0
     * @var string
     */
    public $ServiceCommitMessage;
    /**
     * The DestinationServiceArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceArea;
    /**
     * The DestinationServiceAreaDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceAreaDescription;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a FedEx operating company (transportation).
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The OperatingCompany
     * Meta informations extracted from the WSDL
     * - documentation: Identifies operating transportation company that is the specific to the carrier code.
     * - minOccurs: 0
     * @var string
     */
    public $OperatingCompany;
    /**
     * The OperatingCompanyOrCarrierDescription
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a detailed description about the carrier or the operating company.
     * - minOccurs: 0
     * @var string
     */
    public $OperatingCompanyOrCarrierDescription;
    /**
     * The CartageAgentCompanyName
     * Meta informations extracted from the WSDL
     * - documentation: If the package was interlined to a cartage agent, this is the name of the cartage agent. (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $CartageAgentCompanyName;
    /**
     * The ProductionLocationContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the FXO production centre contact and address.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress
     */
    public $ProductionLocationContactAndAddress;
    /**
     * The OtherIdentifiers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackOtherIdentifierDetail[]
     */
    public $OtherIdentifiers;
    /**
     * The FormId
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $FormId;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details about service such as service description and type.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackServiceDescriptionDetail
     */
    public $Service;
    /**
     * The PackageWeight
     * Meta informations extracted from the WSDL
     * - documentation: The weight of this package.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Weight
     */
    public $PackageWeight;
    /**
     * The PackageDimensions
     * Meta informations extracted from the WSDL
     * - documentation: Physical dimensions of the package.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Dimensions
     */
    public $PackageDimensions;
    /**
     * The PackageDimensionalWeight
     * Meta informations extracted from the WSDL
     * - documentation: The dimensional weight of the package.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Weight
     */
    public $PackageDimensionalWeight;
    /**
     * The ShipmentWeight
     * Meta informations extracted from the WSDL
     * - documentation: The weight of the entire shipment.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Weight
     */
    public $ShipmentWeight;
    /**
     * The Packaging
     * Meta informations extracted from the WSDL
     * - documentation: Retained for legacy compatibility only.
     * - minOccurs: 0
     * @var string
     */
    public $Packaging;
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - documentation: Strict representation of the Packaging type (e.g. FEDEX_BOX, YOUR_PACKAGING).
     * - minOccurs: 0
     * @var string
     */
    public $PackagingType;
    /**
     * The PhysicalPackagingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhysicalPackagingType;
    /**
     * The PackageSequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: The sequence number of this package in a shipment. This would be 2 if it was package number 2 of 4.
     * - minOccurs: 0
     * @var int
     */
    public $PackageSequenceNumber;
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of packages in this shipment.
     * - minOccurs: 0
     * @var int
     */
    public $PackageCount;
    /**
     * The CreatorSoftwareId
     * Meta informations extracted from the WSDL
     * - documentation: FOR FEDEX INTERNAL USE ONLY: Specifies the software id of the device that was used to create this tracked shipment.
     * - minOccurs: 0
     * @var string
     */
    public $CreatorSoftwareId;
    /**
     * The Charges
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the SPOC details.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail[]
     */
    public $Charges;
    /**
     * The NickName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NickName;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Attributes;
    /**
     * The ShipmentContents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ContentRecord[]
     */
    public $ShipmentContents;
    /**
     * The PackageContents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PackageContents;
    /**
     * The ClearanceLocationCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceLocationCode;
    /**
     * The Commodities
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Commodity[]
     */
    public $Commodities;
    /**
     * The ReturnDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackReturnDetail
     */
    public $ReturnDetail;
    /**
     * The CustomsOptionDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the reason for return.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomsOptionDetail[]
     */
    public $CustomsOptionDetails;
    /**
     * The AdvanceNotificationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackAdvanceNotificationDetail
     */
    public $AdvanceNotificationDetail;
    /**
     * The SpecialHandlings
     * Meta informations extracted from the WSDL
     * - documentation: List of special handlings that applied to this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialHandling[]
     */
    public $SpecialHandlings;
    /**
     * The Payments
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the payments for the shipment being tracked.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackPayment[]
     */
    public $Payments;
    /**
     * The Shipper
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public $Shipper;
    /**
     * The PossessionStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates last-known possession of package (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $PossessionStatus;
    /**
     * The ShipperAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $ShipperAddress;
    /**
     * The OriginLocationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address of the FedEx pickup location/facility.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $OriginLocationAddress;
    /**
     * The OriginStationId
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $OriginStationId;
    /**
     * The DatesOrTimes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackingDateOrTimestamp[]
     */
    public $DatesOrTimes;
    /**
     * The TotalTransitDistance
     * Meta informations extracted from the WSDL
     * - documentation: The distance from the origin to the destination. Returned for Custom Critical shipments.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Distance
     */
    public $TotalTransitDistance;
    /**
     * The DistanceToDestination
     * Meta informations extracted from the WSDL
     * - documentation: Total distance package still has to travel. Returned for Custom Critical shipments.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Distance
     */
    public $DistanceToDestination;
    /**
     * The SpecialInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional details about package delivery.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialInstruction[]
     */
    public $SpecialInstructions;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public $Recipient;
    /**
     * The LastUpdatedDestinationAddress
     * Meta informations extracted from the WSDL
     * - documentation: This is the latest updated destination address.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $LastUpdatedDestinationAddress;
    /**
     * The DestinationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address this package is to be (or has been) delivered.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $DestinationAddress;
    /**
     * The HoldAtLocationContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public $HoldAtLocationContact;
    /**
     * The HoldAtLocationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address this package is requested to placed on hold.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $HoldAtLocationAddress;
    /**
     * The DestinationStationId
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $DestinationStationId;
    /**
     * The DestinationLocationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address of the FedEx delivery location/facility.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $DestinationLocationAddress;
    /**
     * The DestinationLocationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationLocationType;
    /**
     * The DestinationLocationTimeZoneOffset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationLocationTimeZoneOffset;
    /**
     * The ActualDeliveryAddress
     * Meta informations extracted from the WSDL
     * - documentation: Actual address where package was delivered. Differs from destinationAddress, which indicates where the package was to be delivered; This field tells where delivery actually occurred (next door, at station, etc.)
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $ActualDeliveryAddress;
    /**
     * The OfficeOrderDeliveryMethod
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the method of office order delivery.
     * - minOccurs: 0
     * @var string
     */
    public $OfficeOrderDeliveryMethod;
    /**
     * The DeliveryLocationType
     * Meta informations extracted from the WSDL
     * - documentation: Strict text indicating the delivery location at the delivered to address.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryLocationType;
    /**
     * The DeliveryLocationDescription
     * Meta informations extracted from the WSDL
     * - documentation: User/screen friendly representation of the DeliveryLocationType (delivery location at the delivered to address). Can be returned in localized text.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryLocationDescription;
    /**
     * The DeliveryAttempts
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of delivery attempts made to deliver the shipment.
     * - minOccurs: 0
     * @var int
     */
    public $DeliveryAttempts;
    /**
     * The DeliverySignatureName
     * Meta informations extracted from the WSDL
     * - documentation: This is either the name of the person that signed for the package or "Signature not requested" or "Signature on file".
     * - minOccurs: 0
     * @var string
     */
    public $DeliverySignatureName;
    /**
     * The PieceCountVerificationDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the count of the packages delivered at the delivery location and the count of the packages at the origin.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail[]
     */
    public $PieceCountVerificationDetails;
    /**
     * The TotalUniqueAddressCountInConsolidation
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the total number of unique addresses on the CRNs in a consolidation.
     * - minOccurs: 0
     * @var int
     */
    public $TotalUniqueAddressCountInConsolidation;
    /**
     * The AvailableImages
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail[]
     */
    public $AvailableImages;
    /**
     * The Signature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\SignatureImageDetail
     */
    public $Signature;
    /**
     * The NotificationEventsAvailable
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $NotificationEventsAvailable;
    /**
     * The SplitShipmentParts
     * Meta informations extracted from the WSDL
     * - documentation: Returned for cargo shipments only when they are currently split across vehicles.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart[]
     */
    public $SplitShipmentParts;
    /**
     * The DeliveryOptionEligibilityDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the eligibility for different delivery options.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail[]
     */
    public $DeliveryOptionEligibilityDetails;
    /**
     * The Events
     * Meta informations extracted from the WSDL
     * - documentation: Event information for a tracking number.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackEvent[]
     */
    public $Events;
    /**
     * Constructor method for TrackDetail
     * @uses TrackDetail::setNotification()
     * @uses TrackDetail::setTrackingNumber()
     * @uses TrackDetail::setBarcode()
     * @uses TrackDetail::setTrackingNumberUniqueIdentifier()
     * @uses TrackDetail::setStatusDetail()
     * @uses TrackDetail::setInformationNotes()
     * @uses TrackDetail::setCustomerExceptionRequests()
     * @uses TrackDetail::setReconciliation()
     * @uses TrackDetail::setServiceCommitMessage()
     * @uses TrackDetail::setDestinationServiceArea()
     * @uses TrackDetail::setDestinationServiceAreaDescription()
     * @uses TrackDetail::setCarrierCode()
     * @uses TrackDetail::setOperatingCompany()
     * @uses TrackDetail::setOperatingCompanyOrCarrierDescription()
     * @uses TrackDetail::setCartageAgentCompanyName()
     * @uses TrackDetail::setProductionLocationContactAndAddress()
     * @uses TrackDetail::setOtherIdentifiers()
     * @uses TrackDetail::setFormId()
     * @uses TrackDetail::setService()
     * @uses TrackDetail::setPackageWeight()
     * @uses TrackDetail::setPackageDimensions()
     * @uses TrackDetail::setPackageDimensionalWeight()
     * @uses TrackDetail::setShipmentWeight()
     * @uses TrackDetail::setPackaging()
     * @uses TrackDetail::setPackagingType()
     * @uses TrackDetail::setPhysicalPackagingType()
     * @uses TrackDetail::setPackageSequenceNumber()
     * @uses TrackDetail::setPackageCount()
     * @uses TrackDetail::setCreatorSoftwareId()
     * @uses TrackDetail::setCharges()
     * @uses TrackDetail::setNickName()
     * @uses TrackDetail::setNotes()
     * @uses TrackDetail::setAttributes()
     * @uses TrackDetail::setShipmentContents()
     * @uses TrackDetail::setPackageContents()
     * @uses TrackDetail::setClearanceLocationCode()
     * @uses TrackDetail::setCommodities()
     * @uses TrackDetail::setReturnDetail()
     * @uses TrackDetail::setCustomsOptionDetails()
     * @uses TrackDetail::setAdvanceNotificationDetail()
     * @uses TrackDetail::setSpecialHandlings()
     * @uses TrackDetail::setPayments()
     * @uses TrackDetail::setShipper()
     * @uses TrackDetail::setPossessionStatus()
     * @uses TrackDetail::setShipperAddress()
     * @uses TrackDetail::setOriginLocationAddress()
     * @uses TrackDetail::setOriginStationId()
     * @uses TrackDetail::setDatesOrTimes()
     * @uses TrackDetail::setTotalTransitDistance()
     * @uses TrackDetail::setDistanceToDestination()
     * @uses TrackDetail::setSpecialInstructions()
     * @uses TrackDetail::setRecipient()
     * @uses TrackDetail::setLastUpdatedDestinationAddress()
     * @uses TrackDetail::setDestinationAddress()
     * @uses TrackDetail::setHoldAtLocationContact()
     * @uses TrackDetail::setHoldAtLocationAddress()
     * @uses TrackDetail::setDestinationStationId()
     * @uses TrackDetail::setDestinationLocationAddress()
     * @uses TrackDetail::setDestinationLocationType()
     * @uses TrackDetail::setDestinationLocationTimeZoneOffset()
     * @uses TrackDetail::setActualDeliveryAddress()
     * @uses TrackDetail::setOfficeOrderDeliveryMethod()
     * @uses TrackDetail::setDeliveryLocationType()
     * @uses TrackDetail::setDeliveryLocationDescription()
     * @uses TrackDetail::setDeliveryAttempts()
     * @uses TrackDetail::setDeliverySignatureName()
     * @uses TrackDetail::setPieceCountVerificationDetails()
     * @uses TrackDetail::setTotalUniqueAddressCountInConsolidation()
     * @uses TrackDetail::setAvailableImages()
     * @uses TrackDetail::setSignature()
     * @uses TrackDetail::setNotificationEventsAvailable()
     * @uses TrackDetail::setSplitShipmentParts()
     * @uses TrackDetail::setDeliveryOptionEligibilityDetails()
     * @uses TrackDetail::setEvents()
     * @param \Drupal\commerce_fedex\FedEx\StructType\Notification $notification
     * @param string $trackingNumber
     * @param \Drupal\commerce_fedex\FedEx\StructType\StringBarcode $barcode
     * @param string $trackingNumberUniqueIdentifier
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail $statusDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackInformationNoteDetail[] $informationNotes
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail[] $customerExceptionRequests
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackReconciliation $reconciliation
     * @param string $serviceCommitMessage
     * @param string $destinationServiceArea
     * @param string $destinationServiceAreaDescription
     * @param string $carrierCode
     * @param string $operatingCompany
     * @param string $operatingCompanyOrCarrierDescription
     * @param string $cartageAgentCompanyName
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $productionLocationContactAndAddress
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackOtherIdentifierDetail[] $otherIdentifiers
     * @param string $formId
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackServiceDescriptionDetail $service
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $packageWeight
     * @param \Drupal\commerce_fedex\FedEx\StructType\Dimensions $packageDimensions
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $packageDimensionalWeight
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $shipmentWeight
     * @param string $packaging
     * @param string $packagingType
     * @param string $physicalPackagingType
     * @param int $packageSequenceNumber
     * @param int $packageCount
     * @param string $creatorSoftwareId
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail[] $charges
     * @param string $nickName
     * @param string $notes
     * @param string[] $attributes
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContentRecord[] $shipmentContents
     * @param string[] $packageContents
     * @param string $clearanceLocationCode
     * @param \Drupal\commerce_fedex\FedEx\StructType\Commodity[] $commodities
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackReturnDetail $returnDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomsOptionDetail[] $customsOptionDetails
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackAdvanceNotificationDetail $advanceNotificationDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialHandling[] $specialHandlings
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackPayment[] $payments
     * @param \Drupal\commerce_fedex\FedEx\StructType\Contact $shipper
     * @param string $possessionStatus
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $shipperAddress
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $originLocationAddress
     * @param string $originStationId
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackingDateOrTimestamp[] $datesOrTimes
     * @param \Drupal\commerce_fedex\FedEx\StructType\Distance $totalTransitDistance
     * @param \Drupal\commerce_fedex\FedEx\StructType\Distance $distanceToDestination
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialInstruction[] $specialInstructions
     * @param \Drupal\commerce_fedex\FedEx\StructType\Contact $recipient
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $lastUpdatedDestinationAddress
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $destinationAddress
     * @param \Drupal\commerce_fedex\FedEx\StructType\Contact $holdAtLocationContact
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $holdAtLocationAddress
     * @param string $destinationStationId
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $destinationLocationAddress
     * @param string $destinationLocationType
     * @param string $destinationLocationTimeZoneOffset
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $actualDeliveryAddress
     * @param string $officeOrderDeliveryMethod
     * @param string $deliveryLocationType
     * @param string $deliveryLocationDescription
     * @param int $deliveryAttempts
     * @param string $deliverySignatureName
     * @param \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail[] $pieceCountVerificationDetails
     * @param int $totalUniqueAddressCountInConsolidation
     * @param \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail[] $availableImages
     * @param \Drupal\commerce_fedex\FedEx\StructType\SignatureImageDetail $signature
     * @param string[] $notificationEventsAvailable
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart[] $splitShipmentParts
     * @param \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail[] $deliveryOptionEligibilityDetails
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackEvent[] $events
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\Notification $notification = null, $trackingNumber = null, \Drupal\commerce_fedex\FedEx\StructType\StringBarcode $barcode = null, $trackingNumberUniqueIdentifier = null, \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail $statusDetail = null, array $informationNotes = array(), array $customerExceptionRequests = array(), \Drupal\commerce_fedex\FedEx\StructType\TrackReconciliation $reconciliation = null, $serviceCommitMessage = null, $destinationServiceArea = null, $destinationServiceAreaDescription = null, $carrierCode = null, $operatingCompany = null, $operatingCompanyOrCarrierDescription = null, $cartageAgentCompanyName = null, \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $productionLocationContactAndAddress = null, array $otherIdentifiers = array(), $formId = null, \Drupal\commerce_fedex\FedEx\StructType\TrackServiceDescriptionDetail $service = null, \Drupal\commerce_fedex\FedEx\StructType\Weight $packageWeight = null, \Drupal\commerce_fedex\FedEx\StructType\Dimensions $packageDimensions = null, \Drupal\commerce_fedex\FedEx\StructType\Weight $packageDimensionalWeight = null, \Drupal\commerce_fedex\FedEx\StructType\Weight $shipmentWeight = null, $packaging = null, $packagingType = null, $physicalPackagingType = null, $packageSequenceNumber = null, $packageCount = null, $creatorSoftwareId = null, array $charges = array(), $nickName = null, $notes = null, array $attributes = array(), array $shipmentContents = array(), array $packageContents = array(), $clearanceLocationCode = null, array $commodities = array(), \Drupal\commerce_fedex\FedEx\StructType\TrackReturnDetail $returnDetail = null, array $customsOptionDetails = array(), \Drupal\commerce_fedex\FedEx\StructType\TrackAdvanceNotificationDetail $advanceNotificationDetail = null, array $specialHandlings = array(), array $payments = array(), \Drupal\commerce_fedex\FedEx\StructType\Contact $shipper = null, $possessionStatus = null, \Drupal\commerce_fedex\FedEx\StructType\Address $shipperAddress = null, \Drupal\commerce_fedex\FedEx\StructType\Address $originLocationAddress = null, $originStationId = null, array $datesOrTimes = array(), \Drupal\commerce_fedex\FedEx\StructType\Distance $totalTransitDistance = null, \Drupal\commerce_fedex\FedEx\StructType\Distance $distanceToDestination = null, array $specialInstructions = array(), \Drupal\commerce_fedex\FedEx\StructType\Contact $recipient = null, \Drupal\commerce_fedex\FedEx\StructType\Address $lastUpdatedDestinationAddress = null, \Drupal\commerce_fedex\FedEx\StructType\Address $destinationAddress = null, \Drupal\commerce_fedex\FedEx\StructType\Contact $holdAtLocationContact = null, \Drupal\commerce_fedex\FedEx\StructType\Address $holdAtLocationAddress = null, $destinationStationId = null, \Drupal\commerce_fedex\FedEx\StructType\Address $destinationLocationAddress = null, $destinationLocationType = null, $destinationLocationTimeZoneOffset = null, \Drupal\commerce_fedex\FedEx\StructType\Address $actualDeliveryAddress = null, $officeOrderDeliveryMethod = null, $deliveryLocationType = null, $deliveryLocationDescription = null, $deliveryAttempts = null, $deliverySignatureName = null, array $pieceCountVerificationDetails = array(), $totalUniqueAddressCountInConsolidation = null, array $availableImages = array(), \Drupal\commerce_fedex\FedEx\StructType\SignatureImageDetail $signature = null, array $notificationEventsAvailable = array(), array $splitShipmentParts = array(), array $deliveryOptionEligibilityDetails = array(), array $events = array())
    {
        $this
            ->setNotification($notification)
            ->setTrackingNumber($trackingNumber)
            ->setBarcode($barcode)
            ->setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
            ->setStatusDetail($statusDetail)
            ->setInformationNotes($informationNotes)
            ->setCustomerExceptionRequests($customerExceptionRequests)
            ->setReconciliation($reconciliation)
            ->setServiceCommitMessage($serviceCommitMessage)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setDestinationServiceAreaDescription($destinationServiceAreaDescription)
            ->setCarrierCode($carrierCode)
            ->setOperatingCompany($operatingCompany)
            ->setOperatingCompanyOrCarrierDescription($operatingCompanyOrCarrierDescription)
            ->setCartageAgentCompanyName($cartageAgentCompanyName)
            ->setProductionLocationContactAndAddress($productionLocationContactAndAddress)
            ->setOtherIdentifiers($otherIdentifiers)
            ->setFormId($formId)
            ->setService($service)
            ->setPackageWeight($packageWeight)
            ->setPackageDimensions($packageDimensions)
            ->setPackageDimensionalWeight($packageDimensionalWeight)
            ->setShipmentWeight($shipmentWeight)
            ->setPackaging($packaging)
            ->setPackagingType($packagingType)
            ->setPhysicalPackagingType($physicalPackagingType)
            ->setPackageSequenceNumber($packageSequenceNumber)
            ->setPackageCount($packageCount)
            ->setCreatorSoftwareId($creatorSoftwareId)
            ->setCharges($charges)
            ->setNickName($nickName)
            ->setNotes($notes)
            ->setAttributes($attributes)
            ->setShipmentContents($shipmentContents)
            ->setPackageContents($packageContents)
            ->setClearanceLocationCode($clearanceLocationCode)
            ->setCommodities($commodities)
            ->setReturnDetail($returnDetail)
            ->setCustomsOptionDetails($customsOptionDetails)
            ->setAdvanceNotificationDetail($advanceNotificationDetail)
            ->setSpecialHandlings($specialHandlings)
            ->setPayments($payments)
            ->setShipper($shipper)
            ->setPossessionStatus($possessionStatus)
            ->setShipperAddress($shipperAddress)
            ->setOriginLocationAddress($originLocationAddress)
            ->setOriginStationId($originStationId)
            ->setDatesOrTimes($datesOrTimes)
            ->setTotalTransitDistance($totalTransitDistance)
            ->setDistanceToDestination($distanceToDestination)
            ->setSpecialInstructions($specialInstructions)
            ->setRecipient($recipient)
            ->setLastUpdatedDestinationAddress($lastUpdatedDestinationAddress)
            ->setDestinationAddress($destinationAddress)
            ->setHoldAtLocationContact($holdAtLocationContact)
            ->setHoldAtLocationAddress($holdAtLocationAddress)
            ->setDestinationStationId($destinationStationId)
            ->setDestinationLocationAddress($destinationLocationAddress)
            ->setDestinationLocationType($destinationLocationType)
            ->setDestinationLocationTimeZoneOffset($destinationLocationTimeZoneOffset)
            ->setActualDeliveryAddress($actualDeliveryAddress)
            ->setOfficeOrderDeliveryMethod($officeOrderDeliveryMethod)
            ->setDeliveryLocationType($deliveryLocationType)
            ->setDeliveryLocationDescription($deliveryLocationDescription)
            ->setDeliveryAttempts($deliveryAttempts)
            ->setDeliverySignatureName($deliverySignatureName)
            ->setPieceCountVerificationDetails($pieceCountVerificationDetails)
            ->setTotalUniqueAddressCountInConsolidation($totalUniqueAddressCountInConsolidation)
            ->setAvailableImages($availableImages)
            ->setSignature($signature)
            ->setNotificationEventsAvailable($notificationEventsAvailable)
            ->setSplitShipmentParts($splitShipmentParts)
            ->setDeliveryOptionEligibilityDetails($deliveryOptionEligibilityDetails)
            ->setEvents($events);
    }
    /**
     * Get Notification value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Notification|null
     */
    public function getNotification()
    {
        return $this->Notification;
    }
    /**
     * Set Notification value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Notification $notification
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setNotification(\Drupal\commerce_fedex\FedEx\StructType\Notification $notification = null)
    {
        $this->Notification = $notification;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get Barcode value
     * @return \Drupal\commerce_fedex\FedEx\StructType\StringBarcode|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    /**
     * Set Barcode value
     * @param \Drupal\commerce_fedex\FedEx\StructType\StringBarcode $barcode
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setBarcode(\Drupal\commerce_fedex\FedEx\StructType\StringBarcode $barcode = null)
    {
        $this->Barcode = $barcode;
        return $this;
    }
    /**
     * Get TrackingNumberUniqueIdentifier value
     * @return string|null
     */
    public function getTrackingNumberUniqueIdentifier()
    {
        return $this->TrackingNumberUniqueIdentifier;
    }
    /**
     * Set TrackingNumberUniqueIdentifier value
     * @param string $trackingNumberUniqueIdentifier
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumberUniqueIdentifier) && !is_string($trackingNumberUniqueIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumberUniqueIdentifier)), __LINE__);
        }
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    /**
     * Get StatusDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail|null
     */
    public function getStatusDetail()
    {
        return $this->StatusDetail;
    }
    /**
     * Set StatusDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail $statusDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setStatusDetail(\Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail $statusDetail = null)
    {
        $this->StatusDetail = $statusDetail;
        return $this;
    }
    /**
     * Get InformationNotes value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackInformationNoteDetail[]|null
     */
    public function getInformationNotes()
    {
        return $this->InformationNotes;
    }
    /**
     * Set InformationNotes value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackInformationNoteDetail[] $informationNotes
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setInformationNotes(array $informationNotes = array())
    {
        foreach ($informationNotes as $trackDetailInformationNotesItem) {
            // validation for constraint: itemType
            if (!$trackDetailInformationNotesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackInformationNoteDetail) {
                throw new \InvalidArgumentException(sprintf('The InformationNotes property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackInformationNoteDetail, "%s" given', is_object($trackDetailInformationNotesItem) ? get_class($trackDetailInformationNotesItem) : gettype($trackDetailInformationNotesItem)), __LINE__);
            }
        }
        $this->InformationNotes = $informationNotes;
        return $this;
    }
    /**
     * Add item to InformationNotes value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackInformationNoteDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToInformationNotes(\Drupal\commerce_fedex\FedEx\StructType\TrackInformationNoteDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackInformationNoteDetail) {
            throw new \InvalidArgumentException(sprintf('The InformationNotes property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackInformationNoteDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InformationNotes[] = $item;
        return $this;
    }
    /**
     * Get CustomerExceptionRequests value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail[]|null
     */
    public function getCustomerExceptionRequests()
    {
        return $this->CustomerExceptionRequests;
    }
    /**
     * Set CustomerExceptionRequests value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail[] $customerExceptionRequests
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setCustomerExceptionRequests(array $customerExceptionRequests = array())
    {
        foreach ($customerExceptionRequests as $trackDetailCustomerExceptionRequestsItem) {
            // validation for constraint: itemType
            if (!$trackDetailCustomerExceptionRequestsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomerExceptionRequests property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail, "%s" given', is_object($trackDetailCustomerExceptionRequestsItem) ? get_class($trackDetailCustomerExceptionRequestsItem) : gettype($trackDetailCustomerExceptionRequestsItem)), __LINE__);
            }
        }
        $this->CustomerExceptionRequests = $customerExceptionRequests;
        return $this;
    }
    /**
     * Add item to CustomerExceptionRequests value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToCustomerExceptionRequests(\Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomerExceptionRequests property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerExceptionRequests[] = $item;
        return $this;
    }
    /**
     * Get Reconciliation value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackReconciliation|null
     */
    public function getReconciliation()
    {
        return $this->Reconciliation;
    }
    /**
     * Set Reconciliation value
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackReconciliation $reconciliation
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setReconciliation(\Drupal\commerce_fedex\FedEx\StructType\TrackReconciliation $reconciliation = null)
    {
        $this->Reconciliation = $reconciliation;
        return $this;
    }
    /**
     * Get ServiceCommitMessage value
     * @return string|null
     */
    public function getServiceCommitMessage()
    {
        return $this->ServiceCommitMessage;
    }
    /**
     * Set ServiceCommitMessage value
     * @param string $serviceCommitMessage
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setServiceCommitMessage($serviceCommitMessage = null)
    {
        // validation for constraint: string
        if (!is_null($serviceCommitMessage) && !is_string($serviceCommitMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceCommitMessage)), __LINE__);
        }
        $this->ServiceCommitMessage = $serviceCommitMessage;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
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
     * Get DestinationServiceAreaDescription value
     * @return string|null
     */
    public function getDestinationServiceAreaDescription()
    {
        return $this->DestinationServiceAreaDescription;
    }
    /**
     * Set DestinationServiceAreaDescription value
     * @param string $destinationServiceAreaDescription
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDestinationServiceAreaDescription($destinationServiceAreaDescription = null)
    {
        // validation for constraint: string
        if (!is_null($destinationServiceAreaDescription) && !is_string($destinationServiceAreaDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationServiceAreaDescription)), __LINE__);
        }
        $this->DestinationServiceAreaDescription = $destinationServiceAreaDescription;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get OperatingCompany value
     * @return string|null
     */
    public function getOperatingCompany()
    {
        return $this->OperatingCompany;
    }
    /**
     * Set OperatingCompany value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\OperatingCompanyType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\OperatingCompanyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operatingCompany
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setOperatingCompany($operatingCompany = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\OperatingCompanyType::valueIsValid($operatingCompany)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $operatingCompany, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\OperatingCompanyType::getValidValues())), __LINE__);
        }
        $this->OperatingCompany = $operatingCompany;
        return $this;
    }
    /**
     * Get OperatingCompanyOrCarrierDescription value
     * @return string|null
     */
    public function getOperatingCompanyOrCarrierDescription()
    {
        return $this->OperatingCompanyOrCarrierDescription;
    }
    /**
     * Set OperatingCompanyOrCarrierDescription value
     * @param string $operatingCompanyOrCarrierDescription
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setOperatingCompanyOrCarrierDescription($operatingCompanyOrCarrierDescription = null)
    {
        // validation for constraint: string
        if (!is_null($operatingCompanyOrCarrierDescription) && !is_string($operatingCompanyOrCarrierDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingCompanyOrCarrierDescription)), __LINE__);
        }
        $this->OperatingCompanyOrCarrierDescription = $operatingCompanyOrCarrierDescription;
        return $this;
    }
    /**
     * Get CartageAgentCompanyName value
     * @return string|null
     */
    public function getCartageAgentCompanyName()
    {
        return $this->CartageAgentCompanyName;
    }
    /**
     * Set CartageAgentCompanyName value
     * @param string $cartageAgentCompanyName
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setCartageAgentCompanyName($cartageAgentCompanyName = null)
    {
        // validation for constraint: string
        if (!is_null($cartageAgentCompanyName) && !is_string($cartageAgentCompanyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cartageAgentCompanyName)), __LINE__);
        }
        $this->CartageAgentCompanyName = $cartageAgentCompanyName;
        return $this;
    }
    /**
     * Get ProductionLocationContactAndAddress value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress|null
     */
    public function getProductionLocationContactAndAddress()
    {
        return $this->ProductionLocationContactAndAddress;
    }
    /**
     * Set ProductionLocationContactAndAddress value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $productionLocationContactAndAddress
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setProductionLocationContactAndAddress(\Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $productionLocationContactAndAddress = null)
    {
        $this->ProductionLocationContactAndAddress = $productionLocationContactAndAddress;
        return $this;
    }
    /**
     * Get OtherIdentifiers value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackOtherIdentifierDetail[]|null
     */
    public function getOtherIdentifiers()
    {
        return $this->OtherIdentifiers;
    }
    /**
     * Set OtherIdentifiers value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackOtherIdentifierDetail[] $otherIdentifiers
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setOtherIdentifiers(array $otherIdentifiers = array())
    {
        foreach ($otherIdentifiers as $trackDetailOtherIdentifiersItem) {
            // validation for constraint: itemType
            if (!$trackDetailOtherIdentifiersItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackOtherIdentifierDetail) {
                throw new \InvalidArgumentException(sprintf('The OtherIdentifiers property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackOtherIdentifierDetail, "%s" given', is_object($trackDetailOtherIdentifiersItem) ? get_class($trackDetailOtherIdentifiersItem) : gettype($trackDetailOtherIdentifiersItem)), __LINE__);
            }
        }
        $this->OtherIdentifiers = $otherIdentifiers;
        return $this;
    }
    /**
     * Add item to OtherIdentifiers value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackOtherIdentifierDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToOtherIdentifiers(\Drupal\commerce_fedex\FedEx\StructType\TrackOtherIdentifierDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackOtherIdentifierDetail) {
            throw new \InvalidArgumentException(sprintf('The OtherIdentifiers property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackOtherIdentifierDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OtherIdentifiers[] = $item;
        return $this;
    }
    /**
     * Get FormId value
     * @return string|null
     */
    public function getFormId()
    {
        return $this->FormId;
    }
    /**
     * Set FormId value
     * @param string $formId
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setFormId($formId = null)
    {
        // validation for constraint: string
        if (!is_null($formId) && !is_string($formId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formId)), __LINE__);
        }
        $this->FormId = $formId;
        return $this;
    }
    /**
     * Get Service value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackServiceDescriptionDetail|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackServiceDescriptionDetail $service
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setService(\Drupal\commerce_fedex\FedEx\StructType\TrackServiceDescriptionDetail $service = null)
    {
        $this->Service = $service;
        return $this;
    }
    /**
     * Get PackageWeight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Weight|null
     */
    public function getPackageWeight()
    {
        return $this->PackageWeight;
    }
    /**
     * Set PackageWeight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $packageWeight
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setPackageWeight(\Drupal\commerce_fedex\FedEx\StructType\Weight $packageWeight = null)
    {
        $this->PackageWeight = $packageWeight;
        return $this;
    }
    /**
     * Get PackageDimensions value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Dimensions|null
     */
    public function getPackageDimensions()
    {
        return $this->PackageDimensions;
    }
    /**
     * Set PackageDimensions value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Dimensions $packageDimensions
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setPackageDimensions(\Drupal\commerce_fedex\FedEx\StructType\Dimensions $packageDimensions = null)
    {
        $this->PackageDimensions = $packageDimensions;
        return $this;
    }
    /**
     * Get PackageDimensionalWeight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Weight|null
     */
    public function getPackageDimensionalWeight()
    {
        return $this->PackageDimensionalWeight;
    }
    /**
     * Set PackageDimensionalWeight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $packageDimensionalWeight
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setPackageDimensionalWeight(\Drupal\commerce_fedex\FedEx\StructType\Weight $packageDimensionalWeight = null)
    {
        $this->PackageDimensionalWeight = $packageDimensionalWeight;
        return $this;
    }
    /**
     * Get ShipmentWeight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Weight|null
     */
    public function getShipmentWeight()
    {
        return $this->ShipmentWeight;
    }
    /**
     * Set ShipmentWeight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $shipmentWeight
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setShipmentWeight(\Drupal\commerce_fedex\FedEx\StructType\Weight $shipmentWeight = null)
    {
        $this->ShipmentWeight = $shipmentWeight;
        return $this;
    }
    /**
     * Get Packaging value
     * @return string|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    /**
     * Set Packaging value
     * @param string $packaging
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setPackaging($packaging = null)
    {
        // validation for constraint: string
        if (!is_null($packaging) && !is_string($packaging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packaging)), __LINE__);
        }
        $this->Packaging = $packaging;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
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
     * Get PhysicalPackagingType value
     * @return string|null
     */
    public function getPhysicalPackagingType()
    {
        return $this->PhysicalPackagingType;
    }
    /**
     * Set PhysicalPackagingType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PhysicalPackagingType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PhysicalPackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $physicalPackagingType
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setPhysicalPackagingType($physicalPackagingType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\PhysicalPackagingType::valueIsValid($physicalPackagingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $physicalPackagingType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\PhysicalPackagingType::getValidValues())), __LINE__);
        }
        $this->PhysicalPackagingType = $physicalPackagingType;
        return $this;
    }
    /**
     * Get PackageSequenceNumber value
     * @return int|null
     */
    public function getPackageSequenceNumber()
    {
        return $this->PackageSequenceNumber;
    }
    /**
     * Set PackageSequenceNumber value
     * @param int $packageSequenceNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setPackageSequenceNumber($packageSequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($packageSequenceNumber) && !is_numeric($packageSequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageSequenceNumber)), __LINE__);
        }
        $this->PackageSequenceNumber = $packageSequenceNumber;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
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
     * Get CreatorSoftwareId value
     * @return string|null
     */
    public function getCreatorSoftwareId()
    {
        return $this->CreatorSoftwareId;
    }
    /**
     * Set CreatorSoftwareId value
     * @param string $creatorSoftwareId
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setCreatorSoftwareId($creatorSoftwareId = null)
    {
        // validation for constraint: string
        if (!is_null($creatorSoftwareId) && !is_string($creatorSoftwareId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creatorSoftwareId)), __LINE__);
        }
        $this->CreatorSoftwareId = $creatorSoftwareId;
        return $this;
    }
    /**
     * Get Charges value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail[]|null
     */
    public function getCharges()
    {
        return $this->Charges;
    }
    /**
     * Set Charges value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail[] $charges
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setCharges(array $charges = array())
    {
        foreach ($charges as $trackDetailChargesItem) {
            // validation for constraint: itemType
            if (!$trackDetailChargesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail) {
                throw new \InvalidArgumentException(sprintf('The Charges property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail, "%s" given', is_object($trackDetailChargesItem) ? get_class($trackDetailChargesItem) : gettype($trackDetailChargesItem)), __LINE__);
            }
        }
        $this->Charges = $charges;
        return $this;
    }
    /**
     * Add item to Charges value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToCharges(\Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail) {
            throw new \InvalidArgumentException(sprintf('The Charges property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackChargeDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Charges[] = $item;
        return $this;
    }
    /**
     * Get NickName value
     * @return string|null
     */
    public function getNickName()
    {
        return $this->NickName;
    }
    /**
     * Set NickName value
     * @param string $nickName
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setNickName($nickName = null)
    {
        // validation for constraint: string
        if (!is_null($nickName) && !is_string($nickName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nickName)), __LINE__);
        }
        $this->NickName = $nickName;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get Attributes value
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TrackDetailAttributeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TrackDetailAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $attributes
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setAttributes(array $attributes = array())
    {
        $invalidValues = array();
        foreach ($attributes as $trackDetailAttributesItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\TrackDetailAttributeType::valueIsValid($trackDetailAttributesItem)) {
                $invalidValues[] = var_export($trackDetailAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\TrackDetailAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Add item to Attributes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TrackDetailAttributeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TrackDetailAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\TrackDetailAttributeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\TrackDetailAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes[] = $item;
        return $this;
    }
    /**
     * Get ShipmentContents value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContentRecord[]|null
     */
    public function getShipmentContents()
    {
        return $this->ShipmentContents;
    }
    /**
     * Set ShipmentContents value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContentRecord[] $shipmentContents
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setShipmentContents(array $shipmentContents = array())
    {
        foreach ($shipmentContents as $trackDetailShipmentContentsItem) {
            // validation for constraint: itemType
            if (!$trackDetailShipmentContentsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\ContentRecord) {
                throw new \InvalidArgumentException(sprintf('The ShipmentContents property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ContentRecord, "%s" given', is_object($trackDetailShipmentContentsItem) ? get_class($trackDetailShipmentContentsItem) : gettype($trackDetailShipmentContentsItem)), __LINE__);
            }
        }
        $this->ShipmentContents = $shipmentContents;
        return $this;
    }
    /**
     * Add item to ShipmentContents value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContentRecord $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToShipmentContents(\Drupal\commerce_fedex\FedEx\StructType\ContentRecord $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\ContentRecord) {
            throw new \InvalidArgumentException(sprintf('The ShipmentContents property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ContentRecord, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipmentContents[] = $item;
        return $this;
    }
    /**
     * Get PackageContents value
     * @return string[]|null
     */
    public function getPackageContents()
    {
        return $this->PackageContents;
    }
    /**
     * Set PackageContents value
     * @throws \InvalidArgumentException
     * @param string[] $packageContents
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setPackageContents(array $packageContents = array())
    {
        foreach ($packageContents as $trackDetailPackageContentsItem) {
            // validation for constraint: itemType
            if (!is_string($trackDetailPackageContentsItem)) {
                throw new \InvalidArgumentException(sprintf('The PackageContents property can only contain items of string, "%s" given', is_object($trackDetailPackageContentsItem) ? get_class($trackDetailPackageContentsItem) : gettype($trackDetailPackageContentsItem)), __LINE__);
            }
        }
        $this->PackageContents = $packageContents;
        return $this;
    }
    /**
     * Add item to PackageContents value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToPackageContents($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PackageContents property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageContents[] = $item;
        return $this;
    }
    /**
     * Get ClearanceLocationCode value
     * @return string|null
     */
    public function getClearanceLocationCode()
    {
        return $this->ClearanceLocationCode;
    }
    /**
     * Set ClearanceLocationCode value
     * @param string $clearanceLocationCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setClearanceLocationCode($clearanceLocationCode = null)
    {
        // validation for constraint: string
        if (!is_null($clearanceLocationCode) && !is_string($clearanceLocationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clearanceLocationCode)), __LINE__);
        }
        $this->ClearanceLocationCode = $clearanceLocationCode;
        return $this;
    }
    /**
     * Get Commodities value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity[]|null
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }
    /**
     * Set Commodities value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Commodity[] $commodities
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setCommodities(array $commodities = array())
    {
        foreach ($commodities as $trackDetailCommoditiesItem) {
            // validation for constraint: itemType
            if (!$trackDetailCommoditiesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\Commodity) {
                throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Commodity, "%s" given', is_object($trackDetailCommoditiesItem) ? get_class($trackDetailCommoditiesItem) : gettype($trackDetailCommoditiesItem)), __LINE__);
            }
        }
        $this->Commodities = $commodities;
        return $this;
    }
    /**
     * Add item to Commodities value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Commodity $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToCommodities(\Drupal\commerce_fedex\FedEx\StructType\Commodity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\Commodity) {
            throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Commodity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Commodities[] = $item;
        return $this;
    }
    /**
     * Get ReturnDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackReturnDetail|null
     */
    public function getReturnDetail()
    {
        return $this->ReturnDetail;
    }
    /**
     * Set ReturnDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackReturnDetail $returnDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setReturnDetail(\Drupal\commerce_fedex\FedEx\StructType\TrackReturnDetail $returnDetail = null)
    {
        $this->ReturnDetail = $returnDetail;
        return $this;
    }
    /**
     * Get CustomsOptionDetails value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomsOptionDetail[]|null
     */
    public function getCustomsOptionDetails()
    {
        return $this->CustomsOptionDetails;
    }
    /**
     * Set CustomsOptionDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomsOptionDetail[] $customsOptionDetails
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setCustomsOptionDetails(array $customsOptionDetails = array())
    {
        foreach ($customsOptionDetails as $trackDetailCustomsOptionDetailsItem) {
            // validation for constraint: itemType
            if (!$trackDetailCustomsOptionDetailsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\CustomsOptionDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomsOptionDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CustomsOptionDetail, "%s" given', is_object($trackDetailCustomsOptionDetailsItem) ? get_class($trackDetailCustomsOptionDetailsItem) : gettype($trackDetailCustomsOptionDetailsItem)), __LINE__);
            }
        }
        $this->CustomsOptionDetails = $customsOptionDetails;
        return $this;
    }
    /**
     * Add item to CustomsOptionDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomsOptionDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToCustomsOptionDetails(\Drupal\commerce_fedex\FedEx\StructType\CustomsOptionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\CustomsOptionDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomsOptionDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CustomsOptionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomsOptionDetails[] = $item;
        return $this;
    }
    /**
     * Get AdvanceNotificationDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackAdvanceNotificationDetail|null
     */
    public function getAdvanceNotificationDetail()
    {
        return $this->AdvanceNotificationDetail;
    }
    /**
     * Set AdvanceNotificationDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackAdvanceNotificationDetail $advanceNotificationDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setAdvanceNotificationDetail(\Drupal\commerce_fedex\FedEx\StructType\TrackAdvanceNotificationDetail $advanceNotificationDetail = null)
    {
        $this->AdvanceNotificationDetail = $advanceNotificationDetail;
        return $this;
    }
    /**
     * Get SpecialHandlings value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialHandling[]|null
     */
    public function getSpecialHandlings()
    {
        return $this->SpecialHandlings;
    }
    /**
     * Set SpecialHandlings value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialHandling[] $specialHandlings
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setSpecialHandlings(array $specialHandlings = array())
    {
        foreach ($specialHandlings as $trackDetailSpecialHandlingsItem) {
            // validation for constraint: itemType
            if (!$trackDetailSpecialHandlingsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialHandling) {
                throw new \InvalidArgumentException(sprintf('The SpecialHandlings property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialHandling, "%s" given', is_object($trackDetailSpecialHandlingsItem) ? get_class($trackDetailSpecialHandlingsItem) : gettype($trackDetailSpecialHandlingsItem)), __LINE__);
            }
        }
        $this->SpecialHandlings = $specialHandlings;
        return $this;
    }
    /**
     * Add item to SpecialHandlings value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialHandling $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToSpecialHandlings(\Drupal\commerce_fedex\FedEx\StructType\TrackSpecialHandling $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialHandling) {
            throw new \InvalidArgumentException(sprintf('The SpecialHandlings property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialHandling, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialHandlings[] = $item;
        return $this;
    }
    /**
     * Get Payments value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackPayment[]|null
     */
    public function getPayments()
    {
        return $this->Payments;
    }
    /**
     * Set Payments value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackPayment[] $payments
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setPayments(array $payments = array())
    {
        foreach ($payments as $trackDetailPaymentsItem) {
            // validation for constraint: itemType
            if (!$trackDetailPaymentsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackPayment) {
                throw new \InvalidArgumentException(sprintf('The Payments property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackPayment, "%s" given', is_object($trackDetailPaymentsItem) ? get_class($trackDetailPaymentsItem) : gettype($trackDetailPaymentsItem)), __LINE__);
            }
        }
        $this->Payments = $payments;
        return $this;
    }
    /**
     * Add item to Payments value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackPayment $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToPayments(\Drupal\commerce_fedex\FedEx\StructType\TrackPayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackPayment) {
            throw new \InvalidArgumentException(sprintf('The Payments property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackPayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Payments[] = $item;
        return $this;
    }
    /**
     * Get Shipper value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact|null
     */
    public function getShipper()
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Contact $shipper
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setShipper(\Drupal\commerce_fedex\FedEx\StructType\Contact $shipper = null)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    /**
     * Get PossessionStatus value
     * @return string|null
     */
    public function getPossessionStatus()
    {
        return $this->PossessionStatus;
    }
    /**
     * Set PossessionStatus value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TrackPossessionStatusType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TrackPossessionStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $possessionStatus
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setPossessionStatus($possessionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\TrackPossessionStatusType::valueIsValid($possessionStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $possessionStatus, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\TrackPossessionStatusType::getValidValues())), __LINE__);
        }
        $this->PossessionStatus = $possessionStatus;
        return $this;
    }
    /**
     * Get ShipperAddress value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address|null
     */
    public function getShipperAddress()
    {
        return $this->ShipperAddress;
    }
    /**
     * Set ShipperAddress value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $shipperAddress
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setShipperAddress(\Drupal\commerce_fedex\FedEx\StructType\Address $shipperAddress = null)
    {
        $this->ShipperAddress = $shipperAddress;
        return $this;
    }
    /**
     * Get OriginLocationAddress value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address|null
     */
    public function getOriginLocationAddress()
    {
        return $this->OriginLocationAddress;
    }
    /**
     * Set OriginLocationAddress value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $originLocationAddress
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setOriginLocationAddress(\Drupal\commerce_fedex\FedEx\StructType\Address $originLocationAddress = null)
    {
        $this->OriginLocationAddress = $originLocationAddress;
        return $this;
    }
    /**
     * Get OriginStationId value
     * @return string|null
     */
    public function getOriginStationId()
    {
        return $this->OriginStationId;
    }
    /**
     * Set OriginStationId value
     * @param string $originStationId
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setOriginStationId($originStationId = null)
    {
        // validation for constraint: string
        if (!is_null($originStationId) && !is_string($originStationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originStationId)), __LINE__);
        }
        $this->OriginStationId = $originStationId;
        return $this;
    }
    /**
     * Get DatesOrTimes value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackingDateOrTimestamp[]|null
     */
    public function getDatesOrTimes()
    {
        return $this->DatesOrTimes;
    }
    /**
     * Set DatesOrTimes value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackingDateOrTimestamp[] $datesOrTimes
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDatesOrTimes(array $datesOrTimes = array())
    {
        foreach ($datesOrTimes as $trackDetailDatesOrTimesItem) {
            // validation for constraint: itemType
            if (!$trackDetailDatesOrTimesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackingDateOrTimestamp) {
                throw new \InvalidArgumentException(sprintf('The DatesOrTimes property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackingDateOrTimestamp, "%s" given', is_object($trackDetailDatesOrTimesItem) ? get_class($trackDetailDatesOrTimesItem) : gettype($trackDetailDatesOrTimesItem)), __LINE__);
            }
        }
        $this->DatesOrTimes = $datesOrTimes;
        return $this;
    }
    /**
     * Add item to DatesOrTimes value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackingDateOrTimestamp $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToDatesOrTimes(\Drupal\commerce_fedex\FedEx\StructType\TrackingDateOrTimestamp $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackingDateOrTimestamp) {
            throw new \InvalidArgumentException(sprintf('The DatesOrTimes property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackingDateOrTimestamp, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DatesOrTimes[] = $item;
        return $this;
    }
    /**
     * Get TotalTransitDistance value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Distance|null
     */
    public function getTotalTransitDistance()
    {
        return $this->TotalTransitDistance;
    }
    /**
     * Set TotalTransitDistance value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Distance $totalTransitDistance
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setTotalTransitDistance(\Drupal\commerce_fedex\FedEx\StructType\Distance $totalTransitDistance = null)
    {
        $this->TotalTransitDistance = $totalTransitDistance;
        return $this;
    }
    /**
     * Get DistanceToDestination value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Distance|null
     */
    public function getDistanceToDestination()
    {
        return $this->DistanceToDestination;
    }
    /**
     * Set DistanceToDestination value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Distance $distanceToDestination
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDistanceToDestination(\Drupal\commerce_fedex\FedEx\StructType\Distance $distanceToDestination = null)
    {
        $this->DistanceToDestination = $distanceToDestination;
        return $this;
    }
    /**
     * Get SpecialInstructions value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialInstruction[]|null
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }
    /**
     * Set SpecialInstructions value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialInstruction[] $specialInstructions
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setSpecialInstructions(array $specialInstructions = array())
    {
        foreach ($specialInstructions as $trackDetailSpecialInstructionsItem) {
            // validation for constraint: itemType
            if (!$trackDetailSpecialInstructionsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialInstruction) {
                throw new \InvalidArgumentException(sprintf('The SpecialInstructions property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialInstruction, "%s" given', is_object($trackDetailSpecialInstructionsItem) ? get_class($trackDetailSpecialInstructionsItem) : gettype($trackDetailSpecialInstructionsItem)), __LINE__);
            }
        }
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Add item to SpecialInstructions value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialInstruction $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToSpecialInstructions(\Drupal\commerce_fedex\FedEx\StructType\TrackSpecialInstruction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialInstruction) {
            throw new \InvalidArgumentException(sprintf('The SpecialInstructions property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackSpecialInstruction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialInstructions[] = $item;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Contact $recipient
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setRecipient(\Drupal\commerce_fedex\FedEx\StructType\Contact $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get LastUpdatedDestinationAddress value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address|null
     */
    public function getLastUpdatedDestinationAddress()
    {
        return $this->LastUpdatedDestinationAddress;
    }
    /**
     * Set LastUpdatedDestinationAddress value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $lastUpdatedDestinationAddress
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setLastUpdatedDestinationAddress(\Drupal\commerce_fedex\FedEx\StructType\Address $lastUpdatedDestinationAddress = null)
    {
        $this->LastUpdatedDestinationAddress = $lastUpdatedDestinationAddress;
        return $this;
    }
    /**
     * Get DestinationAddress value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address|null
     */
    public function getDestinationAddress()
    {
        return $this->DestinationAddress;
    }
    /**
     * Set DestinationAddress value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $destinationAddress
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDestinationAddress(\Drupal\commerce_fedex\FedEx\StructType\Address $destinationAddress = null)
    {
        $this->DestinationAddress = $destinationAddress;
        return $this;
    }
    /**
     * Get HoldAtLocationContact value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact|null
     */
    public function getHoldAtLocationContact()
    {
        return $this->HoldAtLocationContact;
    }
    /**
     * Set HoldAtLocationContact value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Contact $holdAtLocationContact
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setHoldAtLocationContact(\Drupal\commerce_fedex\FedEx\StructType\Contact $holdAtLocationContact = null)
    {
        $this->HoldAtLocationContact = $holdAtLocationContact;
        return $this;
    }
    /**
     * Get HoldAtLocationAddress value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address|null
     */
    public function getHoldAtLocationAddress()
    {
        return $this->HoldAtLocationAddress;
    }
    /**
     * Set HoldAtLocationAddress value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $holdAtLocationAddress
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setHoldAtLocationAddress(\Drupal\commerce_fedex\FedEx\StructType\Address $holdAtLocationAddress = null)
    {
        $this->HoldAtLocationAddress = $holdAtLocationAddress;
        return $this;
    }
    /**
     * Get DestinationStationId value
     * @return string|null
     */
    public function getDestinationStationId()
    {
        return $this->DestinationStationId;
    }
    /**
     * Set DestinationStationId value
     * @param string $destinationStationId
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDestinationStationId($destinationStationId = null)
    {
        // validation for constraint: string
        if (!is_null($destinationStationId) && !is_string($destinationStationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationStationId)), __LINE__);
        }
        $this->DestinationStationId = $destinationStationId;
        return $this;
    }
    /**
     * Get DestinationLocationAddress value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address|null
     */
    public function getDestinationLocationAddress()
    {
        return $this->DestinationLocationAddress;
    }
    /**
     * Set DestinationLocationAddress value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $destinationLocationAddress
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDestinationLocationAddress(\Drupal\commerce_fedex\FedEx\StructType\Address $destinationLocationAddress = null)
    {
        $this->DestinationLocationAddress = $destinationLocationAddress;
        return $this;
    }
    /**
     * Get DestinationLocationType value
     * @return string|null
     */
    public function getDestinationLocationType()
    {
        return $this->DestinationLocationType;
    }
    /**
     * Set DestinationLocationType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FedExLocationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FedExLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $destinationLocationType
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDestinationLocationType($destinationLocationType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\FedExLocationType::valueIsValid($destinationLocationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $destinationLocationType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->DestinationLocationType = $destinationLocationType;
        return $this;
    }
    /**
     * Get DestinationLocationTimeZoneOffset value
     * @return string|null
     */
    public function getDestinationLocationTimeZoneOffset()
    {
        return $this->DestinationLocationTimeZoneOffset;
    }
    /**
     * Set DestinationLocationTimeZoneOffset value
     * @param string $destinationLocationTimeZoneOffset
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDestinationLocationTimeZoneOffset($destinationLocationTimeZoneOffset = null)
    {
        // validation for constraint: string
        if (!is_null($destinationLocationTimeZoneOffset) && !is_string($destinationLocationTimeZoneOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationLocationTimeZoneOffset)), __LINE__);
        }
        $this->DestinationLocationTimeZoneOffset = $destinationLocationTimeZoneOffset;
        return $this;
    }
    /**
     * Get ActualDeliveryAddress value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address|null
     */
    public function getActualDeliveryAddress()
    {
        return $this->ActualDeliveryAddress;
    }
    /**
     * Set ActualDeliveryAddress value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $actualDeliveryAddress
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setActualDeliveryAddress(\Drupal\commerce_fedex\FedEx\StructType\Address $actualDeliveryAddress = null)
    {
        $this->ActualDeliveryAddress = $actualDeliveryAddress;
        return $this;
    }
    /**
     * Get OfficeOrderDeliveryMethod value
     * @return string|null
     */
    public function getOfficeOrderDeliveryMethod()
    {
        return $this->OfficeOrderDeliveryMethod;
    }
    /**
     * Set OfficeOrderDeliveryMethod value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\OfficeOrderDeliveryMethodType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\OfficeOrderDeliveryMethodType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $officeOrderDeliveryMethod
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setOfficeOrderDeliveryMethod($officeOrderDeliveryMethod = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\OfficeOrderDeliveryMethodType::valueIsValid($officeOrderDeliveryMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $officeOrderDeliveryMethod, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\OfficeOrderDeliveryMethodType::getValidValues())), __LINE__);
        }
        $this->OfficeOrderDeliveryMethod = $officeOrderDeliveryMethod;
        return $this;
    }
    /**
     * Get DeliveryLocationType value
     * @return string|null
     */
    public function getDeliveryLocationType()
    {
        return $this->DeliveryLocationType;
    }
    /**
     * Set DeliveryLocationType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TrackDeliveryLocationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TrackDeliveryLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryLocationType
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDeliveryLocationType($deliveryLocationType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\TrackDeliveryLocationType::valueIsValid($deliveryLocationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryLocationType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\TrackDeliveryLocationType::getValidValues())), __LINE__);
        }
        $this->DeliveryLocationType = $deliveryLocationType;
        return $this;
    }
    /**
     * Get DeliveryLocationDescription value
     * @return string|null
     */
    public function getDeliveryLocationDescription()
    {
        return $this->DeliveryLocationDescription;
    }
    /**
     * Set DeliveryLocationDescription value
     * @param string $deliveryLocationDescription
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDeliveryLocationDescription($deliveryLocationDescription = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryLocationDescription) && !is_string($deliveryLocationDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryLocationDescription)), __LINE__);
        }
        $this->DeliveryLocationDescription = $deliveryLocationDescription;
        return $this;
    }
    /**
     * Get DeliveryAttempts value
     * @return int|null
     */
    public function getDeliveryAttempts()
    {
        return $this->DeliveryAttempts;
    }
    /**
     * Set DeliveryAttempts value
     * @param int $deliveryAttempts
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDeliveryAttempts($deliveryAttempts = null)
    {
        // validation for constraint: int
        if (!is_null($deliveryAttempts) && !is_numeric($deliveryAttempts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deliveryAttempts)), __LINE__);
        }
        $this->DeliveryAttempts = $deliveryAttempts;
        return $this;
    }
    /**
     * Get DeliverySignatureName value
     * @return string|null
     */
    public function getDeliverySignatureName()
    {
        return $this->DeliverySignatureName;
    }
    /**
     * Set DeliverySignatureName value
     * @param string $deliverySignatureName
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDeliverySignatureName($deliverySignatureName = null)
    {
        // validation for constraint: string
        if (!is_null($deliverySignatureName) && !is_string($deliverySignatureName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliverySignatureName)), __LINE__);
        }
        $this->DeliverySignatureName = $deliverySignatureName;
        return $this;
    }
    /**
     * Get PieceCountVerificationDetails value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail[]|null
     */
    public function getPieceCountVerificationDetails()
    {
        return $this->PieceCountVerificationDetails;
    }
    /**
     * Set PieceCountVerificationDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail[] $pieceCountVerificationDetails
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setPieceCountVerificationDetails(array $pieceCountVerificationDetails = array())
    {
        foreach ($pieceCountVerificationDetails as $trackDetailPieceCountVerificationDetailsItem) {
            // validation for constraint: itemType
            if (!$trackDetailPieceCountVerificationDetailsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail) {
                throw new \InvalidArgumentException(sprintf('The PieceCountVerificationDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail, "%s" given', is_object($trackDetailPieceCountVerificationDetailsItem) ? get_class($trackDetailPieceCountVerificationDetailsItem) : gettype($trackDetailPieceCountVerificationDetailsItem)), __LINE__);
            }
        }
        $this->PieceCountVerificationDetails = $pieceCountVerificationDetails;
        return $this;
    }
    /**
     * Add item to PieceCountVerificationDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToPieceCountVerificationDetails(\Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail) {
            throw new \InvalidArgumentException(sprintf('The PieceCountVerificationDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PieceCountVerificationDetails[] = $item;
        return $this;
    }
    /**
     * Get TotalUniqueAddressCountInConsolidation value
     * @return int|null
     */
    public function getTotalUniqueAddressCountInConsolidation()
    {
        return $this->TotalUniqueAddressCountInConsolidation;
    }
    /**
     * Set TotalUniqueAddressCountInConsolidation value
     * @param int $totalUniqueAddressCountInConsolidation
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setTotalUniqueAddressCountInConsolidation($totalUniqueAddressCountInConsolidation = null)
    {
        // validation for constraint: int
        if (!is_null($totalUniqueAddressCountInConsolidation) && !is_numeric($totalUniqueAddressCountInConsolidation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalUniqueAddressCountInConsolidation)), __LINE__);
        }
        $this->TotalUniqueAddressCountInConsolidation = $totalUniqueAddressCountInConsolidation;
        return $this;
    }
    /**
     * Get AvailableImages value
     * @return \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail[]|null
     */
    public function getAvailableImages()
    {
        return $this->AvailableImages;
    }
    /**
     * Set AvailableImages value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail[] $availableImages
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setAvailableImages(array $availableImages = array())
    {
        foreach ($availableImages as $trackDetailAvailableImagesItem) {
            // validation for constraint: itemType
            if (!$trackDetailAvailableImagesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail) {
                throw new \InvalidArgumentException(sprintf('The AvailableImages property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail, "%s" given', is_object($trackDetailAvailableImagesItem) ? get_class($trackDetailAvailableImagesItem) : gettype($trackDetailAvailableImagesItem)), __LINE__);
            }
        }
        $this->AvailableImages = $availableImages;
        return $this;
    }
    /**
     * Add item to AvailableImages value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToAvailableImages(\Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail) {
            throw new \InvalidArgumentException(sprintf('The AvailableImages property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailableImages[] = $item;
        return $this;
    }
    /**
     * Get Signature value
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureImageDetail|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param \Drupal\commerce_fedex\FedEx\StructType\SignatureImageDetail $signature
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setSignature(\Drupal\commerce_fedex\FedEx\StructType\SignatureImageDetail $signature = null)
    {
        $this->Signature = $signature;
        return $this;
    }
    /**
     * Get NotificationEventsAvailable value
     * @return string[]|null
     */
    public function getNotificationEventsAvailable()
    {
        return $this->NotificationEventsAvailable;
    }
    /**
     * Set NotificationEventsAvailable value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $notificationEventsAvailable
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setNotificationEventsAvailable(array $notificationEventsAvailable = array())
    {
        $invalidValues = array();
        foreach ($notificationEventsAvailable as $trackDetailNotificationEventsAvailableItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::valueIsValid($trackDetailNotificationEventsAvailableItem)) {
                $invalidValues[] = var_export($trackDetailNotificationEventsAvailableItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::getValidValues())), __LINE__);
        }
        $this->NotificationEventsAvailable = $notificationEventsAvailable;
        return $this;
    }
    /**
     * Add item to NotificationEventsAvailable value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToNotificationEventsAvailable($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::getValidValues())), __LINE__);
        }
        $this->NotificationEventsAvailable[] = $item;
        return $this;
    }
    /**
     * Get SplitShipmentParts value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart[]|null
     */
    public function getSplitShipmentParts()
    {
        return $this->SplitShipmentParts;
    }
    /**
     * Set SplitShipmentParts value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart[] $splitShipmentParts
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setSplitShipmentParts(array $splitShipmentParts = array())
    {
        foreach ($splitShipmentParts as $trackDetailSplitShipmentPartsItem) {
            // validation for constraint: itemType
            if (!$trackDetailSplitShipmentPartsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart) {
                throw new \InvalidArgumentException(sprintf('The SplitShipmentParts property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart, "%s" given', is_object($trackDetailSplitShipmentPartsItem) ? get_class($trackDetailSplitShipmentPartsItem) : gettype($trackDetailSplitShipmentPartsItem)), __LINE__);
            }
        }
        $this->SplitShipmentParts = $splitShipmentParts;
        return $this;
    }
    /**
     * Add item to SplitShipmentParts value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToSplitShipmentParts(\Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart) {
            throw new \InvalidArgumentException(sprintf('The SplitShipmentParts property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SplitShipmentParts[] = $item;
        return $this;
    }
    /**
     * Get DeliveryOptionEligibilityDetails value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail[]|null
     */
    public function getDeliveryOptionEligibilityDetails()
    {
        return $this->DeliveryOptionEligibilityDetails;
    }
    /**
     * Set DeliveryOptionEligibilityDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail[] $deliveryOptionEligibilityDetails
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setDeliveryOptionEligibilityDetails(array $deliveryOptionEligibilityDetails = array())
    {
        foreach ($deliveryOptionEligibilityDetails as $trackDetailDeliveryOptionEligibilityDetailsItem) {
            // validation for constraint: itemType
            if (!$trackDetailDeliveryOptionEligibilityDetailsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail) {
                throw new \InvalidArgumentException(sprintf('The DeliveryOptionEligibilityDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail, "%s" given', is_object($trackDetailDeliveryOptionEligibilityDetailsItem) ? get_class($trackDetailDeliveryOptionEligibilityDetailsItem) : gettype($trackDetailDeliveryOptionEligibilityDetailsItem)), __LINE__);
            }
        }
        $this->DeliveryOptionEligibilityDetails = $deliveryOptionEligibilityDetails;
        return $this;
    }
    /**
     * Add item to DeliveryOptionEligibilityDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToDeliveryOptionEligibilityDetails(\Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail) {
            throw new \InvalidArgumentException(sprintf('The DeliveryOptionEligibilityDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\DeliveryOptionEligibilityDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeliveryOptionEligibilityDetails[] = $item;
        return $this;
    }
    /**
     * Get Events value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackEvent[]|null
     */
    public function getEvents()
    {
        return $this->Events;
    }
    /**
     * Set Events value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackEvent[] $events
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function setEvents(array $events = array())
    {
        foreach ($events as $trackDetailEventsItem) {
            // validation for constraint: itemType
            if (!$trackDetailEventsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackEvent) {
                throw new \InvalidArgumentException(sprintf('The Events property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackEvent, "%s" given', is_object($trackDetailEventsItem) ? get_class($trackDetailEventsItem) : gettype($trackDetailEventsItem)), __LINE__);
            }
        }
        $this->Events = $events;
        return $this;
    }
    /**
     * Add item to Events value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackEvent $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
     */
    public function addToEvents(\Drupal\commerce_fedex\FedEx\StructType\TrackEvent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackEvent) {
            throw new \InvalidArgumentException(sprintf('The Events property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackEvent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Events[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail
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
