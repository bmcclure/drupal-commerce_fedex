<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentLineItem StructType
 * Meta informations extracted from the WSDL
 * - documentation: Description of an individual commodity or class of content in a shipment.
 * @subpackage Structs
 */
class FreightShipmentLineItem extends AbstractStructBase
{
    /**
     * The FreightClass
     * Meta informations extracted from the WSDL
     * - documentation: Freight class for this line item.
     * - minOccurs: 0
     * @var string
     */
    public $FreightClass;
    /**
     * The Packaging
     * Meta informations extracted from the WSDL
     * - documentation: Specification of handling-unit packaging for this commodity or class line.
     * - minOccurs: 0
     * @var string
     */
    public $Packaging;
    /**
     * The Pieces
     * Meta informations extracted from the WSDL
     * - documentation: Number of pieces for this commodity or class line.
     * - minOccurs: 0
     * @var int
     */
    public $Pieces;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided description for this commodity or class line.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - documentation: Weight for this commodity or class line.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Weight
     */
    public $Weight;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Dimensions
     */
    public $Dimensions;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - documentation: Volume (cubic measure) for this commodity or class line.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Volume
     */
    public $Volume;
    /**
     * Constructor method for FreightShipmentLineItem
     * @uses FreightShipmentLineItem::setFreightClass()
     * @uses FreightShipmentLineItem::setPackaging()
     * @uses FreightShipmentLineItem::setPieces()
     * @uses FreightShipmentLineItem::setDescription()
     * @uses FreightShipmentLineItem::setWeight()
     * @uses FreightShipmentLineItem::setDimensions()
     * @uses FreightShipmentLineItem::setVolume()
     * @param string $freightClass
     * @param string $packaging
     * @param int $pieces
     * @param string $description
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $weight
     * @param \Drupal\commerce_fedex\FedEx\StructType\Dimensions $dimensions
     * @param \Drupal\commerce_fedex\FedEx\StructType\Volume $volume
     */
    public function __construct($freightClass = null, $packaging = null, $pieces = null, $description = null, \Drupal\commerce_fedex\FedEx\StructType\Weight $weight = null, \Drupal\commerce_fedex\FedEx\StructType\Dimensions $dimensions = null, \Drupal\commerce_fedex\FedEx\StructType\Volume $volume = null)
    {
        $this
            ->setFreightClass($freightClass)
            ->setPackaging($packaging)
            ->setPieces($pieces)
            ->setDescription($description)
            ->setWeight($weight)
            ->setDimensions($dimensions)
            ->setVolume($volume);
    }
    /**
     * Get FreightClass value
     * @return string|null
     */
    public function getFreightClass()
    {
        return $this->FreightClass;
    }
    /**
     * Set FreightClass value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FreightClassType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FreightClassType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $freightClass
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentLineItem
     */
    public function setFreightClass($freightClass = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\FreightClassType::valueIsValid($freightClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freightClass, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\FreightClassType::getValidValues())), __LINE__);
        }
        $this->FreightClass = $freightClass;
        return $this;
    }
    /**
     * Get Packaging value
     * @return string|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    /**
     * Set Packaging value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PhysicalPackagingType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PhysicalPackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packaging
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentLineItem
     */
    public function setPackaging($packaging = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\PhysicalPackagingType::valueIsValid($packaging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packaging, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\PhysicalPackagingType::getValidValues())), __LINE__);
        }
        $this->Packaging = $packaging;
        return $this;
    }
    /**
     * Get Pieces value
     * @return int|null
     */
    public function getPieces()
    {
        return $this->Pieces;
    }
    /**
     * Set Pieces value
     * @param int $pieces
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentLineItem
     */
    public function setPieces($pieces = null)
    {
        // validation for constraint: int
        if (!is_null($pieces) && !is_numeric($pieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pieces)), __LINE__);
        }
        $this->Pieces = $pieces;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentLineItem
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
     * Get Weight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $weight
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentLineItem
     */
    public function setWeight(\Drupal\commerce_fedex\FedEx\StructType\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Dimensions $dimensions
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentLineItem
     */
    public function setDimensions(\Drupal\commerce_fedex\FedEx\StructType\Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Volume|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Volume $volume
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentLineItem
     */
    public function setVolume(\Drupal\commerce_fedex\FedEx\StructType\Volume $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightShipmentLineItem
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
