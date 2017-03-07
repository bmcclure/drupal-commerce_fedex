<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PendingShipmentAccessorDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details to be used by the user of the pending shipment
 * @subpackage Structs
 */
class PendingShipmentAccessorDetail extends AbstractStructBase
{
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the role of the user who is trying to access the pending shipment.
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserId;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * The EmailLabelUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EmailLabelUrl;
    /**
     * Constructor method for PendingShipmentAccessorDetail
     * @uses PendingShipmentAccessorDetail::setRole()
     * @uses PendingShipmentAccessorDetail::setUserId()
     * @uses PendingShipmentAccessorDetail::setPassword()
     * @uses PendingShipmentAccessorDetail::setEmailLabelUrl()
     * @param string $role
     * @param string $userId
     * @param string $password
     * @param string $emailLabelUrl
     */
    public function __construct($role = null, $userId = null, $password = null, $emailLabelUrl = null)
    {
        $this
            ->setRole($role)
            ->setUserId($userId)
            ->setPassword($password)
            ->setEmailLabelUrl($emailLabelUrl);
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\AccessorRoleType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\AccessorRoleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentAccessorDetail
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\AccessorRoleType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\AccessorRoleType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get UserId value
     * @return string|null
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param string $userId
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentAccessorDetail
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentAccessorDetail
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
     * Get EmailLabelUrl value
     * @return string|null
     */
    public function getEmailLabelUrl()
    {
        return $this->EmailLabelUrl;
    }
    /**
     * Set EmailLabelUrl value
     * @param string $emailLabelUrl
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentAccessorDetail
     */
    public function setEmailLabelUrl($emailLabelUrl = null)
    {
        // validation for constraint: string
        if (!is_null($emailLabelUrl) && !is_string($emailLabelUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailLabelUrl)), __LINE__);
        }
        $this->EmailLabelUrl = $emailLabelUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\PendingShipmentAccessorDetail
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
