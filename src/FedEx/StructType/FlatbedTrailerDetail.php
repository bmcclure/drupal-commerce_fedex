<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlatbedTrailerDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 * @subpackage Structs
 */
class FlatbedTrailerDetail extends AbstractStructBase
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Options;
    /**
     * Constructor method for FlatbedTrailerDetail
     * @uses FlatbedTrailerDetail::setOptions()
     * @param string[] $options
     */
    public function __construct(array $options = array())
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return string[]|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FlatbedTrailerOption::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FlatbedTrailerOption::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $options
     * @return \Drupal\commerce_fedex\FedEx\StructType\FlatbedTrailerDetail
     */
    public function setOptions(array $options = array())
    {
        $invalidValues = array();
        foreach ($options as $flatbedTrailerDetailOptionsItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\FlatbedTrailerOption::valueIsValid($flatbedTrailerDetailOptionsItem)) {
                $invalidValues[] = var_export($flatbedTrailerDetailOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\FlatbedTrailerOption::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Add item to Options value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FlatbedTrailerOption::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FlatbedTrailerOption::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\FlatbedTrailerDetail
     */
    public function addToOptions($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\FlatbedTrailerOption::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\FlatbedTrailerOption::getValidValues())), __LINE__);
        }
        $this->Options[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\FlatbedTrailerDetail
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
