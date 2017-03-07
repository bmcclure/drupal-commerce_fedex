<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValueDetail StructType
 * @subpackage Structs
 */
class KeyValueDetail extends AbstractStructBase
{
    /**
     * The Key
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Key;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for KeyValueDetail
     * @uses KeyValueDetail::setKey()
     * @uses KeyValueDetail::setValue()
     * @param string $key
     * @param string $value
     */
    public function __construct($key = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Drupal\commerce_fedex\FedEx\StructType\KeyValueDetail
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->Key = $key;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\KeyValueDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\KeyValueDetail
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
