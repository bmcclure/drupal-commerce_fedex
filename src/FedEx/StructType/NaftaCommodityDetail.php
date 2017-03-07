<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NaftaCommodityDetail StructType
 * @subpackage Structs
 */
class NaftaCommodityDetail extends AbstractStructBase
{
    /**
     * The PreferenceCriterion
     * Meta informations extracted from the WSDL
     * - documentation: Defined by NAFTA regulations.
     * - minOccurs: 0
     * @var string
     */
    public $PreferenceCriterion;
    /**
     * The ProducerDetermination
     * Meta informations extracted from the WSDL
     * - documentation: Defined by NAFTA regulations.
     * - minOccurs: 0
     * @var string
     */
    public $ProducerDetermination;
    /**
     * The ProducerId
     * Meta informations extracted from the WSDL
     * - documentation: Identification of which producer is associated with this commodity (if multiple producers are used in a single shipment).
     * - minOccurs: 0
     * @var string
     */
    public $ProducerId;
    /**
     * The NetCostMethod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NetCostMethod;
    /**
     * The NetCostDateRange
     * Meta informations extracted from the WSDL
     * - documentation: Date range over which RVC net cost was calculated.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DateRange
     */
    public $NetCostDateRange;
    /**
     * Constructor method for NaftaCommodityDetail
     * @uses NaftaCommodityDetail::setPreferenceCriterion()
     * @uses NaftaCommodityDetail::setProducerDetermination()
     * @uses NaftaCommodityDetail::setProducerId()
     * @uses NaftaCommodityDetail::setNetCostMethod()
     * @uses NaftaCommodityDetail::setNetCostDateRange()
     * @param string $preferenceCriterion
     * @param string $producerDetermination
     * @param string $producerId
     * @param string $netCostMethod
     * @param \Drupal\commerce_fedex\FedEx\StructType\DateRange $netCostDateRange
     */
    public function __construct($preferenceCriterion = null, $producerDetermination = null, $producerId = null, $netCostMethod = null, \Drupal\commerce_fedex\FedEx\StructType\DateRange $netCostDateRange = null)
    {
        $this
            ->setPreferenceCriterion($preferenceCriterion)
            ->setProducerDetermination($producerDetermination)
            ->setProducerId($producerId)
            ->setNetCostMethod($netCostMethod)
            ->setNetCostDateRange($netCostDateRange);
    }
    /**
     * Get PreferenceCriterion value
     * @return string|null
     */
    public function getPreferenceCriterion()
    {
        return $this->PreferenceCriterion;
    }
    /**
     * Set PreferenceCriterion value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NaftaPreferenceCriterionCode::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NaftaPreferenceCriterionCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $preferenceCriterion
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail
     */
    public function setPreferenceCriterion($preferenceCriterion = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\NaftaPreferenceCriterionCode::valueIsValid($preferenceCriterion)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $preferenceCriterion, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NaftaPreferenceCriterionCode::getValidValues())), __LINE__);
        }
        $this->PreferenceCriterion = $preferenceCriterion;
        return $this;
    }
    /**
     * Get ProducerDetermination value
     * @return string|null
     */
    public function getProducerDetermination()
    {
        return $this->ProducerDetermination;
    }
    /**
     * Set ProducerDetermination value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NaftaProducerDeterminationCode::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NaftaProducerDeterminationCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $producerDetermination
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail
     */
    public function setProducerDetermination($producerDetermination = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\NaftaProducerDeterminationCode::valueIsValid($producerDetermination)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $producerDetermination, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NaftaProducerDeterminationCode::getValidValues())), __LINE__);
        }
        $this->ProducerDetermination = $producerDetermination;
        return $this;
    }
    /**
     * Get ProducerId value
     * @return string|null
     */
    public function getProducerId()
    {
        return $this->ProducerId;
    }
    /**
     * Set ProducerId value
     * @param string $producerId
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail
     */
    public function setProducerId($producerId = null)
    {
        // validation for constraint: string
        if (!is_null($producerId) && !is_string($producerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($producerId)), __LINE__);
        }
        $this->ProducerId = $producerId;
        return $this;
    }
    /**
     * Get NetCostMethod value
     * @return string|null
     */
    public function getNetCostMethod()
    {
        return $this->NetCostMethod;
    }
    /**
     * Set NetCostMethod value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NaftaNetCostMethodCode::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NaftaNetCostMethodCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $netCostMethod
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail
     */
    public function setNetCostMethod($netCostMethod = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\NaftaNetCostMethodCode::valueIsValid($netCostMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $netCostMethod, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NaftaNetCostMethodCode::getValidValues())), __LINE__);
        }
        $this->NetCostMethod = $netCostMethod;
        return $this;
    }
    /**
     * Get NetCostDateRange value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DateRange|null
     */
    public function getNetCostDateRange()
    {
        return $this->NetCostDateRange;
    }
    /**
     * Set NetCostDateRange value
     * @param \Drupal\commerce_fedex\FedEx\StructType\DateRange $netCostDateRange
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail
     */
    public function setNetCostDateRange(\Drupal\commerce_fedex\FedEx\StructType\DateRange $netCostDateRange = null)
    {
        $this->NetCostDateRange = $netCostDateRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaCommodityDetail
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
