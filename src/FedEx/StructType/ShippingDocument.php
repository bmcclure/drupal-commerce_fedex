<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocument StructType
 * @subpackage Structs
 */
class ShippingDocument extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Localizations
     * Meta informations extracted from the WSDL
     * - documentation: The localizations are populated if multiple language versions of a shipping document are returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Localization[]
     */
    public $Localizations;
    /**
     * The Grouping
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how this document image/file is organized.
     * - minOccurs: 0
     * @var string
     */
    public $Grouping;
    /**
     * The ShippingDocumentDisposition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingDocumentDisposition;
    /**
     * The AccessReference
     * Meta informations extracted from the WSDL
     * - documentation: The name under which a STORED, DEFERRED or EMAILED document is written.
     * - minOccurs: 0
     * @var string
     */
    public $AccessReference;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the image type of this shipping document.
     * - minOccurs: 0
     * @var string
     */
    public $ImageType;
    /**
     * The Resolution
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the image resolution in DPI (dots per inch).
     * - minOccurs: 0
     * @var int
     */
    public $Resolution;
    /**
     * The CopiesToPrint
     * Meta informations extracted from the WSDL
     * - documentation: Can be zero for documents whose disposition implies that no content is included.
     * - minOccurs: 0
     * @var int
     */
    public $CopiesToPrint;
    /**
     * The Parts
     * Meta informations extracted from the WSDL
     * - documentation: One or more document parts which make up a single logical document, such as multiple pages of a single form.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart[]
     */
    public $Parts;
    /**
     * Constructor method for ShippingDocument
     * @uses ShippingDocument::setType()
     * @uses ShippingDocument::setLocalizations()
     * @uses ShippingDocument::setGrouping()
     * @uses ShippingDocument::setShippingDocumentDisposition()
     * @uses ShippingDocument::setAccessReference()
     * @uses ShippingDocument::setImageType()
     * @uses ShippingDocument::setResolution()
     * @uses ShippingDocument::setCopiesToPrint()
     * @uses ShippingDocument::setParts()
     * @param string $type
     * @param \Drupal\commerce_fedex\FedEx\StructType\Localization[] $localizations
     * @param string $grouping
     * @param string $shippingDocumentDisposition
     * @param string $accessReference
     * @param string $imageType
     * @param int $resolution
     * @param int $copiesToPrint
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart[] $parts
     */
    public function __construct($type = null, array $localizations = array(), $grouping = null, $shippingDocumentDisposition = null, $accessReference = null, $imageType = null, $resolution = null, $copiesToPrint = null, array $parts = array())
    {
        $this
            ->setType($type)
            ->setLocalizations($localizations)
            ->setGrouping($grouping)
            ->setShippingDocumentDisposition($shippingDocumentDisposition)
            ->setAccessReference($accessReference)
            ->setImageType($imageType)
            ->setResolution($resolution)
            ->setCopiesToPrint($copiesToPrint)
            ->setParts($parts);
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
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnedShippingDocumentType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ReturnedShippingDocumentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ReturnedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Localizations value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Localization[]|null
     */
    public function getLocalizations()
    {
        return $this->Localizations;
    }
    /**
     * Set Localizations value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Localization[] $localizations
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public function setLocalizations(array $localizations = array())
    {
        foreach ($localizations as $shippingDocumentLocalizationsItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentLocalizationsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\Localization) {
                throw new \InvalidArgumentException(sprintf('The Localizations property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Localization, "%s" given', is_object($shippingDocumentLocalizationsItem) ? get_class($shippingDocumentLocalizationsItem) : gettype($shippingDocumentLocalizationsItem)), __LINE__);
            }
        }
        $this->Localizations = $localizations;
        return $this;
    }
    /**
     * Add item to Localizations value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Localization $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public function addToLocalizations(\Drupal\commerce_fedex\FedEx\StructType\Localization $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\Localization) {
            throw new \InvalidArgumentException(sprintf('The Localizations property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Localization, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Localizations[] = $item;
        return $this;
    }
    /**
     * Get Grouping value
     * @return string|null
     */
    public function getGrouping()
    {
        return $this->Grouping;
    }
    /**
     * Set Grouping value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentGroupingType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentGroupingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $grouping
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public function setGrouping($grouping = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentGroupingType::valueIsValid($grouping)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $grouping, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentGroupingType::getValidValues())), __LINE__);
        }
        $this->Grouping = $grouping;
        return $this;
    }
    /**
     * Get ShippingDocumentDisposition value
     * @return string|null
     */
    public function getShippingDocumentDisposition()
    {
        return $this->ShippingDocumentDisposition;
    }
    /**
     * Set ShippingDocumentDisposition value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentDispositionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentDispositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingDocumentDisposition
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public function setShippingDocumentDisposition($shippingDocumentDisposition = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentDispositionType::valueIsValid($shippingDocumentDisposition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingDocumentDisposition, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentDispositionType::getValidValues())), __LINE__);
        }
        $this->ShippingDocumentDisposition = $shippingDocumentDisposition;
        return $this;
    }
    /**
     * Get AccessReference value
     * @return string|null
     */
    public function getAccessReference()
    {
        return $this->AccessReference;
    }
    /**
     * Set AccessReference value
     * @param string $accessReference
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public function setAccessReference($accessReference = null)
    {
        // validation for constraint: string
        if (!is_null($accessReference) && !is_string($accessReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessReference)), __LINE__);
        }
        $this->AccessReference = $accessReference;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
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
     * Get Resolution value
     * @return int|null
     */
    public function getResolution()
    {
        return $this->Resolution;
    }
    /**
     * Set Resolution value
     * @param int $resolution
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public function setResolution($resolution = null)
    {
        // validation for constraint: int
        if (!is_null($resolution) && !is_numeric($resolution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resolution)), __LINE__);
        }
        $this->Resolution = $resolution;
        return $this;
    }
    /**
     * Get CopiesToPrint value
     * @return int|null
     */
    public function getCopiesToPrint()
    {
        return $this->CopiesToPrint;
    }
    /**
     * Set CopiesToPrint value
     * @param int $copiesToPrint
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public function setCopiesToPrint($copiesToPrint = null)
    {
        // validation for constraint: int
        if (!is_null($copiesToPrint) && !is_numeric($copiesToPrint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($copiesToPrint)), __LINE__);
        }
        $this->CopiesToPrint = $copiesToPrint;
        return $this;
    }
    /**
     * Get Parts value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart[]|null
     */
    public function getParts()
    {
        return $this->Parts;
    }
    /**
     * Set Parts value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart[] $parts
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public function setParts(array $parts = array())
    {
        foreach ($parts as $shippingDocumentPartsItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentPartsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart) {
                throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart, "%s" given', is_object($shippingDocumentPartsItem) ? get_class($shippingDocumentPartsItem) : gettype($shippingDocumentPartsItem)), __LINE__);
            }
        }
        $this->Parts = $parts;
        return $this;
    }
    /**
     * Add item to Parts value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public function addToParts(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart) {
            throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Parts[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
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
