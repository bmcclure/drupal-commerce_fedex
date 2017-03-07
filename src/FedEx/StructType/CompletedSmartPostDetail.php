<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedSmartPostDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides reply information specific to SmartPost shipments.
 * @subpackage Structs
 */
class CompletedSmartPostDetail extends AbstractStructBase
{
    /**
     * The PickUpCarrier
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the carrier that will pick up the SmartPost shipment.
     * - minOccurs: 0
     * @var string
     */
    public $PickUpCarrier;
    /**
     * The Machinable
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the shipment is deemed to be machineable, based on dimensions, weight, and packaging.
     * - minOccurs: 0
     * @var bool
     */
    public $Machinable;
    /**
     * Constructor method for CompletedSmartPostDetail
     * @uses CompletedSmartPostDetail::setPickUpCarrier()
     * @uses CompletedSmartPostDetail::setMachinable()
     * @param string $pickUpCarrier
     * @param bool $machinable
     */
    public function __construct($pickUpCarrier = null, $machinable = null)
    {
        $this
            ->setPickUpCarrier($pickUpCarrier)
            ->setMachinable($machinable);
    }
    /**
     * Get PickUpCarrier value
     * @return string|null
     */
    public function getPickUpCarrier()
    {
        return $this->PickUpCarrier;
    }
    /**
     * Set PickUpCarrier value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pickUpCarrier
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedSmartPostDetail
     */
    public function setPickUpCarrier($pickUpCarrier = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::valueIsValid($pickUpCarrier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pickUpCarrier, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->PickUpCarrier = $pickUpCarrier;
        return $this;
    }
    /**
     * Get Machinable value
     * @return bool|null
     */
    public function getMachinable()
    {
        return $this->Machinable;
    }
    /**
     * Set Machinable value
     * @param bool $machinable
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedSmartPostDetail
     */
    public function setMachinable($machinable = null)
    {
        $this->Machinable = $machinable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedSmartPostDetail
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
