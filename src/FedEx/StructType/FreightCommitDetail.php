<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightCommitDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about the Freight Service Centers associated with this shipment.
 * @subpackage Structs
 */
class FreightCommitDetail extends AbstractStructBase
{
    /**
     * The OriginDetail
     * Meta informations extracted from the WSDL
     * - documentation: Information about the origin Freight Service Center.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public $OriginDetail;
    /**
     * The DestinationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Information about the destination Freight Service Center.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail
     */
    public $DestinationDetail;
    /**
     * The TotalDistance
     * Meta informations extracted from the WSDL
     * - documentation: The distance between the origin and destination FreightService Centers
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Distance
     */
    public $TotalDistance;
    /**
     * Constructor method for FreightCommitDetail
     * @uses FreightCommitDetail::setOriginDetail()
     * @uses FreightCommitDetail::setDestinationDetail()
     * @uses FreightCommitDetail::setTotalDistance()
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail $originDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail $destinationDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\Distance $totalDistance
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail $originDetail = null, \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail $destinationDetail = null, \Drupal\commerce_fedex\FedEx\StructType\Distance $totalDistance = null)
    {
        $this
            ->setOriginDetail($originDetail)
            ->setDestinationDetail($destinationDetail)
            ->setTotalDistance($totalDistance);
    }
    /**
     * Get OriginDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail|null
     */
    public function getOriginDetail()
    {
        return $this->OriginDetail;
    }
    /**
     * Set OriginDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail $originDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightCommitDetail
     */
    public function setOriginDetail(\Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail $originDetail = null)
    {
        $this->OriginDetail = $originDetail;
        return $this;
    }
    /**
     * Get DestinationDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail|null
     */
    public function getDestinationDetail()
    {
        return $this->DestinationDetail;
    }
    /**
     * Set DestinationDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail $destinationDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightCommitDetail
     */
    public function setDestinationDetail(\Drupal\commerce_fedex\FedEx\StructType\FreightServiceCenterDetail $destinationDetail = null)
    {
        $this->DestinationDetail = $destinationDetail;
        return $this;
    }
    /**
     * Get TotalDistance value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Distance|null
     */
    public function getTotalDistance()
    {
        return $this->TotalDistance;
    }
    /**
     * Set TotalDistance value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Distance $totalDistance
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightCommitDetail
     */
    public function setTotalDistance(\Drupal\commerce_fedex\FedEx\StructType\Distance $totalDistance = null)
    {
        $this->TotalDistance = $totalDistance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightCommitDetail
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
