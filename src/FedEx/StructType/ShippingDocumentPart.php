<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentPart StructType
 * Meta informations extracted from the WSDL
 * - documentation: A single part of a shipping document, such as one page of a multiple-page document whose format requires a separate image per page.
 * @subpackage Structs
 */
class ShippingDocumentPart extends AbstractStructBase
{
    /**
     * The DocumentPartSequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: The one-origin position of this part within a document.
     * - minOccurs: 0
     * @var int
     */
    public $DocumentPartSequenceNumber;
    /**
     * The Image
     * Meta informations extracted from the WSDL
     * - documentation: Graphic or printer commands for this image within a document.
     * - minOccurs: 0
     * @var string
     */
    public $Image;
    /**
     * Constructor method for ShippingDocumentPart
     * @uses ShippingDocumentPart::setDocumentPartSequenceNumber()
     * @uses ShippingDocumentPart::setImage()
     * @param int $documentPartSequenceNumber
     * @param string $image
     */
    public function __construct($documentPartSequenceNumber = null, $image = null)
    {
        $this
            ->setDocumentPartSequenceNumber($documentPartSequenceNumber)
            ->setImage($image);
    }
    /**
     * Get DocumentPartSequenceNumber value
     * @return int|null
     */
    public function getDocumentPartSequenceNumber()
    {
        return $this->DocumentPartSequenceNumber;
    }
    /**
     * Set DocumentPartSequenceNumber value
     * @param int $documentPartSequenceNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart
     */
    public function setDocumentPartSequenceNumber($documentPartSequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($documentPartSequenceNumber) && !is_numeric($documentPartSequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($documentPartSequenceNumber)), __LINE__);
        }
        $this->DocumentPartSequenceNumber = $documentPartSequenceNumber;
        return $this;
    }
    /**
     * Get Image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param string $image
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($image)), __LINE__);
        }
        $this->Image = $image;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPart
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
