<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationParameter StructType
 * @subpackage Structs
 */
class NotificationParameter extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of data contained in Value (e.g. SERVICE_TYPE, PACKAGE_SEQUENCE, etc..).
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: The value of the parameter (e.g. PRIORITY_OVERNIGHT, 2, etc..).
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for NotificationParameter
     * @uses NotificationParameter::setId()
     * @uses NotificationParameter::setValue()
     * @param string $id
     * @param string $value
     */
    public function __construct($id = null, $value = null)
    {
        $this
            ->setId($id)
            ->setValue($value);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter
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
