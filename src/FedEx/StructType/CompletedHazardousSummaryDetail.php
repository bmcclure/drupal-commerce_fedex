<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedHazardousSummaryDetail StructType
 * @subpackage Structs
 */
class CompletedHazardousSummaryDetail extends AbstractStructBase
{
    /**
     * The SmallQuantityExceptionPackageCount
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the total number of packages containing hazardous commodities in small exceptions.
     * - minOccurs: 0
     * @var int
     */
    public $SmallQuantityExceptionPackageCount;
    /**
     * Constructor method for CompletedHazardousSummaryDetail
     * @uses CompletedHazardousSummaryDetail::setSmallQuantityExceptionPackageCount()
     * @param int $smallQuantityExceptionPackageCount
     */
    public function __construct($smallQuantityExceptionPackageCount = null)
    {
        $this
            ->setSmallQuantityExceptionPackageCount($smallQuantityExceptionPackageCount);
    }
    /**
     * Get SmallQuantityExceptionPackageCount value
     * @return int|null
     */
    public function getSmallQuantityExceptionPackageCount()
    {
        return $this->SmallQuantityExceptionPackageCount;
    }
    /**
     * Set SmallQuantityExceptionPackageCount value
     * @param int $smallQuantityExceptionPackageCount
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedHazardousSummaryDetail
     */
    public function setSmallQuantityExceptionPackageCount($smallQuantityExceptionPackageCount = null)
    {
        // validation for constraint: int
        if (!is_null($smallQuantityExceptionPackageCount) && !is_numeric($smallQuantityExceptionPackageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($smallQuantityExceptionPackageCount)), __LINE__);
        }
        $this->SmallQuantityExceptionPackageCount = $smallQuantityExceptionPackageCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedHazardousSummaryDetail
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
