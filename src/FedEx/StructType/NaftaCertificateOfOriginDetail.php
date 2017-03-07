<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NaftaCertificateOfOriginDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce a Certificate of Origin document. Remaining content (business data) to be defined once requirements have been completed.
 * @subpackage Structs
 */
class NaftaCertificateOfOriginDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The BlanketPeriod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DateRange
     */
    public $BlanketPeriod;
    /**
     * The ImporterSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which Party (if any) from the shipment is to be used as the source of importer data on the NAFTA COO form.
     * - minOccurs: 0
     * @var string
     */
    public $ImporterSpecification;
    /**
     * The SignatureContact
     * Meta informations extracted from the WSDL
     * - documentation: Contact information for "Authorized Signature" area of form.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Contact
     */
    public $SignatureContact;
    /**
     * The ProducerSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProducerSpecification;
    /**
     * The Producers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\NaftaProducer[]
     */
    public $Producers;
    /**
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage[]
     */
    public $CustomerImageUsages;
    /**
     * Constructor method for NaftaCertificateOfOriginDetail
     * @uses NaftaCertificateOfOriginDetail::setFormat()
     * @uses NaftaCertificateOfOriginDetail::setBlanketPeriod()
     * @uses NaftaCertificateOfOriginDetail::setImporterSpecification()
     * @uses NaftaCertificateOfOriginDetail::setSignatureContact()
     * @uses NaftaCertificateOfOriginDetail::setProducerSpecification()
     * @uses NaftaCertificateOfOriginDetail::setProducers()
     * @uses NaftaCertificateOfOriginDetail::setCustomerImageUsages()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format
     * @param \Drupal\commerce_fedex\FedEx\StructType\DateRange $blanketPeriod
     * @param string $importerSpecification
     * @param \Drupal\commerce_fedex\FedEx\StructType\Contact $signatureContact
     * @param string $producerSpecification
     * @param \Drupal\commerce_fedex\FedEx\StructType\NaftaProducer[] $producers
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage[] $customerImageUsages
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null, \Drupal\commerce_fedex\FedEx\StructType\DateRange $blanketPeriod = null, $importerSpecification = null, \Drupal\commerce_fedex\FedEx\StructType\Contact $signatureContact = null, $producerSpecification = null, array $producers = array(), array $customerImageUsages = array())
    {
        $this
            ->setFormat($format)
            ->setBlanketPeriod($blanketPeriod)
            ->setImporterSpecification($importerSpecification)
            ->setSignatureContact($signatureContact)
            ->setProducerSpecification($producerSpecification)
            ->setProducers($producers)
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCertificateOfOriginDetail
     */
    public function setFormat(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get BlanketPeriod value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DateRange|null
     */
    public function getBlanketPeriod()
    {
        return $this->BlanketPeriod;
    }
    /**
     * Set BlanketPeriod value
     * @param \Drupal\commerce_fedex\FedEx\StructType\DateRange $blanketPeriod
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCertificateOfOriginDetail
     */
    public function setBlanketPeriod(\Drupal\commerce_fedex\FedEx\StructType\DateRange $blanketPeriod = null)
    {
        $this->BlanketPeriod = $blanketPeriod;
        return $this;
    }
    /**
     * Get ImporterSpecification value
     * @return string|null
     */
    public function getImporterSpecification()
    {
        return $this->ImporterSpecification;
    }
    /**
     * Set ImporterSpecification value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NaftaImporterSpecificationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NaftaImporterSpecificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $importerSpecification
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCertificateOfOriginDetail
     */
    public function setImporterSpecification($importerSpecification = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\NaftaImporterSpecificationType::valueIsValid($importerSpecification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $importerSpecification, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NaftaImporterSpecificationType::getValidValues())), __LINE__);
        }
        $this->ImporterSpecification = $importerSpecification;
        return $this;
    }
    /**
     * Get SignatureContact value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Contact|null
     */
    public function getSignatureContact()
    {
        return $this->SignatureContact;
    }
    /**
     * Set SignatureContact value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Contact $signatureContact
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCertificateOfOriginDetail
     */
    public function setSignatureContact(\Drupal\commerce_fedex\FedEx\StructType\Contact $signatureContact = null)
    {
        $this->SignatureContact = $signatureContact;
        return $this;
    }
    /**
     * Get ProducerSpecification value
     * @return string|null
     */
    public function getProducerSpecification()
    {
        return $this->ProducerSpecification;
    }
    /**
     * Set ProducerSpecification value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NaftaProducerSpecificationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NaftaProducerSpecificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $producerSpecification
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCertificateOfOriginDetail
     */
    public function setProducerSpecification($producerSpecification = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\NaftaProducerSpecificationType::valueIsValid($producerSpecification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $producerSpecification, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NaftaProducerSpecificationType::getValidValues())), __LINE__);
        }
        $this->ProducerSpecification = $producerSpecification;
        return $this;
    }
    /**
     * Get Producers value
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaProducer[]|null
     */
    public function getProducers()
    {
        return $this->Producers;
    }
    /**
     * Set Producers value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\NaftaProducer[] $producers
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCertificateOfOriginDetail
     */
    public function setProducers(array $producers = array())
    {
        foreach ($producers as $naftaCertificateOfOriginDetailProducersItem) {
            // validation for constraint: itemType
            if (!$naftaCertificateOfOriginDetailProducersItem instanceof \Drupal\commerce_fedex\FedEx\StructType\NaftaProducer) {
                throw new \InvalidArgumentException(sprintf('The Producers property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\NaftaProducer, "%s" given', is_object($naftaCertificateOfOriginDetailProducersItem) ? get_class($naftaCertificateOfOriginDetailProducersItem) : gettype($naftaCertificateOfOriginDetailProducersItem)), __LINE__);
            }
        }
        $this->Producers = $producers;
        return $this;
    }
    /**
     * Add item to Producers value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\NaftaProducer $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCertificateOfOriginDetail
     */
    public function addToProducers(\Drupal\commerce_fedex\FedEx\StructType\NaftaProducer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\NaftaProducer) {
            throw new \InvalidArgumentException(sprintf('The Producers property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\NaftaProducer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Producers[] = $item;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $naftaCertificateOfOriginDetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$naftaCertificateOfOriginDetailCustomerImageUsagesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage, "%s" given', is_object($naftaCertificateOfOriginDetailCustomerImageUsagesItem) ? get_class($naftaCertificateOfOriginDetailCustomerImageUsagesItem) : gettype($naftaCertificateOfOriginDetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\CustomerImageUsage $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCertificateOfOriginDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCertificateOfOriginDetail
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
