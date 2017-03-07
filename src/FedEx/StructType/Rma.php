<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rma StructType
 * Meta informations extracted from the WSDL
 * - documentation: June 2011 ITG 121203 IR-RMA number has been removed from this structure and added as a new customer reference type. The structure remains because of the reason field below.
 * @subpackage Structs
 */
class Rma extends AbstractStructBase
{
    /**
     * The Reason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Reason;
    /**
     * Constructor method for Rma
     * @uses Rma::setReason()
     * @param string $reason
     */
    public function __construct($reason = null)
    {
        $this
            ->setReason($reason);
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \Drupal\commerce_fedex\FedEx\StructType\Rma
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\Rma
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
