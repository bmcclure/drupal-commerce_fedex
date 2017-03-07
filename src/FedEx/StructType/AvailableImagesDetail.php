<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableImagesDetail StructType
 * @subpackage Structs
 */
class AvailableImagesDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Size;
    /**
     * Constructor method for AvailableImagesDetail
     * @uses AvailableImagesDetail::setType()
     * @uses AvailableImagesDetail::setSize()
     * @param string $type
     * @param string $size
     */
    public function __construct($type = null, $size = null)
    {
        $this
            ->setType($type)
            ->setSize($size);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\AvailableImageType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\AvailableImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\AvailableImageType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\AvailableImageType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Size value
     * @return string|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ImageSizeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ImageSizeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $size
     * @return \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail
     */
    public function setSize($size = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ImageSizeType::valueIsValid($size)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $size, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ImageSizeType::getValidValues())), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\AvailableImagesDetail
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
