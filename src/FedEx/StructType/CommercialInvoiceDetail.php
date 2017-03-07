<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommercialInvoiceDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
 * @subpackage Structs
 */
class CommercialInvoiceDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the usage and identification of a customer supplied image to be used on this document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage[]
     */
    public $CustomerImageUsages;
    /**
     * Constructor method for CommercialInvoiceDetail
     * @uses CommercialInvoiceDetail::setFormat()
     * @uses CommercialInvoiceDetail::setCustomerImageUsages()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage[] $customerImageUsages
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null, array $customerImageUsages = array())
    {
        $this
            ->setFormat($format)
            ->setCustomerImageUsages($customerImageUsages);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\CommercialInvoiceDetail
     */
    public function setFormat(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\CommercialInvoiceDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $commercialInvoiceDetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$commercialInvoiceDetailCustomerImageUsagesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage, "%s" given', is_object($commercialInvoiceDetailCustomerImageUsagesItem) ? get_class($commercialInvoiceDetailCustomerImageUsagesItem) : gettype($commercialInvoiceDetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\CommercialInvoiceDetail
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CommercialInvoiceDetail
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
