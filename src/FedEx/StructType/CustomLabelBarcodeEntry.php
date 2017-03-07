<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelBarcodeEntry StructType
 * Meta informations extracted from the WSDL
 * - documentation: Constructed string, based on format and zero or more data fields, printed in specified barcode symbology.
 * @subpackage Structs
 */
class CustomLabelBarcodeEntry extends AbstractStructBase
{
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomLabelPosition
     */
    public $Position;
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Format;
    /**
     * The DataFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DataFields;
    /**
     * The BarHeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BarHeight;
    /**
     * The ThinBarWidth
     * Meta informations extracted from the WSDL
     * - documentation: Width of thinnest bar/space element in the barcode.
     * - minOccurs: 0
     * @var int
     */
    public $ThinBarWidth;
    /**
     * The BarcodeSymbology
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BarcodeSymbology;
    /**
     * Constructor method for CustomLabelBarcodeEntry
     * @uses CustomLabelBarcodeEntry::setPosition()
     * @uses CustomLabelBarcodeEntry::setFormat()
     * @uses CustomLabelBarcodeEntry::setDataFields()
     * @uses CustomLabelBarcodeEntry::setBarHeight()
     * @uses CustomLabelBarcodeEntry::setThinBarWidth()
     * @uses CustomLabelBarcodeEntry::setBarcodeSymbology()
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomLabelPosition $position
     * @param string $format
     * @param string[] $dataFields
     * @param int $barHeight
     * @param int $thinBarWidth
     * @param string $barcodeSymbology
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\CustomLabelPosition $position = null, $format = null, array $dataFields = array(), $barHeight = null, $thinBarWidth = null, $barcodeSymbology = null)
    {
        $this
            ->setPosition($position)
            ->setFormat($format)
            ->setDataFields($dataFields)
            ->setBarHeight($barHeight)
            ->setThinBarWidth($thinBarWidth)
            ->setBarcodeSymbology($barcodeSymbology);
    }
    /**
     * Get Position value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelPosition|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomLabelPosition $position
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelBarcodeEntry
     */
    public function setPosition(\Drupal\commerce_fedex\FedEx\StructType\CustomLabelPosition $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param string $format
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelBarcodeEntry
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->Format = $format;
        return $this;
    }
    /**
     * Get DataFields value
     * @return string[]|null
     */
    public function getDataFields()
    {
        return $this->DataFields;
    }
    /**
     * Set DataFields value
     * @throws \InvalidArgumentException
     * @param string[] $dataFields
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelBarcodeEntry
     */
    public function setDataFields(array $dataFields = array())
    {
        foreach ($dataFields as $customLabelBarcodeEntryDataFieldsItem) {
            // validation for constraint: itemType
            if (!is_string($customLabelBarcodeEntryDataFieldsItem)) {
                throw new \InvalidArgumentException(sprintf('The DataFields property can only contain items of string, "%s" given', is_object($customLabelBarcodeEntryDataFieldsItem) ? get_class($customLabelBarcodeEntryDataFieldsItem) : gettype($customLabelBarcodeEntryDataFieldsItem)), __LINE__);
            }
        }
        $this->DataFields = $dataFields;
        return $this;
    }
    /**
     * Add item to DataFields value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelBarcodeEntry
     */
    public function addToDataFields($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DataFields property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DataFields[] = $item;
        return $this;
    }
    /**
     * Get BarHeight value
     * @return int|null
     */
    public function getBarHeight()
    {
        return $this->BarHeight;
    }
    /**
     * Set BarHeight value
     * @param int $barHeight
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelBarcodeEntry
     */
    public function setBarHeight($barHeight = null)
    {
        // validation for constraint: int
        if (!is_null($barHeight) && !is_numeric($barHeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($barHeight)), __LINE__);
        }
        $this->BarHeight = $barHeight;
        return $this;
    }
    /**
     * Get ThinBarWidth value
     * @return int|null
     */
    public function getThinBarWidth()
    {
        return $this->ThinBarWidth;
    }
    /**
     * Set ThinBarWidth value
     * @param int $thinBarWidth
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelBarcodeEntry
     */
    public function setThinBarWidth($thinBarWidth = null)
    {
        // validation for constraint: int
        if (!is_null($thinBarWidth) && !is_numeric($thinBarWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($thinBarWidth)), __LINE__);
        }
        $this->ThinBarWidth = $thinBarWidth;
        return $this;
    }
    /**
     * Get BarcodeSymbology value
     * @return string|null
     */
    public function getBarcodeSymbology()
    {
        return $this->BarcodeSymbology;
    }
    /**
     * Set BarcodeSymbology value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\BarcodeSymbologyType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\BarcodeSymbologyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $barcodeSymbology
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelBarcodeEntry
     */
    public function setBarcodeSymbology($barcodeSymbology = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\BarcodeSymbologyType::valueIsValid($barcodeSymbology)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $barcodeSymbology, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\BarcodeSymbologyType::getValidValues())), __LINE__);
        }
        $this->BarcodeSymbology = $barcodeSymbology;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelBarcodeEntry
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
