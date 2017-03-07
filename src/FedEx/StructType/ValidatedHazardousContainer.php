<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatedHazardousContainer StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the concept of a container used to package dangerous goods commodities.
 * @subpackage Structs
 */
class ValidatedHazardousContainer extends AbstractStructBase
{
    /**
     * The QValue
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that the quantity of the dangerous goods packaged is permissible for shipping. This is used to ensure that the dangerous goods commodities do not exceed the net quantity per package restrictions.
     * - minOccurs: 0
     * @var float
     */
    public $QValue;
    /**
     * The HazardousCommodities
     * Meta informations extracted from the WSDL
     * - documentation: Documents the kinds and quantities of all hazardous commodities in the current package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent[]
     */
    public $HazardousCommodities;
    /**
     * Constructor method for ValidatedHazardousContainer
     * @uses ValidatedHazardousContainer::setQValue()
     * @uses ValidatedHazardousContainer::setHazardousCommodities()
     * @param float $qValue
     * @param \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent[] $hazardousCommodities
     */
    public function __construct($qValue = null, array $hazardousCommodities = array())
    {
        $this
            ->setQValue($qValue)
            ->setHazardousCommodities($hazardousCommodities);
    }
    /**
     * Get QValue value
     * @return float|null
     */
    public function getQValue()
    {
        return $this->QValue;
    }
    /**
     * Set QValue value
     * @param float $qValue
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousContainer
     */
    public function setQValue($qValue = null)
    {
        $this->QValue = $qValue;
        return $this;
    }
    /**
     * Get HazardousCommodities value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent[]|null
     */
    public function getHazardousCommodities()
    {
        return $this->HazardousCommodities;
    }
    /**
     * Set HazardousCommodities value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent[] $hazardousCommodities
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousContainer
     */
    public function setHazardousCommodities(array $hazardousCommodities = array())
    {
        foreach ($hazardousCommodities as $validatedHazardousContainerHazardousCommoditiesItem) {
            // validation for constraint: itemType
            if (!$validatedHazardousContainerHazardousCommoditiesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent) {
                throw new \InvalidArgumentException(sprintf('The HazardousCommodities property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent, "%s" given', is_object($validatedHazardousContainerHazardousCommoditiesItem) ? get_class($validatedHazardousContainerHazardousCommoditiesItem) : gettype($validatedHazardousContainerHazardousCommoditiesItem)), __LINE__);
            }
        }
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    /**
     * Add item to HazardousCommodities value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousContainer
     */
    public function addToHazardousCommodities(\Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent) {
            throw new \InvalidArgumentException(sprintf('The HazardousCommodities property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousContainer
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
