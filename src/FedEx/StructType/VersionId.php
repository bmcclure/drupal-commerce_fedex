<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VersionId StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
 * @subpackage Structs
 */
class VersionId extends AbstractStructBase
{
    /**
     * The ServiceId
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a system or sub-system which performs an operation.
     * - fixed: crs
     * - minOccurs: 1
     * @var string
     */
    public $ServiceId;
    /**
     * The Major
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the service business level.
     * - fixed: 20
     * - minOccurs: 1
     * @var int
     */
    public $Major;
    /**
     * The Intermediate
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the service interface level.
     * - fixed: 0
     * - minOccurs: 1
     * @var int
     */
    public $Intermediate;
    /**
     * The Minor
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the service code level.
     * - fixed: 0
     * - minOccurs: 1
     * @var int
     */
    public $Minor;
    /**
     * Constructor method for VersionId
     * @uses VersionId::setServiceId()
     * @uses VersionId::setMajor()
     * @uses VersionId::setIntermediate()
     * @uses VersionId::setMinor()
     * @param string $serviceId
     * @param int $major
     * @param int $intermediate
     * @param int $minor
     */
    public function __construct($serviceId = null, $major = null, $intermediate = null, $minor = null)
    {
        $this
            ->setServiceId($serviceId)
            ->setMajor($major)
            ->setIntermediate($intermediate)
            ->setMinor($minor);
    }
    /**
     * Get ServiceId value
     * @return string
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }
    /**
     * Set ServiceId value
     * @param string $serviceId
     * @return \Drupal\commerce_fedex\FedEx\StructType\VersionId
     */
    public function setServiceId($serviceId = null)
    {
        // validation for constraint: string
        if (!is_null($serviceId) && !is_string($serviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceId)), __LINE__);
        }
        $this->ServiceId = $serviceId;
        return $this;
    }
    /**
     * Get Major value
     * @return int
     */
    public function getMajor()
    {
        return $this->Major;
    }
    /**
     * Set Major value
     * @param int $major
     * @return \Drupal\commerce_fedex\FedEx\StructType\VersionId
     */
    public function setMajor($major = null)
    {
        // validation for constraint: int
        if (!is_null($major) && !is_numeric($major)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($major)), __LINE__);
        }
        $this->Major = $major;
        return $this;
    }
    /**
     * Get Intermediate value
     * @return int
     */
    public function getIntermediate()
    {
        return $this->Intermediate;
    }
    /**
     * Set Intermediate value
     * @param int $intermediate
     * @return \Drupal\commerce_fedex\FedEx\StructType\VersionId
     */
    public function setIntermediate($intermediate = null)
    {
        // validation for constraint: int
        if (!is_null($intermediate) && !is_numeric($intermediate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($intermediate)), __LINE__);
        }
        $this->Intermediate = $intermediate;
        return $this;
    }
    /**
     * Get Minor value
     * @return int
     */
    public function getMinor()
    {
        return $this->Minor;
    }
    /**
     * Set Minor value
     * @param int $minor
     * @return \Drupal\commerce_fedex\FedEx\StructType\VersionId
     */
    public function setMinor($minor = null)
    {
        // validation for constraint: int
        if (!is_null($minor) && !is_numeric($minor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minor)), __LINE__);
        }
        $this->Minor = $minor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\VersionId
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
