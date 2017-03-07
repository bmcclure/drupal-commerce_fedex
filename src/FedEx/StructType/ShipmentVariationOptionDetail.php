<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentVariationOptionDetail StructType
 * @subpackage Structs
 */
class ShipmentVariationOptionDetail extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the name or the key for the shipment variation.
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - documentation: The values that are valid for the specified shipment variation in the context of the current shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Values;
    /**
     * Constructor method for ShipmentVariationOptionDetail
     * @uses ShipmentVariationOptionDetail::setId()
     * @uses ShipmentVariationOptionDetail::setValues()
     * @param string $id
     * @param string[] $values
     */
    public function __construct($id = null, array $values = array())
    {
        $this
            ->setId($id)
            ->setValues($values);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail
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
     * Get Values value
     * @return string[]|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @throws \InvalidArgumentException
     * @param string[] $values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail
     */
    public function setValues(array $values = array())
    {
        foreach ($values as $shipmentVariationOptionDetailValuesItem) {
            // validation for constraint: itemType
            if (!is_string($shipmentVariationOptionDetailValuesItem)) {
                throw new \InvalidArgumentException(sprintf('The Values property can only contain items of string, "%s" given', is_object($shipmentVariationOptionDetailValuesItem) ? get_class($shipmentVariationOptionDetailValuesItem) : gettype($shipmentVariationOptionDetailValuesItem)), __LINE__);
            }
        }
        $this->Values = $values;
        return $this;
    }
    /**
     * Add item to Values value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail
     */
    public function addToValues($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Values property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Values[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentVariationOptionDetail
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
