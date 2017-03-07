<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentSpecialServicesRequested StructType
 * Meta informations extracted from the WSDL
 * - documentation: These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must
 * be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 * @subpackage Structs
 */
class ShipmentSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - documentation: The types of all special services requested for the enclosing shipment (or other shipment-level transaction).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServiceTypes;
    /**
     * The CodDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CodDetail
     */
    public $CodDetail;
    /**
     * The DeliveryOnInvoiceAcceptanceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DeliveryOnInvoiceAcceptanceDetail
     */
    public $DeliveryOnInvoiceAcceptanceDetail;
    /**
     * The HoldAtLocationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\HoldAtLocationDetail
     */
    public $HoldAtLocationDetail;
    /**
     * The EventNotificationDetail
     * Meta informations extracted from the WSDL
     * - documentation: This replaces eMailNotificationDetail
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationDetail
     */
    public $EventNotificationDetail;
    /**
     * The ReturnShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ReturnShipmentDetail
     */
    public $ReturnShipmentDetail;
    /**
     * The PendingShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentDetail
     */
    public $PendingShipmentDetail;
    /**
     * The InternationalControlledExportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail
     */
    public $InternationalControlledExportDetail;
    /**
     * The InternationalTrafficInArmsRegulationsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\InternationalTrafficInArmsRegulationsDetail
     */
    public $InternationalTrafficInArmsRegulationsDetail;
    /**
     * The ShipmentDryIceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShipmentDryIceDetail
     */
    public $ShipmentDryIceDetail;
    /**
     * The HomeDeliveryPremiumDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\HomeDeliveryPremiumDetail
     */
    public $HomeDeliveryPremiumDetail;
    /**
     * The FlatbedTrailerDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\FlatbedTrailerDetail
     */
    public $FlatbedTrailerDetail;
    /**
     * The FreightGuaranteeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\FreightGuaranteeDetail
     */
    public $FreightGuaranteeDetail;
    /**
     * The EtdDetail
     * Meta informations extracted from the WSDL
     * - documentation: Electronic Trade document references.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\EtdDetail
     */
    public $EtdDetail;
    /**
     * The CustomDeliveryWindowDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for date or range of dates on which delivery is to be attempted.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomDeliveryWindowDetail
     */
    public $CustomDeliveryWindowDetail;
    /**
     * Constructor method for ShipmentSpecialServicesRequested
     * @uses ShipmentSpecialServicesRequested::setSpecialServiceTypes()
     * @uses ShipmentSpecialServicesRequested::setCodDetail()
     * @uses ShipmentSpecialServicesRequested::setDeliveryOnInvoiceAcceptanceDetail()
     * @uses ShipmentSpecialServicesRequested::setHoldAtLocationDetail()
     * @uses ShipmentSpecialServicesRequested::setEventNotificationDetail()
     * @uses ShipmentSpecialServicesRequested::setReturnShipmentDetail()
     * @uses ShipmentSpecialServicesRequested::setPendingShipmentDetail()
     * @uses ShipmentSpecialServicesRequested::setInternationalControlledExportDetail()
     * @uses ShipmentSpecialServicesRequested::setInternationalTrafficInArmsRegulationsDetail()
     * @uses ShipmentSpecialServicesRequested::setShipmentDryIceDetail()
     * @uses ShipmentSpecialServicesRequested::setHomeDeliveryPremiumDetail()
     * @uses ShipmentSpecialServicesRequested::setFlatbedTrailerDetail()
     * @uses ShipmentSpecialServicesRequested::setFreightGuaranteeDetail()
     * @uses ShipmentSpecialServicesRequested::setEtdDetail()
     * @uses ShipmentSpecialServicesRequested::setCustomDeliveryWindowDetail()
     * @param string[] $specialServiceTypes
     * @param \Drupal\commerce_fedex\FedEx\StructType\CodDetail $codDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\HoldAtLocationDetail $holdAtLocationDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationDetail $eventNotificationDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\ReturnShipmentDetail $returnShipmentDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentDetail $pendingShipmentDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail $internationalControlledExportDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentDryIceDetail $shipmentDryIceDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\FlatbedTrailerDetail $flatbedTrailerDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightGuaranteeDetail $freightGuaranteeDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\EtdDetail $etdDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomDeliveryWindowDetail $customDeliveryWindowDetail
     */
    public function __construct(array $specialServiceTypes = array(), \Drupal\commerce_fedex\FedEx\StructType\CodDetail $codDetail = null, \Drupal\commerce_fedex\FedEx\StructType\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null, \Drupal\commerce_fedex\FedEx\StructType\HoldAtLocationDetail $holdAtLocationDetail = null, \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationDetail $eventNotificationDetail = null, \Drupal\commerce_fedex\FedEx\StructType\ReturnShipmentDetail $returnShipmentDetail = null, \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentDetail $pendingShipmentDetail = null, \Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail $internationalControlledExportDetail = null, \Drupal\commerce_fedex\FedEx\StructType\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null, \Drupal\commerce_fedex\FedEx\StructType\ShipmentDryIceDetail $shipmentDryIceDetail = null, \Drupal\commerce_fedex\FedEx\StructType\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null, \Drupal\commerce_fedex\FedEx\StructType\FlatbedTrailerDetail $flatbedTrailerDetail = null, \Drupal\commerce_fedex\FedEx\StructType\FreightGuaranteeDetail $freightGuaranteeDetail = null, \Drupal\commerce_fedex\FedEx\StructType\EtdDetail $etdDetail = null, \Drupal\commerce_fedex\FedEx\StructType\CustomDeliveryWindowDetail $customDeliveryWindowDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
            ->setCodDetail($codDetail)
            ->setDeliveryOnInvoiceAcceptanceDetail($deliveryOnInvoiceAcceptanceDetail)
            ->setHoldAtLocationDetail($holdAtLocationDetail)
            ->setEventNotificationDetail($eventNotificationDetail)
            ->setReturnShipmentDetail($returnShipmentDetail)
            ->setPendingShipmentDetail($pendingShipmentDetail)
            ->setInternationalControlledExportDetail($internationalControlledExportDetail)
            ->setInternationalTrafficInArmsRegulationsDetail($internationalTrafficInArmsRegulationsDetail)
            ->setShipmentDryIceDetail($shipmentDryIceDetail)
            ->setHomeDeliveryPremiumDetail($homeDeliveryPremiumDetail)
            ->setFlatbedTrailerDetail($flatbedTrailerDetail)
            ->setFreightGuaranteeDetail($freightGuaranteeDetail)
            ->setEtdDetail($etdDetail)
            ->setCustomDeliveryWindowDetail($customDeliveryWindowDetail);
    }
    /**
     * Get SpecialServiceTypes value
     * @return string[]|null
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    /**
     * Set SpecialServiceTypes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentSpecialServiceType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $specialServiceTypes
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        $invalidValues = array();
        foreach ($specialServiceTypes as $shipmentSpecialServicesRequestedSpecialServiceTypesItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\ShipmentSpecialServiceType::valueIsValid($shipmentSpecialServicesRequestedSpecialServiceTypesItem)) {
                $invalidValues[] = var_export($shipmentSpecialServicesRequestedSpecialServiceTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ShipmentSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Add item to SpecialServiceTypes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentSpecialServiceType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function addToSpecialServiceTypes($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ShipmentSpecialServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ShipmentSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes[] = $item;
        return $this;
    }
    /**
     * Get CodDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    /**
     * Set CodDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\CodDetail $codDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setCodDetail(\Drupal\commerce_fedex\FedEx\StructType\CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    /**
     * Get DeliveryOnInvoiceAcceptanceDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DeliveryOnInvoiceAcceptanceDetail|null
     */
    public function getDeliveryOnInvoiceAcceptanceDetail()
    {
        return $this->DeliveryOnInvoiceAcceptanceDetail;
    }
    /**
     * Set DeliveryOnInvoiceAcceptanceDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(\Drupal\commerce_fedex\FedEx\StructType\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null)
    {
        $this->DeliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }
    /**
     * Get HoldAtLocationDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\HoldAtLocationDetail|null
     */
    public function getHoldAtLocationDetail()
    {
        return $this->HoldAtLocationDetail;
    }
    /**
     * Set HoldAtLocationDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\HoldAtLocationDetail $holdAtLocationDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail(\Drupal\commerce_fedex\FedEx\StructType\HoldAtLocationDetail $holdAtLocationDetail = null)
    {
        $this->HoldAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    /**
     * Get EventNotificationDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationDetail|null
     */
    public function getEventNotificationDetail()
    {
        return $this->EventNotificationDetail;
    }
    /**
     * Set EventNotificationDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationDetail $eventNotificationDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setEventNotificationDetail(\Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationDetail $eventNotificationDetail = null)
    {
        $this->EventNotificationDetail = $eventNotificationDetail;
        return $this;
    }
    /**
     * Get ReturnShipmentDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnShipmentDetail|null
     */
    public function getReturnShipmentDetail()
    {
        return $this->ReturnShipmentDetail;
    }
    /**
     * Set ReturnShipmentDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ReturnShipmentDetail $returnShipmentDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail(\Drupal\commerce_fedex\FedEx\StructType\ReturnShipmentDetail $returnShipmentDetail = null)
    {
        $this->ReturnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    /**
     * Get PendingShipmentDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentDetail|null
     */
    public function getPendingShipmentDetail()
    {
        return $this->PendingShipmentDetail;
    }
    /**
     * Set PendingShipmentDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentDetail $pendingShipmentDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail(\Drupal\commerce_fedex\FedEx\StructType\PendingShipmentDetail $pendingShipmentDetail = null)
    {
        $this->PendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    /**
     * Get InternationalControlledExportDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail|null
     */
    public function getInternationalControlledExportDetail()
    {
        return $this->InternationalControlledExportDetail;
    }
    /**
     * Set InternationalControlledExportDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail $internationalControlledExportDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setInternationalControlledExportDetail(\Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail $internationalControlledExportDetail = null)
    {
        $this->InternationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    /**
     * Get InternationalTrafficInArmsRegulationsDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\InternationalTrafficInArmsRegulationsDetail|null
     */
    public function getInternationalTrafficInArmsRegulationsDetail()
    {
        return $this->InternationalTrafficInArmsRegulationsDetail;
    }
    /**
     * Set InternationalTrafficInArmsRegulationsDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setInternationalTrafficInArmsRegulationsDetail(\Drupal\commerce_fedex\FedEx\StructType\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null)
    {
        $this->InternationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }
    /**
     * Get ShipmentDryIceDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentDryIceDetail|null
     */
    public function getShipmentDryIceDetail()
    {
        return $this->ShipmentDryIceDetail;
    }
    /**
     * Set ShipmentDryIceDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentDryIceDetail $shipmentDryIceDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail(\Drupal\commerce_fedex\FedEx\StructType\ShipmentDryIceDetail $shipmentDryIceDetail = null)
    {
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    /**
     * Get HomeDeliveryPremiumDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\HomeDeliveryPremiumDetail|null
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->HomeDeliveryPremiumDetail;
    }
    /**
     * Set HomeDeliveryPremiumDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail(\Drupal\commerce_fedex\FedEx\StructType\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null)
    {
        $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    /**
     * Get FlatbedTrailerDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\FlatbedTrailerDetail|null
     */
    public function getFlatbedTrailerDetail()
    {
        return $this->FlatbedTrailerDetail;
    }
    /**
     * Set FlatbedTrailerDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\FlatbedTrailerDetail $flatbedTrailerDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setFlatbedTrailerDetail(\Drupal\commerce_fedex\FedEx\StructType\FlatbedTrailerDetail $flatbedTrailerDetail = null)
    {
        $this->FlatbedTrailerDetail = $flatbedTrailerDetail;
        return $this;
    }
    /**
     * Get FreightGuaranteeDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightGuaranteeDetail|null
     */
    public function getFreightGuaranteeDetail()
    {
        return $this->FreightGuaranteeDetail;
    }
    /**
     * Set FreightGuaranteeDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightGuaranteeDetail $freightGuaranteeDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setFreightGuaranteeDetail(\Drupal\commerce_fedex\FedEx\StructType\FreightGuaranteeDetail $freightGuaranteeDetail = null)
    {
        $this->FreightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    /**
     * Get EtdDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\EtdDetail|null
     */
    public function getEtdDetail()
    {
        return $this->EtdDetail;
    }
    /**
     * Set EtdDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\EtdDetail $etdDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setEtdDetail(\Drupal\commerce_fedex\FedEx\StructType\EtdDetail $etdDetail = null)
    {
        $this->EtdDetail = $etdDetail;
        return $this;
    }
    /**
     * Get CustomDeliveryWindowDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDeliveryWindowDetail|null
     */
    public function getCustomDeliveryWindowDetail()
    {
        return $this->CustomDeliveryWindowDetail;
    }
    /**
     * Set CustomDeliveryWindowDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomDeliveryWindowDetail $customDeliveryWindowDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail(\Drupal\commerce_fedex\FedEx\StructType\CustomDeliveryWindowDetail $customDeliveryWindowDetail = null)
    {
        $this->CustomDeliveryWindowDetail = $customDeliveryWindowDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentSpecialServicesRequested
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
