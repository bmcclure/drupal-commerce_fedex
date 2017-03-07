<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebAuthenticationCredential StructType
 * Meta informations extracted from the WSDL
 * - documentation: Two part authentication string used for the sender's identity
 * @subpackage Structs
 */
class WebAuthenticationCredential extends AbstractStructBase
{
    /**
     * The Key
     * Meta informations extracted from the WSDL
     * - documentation: Identifying part of authentication credential. This value is provided by FedEx after registration
     * - minOccurs: 1
     * @var string
     */
    public $Key;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - documentation: Secret part of authentication key. This value is provided by FedEx after registration.
     * - minOccurs: 1
     * @var string
     */
    public $Password;
    /**
     * Constructor method for WebAuthenticationCredential
     * @uses WebAuthenticationCredential::setKey()
     * @uses WebAuthenticationCredential::setPassword()
     * @param string $key
     * @param string $password
     */
    public function __construct($key = null, $password = null)
    {
        $this
            ->setKey($key)
            ->setPassword($password);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationCredential
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
     * Get Password value
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationCredential
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationCredential
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
