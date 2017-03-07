<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address StructType
 * Meta informations extracted from the WSDL
 * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
 * the US).
 * @subpackage Structs
 */
class Address extends AbstractStructBase
{
    /**
     * The StreetLines
     * Meta informations extracted from the WSDL
     * - documentation: Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $StreetLines;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - documentation: Name of city, town, etc.
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The StateOrProvinceCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifying abbreviation for US state, Canada province, etc. Format and presence of this field will vary, depending on country.
     * - minOccurs: 0
     * @var string
     */
    public $StateOrProvinceCode;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country.
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The UrbanizationCode
     * Meta informations extracted from the WSDL
     * - documentation: Relevant only to addresses in Puerto Rico.
     * - minOccurs: 0
     * @var string
     */
    public $UrbanizationCode;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - documentation: The two-letter code used to identify a country.
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The CountryName
     * Meta informations extracted from the WSDL
     * - documentation: The fully spelt out name of a country.
     * - minOccurs: 0
     * @var string
     */
    public $CountryName;
    /**
     * The Residential
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this address residential (as opposed to commercial).
     * - minOccurs: 0
     * @var bool
     */
    public $Residential;
    /**
     * Constructor method for Address
     * @uses Address::setStreetLines()
     * @uses Address::setCity()
     * @uses Address::setStateOrProvinceCode()
     * @uses Address::setPostalCode()
     * @uses Address::setUrbanizationCode()
     * @uses Address::setCountryCode()
     * @uses Address::setCountryName()
     * @uses Address::setResidential()
     * @param string[] $streetLines
     * @param string $city
     * @param string $stateOrProvinceCode
     * @param string $postalCode
     * @param string $urbanizationCode
     * @param string $countryCode
     * @param string $countryName
     * @param bool $residential
     */
    public function __construct(array $streetLines = array(), $city = null, $stateOrProvinceCode = null, $postalCode = null, $urbanizationCode = null, $countryCode = null, $countryName = null, $residential = null)
    {
        $this
            ->setStreetLines($streetLines)
            ->setCity($city)
            ->setStateOrProvinceCode($stateOrProvinceCode)
            ->setPostalCode($postalCode)
            ->setUrbanizationCode($urbanizationCode)
            ->setCountryCode($countryCode)
            ->setCountryName($countryName)
            ->setResidential($residential);
    }
    /**
     * Get StreetLines value
     * @return string[]|null
     */
    public function getStreetLines()
    {
        return $this->StreetLines;
    }
    /**
     * Set StreetLines value
     * @throws \InvalidArgumentException
     * @param string[] $streetLines
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public function setStreetLines(array $streetLines = array())
    {
        foreach ($streetLines as $addressStreetLinesItem) {
            // validation for constraint: itemType
            if (!is_string($addressStreetLinesItem)) {
                throw new \InvalidArgumentException(sprintf('The StreetLines property can only contain items of string, "%s" given', is_object($addressStreetLinesItem) ? get_class($addressStreetLinesItem) : gettype($addressStreetLinesItem)), __LINE__);
            }
        }
        $this->StreetLines = $streetLines;
        return $this;
    }
    /**
     * Add item to StreetLines value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public function addToStreetLines($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The StreetLines property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StreetLines[] = $item;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address
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
     * Get UrbanizationCode value
     * @return string|null
     */
    public function getUrbanizationCode()
    {
        return $this->UrbanizationCode;
    }
    /**
     * Set UrbanizationCode value
     * @param string $urbanizationCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public function setUrbanizationCode($urbanizationCode = null)
    {
        // validation for constraint: string
        if (!is_null($urbanizationCode) && !is_string($urbanizationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($urbanizationCode)), __LINE__);
        }
        $this->UrbanizationCode = $urbanizationCode;
        return $this;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address
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
     * Get CountryName value
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param string $countryName
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public function setCountryName($countryName = null)
    {
        // validation for constraint: string
        if (!is_null($countryName) && !is_string($countryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryName)), __LINE__);
        }
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get Residential value
     * @return bool|null
     */
    public function getResidential()
    {
        return $this->Residential;
    }
    /**
     * Set Residential value
     * @param bool $residential
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address
     */
    public function setResidential($residential = null)
    {
        $this->Residential = $residential;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\Address
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
