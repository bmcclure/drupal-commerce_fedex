<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociatedShipmentDetail StructType
 * @subpackage Structs
 */
class AssociatedShipmentDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Party
     */
    public $Sender;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Party
     */
    public $Recipient;
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
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking id for the payment on the return.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackingId
     */
    public $TrackingId;
    /**
     * The CustomerReferences
     * Meta informations extracted from the WSDL
     * - documentation: Specifies additional customer reference data about the associated shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomerReference[]
     */
    public $CustomerReferences;
    /**
     * The ShipmentOperationalDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies shipment level operational information.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail
     */
    public $ShipmentOperationalDetail;
    /**
     * The PackageOperationalDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies package level operational information on the associated shipment. This information is not tied to an individual outbound package.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail
     */
    public $PackageOperationalDetail;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public $Label;
    /**
     * Constructor method for AssociatedShipmentDetail
     * @uses AssociatedShipmentDetail::setType()
     * @uses AssociatedShipmentDetail::setSender()
     * @uses AssociatedShipmentDetail::setRecipient()
     * @uses AssociatedShipmentDetail::setServiceType()
     * @uses AssociatedShipmentDetail::setPackagingType()
     * @uses AssociatedShipmentDetail::setTrackingId()
     * @uses AssociatedShipmentDetail::setCustomerReferences()
     * @uses AssociatedShipmentDetail::setShipmentOperationalDetail()
     * @uses AssociatedShipmentDetail::setPackageOperationalDetail()
     * @uses AssociatedShipmentDetail::setLabel()
     * @param string $type
     * @param \Drupal\commerce_fedex\FedEx\StructType\Party $sender
     * @param \Drupal\commerce_fedex\FedEx\StructType\Party $recipient
     * @param string $serviceType
     * @param string $packagingType
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackingId $trackingId
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerReference[] $customerReferences
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail $shipmentOperationalDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail $packageOperationalDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $label
     */
    public function __construct($type = null, \Drupal\commerce_fedex\FedEx\StructType\Party $sender = null, \Drupal\commerce_fedex\FedEx\StructType\Party $recipient = null, $serviceType = null, $packagingType = null, \Drupal\commerce_fedex\FedEx\StructType\TrackingId $trackingId = null, array $customerReferences = array(), \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail $shipmentOperationalDetail = null, \Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail $packageOperationalDetail = null, \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $label = null)
    {
        $this
            ->setType($type)
            ->setSender($sender)
            ->setRecipient($recipient)
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setTrackingId($trackingId)
            ->setCustomerReferences($customerReferences)
            ->setShipmentOperationalDetail($shipmentOperationalDetail)
            ->setPackageOperationalDetail($packageOperationalDetail)
            ->setLabel($label);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\AssociatedShipmentType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\AssociatedShipmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\AssociatedShipmentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\AssociatedShipmentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Sender value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Party|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Party $sender
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
     */
    public function setSender(\Drupal\commerce_fedex\FedEx\StructType\Party $sender = null)
    {
        $this->Sender = $sender;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
     */
    public function setRecipient(\Drupal\commerce_fedex\FedEx\StructType\Party $recipient = null)
    {
        $this->Recipient = $recipient;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
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
     * Get TrackingId value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackingId|null
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackingId $trackingId
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
     */
    public function setTrackingId(\Drupal\commerce_fedex\FedEx\StructType\TrackingId $trackingId = null)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    /**
     * Get CustomerReferences value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerReference[]|null
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }
    /**
     * Set CustomerReferences value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerReference[] $customerReferences
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
     */
    public function setCustomerReferences(array $customerReferences = array())
    {
        foreach ($customerReferences as $associatedShipmentDetailCustomerReferencesItem) {
            // validation for constraint: itemType
            if (!$associatedShipmentDetailCustomerReferencesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\CustomerReference) {
                throw new \InvalidArgumentException(sprintf('The CustomerReferences property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CustomerReference, "%s" given', is_object($associatedShipmentDetailCustomerReferencesItem) ? get_class($associatedShipmentDetailCustomerReferencesItem) : gettype($associatedShipmentDetailCustomerReferencesItem)), __LINE__);
            }
        }
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    /**
     * Add item to CustomerReferences value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerReference $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
     */
    public function addToCustomerReferences(\Drupal\commerce_fedex\FedEx\StructType\CustomerReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\CustomerReference) {
            throw new \InvalidArgumentException(sprintf('The CustomerReferences property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CustomerReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerReferences[] = $item;
        return $this;
    }
    /**
     * Get ShipmentOperationalDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail|null
     */
    public function getShipmentOperationalDetail()
    {
        return $this->ShipmentOperationalDetail;
    }
    /**
     * Set ShipmentOperationalDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail $shipmentOperationalDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
     */
    public function setShipmentOperationalDetail(\Drupal\commerce_fedex\FedEx\StructType\ShipmentOperationalDetail $shipmentOperationalDetail = null)
    {
        $this->ShipmentOperationalDetail = $shipmentOperationalDetail;
        return $this;
    }
    /**
     * Get PackageOperationalDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail|null
     */
    public function getPackageOperationalDetail()
    {
        return $this->PackageOperationalDetail;
    }
    /**
     * Set PackageOperationalDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail $packageOperationalDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
     */
    public function setPackageOperationalDetail(\Drupal\commerce_fedex\FedEx\StructType\PackageOperationalDetail $packageOperationalDetail = null)
    {
        $this->PackageOperationalDetail = $packageOperationalDetail;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
     */
    public function setLabel(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\AssociatedShipmentDetail
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
