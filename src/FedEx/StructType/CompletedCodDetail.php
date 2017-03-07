<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedCodDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the results of processing for the COD special service.
 * @subpackage Structs
 */
class CompletedCodDetail extends AbstractStructBase
{
    /**
     * The CollectionAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $CollectionAmount;
    /**
     * The AdjustmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdjustmentType;
    /**
     * Constructor method for CompletedCodDetail
     * @uses CompletedCodDetail::setCollectionAmount()
     * @uses CompletedCodDetail::setAdjustmentType()
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $collectionAmount
     * @param string $adjustmentType
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\Money $collectionAmount = null, $adjustmentType = null)
    {
        $this
            ->setCollectionAmount($collectionAmount)
            ->setAdjustmentType($adjustmentType);
    }
    /**
     * Get CollectionAmount value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getCollectionAmount()
    {
        return $this->CollectionAmount;
    }
    /**
     * Set CollectionAmount value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $collectionAmount
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedCodDetail
     */
    public function setCollectionAmount(\Drupal\commerce_fedex\FedEx\StructType\Money $collectionAmount = null)
    {
        $this->CollectionAmount = $collectionAmount;
        return $this;
    }
    /**
     * Get AdjustmentType value
     * @return string|null
     */
    public function getAdjustmentType()
    {
        return $this->AdjustmentType;
    }
    /**
     * Set AdjustmentType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CodAdjustmentType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CodAdjustmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $adjustmentType
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedCodDetail
     */
    public function setAdjustmentType($adjustmentType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\CodAdjustmentType::valueIsValid($adjustmentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $adjustmentType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CodAdjustmentType::getValidValues())), __LINE__);
        }
        $this->AdjustmentType = $adjustmentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedCodDetail
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
