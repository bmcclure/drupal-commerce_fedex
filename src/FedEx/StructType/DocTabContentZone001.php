<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContentZone001 StructType
 * @subpackage Structs
 */
class DocTabContentZone001 extends AbstractStructBase
{
    /**
     * The DocTabZoneSpecifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification[]
     */
    public $DocTabZoneSpecifications;
    /**
     * Constructor method for DocTabContentZone001
     * @uses DocTabContentZone001::setDocTabZoneSpecifications()
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification[] $docTabZoneSpecifications
     */
    public function __construct(array $docTabZoneSpecifications = array())
    {
        $this
            ->setDocTabZoneSpecifications($docTabZoneSpecifications);
    }
    /**
     * Get DocTabZoneSpecifications value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification[]|null
     */
    public function getDocTabZoneSpecifications()
    {
        return $this->DocTabZoneSpecifications;
    }
    /**
     * Set DocTabZoneSpecifications value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification[] $docTabZoneSpecifications
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContentZone001
     */
    public function setDocTabZoneSpecifications(array $docTabZoneSpecifications = array())
    {
        foreach ($docTabZoneSpecifications as $docTabContentZone001DocTabZoneSpecificationsItem) {
            // validation for constraint: itemType
            if (!$docTabContentZone001DocTabZoneSpecificationsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification) {
                throw new \InvalidArgumentException(sprintf('The DocTabZoneSpecifications property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification, "%s" given', is_object($docTabContentZone001DocTabZoneSpecificationsItem) ? get_class($docTabContentZone001DocTabZoneSpecificationsItem) : gettype($docTabContentZone001DocTabZoneSpecificationsItem)), __LINE__);
            }
        }
        $this->DocTabZoneSpecifications = $docTabZoneSpecifications;
        return $this;
    }
    /**
     * Add item to DocTabZoneSpecifications value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContentZone001
     */
    public function addToDocTabZoneSpecifications(\Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification) {
            throw new \InvalidArgumentException(sprintf('The DocTabZoneSpecifications property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DocTabZoneSpecifications[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabContentZone001
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
