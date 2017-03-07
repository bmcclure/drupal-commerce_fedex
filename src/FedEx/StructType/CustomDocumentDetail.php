<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomDocumentDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce a custom-specified document, either at shipment or package level.
 * @subpackage Structs
 */
class CustomDocumentDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - documentation: Common information controlling document production.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The LabelPrintingOrientation
     * Meta informations extracted from the WSDL
     * - documentation: Applicable only to documents produced on thermal printers with roll stock.
     * - minOccurs: 0
     * @var string
     */
    public $LabelPrintingOrientation;
    /**
     * The LabelRotation
     * Meta informations extracted from the WSDL
     * - documentation: Applicable only to documents produced on thermal printers with roll stock.
     * - minOccurs: 0
     * @var string
     */
    public $LabelRotation;
    /**
     * The SpecificationId
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the formatting specification used to construct this custom document.
     * - minOccurs: 0
     * @var string
     */
    public $SpecificationId;
    /**
     * The CustomContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomLabelDetail
     */
    public $CustomContent;
    /**
     * Constructor method for CustomDocumentDetail
     * @uses CustomDocumentDetail::setFormat()
     * @uses CustomDocumentDetail::setLabelPrintingOrientation()
     * @uses CustomDocumentDetail::setLabelRotation()
     * @uses CustomDocumentDetail::setSpecificationId()
     * @uses CustomDocumentDetail::setCustomContent()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format
     * @param string $labelPrintingOrientation
     * @param string $labelRotation
     * @param string $specificationId
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomLabelDetail $customContent
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null, $labelPrintingOrientation = null, $labelRotation = null, $specificationId = null, \Drupal\commerce_fedex\FedEx\StructType\CustomLabelDetail $customContent = null)
    {
        $this
            ->setFormat($format)
            ->setLabelPrintingOrientation($labelPrintingOrientation)
            ->setLabelRotation($labelRotation)
            ->setSpecificationId($specificationId)
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDocumentDetail
     */
    public function setFormat(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get LabelPrintingOrientation value
     * @return string|null
     */
    public function getLabelPrintingOrientation()
    {
        return $this->LabelPrintingOrientation;
    }
    /**
     * Set LabelPrintingOrientation value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LabelPrintingOrientationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LabelPrintingOrientationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelPrintingOrientation
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDocumentDetail
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\LabelPrintingOrientationType::valueIsValid($labelPrintingOrientation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelPrintingOrientation, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\LabelPrintingOrientationType::getValidValues())), __LINE__);
        }
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    /**
     * Get LabelRotation value
     * @return string|null
     */
    public function getLabelRotation()
    {
        return $this->LabelRotation;
    }
    /**
     * Set LabelRotation value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LabelRotationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LabelRotationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelRotation
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDocumentDetail
     */
    public function setLabelRotation($labelRotation = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\LabelRotationType::valueIsValid($labelRotation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelRotation, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\LabelRotationType::getValidValues())), __LINE__);
        }
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    /**
     * Get SpecificationId value
     * @return string|null
     */
    public function getSpecificationId()
    {
        return $this->SpecificationId;
    }
    /**
     * Set SpecificationId value
     * @param string $specificationId
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDocumentDetail
     */
    public function setSpecificationId($specificationId = null)
    {
        // validation for constraint: string
        if (!is_null($specificationId) && !is_string($specificationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specificationId)), __LINE__);
        }
        $this->SpecificationId = $specificationId;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDocumentDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDocumentDetail
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
