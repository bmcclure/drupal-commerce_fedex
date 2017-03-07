<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerExceptionRequestDetail StructType
 * @subpackage Structs
 */
class CustomerExceptionRequestDetail extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the customer exception request.
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The StatusDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusDescription;
    /**
     * The CreateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreateTime;
    /**
     * Constructor method for CustomerExceptionRequestDetail
     * @uses CustomerExceptionRequestDetail::setId()
     * @uses CustomerExceptionRequestDetail::setStatusCode()
     * @uses CustomerExceptionRequestDetail::setStatusDescription()
     * @uses CustomerExceptionRequestDetail::setCreateTime()
     * @param string $id
     * @param string $statusCode
     * @param string $statusDescription
     * @param string $createTime
     */
    public function __construct($id = null, $statusCode = null, $statusDescription = null, $createTime = null)
    {
        $this
            ->setId($id)
            ->setStatusCode($statusCode)
            ->setStatusDescription($statusDescription)
            ->setCreateTime($createTime);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail
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
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get StatusDescription value
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }
    /**
     * Set StatusDescription value
     * @param string $statusDescription
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail
     */
    public function setStatusDescription($statusDescription = null)
    {
        // validation for constraint: string
        if (!is_null($statusDescription) && !is_string($statusDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusDescription)), __LINE__);
        }
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    /**
     * Get CreateTime value
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }
    /**
     * Set CreateTime value
     * @param string $createTime
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail
     */
    public function setCreateTime($createTime = null)
    {
        // validation for constraint: string
        if (!is_null($createTime) && !is_string($createTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createTime)), __LINE__);
        }
        $this->CreateTime = $createTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomerExceptionRequestDetail
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
