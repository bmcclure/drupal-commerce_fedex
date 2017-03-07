<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeneralAgencyAgreementDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce a General Agency Agreement document. Remaining content (business data) to be defined once requirements have been completed.
 * @subpackage Structs
 */
class GeneralAgencyAgreementDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public $Format;
    /**
     * Constructor method for GeneralAgencyAgreementDetail
     * @uses GeneralAgencyAgreementDetail::setFormat()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null)
    {
        $this
            ->setFormat($format);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\GeneralAgencyAgreementDetail
     */
    public function setFormat(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\GeneralAgencyAgreementDetail
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
