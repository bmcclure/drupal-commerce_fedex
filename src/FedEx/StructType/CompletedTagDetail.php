<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedTagDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides reply information specific to a tag request.
 * @subpackage Structs
 */
class CompletedTagDetail extends AbstractStructBase
{
    /**
     * The ConfirmationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ConfirmationNumber;
    /**
     * The AccessTime
     * Meta informations extracted from the WSDL
     * - documentation: As of June 2007, returned only for FedEx Express services.
     * - minOccurs: 0
     * @var string
     */
    public $AccessTime;
    /**
     * The CutoffTime
     * Meta informations extracted from the WSDL
     * - documentation: As of June 2007, returned only for FedEx Express services.
     * - minOccurs: 0
     * @var string
     */
    public $CutoffTime;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: As of June 2007, returned only for FedEx Express services.
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The DeliveryCommitment
     * Meta informations extracted from the WSDL
     * - documentation: As of June 2007, returned only for FedEx Express services.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryCommitment;
    /**
     * The DispatchDate
     * Meta informations extracted from the WSDL
     * - documentation: FEDEX INTERNAL USE ONLY: for use by INET.
     * - minOccurs: 0
     * @var string
     */
    public $DispatchDate;
    /**
     * Constructor method for CompletedTagDetail
     * @uses CompletedTagDetail::setConfirmationNumber()
     * @uses CompletedTagDetail::setAccessTime()
     * @uses CompletedTagDetail::setCutoffTime()
     * @uses CompletedTagDetail::setLocation()
     * @uses CompletedTagDetail::setDeliveryCommitment()
     * @uses CompletedTagDetail::setDispatchDate()
     * @param string $confirmationNumber
     * @param string $accessTime
     * @param string $cutoffTime
     * @param string $location
     * @param string $deliveryCommitment
     * @param string $dispatchDate
     */
    public function __construct($confirmationNumber = null, $accessTime = null, $cutoffTime = null, $location = null, $deliveryCommitment = null, $dispatchDate = null)
    {
        $this
            ->setConfirmationNumber($confirmationNumber)
            ->setAccessTime($accessTime)
            ->setCutoffTime($cutoffTime)
            ->setLocation($location)
            ->setDeliveryCommitment($deliveryCommitment)
            ->setDispatchDate($dispatchDate);
    }
    /**
     * Get ConfirmationNumber value
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @param string $confirmationNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTagDetail
     */
    public function setConfirmationNumber($confirmationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationNumber) && !is_string($confirmationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationNumber)), __LINE__);
        }
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    /**
     * Get AccessTime value
     * @return string|null
     */
    public function getAccessTime()
    {
        return $this->AccessTime;
    }
    /**
     * Set AccessTime value
     * @param string $accessTime
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTagDetail
     */
    public function setAccessTime($accessTime = null)
    {
        // validation for constraint: string
        if (!is_null($accessTime) && !is_string($accessTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessTime)), __LINE__);
        }
        $this->AccessTime = $accessTime;
        return $this;
    }
    /**
     * Get CutoffTime value
     * @return string|null
     */
    public function getCutoffTime()
    {
        return $this->CutoffTime;
    }
    /**
     * Set CutoffTime value
     * @param string $cutoffTime
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTagDetail
     */
    public function setCutoffTime($cutoffTime = null)
    {
        // validation for constraint: string
        if (!is_null($cutoffTime) && !is_string($cutoffTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cutoffTime)), __LINE__);
        }
        $this->CutoffTime = $cutoffTime;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTagDetail
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get DeliveryCommitment value
     * @return string|null
     */
    public function getDeliveryCommitment()
    {
        return $this->DeliveryCommitment;
    }
    /**
     * Set DeliveryCommitment value
     * @param string $deliveryCommitment
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTagDetail
     */
    public function setDeliveryCommitment($deliveryCommitment = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryCommitment) && !is_string($deliveryCommitment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryCommitment)), __LINE__);
        }
        $this->DeliveryCommitment = $deliveryCommitment;
        return $this;
    }
    /**
     * Get DispatchDate value
     * @return string|null
     */
    public function getDispatchDate()
    {
        return $this->DispatchDate;
    }
    /**
     * Set DispatchDate value
     * @param string $dispatchDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTagDetail
     */
    public function setDispatchDate($dispatchDate = null)
    {
        // validation for constraint: string
        if (!is_null($dispatchDate) && !is_string($dispatchDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dispatchDate)), __LINE__);
        }
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTagDetail
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
