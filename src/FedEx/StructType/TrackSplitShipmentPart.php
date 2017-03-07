<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackSplitShipmentPart StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used when a cargo shipment is split across vehicles. This is used to give the status of each part of the shipment.
 * @subpackage Structs
 */
class TrackSplitShipmentPart extends AbstractStructBase
{
    /**
     * The PieceCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of pieces in this part.
     * - minOccurs: 0
     * @var int
     */
    public $PieceCount;
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - documentation: The date and time this status began.
     * - minOccurs: 0
     * @var string
     */
    public $Timestamp;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - documentation: A code that identifies this type of status.
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The StatusDescription
     * Meta informations extracted from the WSDL
     * - documentation: A human-readable description of this status.
     * - minOccurs: 0
     * @var string
     */
    public $StatusDescription;
    /**
     * Constructor method for TrackSplitShipmentPart
     * @uses TrackSplitShipmentPart::setPieceCount()
     * @uses TrackSplitShipmentPart::setTimestamp()
     * @uses TrackSplitShipmentPart::setStatusCode()
     * @uses TrackSplitShipmentPart::setStatusDescription()
     * @param int $pieceCount
     * @param string $timestamp
     * @param string $statusCode
     * @param string $statusDescription
     */
    public function __construct($pieceCount = null, $timestamp = null, $statusCode = null, $statusDescription = null)
    {
        $this
            ->setPieceCount($pieceCount)
            ->setTimestamp($timestamp)
            ->setStatusCode($statusCode)
            ->setStatusDescription($statusDescription);
    }
    /**
     * Get PieceCount value
     * @return int|null
     */
    public function getPieceCount()
    {
        return $this->PieceCount;
    }
    /**
     * Set PieceCount value
     * @param int $pieceCount
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart
     */
    public function setPieceCount($pieceCount = null)
    {
        // validation for constraint: int
        if (!is_null($pieceCount) && !is_numeric($pieceCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pieceCount)), __LINE__);
        }
        $this->PieceCount = $pieceCount;
        return $this;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart
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
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get StatusDescription value
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }
    /**
     * Set StatusDescription value
     * @param string $statusDescription
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart
     */
    public function setStatusDescription($statusDescription = null)
    {
        // validation for constraint: string
        if (!is_null($statusDescription) && !is_string($statusDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusDescription)), __LINE__);
        }
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackSplitShipmentPart
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
