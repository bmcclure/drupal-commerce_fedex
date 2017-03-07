<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DangerousGoodsContainer StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes an approved container used to package dangerous goods commodities. This does not describe any individual inner receptacles that may be within this container.
 * @subpackage Structs
 */
class DangerousGoodsContainer extends AbstractStructBase
{
    /**
     * The PackingType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether there are additional inner receptacles within this container.
     * - minOccurs: 0
     * @var string
     */
    public $PackingType;
    /**
     * The ContainerType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of this dangerous goods container, as specified by the IATA packing instructions. For example, steel cylinder, fiberboard box, plastic jerrican and steel drum.
     * - minOccurs: 0
     * @var string
     */
    public $ContainerType;
    /**
     * The RadioactiveContainerClass
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the packaging type of the container used to package the radioactive materials.
     * - minOccurs: 0
     * @var string
     */
    public $RadioactiveContainerClass;
    /**
     * The NumberOfContainers
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of occurrences of this container with identical dangerous goods configuration.
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfContainers;
    /**
     * The HazardousCommodities
     * Meta informations extracted from the WSDL
     * - documentation: Documents the kinds and quantities of all hazardous commodities in the current container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent[]
     */
    public $HazardousCommodities;
    /**
     * Constructor method for DangerousGoodsContainer
     * @uses DangerousGoodsContainer::setPackingType()
     * @uses DangerousGoodsContainer::setContainerType()
     * @uses DangerousGoodsContainer::setRadioactiveContainerClass()
     * @uses DangerousGoodsContainer::setNumberOfContainers()
     * @uses DangerousGoodsContainer::setHazardousCommodities()
     * @param string $packingType
     * @param string $containerType
     * @param string $radioactiveContainerClass
     * @param int $numberOfContainers
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent[] $hazardousCommodities
     */
    public function __construct($packingType = null, $containerType = null, $radioactiveContainerClass = null, $numberOfContainers = null, array $hazardousCommodities = array())
    {
        $this
            ->setPackingType($packingType)
            ->setContainerType($containerType)
            ->setRadioactiveContainerClass($radioactiveContainerClass)
            ->setNumberOfContainers($numberOfContainers)
            ->setHazardousCommodities($hazardousCommodities);
    }
    /**
     * Get PackingType value
     * @return string|null
     */
    public function getPackingType()
    {
        return $this->PackingType;
    }
    /**
     * Set PackingType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HazardousContainerPackingType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\HazardousContainerPackingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packingType
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsContainer
     */
    public function setPackingType($packingType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\HazardousContainerPackingType::valueIsValid($packingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packingType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\HazardousContainerPackingType::getValidValues())), __LINE__);
        }
        $this->PackingType = $packingType;
        return $this;
    }
    /**
     * Get ContainerType value
     * @return string|null
     */
    public function getContainerType()
    {
        return $this->ContainerType;
    }
    /**
     * Set ContainerType value
     * @param string $containerType
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsContainer
     */
    public function setContainerType($containerType = null)
    {
        // validation for constraint: string
        if (!is_null($containerType) && !is_string($containerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($containerType)), __LINE__);
        }
        $this->ContainerType = $containerType;
        return $this;
    }
    /**
     * Get RadioactiveContainerClass value
     * @return string|null
     */
    public function getRadioactiveContainerClass()
    {
        return $this->RadioactiveContainerClass;
    }
    /**
     * Set RadioactiveContainerClass value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RadioactiveContainerClassType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RadioactiveContainerClassType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $radioactiveContainerClass
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsContainer
     */
    public function setRadioactiveContainerClass($radioactiveContainerClass = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\RadioactiveContainerClassType::valueIsValid($radioactiveContainerClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $radioactiveContainerClass, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\RadioactiveContainerClassType::getValidValues())), __LINE__);
        }
        $this->RadioactiveContainerClass = $radioactiveContainerClass;
        return $this;
    }
    /**
     * Get NumberOfContainers value
     * @return int|null
     */
    public function getNumberOfContainers()
    {
        return $this->NumberOfContainers;
    }
    /**
     * Set NumberOfContainers value
     * @param int $numberOfContainers
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsContainer
     */
    public function setNumberOfContainers($numberOfContainers = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfContainers) && !is_numeric($numberOfContainers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfContainers)), __LINE__);
        }
        $this->NumberOfContainers = $numberOfContainers;
        return $this;
    }
    /**
     * Get HazardousCommodities value
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent[]|null
     */
    public function getHazardousCommodities()
    {
        return $this->HazardousCommodities;
    }
    /**
     * Set HazardousCommodities value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent[] $hazardousCommodities
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsContainer
     */
    public function setHazardousCommodities(array $hazardousCommodities = array())
    {
        foreach ($hazardousCommodities as $dangerousGoodsContainerHazardousCommoditiesItem) {
            // validation for constraint: itemType
            if (!$dangerousGoodsContainerHazardousCommoditiesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent) {
                throw new \InvalidArgumentException(sprintf('The HazardousCommodities property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent, "%s" given', is_object($dangerousGoodsContainerHazardousCommoditiesItem) ? get_class($dangerousGoodsContainerHazardousCommoditiesItem) : gettype($dangerousGoodsContainerHazardousCommoditiesItem)), __LINE__);
            }
        }
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    /**
     * Add item to HazardousCommodities value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsContainer
     */
    public function addToHazardousCommodities(\Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent) {
            throw new \InvalidArgumentException(sprintf('The HazardousCommodities property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HazardousCommodities[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsContainer
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
