<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialInstructionStatusDetail StructType
 * @subpackage Structs
 */
class SpecialInstructionStatusDetail extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the status of the track special instructions requested.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The StatusCreateTime
     * Meta informations extracted from the WSDL
     * - documentation: Time when the status was changed.
     * - minOccurs: 0
     * @var string
     */
    public $StatusCreateTime;
    /**
     * Constructor method for SpecialInstructionStatusDetail
     * @uses SpecialInstructionStatusDetail::setStatus()
     * @uses SpecialInstructionStatusDetail::setStatusCreateTime()
     * @param string $status
     * @param string $statusCreateTime
     */
    public function __construct($status = null, $statusCreateTime = null)
    {
        $this
            ->setStatus($status)
            ->setStatusCreateTime($statusCreateTime);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SpecialInstructionsStatusCode::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SpecialInstructionsStatusCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Drupal\commerce_fedex\FedEx\StructType\SpecialInstructionStatusDetail
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\SpecialInstructionsStatusCode::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\SpecialInstructionsStatusCode::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get StatusCreateTime value
     * @return string|null
     */
    public function getStatusCreateTime()
    {
        return $this->StatusCreateTime;
    }
    /**
     * Set StatusCreateTime value
     * @param string $statusCreateTime
     * @return \Drupal\commerce_fedex\FedEx\StructType\SpecialInstructionStatusDetail
     */
    public function setStatusCreateTime($statusCreateTime = null)
    {
        // validation for constraint: string
        if (!is_null($statusCreateTime) && !is_string($statusCreateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCreateTime)), __LINE__);
        }
        $this->StatusCreateTime = $statusCreateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\SpecialInstructionStatusDetail
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
