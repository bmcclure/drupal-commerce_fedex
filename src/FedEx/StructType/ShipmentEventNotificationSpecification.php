<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentEventNotificationSpecification StructType
 * @subpackage Structs
 */
class ShipmentEventNotificationSpecification extends AbstractStructBase
{
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The Events
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Events;
    /**
     * The NotificationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\NotificationDetail
     */
    public $NotificationDetail;
    /**
     * The FormatSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShipmentNotificationFormatSpecification
     */
    public $FormatSpecification;
    /**
     * Constructor method for ShipmentEventNotificationSpecification
     * @uses ShipmentEventNotificationSpecification::setRole()
     * @uses ShipmentEventNotificationSpecification::setEvents()
     * @uses ShipmentEventNotificationSpecification::setNotificationDetail()
     * @uses ShipmentEventNotificationSpecification::setFormatSpecification()
     * @param string $role
     * @param string[] $events
     * @param \Drupal\commerce_fedex\FedEx\StructType\NotificationDetail $notificationDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentNotificationFormatSpecification $formatSpecification
     */
    public function __construct($role = null, array $events = array(), \Drupal\commerce_fedex\FedEx\StructType\NotificationDetail $notificationDetail = null, \Drupal\commerce_fedex\FedEx\StructType\ShipmentNotificationFormatSpecification $formatSpecification = null)
    {
        $this
            ->setRole($role)
            ->setEvents($events)
            ->setNotificationDetail($notificationDetail)
            ->setFormatSpecification($formatSpecification);
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
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentNotificationRoleType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentNotificationRoleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ShipmentNotificationRoleType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ShipmentNotificationRoleType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get Events value
     * @return string[]|null
     */
    public function getEvents()
    {
        return $this->Events;
    }
    /**
     * Set Events value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $events
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification
     */
    public function setEvents(array $events = array())
    {
        $invalidValues = array();
        foreach ($events as $shipmentEventNotificationSpecificationEventsItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::valueIsValid($shipmentEventNotificationSpecificationEventsItem)) {
                $invalidValues[] = var_export($shipmentEventNotificationSpecificationEventsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::getValidValues())), __LINE__);
        }
        $this->Events = $events;
        return $this;
    }
    /**
     * Add item to Events value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification
     */
    public function addToEvents($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NotificationEventType::getValidValues())), __LINE__);
        }
        $this->Events[] = $item;
        return $this;
    }
    /**
     * Get NotificationDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\NotificationDetail|null
     */
    public function getNotificationDetail()
    {
        return $this->NotificationDetail;
    }
    /**
     * Set NotificationDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\NotificationDetail $notificationDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification
     */
    public function setNotificationDetail(\Drupal\commerce_fedex\FedEx\StructType\NotificationDetail $notificationDetail = null)
    {
        $this->NotificationDetail = $notificationDetail;
        return $this;
    }
    /**
     * Get FormatSpecification value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentNotificationFormatSpecification|null
     */
    public function getFormatSpecification()
    {
        return $this->FormatSpecification;
    }
    /**
     * Set FormatSpecification value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentNotificationFormatSpecification $formatSpecification
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification
     */
    public function setFormatSpecification(\Drupal\commerce_fedex\FedEx\StructType\ShipmentNotificationFormatSpecification $formatSpecification = null)
    {
        $this->FormatSpecification = $formatSpecification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification
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
