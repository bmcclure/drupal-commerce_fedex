<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dimensions StructType
 * @subpackage Structs
 */
class Dimensions extends AbstractStructBase
{
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Length;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Width;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Height;
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Units;
    /**
     * Constructor method for Dimensions
     * @uses Dimensions::setLength()
     * @uses Dimensions::setWidth()
     * @uses Dimensions::setHeight()
     * @uses Dimensions::setUnits()
     * @param int $length
     * @param int $width
     * @param int $height
     * @param string $units
     */
    public function __construct($length = null, $width = null, $height = null, $units = null)
    {
        $this
            ->setLength($length)
            ->setWidth($width)
            ->setHeight($height)
            ->setUnits($units);
    }
    /**
     * Get Length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param int $length
     * @return \Drupal\commerce_fedex\FedEx\StructType\Dimensions
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !is_numeric($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($length)), __LINE__);
        }
        $this->Length = $length;
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \Drupal\commerce_fedex\FedEx\StructType\Dimensions
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
    /**
     * Get Height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $height
     * @return \Drupal\commerce_fedex\FedEx\StructType\Dimensions
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Units value
     * @return string|null
     */
    public function getUnits()
    {
        return $this->Units;
    }
    /**
     * Set Units value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LinearUnits::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LinearUnits::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $units
     * @return \Drupal\commerce_fedex\FedEx\StructType\Dimensions
     */
    public function setUnits($units = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\LinearUnits::valueIsValid($units)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $units, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\LinearUnits::getValidValues())), __LINE__);
        }
        $this->Units = $units;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\Dimensions
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
