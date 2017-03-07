<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentEventNotificationDetail StructType
 * @subpackage Structs
 */
class ShipmentEventNotificationDetail extends AbstractStructBase
{
    /**
     * The AggregationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AggregationType;
    /**
     * The PersonalMessage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PersonalMessage;
    /**
     * The EventNotifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification[]
     */
    public $EventNotifications;
    /**
     * Constructor method for ShipmentEventNotificationDetail
     * @uses ShipmentEventNotificationDetail::setAggregationType()
     * @uses ShipmentEventNotificationDetail::setPersonalMessage()
     * @uses ShipmentEventNotificationDetail::setEventNotifications()
     * @param string $aggregationType
     * @param string $personalMessage
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification[] $eventNotifications
     */
    public function __construct($aggregationType = null, $personalMessage = null, array $eventNotifications = array())
    {
        $this
            ->setAggregationType($aggregationType)
            ->setPersonalMessage($personalMessage)
            ->setEventNotifications($eventNotifications);
    }
    /**
     * Get AggregationType value
     * @return string|null
     */
    public function getAggregationType()
    {
        return $this->AggregationType;
    }
    /**
     * Set AggregationType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentNotificationAggregationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShipmentNotificationAggregationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $aggregationType
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationDetail
     */
    public function setAggregationType($aggregationType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ShipmentNotificationAggregationType::valueIsValid($aggregationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $aggregationType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ShipmentNotificationAggregationType::getValidValues())), __LINE__);
        }
        $this->AggregationType = $aggregationType;
        return $this;
    }
    /**
     * Get PersonalMessage value
     * @return string|null
     */
    public function getPersonalMessage()
    {
        return $this->PersonalMessage;
    }
    /**
     * Set PersonalMessage value
     * @param string $personalMessage
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationDetail
     */
    public function setPersonalMessage($personalMessage = null)
    {
        // validation for constraint: string
        if (!is_null($personalMessage) && !is_string($personalMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personalMessage)), __LINE__);
        }
        $this->PersonalMessage = $personalMessage;
        return $this;
    }
    /**
     * Get EventNotifications value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification[]|null
     */
    public function getEventNotifications()
    {
        return $this->EventNotifications;
    }
    /**
     * Set EventNotifications value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification[] $eventNotifications
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationDetail
     */
    public function setEventNotifications(array $eventNotifications = array())
    {
        foreach ($eventNotifications as $shipmentEventNotificationDetailEventNotificationsItem) {
            // validation for constraint: itemType
            if (!$shipmentEventNotificationDetailEventNotificationsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification) {
                throw new \InvalidArgumentException(sprintf('The EventNotifications property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification, "%s" given', is_object($shipmentEventNotificationDetailEventNotificationsItem) ? get_class($shipmentEventNotificationDetailEventNotificationsItem) : gettype($shipmentEventNotificationDetailEventNotificationsItem)), __LINE__);
            }
        }
        $this->EventNotifications = $eventNotifications;
        return $this;
    }
    /**
     * Add item to EventNotifications value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationDetail
     */
    public function addToEventNotifications(\Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification) {
            throw new \InvalidArgumentException(sprintf('The EventNotifications property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationSpecification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EventNotifications[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentEventNotificationDetail
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
