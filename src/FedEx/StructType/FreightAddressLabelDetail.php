<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightAddressLabelDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce the Freight handling-unit-level address labels. Note that the number of UNIQUE labels (the N as in 1 of N, 2 of N, etc.) is determined by total handling units.
 * @subpackage Structs
 */
class FreightAddressLabelDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The Copies
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of copies to be produced for each unique label.
     * - minOccurs: 0
     * @var int
     */
    public $Copies;
    /**
     * The StartingPosition
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the quadrant of the page on which the label printing will start.
     * - minOccurs: 0
     * @var string
     */
    public $StartingPosition;
    /**
     * The DocTabContent
     * Meta informations extracted from the WSDL
     * - documentation: If omitted, no doc tab will be produced (i.e. default = former NONE type).
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DocTabContent
     */
    public $DocTabContent;
    /**
     * The CustomContentPosition
     * Meta informations extracted from the WSDL
     * - documentation: Controls the position of the customer specified content relative to the FedEx portion.
     * - minOccurs: 0
     * @var string
     */
    public $CustomContentPosition;
    /**
     * The CustomContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomLabelDetail
     */
    public $CustomContent;
    /**
     * Constructor method for FreightAddressLabelDetail
     * @uses FreightAddressLabelDetail::setFormat()
     * @uses FreightAddressLabelDetail::setCopies()
     * @uses FreightAddressLabelDetail::setStartingPosition()
     * @uses FreightAddressLabelDetail::setDocTabContent()
     * @uses FreightAddressLabelDetail::setCustomContentPosition()
     * @uses FreightAddressLabelDetail::setCustomContent()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format
     * @param int $copies
     * @param string $startingPosition
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocTabContent $docTabContent
     * @param string $customContentPosition
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomLabelDetail $customContent
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null, $copies = null, $startingPosition = null, \Drupal\commerce_fedex\FedEx\StructType\DocTabContent $docTabContent = null, $customContentPosition = null, \Drupal\commerce_fedex\FedEx\StructType\CustomLabelDetail $customContent = null)
    {
        $this
            ->setFormat($format)
            ->setCopies($copies)
            ->setStartingPosition($startingPosition)
            ->setDocTabContent($docTabContent)
            ->setCustomContentPosition($customContentPosition)
            ->setCustomContent($customContent);
    }
    /**
     * Get Format value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightAddressLabelDetail
     */
    public function setFormat(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get Copies value
     * @return int|null
     */
    public function getCopies()
    {
        return $this->Copies;
    }
    /**
     * Set Copies value
     * @param int $copies
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightAddressLabelDetail
     */
    public function setCopies($copies = null)
    {
        // validation for constraint: int
        if (!is_null($copies) && !is_numeric($copies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($copies)), __LINE__);
        }
        $this->Copies = $copies;
        return $this;
    }
    /**
     * Get StartingPosition value
     * @return string|null
     */
    public function getStartingPosition()
    {
        return $this->StartingPosition;
    }
    /**
     * Set StartingPosition value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PageQuadrantType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PageQuadrantType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $startingPosition
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightAddressLabelDetail
     */
    public function setStartingPosition($startingPosition = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\PageQuadrantType::valueIsValid($startingPosition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $startingPosition, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\PageQuadrantType::getValidValues())), __LINE__);
        }
        $this->StartingPosition = $startingPosition;
        return $this;
    }
    /**
     * Get DocTabContent value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContent|null
     */
    public function getDocTabContent()
    {
        return $this->DocTabContent;
    }
    /**
     * Set DocTabContent value
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocTabContent $docTabContent
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightAddressLabelDetail
     */
    public function setDocTabContent(\Drupal\commerce_fedex\FedEx\StructType\DocTabContent $docTabContent = null)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    /**
     * Get CustomContentPosition value
     * @return string|null
     */
    public function getCustomContentPosition()
    {
        return $this->CustomContentPosition;
    }
    /**
     * Set CustomContentPosition value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RelativeVerticalPositionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RelativeVerticalPositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customContentPosition
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightAddressLabelDetail
     */
    public function setCustomContentPosition($customContentPosition = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\RelativeVerticalPositionType::valueIsValid($customContentPosition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customContentPosition, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\RelativeVerticalPositionType::getValidValues())), __LINE__);
        }
        $this->CustomContentPosition = $customContentPosition;
        return $this;
    }
    /**
     * Get CustomContent value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelDetail|null
     */
    public function getCustomContent()
    {
        return $this->CustomContent;
    }
    /**
     * Set CustomContent value
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomLabelDetail $customContent
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightAddressLabelDetail
     */
    public function setCustomContent(\Drupal\commerce_fedex\FedEx\StructType\CustomLabelDetail $customContent = null)
    {
        $this->CustomContent = $customContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightAddressLabelDetail
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
