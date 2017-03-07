<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazardousCommodityInnerReceptacleDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: This describes information about the inner receptacles for the hazardous commodity in a particular dangerous goods container.
 * @subpackage Structs
 */
class HazardousCommodityInnerReceptacleDetail extends AbstractStructBase
{
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: This specifies the quantity contained in the inner receptacle.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail
     */
    public $Quantity;
    /**
     * Constructor method for HazardousCommodityInnerReceptacleDetail
     * @uses HazardousCommodityInnerReceptacleDetail::setQuantity()
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail $quantity
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail $quantity = null)
    {
        $this
            ->setQuantity($quantity);
    }
    /**
     * Get Quantity value
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail $quantity
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail
     */
    public function setQuantity(\Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail
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
