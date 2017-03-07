<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelSpecification StructType
 * @subpackage Structs
 */
class LabelSpecification extends AbstractStructBase
{
    /**
     * The LabelFormatType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelFormatType;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ImageType;
    /**
     * The LabelStockType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelStockType;
    /**
     * The LabelPrintingOrientation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelPrintingOrientation;
    /**
     * The LabelRotation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelRotation;
    /**
     * The LabelOrder
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the order in which the labels are requested to be returned
     * - minOccurs: 0
     * @var string
     */
    public $LabelOrder;
    /**
     * The PrintedLabelOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress
     */
    public $PrintedLabelOrigin;
    /**
     * The CustomerSpecifiedDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomerSpecifiedLabelDetail
     */
    public $CustomerSpecifiedDetail;
    /**
     * Constructor method for LabelSpecification
     * @uses LabelSpecification::setLabelFormatType()
     * @uses LabelSpecification::setImageType()
     * @uses LabelSpecification::setLabelStockType()
     * @uses LabelSpecification::setLabelPrintingOrientation()
     * @uses LabelSpecification::setLabelRotation()
     * @uses LabelSpecification::setLabelOrder()
     * @uses LabelSpecification::setPrintedLabelOrigin()
     * @uses LabelSpecification::setCustomerSpecifiedDetail()
     * @param string $labelFormatType
     * @param string $imageType
     * @param string $labelStockType
     * @param string $labelPrintingOrientation
     * @param string $labelRotation
     * @param string $labelOrder
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $printedLabelOrigin
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerSpecifiedLabelDetail $customerSpecifiedDetail
     */
    public function __construct($labelFormatType = null, $imageType = null, $labelStockType = null, $labelPrintingOrientation = null, $labelRotation = null, $labelOrder = null, \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $printedLabelOrigin = null, \Drupal\commerce_fedex\FedEx\StructType\CustomerSpecifiedLabelDetail $customerSpecifiedDetail = null)
    {
        $this
            ->setLabelFormatType($labelFormatType)
            ->setImageType($imageType)
            ->setLabelStockType($labelStockType)
            ->setLabelPrintingOrientation($labelPrintingOrientation)
            ->setLabelRotation($labelRotation)
            ->setLabelOrder($labelOrder)
            ->setPrintedLabelOrigin($printedLabelOrigin)
            ->setCustomerSpecifiedDetail($customerSpecifiedDetail);
    }
    /**
     * Get LabelFormatType value
     * @return string|null
     */
    public function getLabelFormatType()
    {
        return $this->LabelFormatType;
    }
    /**
     * Set LabelFormatType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LabelFormatType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LabelFormatType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelFormatType
     * @return \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification
     */
    public function setLabelFormatType($labelFormatType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\LabelFormatType::valueIsValid($labelFormatType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelFormatType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\LabelFormatType::getValidValues())), __LINE__);
        }
        $this->LabelFormatType = $labelFormatType;
        return $this;
    }
    /**
     * Get ImageType value
     * @return string|null
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    /**
     * Set ImageType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentImageType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $imageType
     * @return \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification
     */
    public function setImageType($imageType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentImageType::valueIsValid($imageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $imageType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentImageType::getValidValues())), __LINE__);
        }
        $this->ImageType = $imageType;
        return $this;
    }
    /**
     * Get LabelStockType value
     * @return string|null
     */
    public function getLabelStockType()
    {
        return $this->LabelStockType;
    }
    /**
     * Set LabelStockType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LabelStockType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LabelStockType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelStockType
     * @return \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification
     */
    public function setLabelStockType($labelStockType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\LabelStockType::valueIsValid($labelStockType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelStockType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\LabelStockType::getValidValues())), __LINE__);
        }
        $this->LabelStockType = $labelStockType;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification
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
     * Get LabelOrder value
     * @return string|null
     */
    public function getLabelOrder()
    {
        return $this->LabelOrder;
    }
    /**
     * Set LabelOrder value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LabelOrderType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\LabelOrderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelOrder
     * @return \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification
     */
    public function setLabelOrder($labelOrder = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\LabelOrderType::valueIsValid($labelOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelOrder, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\LabelOrderType::getValidValues())), __LINE__);
        }
        $this->LabelOrder = $labelOrder;
        return $this;
    }
    /**
     * Get PrintedLabelOrigin value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress|null
     */
    public function getPrintedLabelOrigin()
    {
        return $this->PrintedLabelOrigin;
    }
    /**
     * Set PrintedLabelOrigin value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $printedLabelOrigin
     * @return \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification
     */
    public function setPrintedLabelOrigin(\Drupal\commerce_fedex\FedEx\StructType\ContactAndAddress $printedLabelOrigin = null)
    {
        $this->PrintedLabelOrigin = $printedLabelOrigin;
        return $this;
    }
    /**
     * Get CustomerSpecifiedDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerSpecifiedLabelDetail|null
     */
    public function getCustomerSpecifiedDetail()
    {
        return $this->CustomerSpecifiedDetail;
    }
    /**
     * Set CustomerSpecifiedDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerSpecifiedLabelDetail $customerSpecifiedDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification
     */
    public function setCustomerSpecifiedDetail(\Drupal\commerce_fedex\FedEx\StructType\CustomerSpecifiedLabelDetail $customerSpecifiedDetail = null)
    {
        $this->CustomerSpecifiedDetail = $customerSpecifiedDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\LabelSpecification
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
