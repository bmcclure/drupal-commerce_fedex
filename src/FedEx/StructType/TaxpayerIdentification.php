<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxpayerIdentification StructType
 * @subpackage Structs
 */
class TaxpayerIdentification extends AbstractStructBase
{
    /**
     * The TinType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TinType;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The Usage
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the usage of Tax Identification Number in Shipment processing
     * - minOccurs: 0
     * @var string
     */
    public $Usage;
    /**
     * The EffectiveDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EffectiveDate;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDate;
    /**
     * Constructor method for TaxpayerIdentification
     * @uses TaxpayerIdentification::setTinType()
     * @uses TaxpayerIdentification::setNumber()
     * @uses TaxpayerIdentification::setUsage()
     * @uses TaxpayerIdentification::setEffectiveDate()
     * @uses TaxpayerIdentification::setExpirationDate()
     * @param string $tinType
     * @param string $number
     * @param string $usage
     * @param string $effectiveDate
     * @param string $expirationDate
     */
    public function __construct($tinType = null, $number = null, $usage = null, $effectiveDate = null, $expirationDate = null)
    {
        $this
            ->setTinType($tinType)
            ->setNumber($number)
            ->setUsage($usage)
            ->setEffectiveDate($effectiveDate)
            ->setExpirationDate($expirationDate);
    }
    /**
     * Get TinType value
     * @return string|null
     */
    public function getTinType()
    {
        return $this->TinType;
    }
    /**
     * Set TinType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TinType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\TinType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tinType
     * @return \Drupal\commerce_fedex\FedEx\StructType\TaxpayerIdentification
     */
    public function setTinType($tinType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\TinType::valueIsValid($tinType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tinType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\TinType::getValidValues())), __LINE__);
        }
        $this->TinType = $tinType;
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Drupal\commerce_fedex\FedEx\StructType\TaxpayerIdentification
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get Usage value
     * @return string|null
     */
    public function getUsage()
    {
        return $this->Usage;
    }
    /**
     * Set Usage value
     * @param string $usage
     * @return \Drupal\commerce_fedex\FedEx\StructType\TaxpayerIdentification
     */
    public function setUsage($usage = null)
    {
        // validation for constraint: string
        if (!is_null($usage) && !is_string($usage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usage)), __LINE__);
        }
        $this->Usage = $usage;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\TaxpayerIdentification
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\TaxpayerIdentification
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\TaxpayerIdentification
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
