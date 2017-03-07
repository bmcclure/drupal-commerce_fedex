<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackStatusDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details about the status of the track information for the shipments being tracked.
 * @subpackage Structs
 */
class TrackStatusDetail extends AbstractStructBase
{
    /**
     * The CreationTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreationTime;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public $Location;
    /**
     * The AncillaryDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackStatusAncillaryDetail[]
     */
    public $AncillaryDetails;
    /**
     * Constructor method for TrackStatusDetail
     * @uses TrackStatusDetail::setCreationTime()
     * @uses TrackStatusDetail::setCode()
     * @uses TrackStatusDetail::setDescription()
     * @uses TrackStatusDetail::setLocation()
     * @uses TrackStatusDetail::setAncillaryDetails()
     * @param string $creationTime
     * @param string $code
     * @param string $description
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $location
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackStatusAncillaryDetail[] $ancillaryDetails
     */
    public function __construct($creationTime = null, $code = null, $description = null, \Drupal\commerce_fedex\FedEx\StructType\Address $location = null, array $ancillaryDetails = array())
    {
        $this
            ->setCreationTime($creationTime)
            ->setCode($code)
            ->setDescription($description)
            ->setLocation($location)
            ->setAncillaryDetails($ancillaryDetails);
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Location value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Address $location
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail
     */
    public function setLocation(\Drupal\commerce_fedex\FedEx\StructType\Address $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get AncillaryDetails value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackStatusAncillaryDetail[]|null
     */
    public function getAncillaryDetails()
    {
        return $this->AncillaryDetails;
    }
    /**
     * Set AncillaryDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackStatusAncillaryDetail[] $ancillaryDetails
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail
     */
    public function setAncillaryDetails(array $ancillaryDetails = array())
    {
        foreach ($ancillaryDetails as $trackStatusDetailAncillaryDetailsItem) {
            // validation for constraint: itemType
            if (!$trackStatusDetailAncillaryDetailsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackStatusAncillaryDetail) {
                throw new \InvalidArgumentException(sprintf('The AncillaryDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackStatusAncillaryDetail, "%s" given', is_object($trackStatusDetailAncillaryDetailsItem) ? get_class($trackStatusDetailAncillaryDetailsItem) : gettype($trackStatusDetailAncillaryDetailsItem)), __LINE__);
            }
        }
        $this->AncillaryDetails = $ancillaryDetails;
        return $this;
    }
    /**
     * Add item to AncillaryDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackStatusAncillaryDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail
     */
    public function addToAncillaryDetails(\Drupal\commerce_fedex\FedEx\StructType\TrackStatusAncillaryDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackStatusAncillaryDetail) {
            throw new \InvalidArgumentException(sprintf('The AncillaryDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackStatusAncillaryDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AncillaryDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackStatusDetail
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
