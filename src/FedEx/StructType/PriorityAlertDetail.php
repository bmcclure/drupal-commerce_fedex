<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriorityAlertDetail StructType
 * @subpackage Structs
 */
class PriorityAlertDetail extends AbstractStructBase
{
    /**
     * The EnhancementTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $EnhancementTypes;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Content;
    /**
     * Constructor method for PriorityAlertDetail
     * @uses PriorityAlertDetail::setEnhancementTypes()
     * @uses PriorityAlertDetail::setContent()
     * @param string[] $enhancementTypes
     * @param string[] $content
     */
    public function __construct(array $enhancementTypes = array(), array $content = array())
    {
        $this
            ->setEnhancementTypes($enhancementTypes)
            ->setContent($content);
    }
    /**
     * Get EnhancementTypes value
     * @return string[]|null
     */
    public function getEnhancementTypes()
    {
        return $this->EnhancementTypes;
    }
    /**
     * Set EnhancementTypes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PriorityAlertEnhancementType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PriorityAlertEnhancementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $enhancementTypes
     * @return \Drupal\commerce_fedex\FedEx\StructType\PriorityAlertDetail
     */
    public function setEnhancementTypes(array $enhancementTypes = array())
    {
        $invalidValues = array();
        foreach ($enhancementTypes as $priorityAlertDetailEnhancementTypesItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\PriorityAlertEnhancementType::valueIsValid($priorityAlertDetailEnhancementTypesItem)) {
                $invalidValues[] = var_export($priorityAlertDetailEnhancementTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\PriorityAlertEnhancementType::getValidValues())), __LINE__);
        }
        $this->EnhancementTypes = $enhancementTypes;
        return $this;
    }
    /**
     * Add item to EnhancementTypes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PriorityAlertEnhancementType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PriorityAlertEnhancementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\PriorityAlertDetail
     */
    public function addToEnhancementTypes($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\PriorityAlertEnhancementType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\PriorityAlertEnhancementType::getValidValues())), __LINE__);
        }
        $this->EnhancementTypes[] = $item;
        return $this;
    }
    /**
     * Get Content value
     * @return string[]|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @throws \InvalidArgumentException
     * @param string[] $content
     * @return \Drupal\commerce_fedex\FedEx\StructType\PriorityAlertDetail
     */
    public function setContent(array $content = array())
    {
        foreach ($content as $priorityAlertDetailContentItem) {
            // validation for constraint: itemType
            if (!is_string($priorityAlertDetailContentItem)) {
                throw new \InvalidArgumentException(sprintf('The Content property can only contain items of string, "%s" given', is_object($priorityAlertDetailContentItem) ? get_class($priorityAlertDetailContentItem) : gettype($priorityAlertDetailContentItem)), __LINE__);
            }
        }
        $this->Content = $content;
        return $this;
    }
    /**
     * Add item to Content value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\PriorityAlertDetail
     */
    public function addToContent($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Content property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Content[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\PriorityAlertDetail
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
