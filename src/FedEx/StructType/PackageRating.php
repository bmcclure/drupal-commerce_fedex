<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageRating StructType
 * Meta informations extracted from the WSDL
 * - documentation: This class groups together for a single package all package-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 * @subpackage Structs
 */
class PackageRating extends AbstractStructBase
{
    /**
     * The ActualRateType
     * Meta informations extracted from the WSDL
     * - documentation: This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the package.
     * - minOccurs: 0
     * @var string
     */
    public $ActualRateType;
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The "list" net charge minus "actual" net charge.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The PackageRateDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each element of this field provides package-level rate data for a specific rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail[]
     */
    public $PackageRateDetails;
    /**
     * Constructor method for PackageRating
     * @uses PackageRating::setActualRateType()
     * @uses PackageRating::setEffectiveNetDiscount()
     * @uses PackageRating::setPackageRateDetails()
     * @param string $actualRateType
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail[] $packageRateDetails
     */
    public function __construct($actualRateType = null, \Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount = null, array $packageRateDetails = array())
    {
        $this
            ->setActualRateType($actualRateType)
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setPackageRateDetails($packageRateDetails);
    }
    /**
     * Get ActualRateType value
     * @return string|null
     */
    public function getActualRateType()
    {
        return $this->ActualRateType;
    }
    /**
     * Set ActualRateType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actualRateType
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRating
     */
    public function setActualRateType($actualRateType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::valueIsValid($actualRateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actualRateType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    /**
     * Get EffectiveNetDiscount value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    /**
     * Set EffectiveNetDiscount value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRating
     */
    public function setEffectiveNetDiscount(\Drupal\commerce_fedex\FedEx\StructType\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get PackageRateDetails value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail[]|null
     */
    public function getPackageRateDetails()
    {
        return $this->PackageRateDetails;
    }
    /**
     * Set PackageRateDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail[] $packageRateDetails
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRating
     */
    public function setPackageRateDetails(array $packageRateDetails = array())
    {
        foreach ($packageRateDetails as $packageRatingPackageRateDetailsItem) {
            // validation for constraint: itemType
            if (!$packageRatingPackageRateDetailsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail) {
                throw new \InvalidArgumentException(sprintf('The PackageRateDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail, "%s" given', is_object($packageRatingPackageRateDetailsItem) ? get_class($packageRatingPackageRateDetailsItem) : gettype($packageRatingPackageRateDetailsItem)), __LINE__);
            }
        }
        $this->PackageRateDetails = $packageRateDetails;
        return $this;
    }
    /**
     * Add item to PackageRateDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRating
     */
    public function addToPackageRateDetails(\Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail) {
            throw new \InvalidArgumentException(sprintf('The PackageRateDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\PackageRateDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageRateDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageRating
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
