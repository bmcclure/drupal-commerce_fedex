<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentAuthorizationDetail StructType
 * @subpackage Structs
 */
class ShipmentAuthorizationDetail extends AbstractStructBase
{
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountNumber;
    /**
     * Constructor method for ShipmentAuthorizationDetail
     * @uses ShipmentAuthorizationDetail::setAccountNumber()
     * @param string $accountNumber
     */
    public function __construct($accountNumber = null)
    {
        $this
            ->setAccountNumber($accountNumber);
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentAuthorizationDetail
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentAuthorizationDetail
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
