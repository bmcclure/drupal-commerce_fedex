<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentConfigurationData StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies data structures that may be re-used multiple times with s single shipment.
 * @subpackage Structs
 */
class ShipmentConfigurationData extends AbstractStructBase
{
    /**
     * The DangerousGoodsPackageConfigurations
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the data that is common to dangerous goods packages in the shipment. This is populated when the shipment contains packages with identical dangerous goods commodities.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail[]
     */
    public $DangerousGoodsPackageConfigurations;
    /**
     * Constructor method for ShipmentConfigurationData
     * @uses ShipmentConfigurationData::setDangerousGoodsPackageConfigurations()
     * @param \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail[] $dangerousGoodsPackageConfigurations
     */
    public function __construct(array $dangerousGoodsPackageConfigurations = array())
    {
        $this
            ->setDangerousGoodsPackageConfigurations($dangerousGoodsPackageConfigurations);
    }
    /**
     * Get DangerousGoodsPackageConfigurations value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail[]|null
     */
    public function getDangerousGoodsPackageConfigurations()
    {
        return $this->DangerousGoodsPackageConfigurations;
    }
    /**
     * Set DangerousGoodsPackageConfigurations value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail[] $dangerousGoodsPackageConfigurations
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentConfigurationData
     */
    public function setDangerousGoodsPackageConfigurations(array $dangerousGoodsPackageConfigurations = array())
    {
        foreach ($dangerousGoodsPackageConfigurations as $shipmentConfigurationDataDangerousGoodsPackageConfigurationsItem) {
            // validation for constraint: itemType
            if (!$shipmentConfigurationDataDangerousGoodsPackageConfigurationsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail) {
                throw new \InvalidArgumentException(sprintf('The DangerousGoodsPackageConfigurations property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail, "%s" given', is_object($shipmentConfigurationDataDangerousGoodsPackageConfigurationsItem) ? get_class($shipmentConfigurationDataDangerousGoodsPackageConfigurationsItem) : gettype($shipmentConfigurationDataDangerousGoodsPackageConfigurationsItem)), __LINE__);
            }
        }
        $this->DangerousGoodsPackageConfigurations = $dangerousGoodsPackageConfigurations;
        return $this;
    }
    /**
     * Add item to DangerousGoodsPackageConfigurations value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentConfigurationData
     */
    public function addToDangerousGoodsPackageConfigurations(\Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail) {
            throw new \InvalidArgumentException(sprintf('The DangerousGoodsPackageConfigurations property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DangerousGoodsPackageConfigurations[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentConfigurationData
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
