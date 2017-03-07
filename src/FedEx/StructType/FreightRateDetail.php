<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightRateDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Rate data specific to FedEx Freight or FedEx National Freight services.
 * @subpackage Structs
 */
class FreightRateDetail extends AbstractStructBase
{
    /**
     * The QuoteNumber
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for a specific rate quotation.
     * - minOccurs: 0
     * @var string
     */
    public $QuoteNumber;
    /**
     * The QuoteType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the rate quote was automated or manual.
     * - minOccurs: 0
     * @var string
     */
    public $QuoteType;
    /**
     * The BaseChargeCalculation
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how total base charge is determined.
     * - minOccurs: 0
     * @var string
     */
    public $BaseChargeCalculation;
    /**
     * The BaseCharges
     * Meta informations extracted from the WSDL
     * - documentation: Freight charges which accumulate to the total base charge for the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\FreightBaseCharge[]
     */
    public $BaseCharges;
    /**
     * The Notations
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable descriptions of additional information on this shipment rating.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\FreightRateNotation[]
     */
    public $Notations;
    /**
     * Constructor method for FreightRateDetail
     * @uses FreightRateDetail::setQuoteNumber()
     * @uses FreightRateDetail::setQuoteType()
     * @uses FreightRateDetail::setBaseChargeCalculation()
     * @uses FreightRateDetail::setBaseCharges()
     * @uses FreightRateDetail::setNotations()
     * @param string $quoteNumber
     * @param string $quoteType
     * @param string $baseChargeCalculation
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightBaseCharge[] $baseCharges
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightRateNotation[] $notations
     */
    public function __construct($quoteNumber = null, $quoteType = null, $baseChargeCalculation = null, array $baseCharges = array(), array $notations = array())
    {
        $this
            ->setQuoteNumber($quoteNumber)
            ->setQuoteType($quoteType)
            ->setBaseChargeCalculation($baseChargeCalculation)
            ->setBaseCharges($baseCharges)
            ->setNotations($notations);
    }
    /**
     * Get QuoteNumber value
     * @return string|null
     */
    public function getQuoteNumber()
    {
        return $this->QuoteNumber;
    }
    /**
     * Set QuoteNumber value
     * @param string $quoteNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightRateDetail
     */
    public function setQuoteNumber($quoteNumber = null)
    {
        // validation for constraint: string
        if (!is_null($quoteNumber) && !is_string($quoteNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quoteNumber)), __LINE__);
        }
        $this->QuoteNumber = $quoteNumber;
        return $this;
    }
    /**
     * Get QuoteType value
     * @return string|null
     */
    public function getQuoteType()
    {
        return $this->QuoteType;
    }
    /**
     * Set QuoteType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FreightRateQuoteType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FreightRateQuoteType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $quoteType
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightRateDetail
     */
    public function setQuoteType($quoteType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\FreightRateQuoteType::valueIsValid($quoteType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $quoteType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\FreightRateQuoteType::getValidValues())), __LINE__);
        }
        $this->QuoteType = $quoteType;
        return $this;
    }
    /**
     * Get BaseChargeCalculation value
     * @return string|null
     */
    public function getBaseChargeCalculation()
    {
        return $this->BaseChargeCalculation;
    }
    /**
     * Set BaseChargeCalculation value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FreightBaseChargeCalculationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FreightBaseChargeCalculationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $baseChargeCalculation
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightRateDetail
     */
    public function setBaseChargeCalculation($baseChargeCalculation = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\FreightBaseChargeCalculationType::valueIsValid($baseChargeCalculation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $baseChargeCalculation, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\FreightBaseChargeCalculationType::getValidValues())), __LINE__);
        }
        $this->BaseChargeCalculation = $baseChargeCalculation;
        return $this;
    }
    /**
     * Get BaseCharges value
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightBaseCharge[]|null
     */
    public function getBaseCharges()
    {
        return $this->BaseCharges;
    }
    /**
     * Set BaseCharges value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightBaseCharge[] $baseCharges
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightRateDetail
     */
    public function setBaseCharges(array $baseCharges = array())
    {
        foreach ($baseCharges as $freightRateDetailBaseChargesItem) {
            // validation for constraint: itemType
            if (!$freightRateDetailBaseChargesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\FreightBaseCharge) {
                throw new \InvalidArgumentException(sprintf('The BaseCharges property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\FreightBaseCharge, "%s" given', is_object($freightRateDetailBaseChargesItem) ? get_class($freightRateDetailBaseChargesItem) : gettype($freightRateDetailBaseChargesItem)), __LINE__);
            }
        }
        $this->BaseCharges = $baseCharges;
        return $this;
    }
    /**
     * Add item to BaseCharges value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightBaseCharge $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightRateDetail
     */
    public function addToBaseCharges(\Drupal\commerce_fedex\FedEx\StructType\FreightBaseCharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\FreightBaseCharge) {
            throw new \InvalidArgumentException(sprintf('The BaseCharges property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\FreightBaseCharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BaseCharges[] = $item;
        return $this;
    }
    /**
     * Get Notations value
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightRateNotation[]|null
     */
    public function getNotations()
    {
        return $this->Notations;
    }
    /**
     * Set Notations value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightRateNotation[] $notations
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightRateDetail
     */
    public function setNotations(array $notations = array())
    {
        foreach ($notations as $freightRateDetailNotationsItem) {
            // validation for constraint: itemType
            if (!$freightRateDetailNotationsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\FreightRateNotation) {
                throw new \InvalidArgumentException(sprintf('The Notations property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\FreightRateNotation, "%s" given', is_object($freightRateDetailNotationsItem) ? get_class($freightRateDetailNotationsItem) : gettype($freightRateDetailNotationsItem)), __LINE__);
            }
        }
        $this->Notations = $notations;
        return $this;
    }
    /**
     * Add item to Notations value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightRateNotation $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightRateDetail
     */
    public function addToNotations(\Drupal\commerce_fedex\FedEx\StructType\FreightRateNotation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\FreightRateNotation) {
            throw new \InvalidArgumentException(sprintf('The Notations property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\FreightRateNotation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notations[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightRateDetail
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
