<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariableHandlingCharges StructType
 * @subpackage Structs
 */
class VariableHandlingCharges extends AbstractStructBase
{
    /**
     * The VariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $VariableHandlingCharge;
    /**
     * The FixedVariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $FixedVariableHandlingCharge;
    /**
     * The PercentVariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $PercentVariableHandlingCharge;
    /**
     * The TotalCustomerCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Money
     */
    public $TotalCustomerCharge;
    /**
     * Constructor method for VariableHandlingCharges
     * @uses VariableHandlingCharges::setVariableHandlingCharge()
     * @uses VariableHandlingCharges::setFixedVariableHandlingCharge()
     * @uses VariableHandlingCharges::setPercentVariableHandlingCharge()
     * @uses VariableHandlingCharges::setTotalCustomerCharge()
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $variableHandlingCharge
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $fixedVariableHandlingCharge
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $percentVariableHandlingCharge
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalCustomerCharge
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\Money $variableHandlingCharge = null, \Drupal\commerce_fedex\FedEx\StructType\Money $fixedVariableHandlingCharge = null, \Drupal\commerce_fedex\FedEx\StructType\Money $percentVariableHandlingCharge = null, \Drupal\commerce_fedex\FedEx\StructType\Money $totalCustomerCharge = null)
    {
        $this
            ->setVariableHandlingCharge($variableHandlingCharge)
            ->setFixedVariableHandlingCharge($fixedVariableHandlingCharge)
            ->setPercentVariableHandlingCharge($percentVariableHandlingCharge)
            ->setTotalCustomerCharge($totalCustomerCharge);
    }
    /**
     * Get VariableHandlingCharge value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getVariableHandlingCharge()
    {
        return $this->VariableHandlingCharge;
    }
    /**
     * Set VariableHandlingCharge value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $variableHandlingCharge
     * @return \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingCharges
     */
    public function setVariableHandlingCharge(\Drupal\commerce_fedex\FedEx\StructType\Money $variableHandlingCharge = null)
    {
        $this->VariableHandlingCharge = $variableHandlingCharge;
        return $this;
    }
    /**
     * Get FixedVariableHandlingCharge value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getFixedVariableHandlingCharge()
    {
        return $this->FixedVariableHandlingCharge;
    }
    /**
     * Set FixedVariableHandlingCharge value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $fixedVariableHandlingCharge
     * @return \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingCharges
     */
    public function setFixedVariableHandlingCharge(\Drupal\commerce_fedex\FedEx\StructType\Money $fixedVariableHandlingCharge = null)
    {
        $this->FixedVariableHandlingCharge = $fixedVariableHandlingCharge;
        return $this;
    }
    /**
     * Get PercentVariableHandlingCharge value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getPercentVariableHandlingCharge()
    {
        return $this->PercentVariableHandlingCharge;
    }
    /**
     * Set PercentVariableHandlingCharge value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $percentVariableHandlingCharge
     * @return \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingCharges
     */
    public function setPercentVariableHandlingCharge(\Drupal\commerce_fedex\FedEx\StructType\Money $percentVariableHandlingCharge = null)
    {
        $this->PercentVariableHandlingCharge = $percentVariableHandlingCharge;
        return $this;
    }
    /**
     * Get TotalCustomerCharge value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Money|null
     */
    public function getTotalCustomerCharge()
    {
        return $this->TotalCustomerCharge;
    }
    /**
     * Set TotalCustomerCharge value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Money $totalCustomerCharge
     * @return \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingCharges
     */
    public function setTotalCustomerCharge(\Drupal\commerce_fedex\FedEx\StructType\Money $totalCustomerCharge = null)
    {
        $this->TotalCustomerCharge = $totalCustomerCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\VariableHandlingCharges
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
