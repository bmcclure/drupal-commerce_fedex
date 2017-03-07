<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackSelectionDetail StructType
 * @subpackage Structs
 */
class TrackSelectionDetail extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx operating company (transportation) used for this package's delivery.
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
     * The PackageIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: The type and value of the package identifier that is to be used to retrieve the tracking information for a package or group of packages.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackPackageIdentifier
     */
    public $PackageIdentifier;
    /**
     * The TrackingNumberUniqueIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: Used to distinguish duplicate FedEx tracking numbers.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumberUniqueIdentifier;
    /**
     * The ShipDateRangeBegin
     * Meta informations extracted from the WSDL
     * - documentation: To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     * - minOccurs: 0
     * @var string
     */
    public $ShipDateRangeBegin;
    /**
     * The ShipDateRangeEnd
     * Meta informations extracted from the WSDL
     * - documentation: To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     * - minOccurs: 0
     * @var string
     */
    public $ShipDateRangeEnd;
    /**
     * The ShipmentAccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: For tracking by references information either the account number or destination postal code and country must be provided.
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentAccountNumber;
    /**
     * The SecureSpodAccount
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the SPOD account number for the shipment being tracked.
     * - minOccurs: 0
     * @var string
     */
    public $SecureSpodAccount;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - documentation: For tracking by references information either the account number or destination postal code and country must be provided.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $Destination;
    /**
     * The PagingDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about how to retrieve the subsequent pages when there is more than one page in the TrackReply.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PagingDetail
     */
    public $PagingDetail;
    /**
     * The CustomerSpecifiedTimeOutValueInMilliseconds
     * Meta informations extracted from the WSDL
     * - documentation: The customer can specify a desired time out value for this particular tracking number.
     * - minOccurs: 0
     * @var int
     */
    public $CustomerSpecifiedTimeOutValueInMilliseconds;
    /**
     * Constructor method for TrackSelectionDetail
     * @uses TrackSelectionDetail::setCarrierCode()
     * @uses TrackSelectionDetail::setOperatingCompany()
     * @uses TrackSelectionDetail::setPackageIdentifier()
     * @uses TrackSelectionDetail::setTrackingNumberUniqueIdentifier()
     * @uses TrackSelectionDetail::setShipDateRangeBegin()
     * @uses TrackSelectionDetail::setShipDateRangeEnd()
     * @uses TrackSelectionDetail::setShipmentAccountNumber()
     * @uses TrackSelectionDetail::setSecureSpodAccount()
     * @uses TrackSelectionDetail::setDestination()
     * @uses TrackSelectionDetail::setPagingDetail()
     * @uses TrackSelectionDetail::setCustomerSpecifiedTimeOutValueInMilliseconds()
     * @param string $carrierCode
     * @param string $operatingCompany
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackPackageIdentifier $packageIdentifier
     * @param string $trackingNumberUniqueIdentifier
     * @param string $shipDateRangeBegin
     * @param string $shipDateRangeEnd
     * @param string $shipmentAccountNumber
     * @param string $secureSpodAccount
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $destination
     * @param \Drupal\commerce_fedex\FedEx\StructType\PagingDetail $pagingDetail
     * @param int $customerSpecifiedTimeOutValueInMilliseconds
     */
    public function __construct($carrierCode = null, $operatingCompany = null, \Drupal\commerce_fedex\FedEx\StructType\TrackPackageIdentifier $packageIdentifier = null, $trackingNumberUniqueIdentifier = null, $shipDateRangeBegin = null, $shipDateRangeEnd = null, $shipmentAccountNumber = null, $secureSpodAccount = null, \Drupal\commerce_fedex\FedEx\StructType\Address $destination = null, \Drupal\commerce_fedex\FedEx\StructType\PagingDetail $pagingDetail = null, $customerSpecifiedTimeOutValueInMilliseconds = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setOperatingCompany($operatingCompany)
            ->setPackageIdentifier($packageIdentifier)
            ->setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
            ->setShipDateRangeBegin($shipDateRangeBegin)
            ->setShipDateRangeEnd($shipDateRangeEnd)
            ->setShipmentAccountNumber($shipmentAccountNumber)
            ->setSecureSpodAccount($secureSpodAccount)
            ->setDestination($destination)
            ->setPagingDetail($pagingDetail)
            ->setCustomerSpecifiedTimeOutValueInMilliseconds($customerSpecifiedTimeOutValueInMilliseconds);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
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
     * Get PackageIdentifier value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackPackageIdentifier|null
     */
    public function getPackageIdentifier()
    {
        return $this->PackageIdentifier;
    }
    /**
     * Set PackageIdentifier value
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackPackageIdentifier $packageIdentifier
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
     */
    public function setPackageIdentifier(\Drupal\commerce_fedex\FedEx\StructType\TrackPackageIdentifier $packageIdentifier = null)
    {
        $this->PackageIdentifier = $packageIdentifier;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
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
     * Get ShipDateRangeBegin value
     * @return string|null
     */
    public function getShipDateRangeBegin()
    {
        return $this->ShipDateRangeBegin;
    }
    /**
     * Set ShipDateRangeBegin value
     * @param string $shipDateRangeBegin
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
     */
    public function setShipDateRangeBegin($shipDateRangeBegin = null)
    {
        // validation for constraint: string
        if (!is_null($shipDateRangeBegin) && !is_string($shipDateRangeBegin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipDateRangeBegin)), __LINE__);
        }
        $this->ShipDateRangeBegin = $shipDateRangeBegin;
        return $this;
    }
    /**
     * Get ShipDateRangeEnd value
     * @return string|null
     */
    public function getShipDateRangeEnd()
    {
        return $this->ShipDateRangeEnd;
    }
    /**
     * Set ShipDateRangeEnd value
     * @param string $shipDateRangeEnd
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
     */
    public function setShipDateRangeEnd($shipDateRangeEnd = null)
    {
        // validation for constraint: string
        if (!is_null($shipDateRangeEnd) && !is_string($shipDateRangeEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipDateRangeEnd)), __LINE__);
        }
        $this->ShipDateRangeEnd = $shipDateRangeEnd;
        return $this;
    }
    /**
     * Get ShipmentAccountNumber value
     * @return string|null
     */
    public function getShipmentAccountNumber()
    {
        return $this->ShipmentAccountNumber;
    }
    /**
     * Set ShipmentAccountNumber value
     * @param string $shipmentAccountNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
     */
    public function setShipmentAccountNumber($shipmentAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentAccountNumber) && !is_string($shipmentAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentAccountNumber)), __LINE__);
        }
        $this->ShipmentAccountNumber = $shipmentAccountNumber;
        return $this;
    }
    /**
     * Get SecureSpodAccount value
     * @return string|null
     */
    public function getSecureSpodAccount()
    {
        return $this->SecureSpodAccount;
    }
    /**
     * Set SecureSpodAccount value
     * @param string $secureSpodAccount
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
     */
    public function setSecureSpodAccount($secureSpodAccount = null)
    {
        // validation for constraint: string
        if (!is_null($secureSpodAccount) && !is_string($secureSpodAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secureSpodAccount)), __LINE__);
        }
        $this->SecureSpodAccount = $secureSpodAccount;
        return $this;
    }
    /**
     * Get Destination value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address|null
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $destination
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
     */
    public function setDestination(\Drupal\commerce_fedex\FedEx\StructType\Address $destination = null)
    {
        $this->Destination = $destination;
        return $this;
    }
    /**
     * Get PagingDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PagingDetail|null
     */
    public function getPagingDetail()
    {
        return $this->PagingDetail;
    }
    /**
     * Set PagingDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\PagingDetail $pagingDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
     */
    public function setPagingDetail(\Drupal\commerce_fedex\FedEx\StructType\PagingDetail $pagingDetail = null)
    {
        $this->PagingDetail = $pagingDetail;
        return $this;
    }
    /**
     * Get CustomerSpecifiedTimeOutValueInMilliseconds value
     * @return int|null
     */
    public function getCustomerSpecifiedTimeOutValueInMilliseconds()
    {
        return $this->CustomerSpecifiedTimeOutValueInMilliseconds;
    }
    /**
     * Set CustomerSpecifiedTimeOutValueInMilliseconds value
     * @param int $customerSpecifiedTimeOutValueInMilliseconds
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
     */
    public function setCustomerSpecifiedTimeOutValueInMilliseconds($customerSpecifiedTimeOutValueInMilliseconds = null)
    {
        // validation for constraint: int
        if (!is_null($customerSpecifiedTimeOutValueInMilliseconds) && !is_numeric($customerSpecifiedTimeOutValueInMilliseconds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($customerSpecifiedTimeOutValueInMilliseconds)), __LINE__);
        }
        $this->CustomerSpecifiedTimeOutValueInMilliseconds = $customerSpecifiedTimeOutValueInMilliseconds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSelectionDetail
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
