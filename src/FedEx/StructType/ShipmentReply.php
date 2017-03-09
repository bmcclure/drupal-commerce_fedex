<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentReply StructType
 * Meta informations extracted from the WSDL
 * - type: ns:ShipmentReply
 * @subpackage Structs
 */
class ShipmentReply extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Drupal\commerce_fedex\FedEx\StructType\Notification[]
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Drupal\commerce_fedex\FedEx\StructType\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * Constructor method for ShipmentReply
     * @uses ShipmentReply::setHighestSeverity()
     * @uses ShipmentReply::setNotifications()
     * @uses ShipmentReply::setVersion()
     * @uses ShipmentReply::setTransactionDetail()
     * @param string $highestSeverity
     * @param \Drupal\commerce_fedex\FedEx\StructType\Notification[] $notifications
     * @param \Drupal\commerce_fedex\FedEx\StructType\VersionId $version
     * @param \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \Drupal\commerce_fedex\FedEx\StructType\VersionId $version = null, \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail);
    }
    /**
     * Get HighestSeverity value
     * @return string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    /**
     * Set HighestSeverity value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationSeverityType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentReply
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Notification[] $notifications
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $shipmentReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$shipmentReplyNotificationsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Notification, "%s" given', is_object($shipmentReplyNotificationsItem) ? get_class($shipmentReplyNotificationsItem) : gettype($shipmentReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Notification $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentReply
     */
    public function addToNotifications(\Drupal\commerce_fedex\FedEx\StructType\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
        return $this;
    }
    /**
     * Get Version value
     * @return \Drupal\commerce_fedex\FedEx\StructType\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \Drupal\commerce_fedex\FedEx\StructType\VersionId $version
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentReply
     */
    public function setVersion(\Drupal\commerce_fedex\FedEx\StructType\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentReply
     */
    public function setTransactionDetail(\Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentReply
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