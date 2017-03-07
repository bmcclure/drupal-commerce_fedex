<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentPrintDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies printing options for a shipping document.
 * @subpackage Structs
 */
class ShippingDocumentPrintDetail extends AbstractStructBase
{
    /**
     * The PrinterId
     * Meta informations extracted from the WSDL
     * - documentation: Provides environment-specific printer identification.
     * - minOccurs: 0
     * @var string
     */
    public $PrinterId;
    /**
     * Constructor method for ShippingDocumentPrintDetail
     * @uses ShippingDocumentPrintDetail::setPrinterId()
     * @param string $printerId
     */
    public function __construct($printerId = null)
    {
        $this
            ->setPrinterId($printerId);
    }
    /**
     * Get PrinterId value
     * @return string|null
     */
    public function getPrinterId()
    {
        return $this->PrinterId;
    }
    /**
     * Set PrinterId value
     * @param string $printerId
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPrintDetail
     */
    public function setPrinterId($printerId = null)
    {
        // validation for constraint: string
        if (!is_null($printerId) && !is_string($printerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($printerId)), __LINE__);
        }
        $this->PrinterId = $printerId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentPrintDetail
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
