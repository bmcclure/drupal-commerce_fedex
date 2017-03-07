<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageSpecialServicesRequested StructType
 * Meta informations extracted from the WSDL
 * - documentation: These special services are available at the package level for some or all service types. If the shipper is requesting a special service which requires additional data, the package special service type must be present in the
 * specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 * @subpackage Structs
 */
class PackageSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - documentation: The types of all special services requested for the enclosing shipment or package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServiceTypes;
    /**
     * The CodDetail
     * Meta informations extracted from the WSDL
     * - documentation: For use with FedEx Ground services only; COD must be present in shipment's special services.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\CodDetail
     */
    public $CodDetail;
    /**
     * The DangerousGoodsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail
     */
    public $DangerousGoodsDetail;
    /**
     * The DryIceWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Weight
     */
    public $DryIceWeight;
    /**
     * The SignatureOptionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\SignatureOptionDetail
     */
    public $SignatureOptionDetail;
    /**
     * The PriorityAlertDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\PriorityAlertDetail
     */
    public $PriorityAlertDetail;
    /**
     * The AlcoholDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\AlcoholDetail
     */
    public $AlcoholDetail;
    /**
     * Constructor method for PackageSpecialServicesRequested
     * @uses PackageSpecialServicesRequested::setSpecialServiceTypes()
     * @uses PackageSpecialServicesRequested::setCodDetail()
     * @uses PackageSpecialServicesRequested::setDangerousGoodsDetail()
     * @uses PackageSpecialServicesRequested::setDryIceWeight()
     * @uses PackageSpecialServicesRequested::setSignatureOptionDetail()
     * @uses PackageSpecialServicesRequested::setPriorityAlertDetail()
     * @uses PackageSpecialServicesRequested::setAlcoholDetail()
     * @param string[] $specialServiceTypes
     * @param \Drupal\commerce_fedex\FedEx\StructType\CodDetail $codDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail $dangerousGoodsDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $dryIceWeight
     * @param \Drupal\commerce_fedex\FedEx\StructType\SignatureOptionDetail $signatureOptionDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\PriorityAlertDetail $priorityAlertDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\AlcoholDetail $alcoholDetail
     */
    public function __construct(array $specialServiceTypes = array(), \Drupal\commerce_fedex\FedEx\StructType\CodDetail $codDetail = null, \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail $dangerousGoodsDetail = null, \Drupal\commerce_fedex\FedEx\StructType\Weight $dryIceWeight = null, \Drupal\commerce_fedex\FedEx\StructType\SignatureOptionDetail $signatureOptionDetail = null, \Drupal\commerce_fedex\FedEx\StructType\PriorityAlertDetail $priorityAlertDetail = null, \Drupal\commerce_fedex\FedEx\StructType\AlcoholDetail $alcoholDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
            ->setCodDetail($codDetail)
            ->setDangerousGoodsDetail($dangerousGoodsDetail)
            ->setDryIceWeight($dryIceWeight)
            ->setSignatureOptionDetail($signatureOptionDetail)
            ->setPriorityAlertDetail($priorityAlertDetail)
            ->setAlcoholDetail($alcoholDetail);
    }
    /**
     * Get SpecialServiceTypes value
     * @return string[]|null
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    /**
     * Set SpecialServiceTypes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PackageSpecialServiceType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PackageSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $specialServiceTypes
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        $invalidValues = array();
        foreach ($specialServiceTypes as $packageSpecialServicesRequestedSpecialServiceTypesItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\PackageSpecialServiceType::valueIsValid($packageSpecialServicesRequestedSpecialServiceTypesItem)) {
                $invalidValues[] = var_export($packageSpecialServicesRequestedSpecialServiceTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\PackageSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Add item to SpecialServiceTypes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PackageSpecialServiceType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PackageSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageSpecialServicesRequested
     */
    public function addToSpecialServiceTypes($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\PackageSpecialServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\PackageSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes[] = $item;
        return $this;
    }
    /**
     * Get CodDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    /**
     * Set CodDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\CodDetail $codDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageSpecialServicesRequested
     */
    public function setCodDetail(\Drupal\commerce_fedex\FedEx\StructType\CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    /**
     * Get DangerousGoodsDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail|null
     */
    public function getDangerousGoodsDetail()
    {
        return $this->DangerousGoodsDetail;
    }
    /**
     * Set DangerousGoodsDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail $dangerousGoodsDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail(\Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail $dangerousGoodsDetail = null)
    {
        $this->DangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    /**
     * Get DryIceWeight value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Weight|null
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }
    /**
     * Set DryIceWeight value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Weight $dryIceWeight
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageSpecialServicesRequested
     */
    public function setDryIceWeight(\Drupal\commerce_fedex\FedEx\StructType\Weight $dryIceWeight = null)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Get SignatureOptionDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureOptionDetail|null
     */
    public function getSignatureOptionDetail()
    {
        return $this->SignatureOptionDetail;
    }
    /**
     * Set SignatureOptionDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\SignatureOptionDetail $signatureOptionDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail(\Drupal\commerce_fedex\FedEx\StructType\SignatureOptionDetail $signatureOptionDetail = null)
    {
        $this->SignatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    /**
     * Get PriorityAlertDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\PriorityAlertDetail|null
     */
    public function getPriorityAlertDetail()
    {
        return $this->PriorityAlertDetail;
    }
    /**
     * Set PriorityAlertDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\PriorityAlertDetail $priorityAlertDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail(\Drupal\commerce_fedex\FedEx\StructType\PriorityAlertDetail $priorityAlertDetail = null)
    {
        $this->PriorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    /**
     * Get AlcoholDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\AlcoholDetail|null
     */
    public function getAlcoholDetail()
    {
        return $this->AlcoholDetail;
    }
    /**
     * Set AlcoholDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\AlcoholDetail $alcoholDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageSpecialServicesRequested
     */
    public function setAlcoholDetail(\Drupal\commerce_fedex\FedEx\StructType\AlcoholDetail $alcoholDetail = null)
    {
        $this->AlcoholDetail = $alcoholDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\PackageSpecialServicesRequested
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
