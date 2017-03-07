<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatedHazardousCommodityDescription StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
 * @subpackage Structs
 */
class ValidatedHazardousCommodityDescription extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Regulatory identifier for a commodity (e.g. "UN ID" value).
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The PackingGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackingGroup;
    /**
     * The PackingInstructions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackingInstructions;
    /**
     * The ProperShippingName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProperShippingName;
    /**
     * The ProperShippingNameAndDescription
     * Meta informations extracted from the WSDL
     * - documentation: Fully-expanded descriptive text for a hazardous commodity.
     * - minOccurs: 0
     * @var string
     */
    public $ProperShippingNameAndDescription;
    /**
     * The TechnicalName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TechnicalName;
    /**
     * The HazardClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HazardClass;
    /**
     * The SubsidiaryClasses
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SubsidiaryClasses;
    /**
     * The Symbols
     * Meta informations extracted from the WSDL
     * - documentation: Coded indications for special requirements or constraints.
     * - minOccurs: 0
     * @var string
     */
    public $Symbols;
    /**
     * The TunnelRestrictionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TunnelRestrictionCode;
    /**
     * The SpecialProvisions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SpecialProvisions;
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Attributes;
    /**
     * The Authorization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Authorization;
    /**
     * The LabelText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelText;
    /**
     * Constructor method for ValidatedHazardousCommodityDescription
     * @uses ValidatedHazardousCommodityDescription::setId()
     * @uses ValidatedHazardousCommodityDescription::setSequenceNumber()
     * @uses ValidatedHazardousCommodityDescription::setPackingGroup()
     * @uses ValidatedHazardousCommodityDescription::setPackingInstructions()
     * @uses ValidatedHazardousCommodityDescription::setProperShippingName()
     * @uses ValidatedHazardousCommodityDescription::setProperShippingNameAndDescription()
     * @uses ValidatedHazardousCommodityDescription::setTechnicalName()
     * @uses ValidatedHazardousCommodityDescription::setHazardClass()
     * @uses ValidatedHazardousCommodityDescription::setSubsidiaryClasses()
     * @uses ValidatedHazardousCommodityDescription::setSymbols()
     * @uses ValidatedHazardousCommodityDescription::setTunnelRestrictionCode()
     * @uses ValidatedHazardousCommodityDescription::setSpecialProvisions()
     * @uses ValidatedHazardousCommodityDescription::setAttributes()
     * @uses ValidatedHazardousCommodityDescription::setAuthorization()
     * @uses ValidatedHazardousCommodityDescription::setLabelText()
     * @param string $id
     * @param int $sequenceNumber
     * @param string $packingGroup
     * @param string $packingInstructions
     * @param string $properShippingName
     * @param string $properShippingNameAndDescription
     * @param string $technicalName
     * @param string $hazardClass
     * @param string[] $subsidiaryClasses
     * @param string $symbols
     * @param string $tunnelRestrictionCode
     * @param string $specialProvisions
     * @param string[] $attributes
     * @param string $authorization
     * @param string $labelText
     */
    public function __construct($id = null, $sequenceNumber = null, $packingGroup = null, $packingInstructions = null, $properShippingName = null, $properShippingNameAndDescription = null, $technicalName = null, $hazardClass = null, array $subsidiaryClasses = array(), $symbols = null, $tunnelRestrictionCode = null, $specialProvisions = null, array $attributes = array(), $authorization = null, $labelText = null)
    {
        $this
            ->setId($id)
            ->setSequenceNumber($sequenceNumber)
            ->setPackingGroup($packingGroup)
            ->setPackingInstructions($packingInstructions)
            ->setProperShippingName($properShippingName)
            ->setProperShippingNameAndDescription($properShippingNameAndDescription)
            ->setTechnicalName($technicalName)
            ->setHazardClass($hazardClass)
            ->setSubsidiaryClasses($subsidiaryClasses)
            ->setSymbols($symbols)
            ->setTunnelRestrictionCode($tunnelRestrictionCode)
            ->setSpecialProvisions($specialProvisions)
            ->setAttributes($attributes)
            ->setAuthorization($authorization)
            ->setLabelText($labelText);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get PackingGroup value
     * @return string|null
     */
    public function getPackingGroup()
    {
        return $this->PackingGroup;
    }
    /**
     * Set PackingGroup value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityPackingGroupType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityPackingGroupType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packingGroup
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setPackingGroup($packingGroup = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityPackingGroupType::valueIsValid($packingGroup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packingGroup, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityPackingGroupType::getValidValues())), __LINE__);
        }
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    /**
     * Get PackingInstructions value
     * @return string|null
     */
    public function getPackingInstructions()
    {
        return $this->PackingInstructions;
    }
    /**
     * Set PackingInstructions value
     * @param string $packingInstructions
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setPackingInstructions($packingInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($packingInstructions) && !is_string($packingInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packingInstructions)), __LINE__);
        }
        $this->PackingInstructions = $packingInstructions;
        return $this;
    }
    /**
     * Get ProperShippingName value
     * @return string|null
     */
    public function getProperShippingName()
    {
        return $this->ProperShippingName;
    }
    /**
     * Set ProperShippingName value
     * @param string $properShippingName
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName = null)
    {
        // validation for constraint: string
        if (!is_null($properShippingName) && !is_string($properShippingName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($properShippingName)), __LINE__);
        }
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    /**
     * Get ProperShippingNameAndDescription value
     * @return string|null
     */
    public function getProperShippingNameAndDescription()
    {
        return $this->ProperShippingNameAndDescription;
    }
    /**
     * Set ProperShippingNameAndDescription value
     * @param string $properShippingNameAndDescription
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setProperShippingNameAndDescription($properShippingNameAndDescription = null)
    {
        // validation for constraint: string
        if (!is_null($properShippingNameAndDescription) && !is_string($properShippingNameAndDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($properShippingNameAndDescription)), __LINE__);
        }
        $this->ProperShippingNameAndDescription = $properShippingNameAndDescription;
        return $this;
    }
    /**
     * Get TechnicalName value
     * @return string|null
     */
    public function getTechnicalName()
    {
        return $this->TechnicalName;
    }
    /**
     * Set TechnicalName value
     * @param string $technicalName
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setTechnicalName($technicalName = null)
    {
        // validation for constraint: string
        if (!is_null($technicalName) && !is_string($technicalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($technicalName)), __LINE__);
        }
        $this->TechnicalName = $technicalName;
        return $this;
    }
    /**
     * Get HazardClass value
     * @return string|null
     */
    public function getHazardClass()
    {
        return $this->HazardClass;
    }
    /**
     * Set HazardClass value
     * @param string $hazardClass
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setHazardClass($hazardClass = null)
    {
        // validation for constraint: string
        if (!is_null($hazardClass) && !is_string($hazardClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hazardClass)), __LINE__);
        }
        $this->HazardClass = $hazardClass;
        return $this;
    }
    /**
     * Get SubsidiaryClasses value
     * @return string[]|null
     */
    public function getSubsidiaryClasses()
    {
        return $this->SubsidiaryClasses;
    }
    /**
     * Set SubsidiaryClasses value
     * @throws \InvalidArgumentException
     * @param string[] $subsidiaryClasses
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses = array())
    {
        foreach ($subsidiaryClasses as $validatedHazardousCommodityDescriptionSubsidiaryClassesItem) {
            // validation for constraint: itemType
            if (!is_string($validatedHazardousCommodityDescriptionSubsidiaryClassesItem)) {
                throw new \InvalidArgumentException(sprintf('The SubsidiaryClasses property can only contain items of string, "%s" given', is_object($validatedHazardousCommodityDescriptionSubsidiaryClassesItem) ? get_class($validatedHazardousCommodityDescriptionSubsidiaryClassesItem) : gettype($validatedHazardousCommodityDescriptionSubsidiaryClassesItem)), __LINE__);
            }
        }
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    /**
     * Add item to SubsidiaryClasses value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function addToSubsidiaryClasses($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SubsidiaryClasses property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SubsidiaryClasses[] = $item;
        return $this;
    }
    /**
     * Get Symbols value
     * @return string|null
     */
    public function getSymbols()
    {
        return $this->Symbols;
    }
    /**
     * Set Symbols value
     * @param string $symbols
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setSymbols($symbols = null)
    {
        // validation for constraint: string
        if (!is_null($symbols) && !is_string($symbols)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($symbols)), __LINE__);
        }
        $this->Symbols = $symbols;
        return $this;
    }
    /**
     * Get TunnelRestrictionCode value
     * @return string|null
     */
    public function getTunnelRestrictionCode()
    {
        return $this->TunnelRestrictionCode;
    }
    /**
     * Set TunnelRestrictionCode value
     * @param string $tunnelRestrictionCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setTunnelRestrictionCode($tunnelRestrictionCode = null)
    {
        // validation for constraint: string
        if (!is_null($tunnelRestrictionCode) && !is_string($tunnelRestrictionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tunnelRestrictionCode)), __LINE__);
        }
        $this->TunnelRestrictionCode = $tunnelRestrictionCode;
        return $this;
    }
    /**
     * Get SpecialProvisions value
     * @return string|null
     */
    public function getSpecialProvisions()
    {
        return $this->SpecialProvisions;
    }
    /**
     * Set SpecialProvisions value
     * @param string $specialProvisions
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setSpecialProvisions($specialProvisions = null)
    {
        // validation for constraint: string
        if (!is_null($specialProvisions) && !is_string($specialProvisions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialProvisions)), __LINE__);
        }
        $this->SpecialProvisions = $specialProvisions;
        return $this;
    }
    /**
     * Get Attributes value
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityAttributeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $attributes
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setAttributes(array $attributes = array())
    {
        $invalidValues = array();
        foreach ($attributes as $validatedHazardousCommodityDescriptionAttributesItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityAttributeType::valueIsValid($validatedHazardousCommodityDescriptionAttributesItem)) {
                $invalidValues[] = var_export($validatedHazardousCommodityDescriptionAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Add item to Attributes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityAttributeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function addToAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityAttributeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\HazardousCommodityAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes[] = $item;
        return $this;
    }
    /**
     * Get Authorization value
     * @return string|null
     */
    public function getAuthorization()
    {
        return $this->Authorization;
    }
    /**
     * Set Authorization value
     * @param string $authorization
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setAuthorization($authorization = null)
    {
        // validation for constraint: string
        if (!is_null($authorization) && !is_string($authorization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorization)), __LINE__);
        }
        $this->Authorization = $authorization;
        return $this;
    }
    /**
     * Get LabelText value
     * @return string|null
     */
    public function getLabelText()
    {
        return $this->LabelText;
    }
    /**
     * Set LabelText value
     * @param string $labelText
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public function setLabelText($labelText = null)
    {
        // validation for constraint: string
        if (!is_null($labelText) && !is_string($labelText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($labelText)), __LINE__);
        }
        $this->LabelText = $labelText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
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
