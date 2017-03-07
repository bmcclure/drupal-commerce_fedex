<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CleansedAddressAndLocationDetail StructType
 * @subpackage Structs
 */
class CleansedAddressAndLocationDetail extends AbstractStructBase
{
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - documentation: This represents the internal FedEx-system recognized country code.
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The StateOrProvinceCode
     * Meta informations extracted from the WSDL
     * - documentation: This represents the internal FedEx-system recognized state or province code.
     * - minOccurs: 0
     * @var string
     */
    public $StateOrProvinceCode;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: This represents the internal FedEx-system recognized postal code.
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The ServiceArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceArea;
    /**
     * The LocationId
     * Meta informations extracted from the WSDL
     * - documentation: The unique location identifier
     * - minOccurs: 0
     * @var string
     */
    public $LocationId;
    /**
     * The LocationNumber
     * Meta informations extracted from the WSDL
     * - documentation: The op-co specific numeric identifier for a location
     * - minOccurs: 0
     * @var int
     */
    public $LocationNumber;
    /**
     * The AirportId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirportId;
    /**
     * Constructor method for CleansedAddressAndLocationDetail
     * @uses CleansedAddressAndLocationDetail::setCountryCode()
     * @uses CleansedAddressAndLocationDetail::setStateOrProvinceCode()
     * @uses CleansedAddressAndLocationDetail::setPostalCode()
     * @uses CleansedAddressAndLocationDetail::setServiceArea()
     * @uses CleansedAddressAndLocationDetail::setLocationId()
     * @uses CleansedAddressAndLocationDetail::setLocationNumber()
     * @uses CleansedAddressAndLocationDetail::setAirportId()
     * @param string $countryCode
     * @param string $stateOrProvinceCode
     * @param string $postalCode
     * @param string $serviceArea
     * @param string $locationId
     * @param int $locationNumber
     * @param string $airportId
     */
    public function __construct($countryCode = null, $stateOrProvinceCode = null, $postalCode = null, $serviceArea = null, $locationId = null, $locationNumber = null, $airportId = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setStateOrProvinceCode($stateOrProvinceCode)
            ->setPostalCode($postalCode)
            ->setServiceArea($serviceArea)
            ->setLocationId($locationId)
            ->setLocationNumber($locationNumber)
            ->setAirportId($airportId);
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\CleansedAddressAndLocationDetail
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get StateOrProvinceCode value
     * @return string|null
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    /**
     * Set StateOrProvinceCode value
     * @param string $stateOrProvinceCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\CleansedAddressAndLocationDetail
     */
    public function setStateOrProvinceCode($stateOrProvinceCode = null)
    {
        // validation for constraint: string
        if (!is_null($stateOrProvinceCode) && !is_string($stateOrProvinceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateOrProvinceCode)), __LINE__);
        }
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\CleansedAddressAndLocationDetail
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get ServiceArea value
     * @return string|null
     */
    public function getServiceArea()
    {
        return $this->ServiceArea;
    }
    /**
     * Set ServiceArea value
     * @param string $serviceArea
     * @return \Drupal\commerce_fedex\FedEx\StructType\CleansedAddressAndLocationDetail
     */
    public function setServiceArea($serviceArea = null)
    {
        // validation for constraint: string
        if (!is_null($serviceArea) && !is_string($serviceArea)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceArea)), __LINE__);
        }
        $this->ServiceArea = $serviceArea;
        return $this;
    }
    /**
     * Get LocationId value
     * @return string|null
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    /**
     * Set LocationId value
     * @param string $locationId
     * @return \Drupal\commerce_fedex\FedEx\StructType\CleansedAddressAndLocationDetail
     */
    public function setLocationId($locationId = null)
    {
        // validation for constraint: string
        if (!is_null($locationId) && !is_string($locationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationId)), __LINE__);
        }
        $this->LocationId = $locationId;
        return $this;
    }
    /**
     * Get LocationNumber value
     * @return int|null
     */
    public function getLocationNumber()
    {
        return $this->LocationNumber;
    }
    /**
     * Set LocationNumber value
     * @param int $locationNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\CleansedAddressAndLocationDetail
     */
    public function setLocationNumber($locationNumber = null)
    {
        // validation for constraint: int
        if (!is_null($locationNumber) && !is_numeric($locationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($locationNumber)), __LINE__);
        }
        $this->LocationNumber = $locationNumber;
        return $this;
    }
    /**
     * Get AirportId value
     * @return string|null
     */
    public function getAirportId()
    {
        return $this->AirportId;
    }
    /**
     * Set AirportId value
     * @param string $airportId
     * @return \Drupal\commerce_fedex\FedEx\StructType\CleansedAddressAndLocationDetail
     */
    public function setAirportId($airportId = null)
    {
        // validation for constraint: string
        if (!is_null($airportId) && !is_string($airportId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportId)), __LINE__);
        }
        $this->AirportId = $airportId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CleansedAddressAndLocationDetail
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
