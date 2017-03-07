<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Commodity StructType
 * @subpackage Structs
 */
class Commodity extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The NumberOfPieces
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPieces;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Purpose
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Purpose;
    /**
     * The CountryOfManufacture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountryOfManufacture;
    /**
     * The HarmonizedCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HarmonizedCode;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Weight
     */
    public $Weight;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Quantity;
    /**
     * The QuantityUnits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $QuantityUnits;
    /**
     * The AdditionalMeasures
     * Meta informations extracted from the WSDL
     * - documentation: Contains only additional quantitative information other than weight and quantity to calculate duties and taxes.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Measure[]
     */
    public $AdditionalMeasures;
    /**
     * The UnitPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $UnitPrice;
    /**
     * The CustomsValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $CustomsValue;
    /**
     * The ExciseConditions
     * Meta informations extracted from the WSDL
     * - documentation: Defines additional characteristic of commodity used to calculate duties and taxes
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition[]
     */
    public $ExciseConditions;
    /**
     * The ExportLicenseNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExportLicenseNumber;
    /**
     * The ExportLicenseExpirationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExportLicenseExpirationDate;
    /**
     * The CIMarksAndNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CIMarksAndNumbers;
    /**
     * The PartNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartNumber;
    /**
     * The NaftaDetail
     * Meta informations extracted from the WSDL
     * - documentation: All data required for this commodity in NAFTA Certificate of Origin.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail
     */
    public $NaftaDetail;
    /**
     * Constructor method for Commodity
     * @uses Commodity::setName()
     * @uses Commodity::setNumberOfPieces()
     * @uses Commodity::setDescription()
     * @uses Commodity::setPurpose()
     * @uses Commodity::setCountryOfManufacture()
     * @uses Commodity::setHarmonizedCode()
     * @uses Commodity::setWeight()
     * @uses Commodity::setQuantity()
     * @uses Commodity::setQuantityUnits()
     * @uses Commodity::setAdditionalMeasures()
     * @uses Commodity::setUnitPrice()
     * @uses Commodity::setCustomsValue()
     * @uses Commodity::setExciseConditions()
     * @uses Commodity::setExportLicenseNumber()
     * @uses Commodity::setExportLicenseExpirationDate()
     * @uses Commodity::setCIMarksAndNumbers()
     * @uses Commodity::setPartNumber()
     * @uses Commodity::setNaftaDetail()
     * @param string $name
     * @param int $numberOfPieces
     * @param string $description
     * @param string $purpose
     * @param string $countryOfManufacture
     * @param string $harmonizedCode
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $weight
     * @param float $quantity
     * @param string $quantityUnits
     * @param \Drupal\commerce_fedex\FedEx\StructType\Measure[] $additionalMeasures
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $unitPrice
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $customsValue
     * @param \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition[] $exciseConditions
     * @param string $exportLicenseNumber
     * @param string $exportLicenseExpirationDate
     * @param string $cIMarksAndNumbers
     * @param string $partNumber
     * @param \Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail $naftaDetail
     */
    public function __construct($name = null, $numberOfPieces = null, $description = null, $purpose = null, $countryOfManufacture = null, $harmonizedCode = null, \Drupal\commerce_fedex\FedEx\StructType\Weight $weight = null, $quantity = null, $quantityUnits = null, array $additionalMeasures = array(), \Drupal\commerce_fedex\FedEx\StructType\Money $unitPrice = null, \Drupal\commerce_fedex\FedEx\StructType\Money $customsValue = null, array $exciseConditions = array(), $exportLicenseNumber = null, $exportLicenseExpirationDate = null, $cIMarksAndNumbers = null, $partNumber = null, \Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail $naftaDetail = null)
    {
        $this
            ->setName($name)
            ->setNumberOfPieces($numberOfPieces)
            ->setDescription($description)
            ->setPurpose($purpose)
            ->setCountryOfManufacture($countryOfManufacture)
            ->setHarmonizedCode($harmonizedCode)
            ->setWeight($weight)
            ->setQuantity($quantity)
            ->setQuantityUnits($quantityUnits)
            ->setAdditionalMeasures($additionalMeasures)
            ->setUnitPrice($unitPrice)
            ->setCustomsValue($customsValue)
            ->setExciseConditions($exciseConditions)
            ->setExportLicenseNumber($exportLicenseNumber)
            ->setExportLicenseExpirationDate($exportLicenseExpirationDate)
            ->setCIMarksAndNumbers($cIMarksAndNumbers)
            ->setPartNumber($partNumber)
            ->setNaftaDetail($naftaDetail);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NumberOfPieces value
     * @return int|null
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }
    /**
     * Set NumberOfPieces value
     * @param int $numberOfPieces
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setNumberOfPieces($numberOfPieces = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPieces) && !is_numeric($numberOfPieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPieces)), __LINE__);
        }
        $this->NumberOfPieces = $numberOfPieces;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Purpose value
     * @return string|null
     */
    public function getPurpose()
    {
        return $this->Purpose;
    }
    /**
     * Set Purpose value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CommodityPurposeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CommodityPurposeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $purpose
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setPurpose($purpose = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\CommodityPurposeType::valueIsValid($purpose)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $purpose, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CommodityPurposeType::getValidValues())), __LINE__);
        }
        $this->Purpose = $purpose;
        return $this;
    }
    /**
     * Get CountryOfManufacture value
     * @return string|null
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }
    /**
     * Set CountryOfManufacture value
     * @param string $countryOfManufacture
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setCountryOfManufacture($countryOfManufacture = null)
    {
        // validation for constraint: string
        if (!is_null($countryOfManufacture) && !is_string($countryOfManufacture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryOfManufacture)), __LINE__);
        }
        $this->CountryOfManufacture = $countryOfManufacture;
        return $this;
    }
    /**
     * Get HarmonizedCode value
     * @return string|null
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }
    /**
     * Set HarmonizedCode value
     * @param string $harmonizedCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setHarmonizedCode($harmonizedCode = null)
    {
        // validation for constraint: string
        if (!is_null($harmonizedCode) && !is_string($harmonizedCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($harmonizedCode)), __LINE__);
        }
        $this->HarmonizedCode = $harmonizedCode;
        return $this;
    }
    /**
     * Get Weight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $weight
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setWeight(\Drupal\commerce_fedex\FedEx\StructType\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Quantity value
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param float $quantity
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setQuantity($quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get QuantityUnits value
     * @return string|null
     */
    public function getQuantityUnits()
    {
        return $this->QuantityUnits;
    }
    /**
     * Set QuantityUnits value
     * @param string $quantityUnits
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setQuantityUnits($quantityUnits = null)
    {
        // validation for constraint: string
        if (!is_null($quantityUnits) && !is_string($quantityUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quantityUnits)), __LINE__);
        }
        $this->QuantityUnits = $quantityUnits;
        return $this;
    }
    /**
     * Get AdditionalMeasures value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Measure[]|null
     */
    public function getAdditionalMeasures()
    {
        return $this->AdditionalMeasures;
    }
    /**
     * Set AdditionalMeasures value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Measure[] $additionalMeasures
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setAdditionalMeasures(array $additionalMeasures = array())
    {
        foreach ($additionalMeasures as $commodityAdditionalMeasuresItem) {
            // validation for constraint: itemType
            if (!$commodityAdditionalMeasuresItem instanceof \Drupal\commerce_fedex\FedEx\StructType\Measure) {
                throw new \InvalidArgumentException(sprintf('The AdditionalMeasures property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Measure, "%s" given', is_object($commodityAdditionalMeasuresItem) ? get_class($commodityAdditionalMeasuresItem) : gettype($commodityAdditionalMeasuresItem)), __LINE__);
            }
        }
        $this->AdditionalMeasures = $additionalMeasures;
        return $this;
    }
    /**
     * Add item to AdditionalMeasures value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Measure $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function addToAdditionalMeasures(\Drupal\commerce_fedex\FedEx\StructType\Measure $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\Measure) {
            throw new \InvalidArgumentException(sprintf('The AdditionalMeasures property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Measure, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalMeasures[] = $item;
        return $this;
    }
    /**
     * Get UnitPrice value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    /**
     * Set UnitPrice value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $unitPrice
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setUnitPrice(\Drupal\commerce_fedex\FedEx\StructType\Money $unitPrice = null)
    {
        $this->UnitPrice = $unitPrice;
        return $this;
    }
    /**
     * Get CustomsValue value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }
    /**
     * Set CustomsValue value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $customsValue
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setCustomsValue(\Drupal\commerce_fedex\FedEx\StructType\Money $customsValue = null)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    /**
     * Get ExciseConditions value
     * @return \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition[]|null
     */
    public function getExciseConditions()
    {
        return $this->ExciseConditions;
    }
    /**
     * Set ExciseConditions value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition[] $exciseConditions
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setExciseConditions(array $exciseConditions = array())
    {
        foreach ($exciseConditions as $commodityExciseConditionsItem) {
            // validation for constraint: itemType
            if (!$commodityExciseConditionsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition) {
                throw new \InvalidArgumentException(sprintf('The ExciseConditions property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition, "%s" given', is_object($commodityExciseConditionsItem) ? get_class($commodityExciseConditionsItem) : gettype($commodityExciseConditionsItem)), __LINE__);
            }
        }
        $this->ExciseConditions = $exciseConditions;
        return $this;
    }
    /**
     * Add item to ExciseConditions value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function addToExciseConditions(\Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition) {
            throw new \InvalidArgumentException(sprintf('The ExciseConditions property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExciseConditions[] = $item;
        return $this;
    }
    /**
     * Get ExportLicenseNumber value
     * @return string|null
     */
    public function getExportLicenseNumber()
    {
        return $this->ExportLicenseNumber;
    }
    /**
     * Set ExportLicenseNumber value
     * @param string $exportLicenseNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setExportLicenseNumber($exportLicenseNumber = null)
    {
        // validation for constraint: string
        if (!is_null($exportLicenseNumber) && !is_string($exportLicenseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportLicenseNumber)), __LINE__);
        }
        $this->ExportLicenseNumber = $exportLicenseNumber;
        return $this;
    }
    /**
     * Get ExportLicenseExpirationDate value
     * @return string|null
     */
    public function getExportLicenseExpirationDate()
    {
        return $this->ExportLicenseExpirationDate;
    }
    /**
     * Set ExportLicenseExpirationDate value
     * @param string $exportLicenseExpirationDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setExportLicenseExpirationDate($exportLicenseExpirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($exportLicenseExpirationDate) && !is_string($exportLicenseExpirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportLicenseExpirationDate)), __LINE__);
        }
        $this->ExportLicenseExpirationDate = $exportLicenseExpirationDate;
        return $this;
    }
    /**
     * Get CIMarksAndNumbers value
     * @return string|null
     */
    public function getCIMarksAndNumbers()
    {
        return $this->CIMarksAndNumbers;
    }
    /**
     * Set CIMarksAndNumbers value
     * @param string $cIMarksAndNumbers
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setCIMarksAndNumbers($cIMarksAndNumbers = null)
    {
        // validation for constraint: string
        if (!is_null($cIMarksAndNumbers) && !is_string($cIMarksAndNumbers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cIMarksAndNumbers)), __LINE__);
        }
        $this->CIMarksAndNumbers = $cIMarksAndNumbers;
        return $this;
    }
    /**
     * Get PartNumber value
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }
    /**
     * Set PartNumber value
     * @param string $partNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setPartNumber($partNumber = null)
    {
        // validation for constraint: string
        if (!is_null($partNumber) && !is_string($partNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partNumber)), __LINE__);
        }
        $this->PartNumber = $partNumber;
        return $this;
    }
    /**
     * Get NaftaDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail|null
     */
    public function getNaftaDetail()
    {
        return $this->NaftaDetail;
    }
    /**
     * Set NaftaDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail $naftaDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
     */
    public function setNaftaDetail(\Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail $naftaDetail = null)
    {
        $this->NaftaDetail = $naftaDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\Commodity
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
