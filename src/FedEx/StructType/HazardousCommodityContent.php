<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazardousCommodityContent StructType
 * Meta informations extracted from the WSDL
 * - documentation: Documents the kind and quantity of an individual hazardous commodity in a package.
 * @subpackage Structs
 */
class HazardousCommodityContent extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Identifies and describes an individual hazardous commodity.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityDescription
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
     * The InnerReceptacles
     * Meta informations extracted from the WSDL
     * - documentation: This describes the inner receptacle details for a hazardous commodity within the dangerous goods container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail[]
     */
    public $InnerReceptacles;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided specifications for handling individual commodities.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityOptionDetail
     */
    public $Options;
    /**
     * The RadionuclideDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details of any radio active materials within the commodity.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\RadionuclideDetail
     */
    public $RadionuclideDetail;
    /**
     * The NetExplosiveDetail
     * Meta informations extracted from the WSDL
     * - documentation: The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail
     */
    public $NetExplosiveDetail;
    /**
     * Constructor method for HazardousCommodityContent
     * @uses HazardousCommodityContent::setDescription()
     * @uses HazardousCommodityContent::setQuantity()
     * @uses HazardousCommodityContent::setInnerReceptacles()
     * @uses HazardousCommodityContent::setOptions()
     * @uses HazardousCommodityContent::setRadionuclideDetail()
     * @uses HazardousCommodityContent::setNetExplosiveDetail()
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityDescription $description
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail $quantity
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail[] $innerReceptacles
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityOptionDetail $options
     * @param \Drupal\commerce_fedex\FedEx\StructType\RadionuclideDetail $radionuclideDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail $netExplosiveDetail
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityDescription $description = null, \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail $quantity = null, array $innerReceptacles = array(), \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityOptionDetail $options = null, \Drupal\commerce_fedex\FedEx\StructType\RadionuclideDetail $radionuclideDetail = null, \Drupal\commerce_fedex\FedEx\StructType\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setInnerReceptacles($innerReceptacles)
            ->setOptions($options)
            ->setRadionuclideDetail($radionuclideDetail)
            ->setNetExplosiveDetail($netExplosiveDetail);
    }
    /**
     * Get Description value
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityDescription $description
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent
     */
    public function setDescription(\Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityDescription $description = null)
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent
     */
    public function setQuantity(\Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityQuantityDetail $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get InnerReceptacles value
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail[]|null
     */
    public function getInnerReceptacles()
    {
        return $this->InnerReceptacles;
    }
    /**
     * Set InnerReceptacles value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail[] $innerReceptacles
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent
     */
    public function setInnerReceptacles(array $innerReceptacles = array())
    {
        foreach ($innerReceptacles as $hazardousCommodityContentInnerReceptaclesItem) {
            // validation for constraint: itemType
            if (!$hazardousCommodityContentInnerReceptaclesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail) {
                throw new \InvalidArgumentException(sprintf('The InnerReceptacles property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail, "%s" given', is_object($hazardousCommodityContentInnerReceptaclesItem) ? get_class($hazardousCommodityContentInnerReceptaclesItem) : gettype($hazardousCommodityContentInnerReceptaclesItem)), __LINE__);
            }
        }
        $this->InnerReceptacles = $innerReceptacles;
        return $this;
    }
    /**
     * Add item to InnerReceptacles value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent
     */
    public function addToInnerReceptacles(\Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail) {
            throw new \InvalidArgumentException(sprintf('The InnerReceptacles property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityInnerReceptacleDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InnerReceptacles[] = $item;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent
     */
    public function setOptions(\Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityOptionDetail $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Get RadionuclideDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\RadionuclideDetail|null
     */
    public function getRadionuclideDetail()
    {
        return $this->RadionuclideDetail;
    }
    /**
     * Set RadionuclideDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\RadionuclideDetail $radionuclideDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent
     */
    public function setRadionuclideDetail(\Drupal\commerce_fedex\FedEx\StructType\RadionuclideDetail $radionuclideDetail = null)
    {
        $this->RadionuclideDetail = $radionuclideDetail;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\HazardousCommodityContent
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
