<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpressFreightDetailContact StructType
 * @subpackage Structs
 */
class ExpressFreightDetailContact extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Phone;
    /**
     * Constructor method for ExpressFreightDetailContact
     * @uses ExpressFreightDetailContact::setName()
     * @uses ExpressFreightDetailContact::setPhone()
     * @param string $name
     * @param string $phone
     */
    public function __construct($name = null, $phone = null)
    {
        $this
            ->setName($name)
            ->setPhone($phone);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Drupal\commerce_fedex\FedEx\StructType\ExpressFreightDetailContact
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \Drupal\commerce_fedex\FedEx\StructType\ExpressFreightDetailContact
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ExpressFreightDetailContact
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
