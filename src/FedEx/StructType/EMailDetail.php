<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMailDetail StructType
 * @subpackage Structs
 */
class EMailDetail extends AbstractStructBase
{
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the name associated with the email address.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * Constructor method for EMailDetail
     * @uses EMailDetail::setEmailAddress()
     * @uses EMailDetail::setName()
     * @param string $emailAddress
     * @param string $name
     */
    public function __construct($emailAddress = null, $name = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setName($name);
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \Drupal\commerce_fedex\FedEx\StructType\EMailDetail
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        return $this;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\EMailDetail
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\EMailDetail
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
