<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QualifiedTrackingNumber StructType
 * Meta informations extracted from the WSDL
 * - documentation: Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
 * @subpackage Structs
 */
class QualifiedTrackingNumber extends AbstractStructBase
{
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: FedEx assigned identifier for a package/shipment.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The ShipDate
     * Meta informations extracted from the WSDL
     * - documentation: The date the package was shipped.
     * - minOccurs: 0
     * @var string
     */
    public $ShipDate;
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: If the account number used to ship the package is provided in the request the shipper and recipient information is included on the letter or fax.
     * - minOccurs: 0
     * @var string
     */
    public $AccountNumber;
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - documentation: FedEx operating company that delivered the package.
     * - minOccurs: 0
     * @var string
     */
    public $Carrier;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - documentation: Only country is used for elimination of duplicate tracking numbers.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $Destination;
    /**
     * Constructor method for QualifiedTrackingNumber
     * @uses QualifiedTrackingNumber::setTrackingNumber()
     * @uses QualifiedTrackingNumber::setShipDate()
     * @uses QualifiedTrackingNumber::setAccountNumber()
     * @uses QualifiedTrackingNumber::setCarrier()
     * @uses QualifiedTrackingNumber::setDestination()
     * @param string $trackingNumber
     * @param string $shipDate
     * @param string $accountNumber
     * @param string $carrier
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $destination
     */
    public function __construct($trackingNumber = null, $shipDate = null, $accountNumber = null, $carrier = null, \Drupal\commerce_fedex\FedEx\StructType\Address $destination = null)
    {
        $this
            ->setTrackingNumber($trackingNumber)
            ->setShipDate($shipDate)
            ->setAccountNumber($accountNumber)
            ->setCarrier($carrier)
            ->setDestination($destination);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber
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
     * Get ShipDate value
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }
    /**
     * Set ShipDate value
     * @param string $shipDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber
     */
    public function setShipDate($shipDate = null)
    {
        // validation for constraint: string
        if (!is_null($shipDate) && !is_string($shipDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipDate)), __LINE__);
        }
        $this->ShipDate = $shipDate;
        return $this;
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrier
     * @return \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber
     */
    public function setCarrier($carrier = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::valueIsValid($carrier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrier, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->Carrier = $carrier;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber
     */
    public function setDestination(\Drupal\commerce_fedex\FedEx\StructType\Address $destination = null)
    {
        $this->Destination = $destination;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\QualifiedTrackingNumber
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
