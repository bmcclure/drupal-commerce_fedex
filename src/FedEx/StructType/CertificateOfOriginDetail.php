<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CertificateOfOriginDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
 * @subpackage Structs
 */
class CertificateOfOriginDetail extends AbstractStructBase
{
    /**
     * The DocumentFormat
     * Meta informations extracted from the WSDL
     * - documentation: Specifies characteristics of a shipping document to be produced.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public $DocumentFormat;
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
     * Constructor method for CertificateOfOriginDetail
     * @uses CertificateOfOriginDetail::setDocumentFormat()
     * @uses CertificateOfOriginDetail::setCustomerImageUsages()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $documentFormat
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage[] $customerImageUsages
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $documentFormat = null, array $customerImageUsages = array())
    {
        $this
            ->setDocumentFormat($documentFormat)
            ->setCustomerImageUsages($customerImageUsages);
    }
    /**
     * Get DocumentFormat value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat|null
     */
    public function getDocumentFormat()
    {
        return $this->DocumentFormat;
    }
    /**
     * Set DocumentFormat value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $documentFormat
     * @return \Drupal\commerce_fedex\FedEx\StructType\CertificateOfOriginDetail
     */
    public function setDocumentFormat(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $documentFormat = null)
    {
        $this->DocumentFormat = $documentFormat;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\CertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $certificateOfOriginDetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$certificateOfOriginDetailCustomerImageUsagesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage, "%s" given', is_object($certificateOfOriginDetailCustomerImageUsagesItem) ? get_class($certificateOfOriginDetailCustomerImageUsagesItem) : gettype($certificateOfOriginDetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\CertificateOfOriginDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\CertificateOfOriginDetail
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
