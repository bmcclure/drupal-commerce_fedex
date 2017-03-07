<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageRateDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Data for a package's rates, as calculated per a specific rate type.
 * @subpackage Structs
 */
class PackageRateDetail extends AbstractStructBase
{
    /**
     * The RateType
     * Meta informations extracted from the WSDL
     * - documentation: Type used for this specific set of rate data.
     * - minOccurs: 0
     * @var string
     */
    public $RateType;
    /**
     * The RatedWeightMethod
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which weight was used.
     * - minOccurs: 0
     * @var string
     */
    public $RatedWeightMethod;
    /**
     * The MinimumChargeType
     * Meta informations extracted from the WSDL
     * - documentation: INTERNAL FEDEX USE ONLY.
     * - minOccurs: 0
     * @var string
     */
    public $MinimumChargeType;
    /**
     * The BillingWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Weight
     */
    public $BillingWeight;
    /**
     * The DimWeight
     * Meta informations extracted from the WSDL
     * - documentation: The dimensional weight of this package (if greater than actual).
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Weight
     */
    public $DimWeight;
    /**
     * The OversizeWeight
     * Meta informations extracted from the WSDL
     * - documentation: The oversize weight of this package (if the package is oversize).
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Weight
     */
    public $OversizeWeight;
    /**
     * The BaseCharge
     * Meta informations extracted from the WSDL
     * - documentation: The transportation charge only (prior to any discounts applied) for this package.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $BaseCharge;
    /**
     * The TotalFreightDiscounts
     * Meta informations extracted from the WSDL
     * - documentation: The sum of all discounts on this package.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $TotalFreightDiscounts;
    /**
     * The NetFreight
     * Meta informations extracted from the WSDL
     * - documentation: This package's baseCharge - totalFreightDiscounts.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $NetFreight;
    /**
     * The TotalSurcharges
     * Meta informations extracted from the WSDL
     * - documentation: The sum of all surcharges on this package.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $TotalSurcharges;
    /**
     * The NetFedExCharge
     * Meta informations extracted from the WSDL
     * - documentation: This package's netFreight + totalSurcharges (not including totalTaxes).
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $NetFedExCharge;
    /**
     * The TotalTaxes
     * Meta informations extracted from the WSDL
     * - documentation: The sum of all taxes on this package.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $TotalTaxes;
    /**
     * The NetCharge
     * Meta informations extracted from the WSDL
     * - documentation: This package's netFreight + totalSurcharges + totalTaxes.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $NetCharge;
    /**
     * The TotalRebates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $TotalRebates;
    /**
     * The FreightDiscounts
     * Meta informations extracted from the WSDL
     * - documentation: All rate discounts that apply to this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\RateDiscount[]
     */
    public $FreightDiscounts;
    /**
     * The Rebates
     * Meta informations extracted from the WSDL
     * - documentation: All rebates that apply to this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Rebate[]
     */
    public $Rebates;
    /**
     * The Surcharges
     * Meta informations extracted from the WSDL
     * - documentation: All surcharges that apply to this package (either because of characteristics of the package itself, or because it is carrying per-shipment surcharges for the shipment of which it is a part).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Surcharge[]
     */
    public $Surcharges;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - documentation: All taxes applicable (or distributed to) this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Tax[]
     */
    public $Taxes;
    /**
     * The VariableHandlingCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingCharges
     */
    public $VariableHandlingCharges;
    /**
     * Constructor method for PackageRateDetail
     * @uses PackageRateDetail::setRateType()
     * @uses PackageRateDetail::setRatedWeightMethod()
     * @uses PackageRateDetail::setMinimumChargeType()
     * @uses PackageRateDetail::setBillingWeight()
     * @uses PackageRateDetail::setDimWeight()
     * @uses PackageRateDetail::setOversizeWeight()
     * @uses PackageRateDetail::setBaseCharge()
     * @uses PackageRateDetail::setTotalFreightDiscounts()
     * @uses PackageRateDetail::setNetFreight()
     * @uses PackageRateDetail::setTotalSurcharges()
     * @uses PackageRateDetail::setNetFedExCharge()
     * @uses PackageRateDetail::setTotalTaxes()
     * @uses PackageRateDetail::setNetCharge()
     * @uses PackageRateDetail::setTotalRebates()
     * @uses PackageRateDetail::setFreightDiscounts()
     * @uses PackageRateDetail::setRebates()
     * @uses PackageRateDetail::setSurcharges()
     * @uses PackageRateDetail::setTaxes()
     * @uses PackageRateDetail::setVariableHandlingCharges()
     * @param string $rateType
     * @param string $ratedWeightMethod
     * @param string $minimumChargeType
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $billingWeight
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $dimWeight
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $oversizeWeight
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $baseCharge
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalFreightDiscounts
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $netFreight
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalSurcharges
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $netFedExCharge
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalTaxes
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $netCharge
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalRebates
     * @param \Drupal\commerce_fedex\FedEx\StructType\RateDiscount[] $freightDiscounts
     * @param \Drupal\commerce_fedex\FedEx\StructType\Rebate[] $rebates
     * @param \Drupal\commerce_fedex\FedEx\StructType\Surcharge[] $surcharges
     * @param \Drupal\commerce_fedex\FedEx\StructType\Tax[] $taxes
     * @param \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingCharges $variableHandlingCharges
     */
    public function __construct($rateType = null, $ratedWeightMethod = null, $minimumChargeType = null, \Drupal\commerce_fedex\FedEx\StructType\Weight $billingWeight = null, \Drupal\commerce_fedex\FedEx\StructType\Weight $dimWeight = null, \Drupal\commerce_fedex\FedEx\StructType\Weight $oversizeWeight = null, \Drupal\commerce_fedex\FedEx\StructType\Money $baseCharge = null, \Drupal\commerce_fedex\FedEx\StructType\Money $totalFreightDiscounts = null, \Drupal\commerce_fedex\FedEx\StructType\Money $netFreight = null, \Drupal\commerce_fedex\FedEx\StructType\Money $totalSurcharges = null, \Drupal\commerce_fedex\FedEx\StructType\Money $netFedExCharge = null, \Drupal\commerce_fedex\FedEx\StructType\Money $totalTaxes = null, \Drupal\commerce_fedex\FedEx\StructType\Money $netCharge = null, \Drupal\commerce_fedex\FedEx\StructType\Money $totalRebates = null, array $freightDiscounts = array(), array $rebates = array(), array $surcharges = array(), array $taxes = array(), \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingCharges $variableHandlingCharges = null)
    {
        $this
            ->setRateType($rateType)
            ->setRatedWeightMethod($ratedWeightMethod)
            ->setMinimumChargeType($minimumChargeType)
            ->setBillingWeight($billingWeight)
            ->setDimWeight($dimWeight)
            ->setOversizeWeight($oversizeWeight)
            ->setBaseCharge($baseCharge)
            ->setTotalFreightDiscounts($totalFreightDiscounts)
            ->setNetFreight($netFreight)
            ->setTotalSurcharges($totalSurcharges)
            ->setNetFedExCharge($netFedExCharge)
            ->setTotalTaxes($totalTaxes)
            ->setNetCharge($netCharge)
            ->setTotalRebates($totalRebates)
            ->setFreightDiscounts($freightDiscounts)
            ->setRebates($rebates)
            ->setSurcharges($surcharges)
            ->setTaxes($taxes)
            ->setVariableHandlingCharges($variableHandlingCharges);
    }
    /**
     * Get RateType value
     * @return string|null
     */
    public function getRateType()
    {
        return $this->RateType;
    }
    /**
     * Set RateType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $rateType
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setRateType($rateType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::valueIsValid($rateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rateType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->RateType = $rateType;
        return $this;
    }
    /**
     * Get RatedWeightMethod value
     * @return string|null
     */
    public function getRatedWeightMethod()
    {
        return $this->RatedWeightMethod;
    }
    /**
     * Set RatedWeightMethod value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RatedWeightMethod::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\RatedWeightMethod::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ratedWeightMethod
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setRatedWeightMethod($ratedWeightMethod = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\RatedWeightMethod::valueIsValid($ratedWeightMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ratedWeightMethod, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\RatedWeightMethod::getValidValues())), __LINE__);
        }
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    /**
     * Get MinimumChargeType value
     * @return string|null
     */
    public function getMinimumChargeType()
    {
        return $this->MinimumChargeType;
    }
    /**
     * Set MinimumChargeType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\MinimumChargeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\MinimumChargeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $minimumChargeType
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setMinimumChargeType($minimumChargeType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\MinimumChargeType::valueIsValid($minimumChargeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $minimumChargeType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\MinimumChargeType::getValidValues())), __LINE__);
        }
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    /**
     * Get BillingWeight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Weight|null
     */
    public function getBillingWeight()
    {
        return $this->BillingWeight;
    }
    /**
     * Set BillingWeight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $billingWeight
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setBillingWeight(\Drupal\commerce_fedex\FedEx\StructType\Weight $billingWeight = null)
    {
        $this->BillingWeight = $billingWeight;
        return $this;
    }
    /**
     * Get DimWeight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Weight|null
     */
    public function getDimWeight()
    {
        return $this->DimWeight;
    }
    /**
     * Set DimWeight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $dimWeight
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setDimWeight(\Drupal\commerce_fedex\FedEx\StructType\Weight $dimWeight = null)
    {
        $this->DimWeight = $dimWeight;
        return $this;
    }
    /**
     * Get OversizeWeight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Weight|null
     */
    public function getOversizeWeight()
    {
        return $this->OversizeWeight;
    }
    /**
     * Set OversizeWeight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $oversizeWeight
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setOversizeWeight(\Drupal\commerce_fedex\FedEx\StructType\Weight $oversizeWeight = null)
    {
        $this->OversizeWeight = $oversizeWeight;
        return $this;
    }
    /**
     * Get BaseCharge value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getBaseCharge()
    {
        return $this->BaseCharge;
    }
    /**
     * Set BaseCharge value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $baseCharge
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setBaseCharge(\Drupal\commerce_fedex\FedEx\StructType\Money $baseCharge = null)
    {
        $this->BaseCharge = $baseCharge;
        return $this;
    }
    /**
     * Get TotalFreightDiscounts value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getTotalFreightDiscounts()
    {
        return $this->TotalFreightDiscounts;
    }
    /**
     * Set TotalFreightDiscounts value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalFreightDiscounts
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setTotalFreightDiscounts(\Drupal\commerce_fedex\FedEx\StructType\Money $totalFreightDiscounts = null)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    /**
     * Get NetFreight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getNetFreight()
    {
        return $this->NetFreight;
    }
    /**
     * Set NetFreight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $netFreight
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setNetFreight(\Drupal\commerce_fedex\FedEx\StructType\Money $netFreight = null)
    {
        $this->NetFreight = $netFreight;
        return $this;
    }
    /**
     * Get TotalSurcharges value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getTotalSurcharges()
    {
        return $this->TotalSurcharges;
    }
    /**
     * Set TotalSurcharges value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalSurcharges
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setTotalSurcharges(\Drupal\commerce_fedex\FedEx\StructType\Money $totalSurcharges = null)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    /**
     * Get NetFedExCharge value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getNetFedExCharge()
    {
        return $this->NetFedExCharge;
    }
    /**
     * Set NetFedExCharge value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $netFedExCharge
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setNetFedExCharge(\Drupal\commerce_fedex\FedEx\StructType\Money $netFedExCharge = null)
    {
        $this->NetFedExCharge = $netFedExCharge;
        return $this;
    }
    /**
     * Get TotalTaxes value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getTotalTaxes()
    {
        return $this->TotalTaxes;
    }
    /**
     * Set TotalTaxes value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalTaxes
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setTotalTaxes(\Drupal\commerce_fedex\FedEx\StructType\Money $totalTaxes = null)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    /**
     * Get NetCharge value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getNetCharge()
    {
        return $this->NetCharge;
    }
    /**
     * Set NetCharge value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $netCharge
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setNetCharge(\Drupal\commerce_fedex\FedEx\StructType\Money $netCharge = null)
    {
        $this->NetCharge = $netCharge;
        return $this;
    }
    /**
     * Get TotalRebates value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getTotalRebates()
    {
        return $this->TotalRebates;
    }
    /**
     * Set TotalRebates value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalRebates
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setTotalRebates(\Drupal\commerce_fedex\FedEx\StructType\Money $totalRebates = null)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    /**
     * Get FreightDiscounts value
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateDiscount[]|null
     */
    public function getFreightDiscounts()
    {
        return $this->FreightDiscounts;
    }
    /**
     * Set FreightDiscounts value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\RateDiscount[] $freightDiscounts
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts = array())
    {
        foreach ($freightDiscounts as $packageRateDetailFreightDiscountsItem) {
            // validation for constraint: itemType
            if (!$packageRateDetailFreightDiscountsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\RateDiscount) {
                throw new \InvalidArgumentException(sprintf('The FreightDiscounts property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\RateDiscount, "%s" given', is_object($packageRateDetailFreightDiscountsItem) ? get_class($packageRateDetailFreightDiscountsItem) : gettype($packageRateDetailFreightDiscountsItem)), __LINE__);
            }
        }
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    /**
     * Add item to FreightDiscounts value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\RateDiscount $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function addToFreightDiscounts(\Drupal\commerce_fedex\FedEx\StructType\RateDiscount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\RateDiscount) {
            throw new \InvalidArgumentException(sprintf('The FreightDiscounts property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\RateDiscount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FreightDiscounts[] = $item;
        return $this;
    }
    /**
     * Get Rebates value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Rebate[]|null
     */
    public function getRebates()
    {
        return $this->Rebates;
    }
    /**
     * Set Rebates value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Rebate[] $rebates
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setRebates(array $rebates = array())
    {
        foreach ($rebates as $packageRateDetailRebatesItem) {
            // validation for constraint: itemType
            if (!$packageRateDetailRebatesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\Rebate) {
                throw new \InvalidArgumentException(sprintf('The Rebates property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Rebate, "%s" given', is_object($packageRateDetailRebatesItem) ? get_class($packageRateDetailRebatesItem) : gettype($packageRateDetailRebatesItem)), __LINE__);
            }
        }
        $this->Rebates = $rebates;
        return $this;
    }
    /**
     * Add item to Rebates value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Rebate $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function addToRebates(\Drupal\commerce_fedex\FedEx\StructType\Rebate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\Rebate) {
            throw new \InvalidArgumentException(sprintf('The Rebates property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Rebate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Rebates[] = $item;
        return $this;
    }
    /**
     * Get Surcharges value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Surcharge[]|null
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }
    /**
     * Set Surcharges value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Surcharge[] $surcharges
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setSurcharges(array $surcharges = array())
    {
        foreach ($surcharges as $packageRateDetailSurchargesItem) {
            // validation for constraint: itemType
            if (!$packageRateDetailSurchargesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\Surcharge) {
                throw new \InvalidArgumentException(sprintf('The Surcharges property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Surcharge, "%s" given', is_object($packageRateDetailSurchargesItem) ? get_class($packageRateDetailSurchargesItem) : gettype($packageRateDetailSurchargesItem)), __LINE__);
            }
        }
        $this->Surcharges = $surcharges;
        return $this;
    }
    /**
     * Add item to Surcharges value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Surcharge $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function addToSurcharges(\Drupal\commerce_fedex\FedEx\StructType\Surcharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\Surcharge) {
            throw new \InvalidArgumentException(sprintf('The Surcharges property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Surcharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Surcharges[] = $item;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Tax[]|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Tax[] $taxes
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setTaxes(array $taxes = array())
    {
        foreach ($taxes as $packageRateDetailTaxesItem) {
            // validation for constraint: itemType
            if (!$packageRateDetailTaxesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\Tax) {
                throw new \InvalidArgumentException(sprintf('The Taxes property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Tax, "%s" given', is_object($packageRateDetailTaxesItem) ? get_class($packageRateDetailTaxesItem) : gettype($packageRateDetailTaxesItem)), __LINE__);
            }
        }
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Add item to Taxes value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Tax $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function addToTaxes(\Drupal\commerce_fedex\FedEx\StructType\Tax $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\Tax) {
            throw new \InvalidArgumentException(sprintf('The Taxes property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Tax, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Taxes[] = $item;
        return $this;
    }
    /**
     * Get VariableHandlingCharges value
     * @return \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingCharges|null
     */
    public function getVariableHandlingCharges()
    {
        return $this->VariableHandlingCharges;
    }
    /**
     * Set VariableHandlingCharges value
     * @param \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingCharges $variableHandlingCharges
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
     */
    public function setVariableHandlingCharges(\Drupal\commerce_fedex\FedEx\StructType\VariableHandlingCharges $variableHandlingCharges = null)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail
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
