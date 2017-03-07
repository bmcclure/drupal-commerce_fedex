<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodReturnPackageDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the information associated with a package that has COD special service in a ground shipment.
 * @subpackage Structs
 */
class CodReturnPackageDetail extends AbstractStructBase
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
     * The Electronic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Electronic;
    /**
     * The Barcodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PackageBarcodes
     */
    public $Barcodes;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument
     */
    public $Label;
    /**
     * Constructor method for CodReturnPackageDetail
     * @uses CodReturnPackageDetail::setCollectionAmount()
     * @uses CodReturnPackageDetail::setAdjustmentType()
     * @uses CodReturnPackageDetail::setElectronic()
     * @uses CodReturnPackageDetail::setBarcodes()
     * @uses CodReturnPackageDetail::setLabel()
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $collectionAmount
     * @param string $adjustmentType
     * @param bool $electronic
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageBarcodes $barcodes
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $label
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\Money $collectionAmount = null, $adjustmentType = null, $electronic = null, \Drupal\commerce_fedex\FedEx\StructType\PackageBarcodes $barcodes = null, \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $label = null)
    {
        $this
            ->setCollectionAmount($collectionAmount)
            ->setAdjustmentType($adjustmentType)
            ->setElectronic($electronic)
            ->setBarcodes($barcodes)
            ->setLabel($label);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail
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
     * Get Electronic value
     * @return bool|null
     */
    public function getElectronic()
    {
        return $this->Electronic;
    }
    /**
     * Set Electronic value
     * @param bool $electronic
     * @return \Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail
     */
    public function setElectronic($electronic = null)
    {
        $this->Electronic = $electronic;
        return $this;
    }
    /**
     * Get Barcodes value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageBarcodes|null
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }
    /**
     * Set Barcodes value
     * @param \Drupal\commerce_fedex\FedEx\StructType\PackageBarcodes $barcodes
     * @return \Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail
     */
    public function setBarcodes(\Drupal\commerce_fedex\FedEx\StructType\PackageBarcodes $barcodes = null)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    /**
     * Get Label value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $label
     * @return \Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail
     */
    public function setLabel(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocument $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CodReturnPackageDetail
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
