<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentFormat StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies characteristics of a shipping document to be produced.
 * @subpackage Structs
 */
class ShippingDocumentFormat extends AbstractStructBase
{
    /**
     * The Dispositions
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to create, organize, and return the document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentDispositionDetail[]
     */
    public $Dispositions;
    /**
     * The TopOfPageOffset
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how far down the page to move the beginning of the image; allows for printing on letterhead and other pre-printed stock.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\LinearMeasure
     */
    public $TopOfPageOffset;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ImageType;
    /**
     * The StockType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StockType;
    /**
     * The ProvideInstructions
     * Meta informations extracted from the WSDL
     * - documentation: For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     * - minOccurs: 0
     * @var bool
     */
    public $ProvideInstructions;
    /**
     * The OptionsRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DocumentFormatOptionsRequested
     */
    public $OptionsRequested;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Governs the language to be used for this individual document, independently from other content returned for the same shipment.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Localization
     */
    public $Localization;
    /**
     * Constructor method for ShippingDocumentFormat
     * @uses ShippingDocumentFormat::setDispositions()
     * @uses ShippingDocumentFormat::setTopOfPageOffset()
     * @uses ShippingDocumentFormat::setImageType()
     * @uses ShippingDocumentFormat::setStockType()
     * @uses ShippingDocumentFormat::setProvideInstructions()
     * @uses ShippingDocumentFormat::setOptionsRequested()
     * @uses ShippingDocumentFormat::setLocalization()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentDispositionDetail[] $dispositions
     * @param \Drupal\commerce_fedex\FedEx\StructType\LinearMeasure $topOfPageOffset
     * @param string $imageType
     * @param string $stockType
     * @param bool $provideInstructions
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocumentFormatOptionsRequested $optionsRequested
     * @param \Drupal\commerce_fedex\FedEx\StructType\Localization $localization
     */
    public function __construct(array $dispositions = array(), \Drupal\commerce_fedex\FedEx\StructType\LinearMeasure $topOfPageOffset = null, $imageType = null, $stockType = null, $provideInstructions = null, \Drupal\commerce_fedex\FedEx\StructType\DocumentFormatOptionsRequested $optionsRequested = null, \Drupal\commerce_fedex\FedEx\StructType\Localization $localization = null)
    {
        $this
            ->setDispositions($dispositions)
            ->setTopOfPageOffset($topOfPageOffset)
            ->setImageType($imageType)
            ->setStockType($stockType)
            ->setProvideInstructions($provideInstructions)
            ->setOptionsRequested($optionsRequested)
            ->setLocalization($localization);
    }
    /**
     * Get Dispositions value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentDispositionDetail[]|null
     */
    public function getDispositions()
    {
        return $this->Dispositions;
    }
    /**
     * Set Dispositions value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentDispositionDetail[] $dispositions
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public function setDispositions(array $dispositions = array())
    {
        foreach ($dispositions as $shippingDocumentFormatDispositionsItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentFormatDispositionsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentDispositionDetail) {
                throw new \InvalidArgumentException(sprintf('The Dispositions property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentDispositionDetail, "%s" given', is_object($shippingDocumentFormatDispositionsItem) ? get_class($shippingDocumentFormatDispositionsItem) : gettype($shippingDocumentFormatDispositionsItem)), __LINE__);
            }
        }
        $this->Dispositions = $dispositions;
        return $this;
    }
    /**
     * Add item to Dispositions value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentDispositionDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public function addToDispositions(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentDispositionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentDispositionDetail) {
            throw new \InvalidArgumentException(sprintf('The Dispositions property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentDispositionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Dispositions[] = $item;
        return $this;
    }
    /**
     * Get TopOfPageOffset value
     * @return \Drupal\commerce_fedex\FedEx\StructType\LinearMeasure|null
     */
    public function getTopOfPageOffset()
    {
        return $this->TopOfPageOffset;
    }
    /**
     * Set TopOfPageOffset value
     * @param \Drupal\commerce_fedex\FedEx\StructType\LinearMeasure $topOfPageOffset
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public function setTopOfPageOffset(\Drupal\commerce_fedex\FedEx\StructType\LinearMeasure $topOfPageOffset = null)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
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
     * Get StockType value
     * @return string|null
     */
    public function getStockType()
    {
        return $this->StockType;
    }
    /**
     * Set StockType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentStockType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentStockType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $stockType
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public function setStockType($stockType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentStockType::valueIsValid($stockType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $stockType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentStockType::getValidValues())), __LINE__);
        }
        $this->StockType = $stockType;
        return $this;
    }
    /**
     * Get ProvideInstructions value
     * @return bool|null
     */
    public function getProvideInstructions()
    {
        return $this->ProvideInstructions;
    }
    /**
     * Set ProvideInstructions value
     * @param bool $provideInstructions
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public function setProvideInstructions($provideInstructions = null)
    {
        $this->ProvideInstructions = $provideInstructions;
        return $this;
    }
    /**
     * Get OptionsRequested value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocumentFormatOptionsRequested|null
     */
    public function getOptionsRequested()
    {
        return $this->OptionsRequested;
    }
    /**
     * Set OptionsRequested value
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocumentFormatOptionsRequested $optionsRequested
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public function setOptionsRequested(\Drupal\commerce_fedex\FedEx\StructType\DocumentFormatOptionsRequested $optionsRequested = null)
    {
        $this->OptionsRequested = $optionsRequested;
        return $this;
    }
    /**
     * Get Localization value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Localization $localization
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public function setLocalization(\Drupal\commerce_fedex\FedEx\StructType\Localization $localization = null)
    {
        $this->Localization = $localization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
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
