<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackEvent StructType
 * Meta informations extracted from the WSDL
 * - documentation: FedEx scanning information about a package.
 * @subpackage Structs
 */
class TrackEvent extends AbstractStructBase
{
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - documentation: The time this event occurred.
     * - minOccurs: 0
     * @var string
     */
    public $Timestamp;
    /**
     * The EventType
     * Meta informations extracted from the WSDL
     * - documentation: Carrier's scan code. Pairs with EventDescription.
     * - minOccurs: 0
     * @var string
     */
    public $EventType;
    /**
     * The EventDescription
     * Meta informations extracted from the WSDL
     * - documentation: Literal description that pairs with the EventType.
     * - minOccurs: 0
     * @var string
     */
    public $EventDescription;
    /**
     * The StatusExceptionCode
     * Meta informations extracted from the WSDL
     * - documentation: Further defines the Scan Type code's specific type (e.g., DEX08 business closed). Pairs with StatusExceptionDescription.
     * - minOccurs: 0
     * @var string
     */
    public $StatusExceptionCode;
    /**
     * The StatusExceptionDescription
     * Meta informations extracted from the WSDL
     * - documentation: Literal description that pairs with the StatusExceptionCode.
     * - minOccurs: 0
     * @var string
     */
    public $StatusExceptionDescription;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Address information of the station that is responsible for the scan.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $Address;
    /**
     * The StationId
     * Meta informations extracted from the WSDL
     * - documentation: FedEx location ID where the scan took place. (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $StationId;
    /**
     * The ArrivalLocation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates where the arrival actually occurred.
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalLocation;
    /**
     * Constructor method for TrackEvent
     * @uses TrackEvent::setTimestamp()
     * @uses TrackEvent::setEventType()
     * @uses TrackEvent::setEventDescription()
     * @uses TrackEvent::setStatusExceptionCode()
     * @uses TrackEvent::setStatusExceptionDescription()
     * @uses TrackEvent::setAddress()
     * @uses TrackEvent::setStationId()
     * @uses TrackEvent::setArrivalLocation()
     * @param string $timestamp
     * @param string $eventType
     * @param string $eventDescription
     * @param string $statusExceptionCode
     * @param string $statusExceptionDescription
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $address
     * @param string $stationId
     * @param string $arrivalLocation
     */
    public function __construct($timestamp = null, $eventType = null, $eventDescription = null, $statusExceptionCode = null, $statusExceptionDescription = null, \Drupal\commerce_fedex\FedEx\StructType\Address $address = null, $stationId = null, $arrivalLocation = null)
    {
        $this
            ->setTimestamp($timestamp)
            ->setEventType($eventType)
            ->setEventDescription($eventDescription)
            ->setStatusExceptionCode($statusExceptionCode)
            ->setStatusExceptionDescription($statusExceptionDescription)
            ->setAddress($address)
            ->setStationId($stationId)
            ->setArrivalLocation($arrivalLocation);
    }
    /**
     * Get Timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackEvent
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Get EventType value
     * @return string|null
     */
    public function getEventType()
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @param string $eventType
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackEvent
     */
    public function setEventType($eventType = null)
    {
        // validation for constraint: string
        if (!is_null($eventType) && !is_string($eventType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventType)), __LINE__);
        }
        $this->EventType = $eventType;
        return $this;
    }
    /**
     * Get EventDescription value
     * @return string|null
     */
    public function getEventDescription()
    {
        return $this->EventDescription;
    }
    /**
     * Set EventDescription value
     * @param string $eventDescription
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackEvent
     */
    public function setEventDescription($eventDescription = null)
    {
        // validation for constraint: string
        if (!is_null($eventDescription) && !is_string($eventDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventDescription)), __LINE__);
        }
        $this->EventDescription = $eventDescription;
        return $this;
    }
    /**
     * Get StatusExceptionCode value
     * @return string|null
     */
    public function getStatusExceptionCode()
    {
        return $this->StatusExceptionCode;
    }
    /**
     * Set StatusExceptionCode value
     * @param string $statusExceptionCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackEvent
     */
    public function setStatusExceptionCode($statusExceptionCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusExceptionCode) && !is_string($statusExceptionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusExceptionCode)), __LINE__);
        }
        $this->StatusExceptionCode = $statusExceptionCode;
        return $this;
    }
    /**
     * Get StatusExceptionDescription value
     * @return string|null
     */
    public function getStatusExceptionDescription()
    {
        return $this->StatusExceptionDescription;
    }
    /**
     * Set StatusExceptionDescription value
     * @param string $statusExceptionDescription
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackEvent
     */
    public function setStatusExceptionDescription($statusExceptionDescription = null)
    {
        // validation for constraint: string
        if (!is_null($statusExceptionDescription) && !is_string($statusExceptionDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusExceptionDescription)), __LINE__);
        }
        $this->StatusExceptionDescription = $statusExceptionDescription;
        return $this;
    }
    /**
     * Get Address value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $address
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackEvent
     */
    public function setAddress(\Drupal\commerce_fedex\FedEx\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get StationId value
     * @return string|null
     */
    public function getStationId()
    {
        return $this->StationId;
    }
    /**
     * Set StationId value
     * @param string $stationId
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackEvent
     */
    public function setStationId($stationId = null)
    {
        // validation for constraint: string
        if (!is_null($stationId) && !is_string($stationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stationId)), __LINE__);
        }
        $this->StationId = $stationId;
        return $this;
    }
    /**
     * Get ArrivalLocation value
     * @return string|null
     */
    public function getArrivalLocation()
    {
        return $this->ArrivalLocation;
    }
    /**
     * Set ArrivalLocation value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ArrivalLocationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ArrivalLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $arrivalLocation
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackEvent
     */
    public function setArrivalLocation($arrivalLocation = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ArrivalLocationType::valueIsValid($arrivalLocation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $arrivalLocation, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ArrivalLocationType::getValidValues())), __LINE__);
        }
        $this->ArrivalLocation = $arrivalLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackEvent
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
