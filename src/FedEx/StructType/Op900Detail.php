<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Op900Detail StructType
 * Meta informations extracted from the WSDL
 * - documentation: The instructions indicating how to print the OP-900 form for hazardous materials packages.
 * @subpackage Structs
 */
class Op900Detail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - documentation: Specifies characteristics of a shipping document to be produced.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The Reference
     * Meta informations extracted from the WSDL
     * - documentation: Identifies which reference type (from the package's customer references) is to be used as the source for the reference on this OP-900.
     * - minOccurs: 0
     * @var string
     */
    public $Reference;
    /**
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the usage and identification of customer supplied images to be used on this document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage[]
     */
    public $CustomerImageUsages;
    /**
     * The SignatureName
     * Meta informations extracted from the WSDL
     * - documentation: Data field to be used when a name is to be printed in the document instead of (or in addition to) a signature image.
     * - minOccurs: 0
     * @var string
     */
    public $SignatureName;
    /**
     * Constructor method for Op900Detail
     * @uses Op900Detail::setFormat()
     * @uses Op900Detail::setReference()
     * @uses Op900Detail::setCustomerImageUsages()
     * @uses Op900Detail::setSignatureName()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format
     * @param string $reference
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage[] $customerImageUsages
     * @param string $signatureName
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null, $reference = null, array $customerImageUsages = array(), $signatureName = null)
    {
        $this
            ->setFormat($format)
            ->setReference($reference)
            ->setCustomerImageUsages($customerImageUsages)
            ->setSignatureName($signatureName);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Op900Detail
     */
    public function setFormat(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get Reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomerReferenceType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomerReferenceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $reference
     * @return \Drupal\commerce_fedex\FedEx\StructType\Op900Detail
     */
    public function setReference($reference = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\CustomerReferenceType::valueIsValid($reference)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $reference, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CustomerReferenceType::getValidValues())), __LINE__);
        }
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get CustomerImageUsages value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage[]|null
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    /**
     * Set CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage[] $customerImageUsages
     * @return \Drupal\commerce_fedex\FedEx\StructType\Op900Detail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $op900DetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$op900DetailCustomerImageUsagesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage, "%s" given', is_object($op900DetailCustomerImageUsagesItem) ? get_class($op900DetailCustomerImageUsagesItem) : gettype($op900DetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\Op900Detail
     */
    public function addToCustomerImageUsages(\Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage) {
            throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerImageUsages[] = $item;
        return $this;
    }
    /**
     * Get SignatureName value
     * @return string|null
     */
    public function getSignatureName()
    {
        return $this->SignatureName;
    }
    /**
     * Set SignatureName value
     * @param string $signatureName
     * @return \Drupal\commerce_fedex\FedEx\StructType\Op900Detail
     */
    public function setSignatureName($signatureName = null)
    {
        // validation for constraint: string
        if (!is_null($signatureName) && !is_string($signatureName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signatureName)), __LINE__);
        }
        $this->SignatureName = $signatureName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\Op900Detail
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
