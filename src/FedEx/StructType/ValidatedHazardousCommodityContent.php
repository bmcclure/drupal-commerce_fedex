<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatedHazardousCommodityContent StructType
 * Meta informations extracted from the WSDL
 * - documentation: Documents the kind and quantity of an individual hazardous commodity in a package.
 * @subpackage Structs
 */
class ValidatedHazardousCommodityContent extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Identifies and describes an individual hazardous commodity.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription
     */
    public $Description;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the amount of the commodity in alternate units.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail
     */
    public $Quantity;
    /**
     * The MassPoints
     * Meta informations extracted from the WSDL
     * - documentation: The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.
     * - minOccurs: 0
     * @var float
     */
    public $MassPoints;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided specifications for handling individual commodities.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityOptionDetail
     */
    public $Options;
    /**
     * The NetExplosiveDetail
     * Meta informations extracted from the WSDL
     * - documentation: The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail
     */
    public $NetExplosiveDetail;
    /**
     * Constructor method for ValidatedHazardousCommodityContent
     * @uses ValidatedHazardousCommodityContent::setDescription()
     * @uses ValidatedHazardousCommodityContent::setQuantity()
     * @uses ValidatedHazardousCommodityContent::setMassPoints()
     * @uses ValidatedHazardousCommodityContent::setOptions()
     * @uses ValidatedHazardousCommodityContent::setNetExplosiveDetail()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription $description
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail $quantity
     * @param float $massPoints
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityOptionDetail $options
     * @param \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail $netExplosiveDetail
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription $description = null, \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail $quantity = null, $massPoints = null, \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityOptionDetail $options = null, \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setMassPoints($massPoints)
            ->setOptions($options)
            ->setNetExplosiveDetail($netExplosiveDetail);
    }
    /**
     * Get Description value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription $description
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent
     */
    public function setDescription(\Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityDescription $description = null)
    {
        $this->Description = $description;
        return $this;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent
     */
    public function setQuantity(\Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get MassPoints value
     * @return float|null
     */
    public function getMassPoints()
    {
        return $this->MassPoints;
    }
    /**
     * Set MassPoints value
     * @param float $massPoints
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent
     */
    public function setMassPoints($massPoints = null)
    {
        $this->MassPoints = $massPoints;
        return $this;
    }
    /**
     * Get Options value
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityOptionDetail|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityOptionDetail $options
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent
     */
    public function setOptions(\Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityOptionDetail $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Get NetExplosiveDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail|null
     */
    public function getNetExplosiveDetail()
    {
        return $this->NetExplosiveDetail;
    }
    /**
     * Set NetExplosiveDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail $netExplosiveDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent
     */
    public function setNetExplosiveDetail(\Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this->NetExplosiveDetail = $netExplosiveDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ValidatedHazardousCommodityContent
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
