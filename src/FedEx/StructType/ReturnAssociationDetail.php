<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnAssociationDetail StructType
 * @subpackage Structs
 */
class ReturnAssociationDetail extends AbstractStructBase
{
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking number of the master associated with the return shipment.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The ShipDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShipDate;
    /**
     * Constructor method for ReturnAssociationDetail
     * @uses ReturnAssociationDetail::setTrackingNumber()
     * @uses ReturnAssociationDetail::setShipDate()
     * @param string $trackingNumber
     * @param string $shipDate
     */
    public function __construct($trackingNumber = null, $shipDate = null)
    {
        $this
            ->setTrackingNumber($trackingNumber)
            ->setShipDate($shipDate);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnAssociationDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnAssociationDetail
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnAssociationDetail
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
