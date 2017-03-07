<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContent StructType
 * @subpackage Structs
 */
class DocTabContent extends AbstractStructBase
{
    /**
     * The DocTabContentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocTabContentType;
    /**
     * The Zone001
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DocTabContentZone001
     */
    public $Zone001;
    /**
     * The Barcoded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DocTabContentBarcoded
     */
    public $Barcoded;
    /**
     * Constructor method for DocTabContent
     * @uses DocTabContent::setDocTabContentType()
     * @uses DocTabContent::setZone001()
     * @uses DocTabContent::setBarcoded()
     * @param string $docTabContentType
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocTabContentZone001 $zone001
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocTabContentBarcoded $barcoded
     */
    public function __construct($docTabContentType = null, \Drupal\commerce_fedex\FedEx\StructType\DocTabContentZone001 $zone001 = null, \Drupal\commerce_fedex\FedEx\StructType\DocTabContentBarcoded $barcoded = null)
    {
        $this
            ->setDocTabContentType($docTabContentType)
            ->setZone001($zone001)
            ->setBarcoded($barcoded);
    }
    /**
     * Get DocTabContentType value
     * @return string|null
     */
    public function getDocTabContentType()
    {
        return $this->DocTabContentType;
    }
    /**
     * Set DocTabContentType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DocTabContentType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DocTabContentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $docTabContentType
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContent
     */
    public function setDocTabContentType($docTabContentType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\DocTabContentType::valueIsValid($docTabContentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $docTabContentType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\DocTabContentType::getValidValues())), __LINE__);
        }
        $this->DocTabContentType = $docTabContentType;
        return $this;
    }
    /**
     * Get Zone001 value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContentZone001|null
     */
    public function getZone001()
    {
        return $this->Zone001;
    }
    /**
     * Set Zone001 value
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocTabContentZone001 $zone001
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContent
     */
    public function setZone001(\Drupal\commerce_fedex\FedEx\StructType\DocTabContentZone001 $zone001 = null)
    {
        $this->Zone001 = $zone001;
        return $this;
    }
    /**
     * Get Barcoded value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContentBarcoded|null
     */
    public function getBarcoded()
    {
        return $this->Barcoded;
    }
    /**
     * Set Barcoded value
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocTabContentBarcoded $barcoded
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContent
     */
    public function setBarcoded(\Drupal\commerce_fedex\FedEx\StructType\DocTabContentBarcoded $barcoded = null)
    {
        $this->Barcoded = $barcoded;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContent
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
