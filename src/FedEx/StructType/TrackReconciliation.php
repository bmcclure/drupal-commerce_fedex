<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackReconciliation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
 * @subpackage Structs
 */
class TrackReconciliation extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: An identifier for this type of status.
     * - minOccurs: 1
     * @var string
     */
    public $Status;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A human-readable description of this status.
     * - minOccurs: 1
     * @var string
     */
    public $Description;
    /**
     * Constructor method for TrackReconciliation
     * @uses TrackReconciliation::setStatus()
     * @uses TrackReconciliation::setDescription()
     * @param string $status
     * @param string $description
     */
    public function __construct($status = null, $description = null)
    {
        $this
            ->setStatus($status)
            ->setDescription($description);
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackReconciliation
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Description value
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackReconciliation
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackReconciliation
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
