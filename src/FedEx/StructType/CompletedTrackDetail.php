<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedTrackDetail StructType
 * @subpackage Structs
 */
class CompletedTrackDetail extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Notification[]
     */
    public $Notifications;
    /**
     * The DuplicateWaybill
     * Meta informations extracted from the WSDL
     * - documentation: True if duplicate packages (more than one package with the same tracking number) have been found, and only limited data will be provided for each one.
     * - minOccurs: 0
     * @var bool
     */
    public $DuplicateWaybill;
    /**
     * The MoreData
     * Meta informations extracted from the WSDL
     * - documentation: True if additional packages remain to be retrieved.
     * - minOccurs: 0
     * @var bool
     */
    public $MoreData;
    /**
     * The PagingToken
     * Meta informations extracted from the WSDL
     * - documentation: Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     * - minOccurs: 0
     * @var string
     */
    public $PagingToken;
    /**
     * The TrackDetailsCount
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the total number of available track details across all pages.
     * - minOccurs: 0
     * @var int
     */
    public $TrackDetailsCount;
    /**
     * The TrackDetails
     * Meta informations extracted from the WSDL
     * - documentation: Contains detailed tracking information for the requested packages(s).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackDetail[]
     */
    public $TrackDetails;
    /**
     * Constructor method for CompletedTrackDetail
     * @uses CompletedTrackDetail::setHighestSeverity()
     * @uses CompletedTrackDetail::setNotifications()
     * @uses CompletedTrackDetail::setDuplicateWaybill()
     * @uses CompletedTrackDetail::setMoreData()
     * @uses CompletedTrackDetail::setPagingToken()
     * @uses CompletedTrackDetail::setTrackDetailsCount()
     * @uses CompletedTrackDetail::setTrackDetails()
     * @param string $highestSeverity
     * @param \Drupal\commerce_fedex\FedEx\StructType\Notification[] $notifications
     * @param bool $duplicateWaybill
     * @param bool $moreData
     * @param string $pagingToken
     * @param int $trackDetailsCount
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackDetail[] $trackDetails
     */
    public function __construct($highestSeverity = null, array $notifications = array(), $duplicateWaybill = null, $moreData = null, $pagingToken = null, $trackDetailsCount = null, array $trackDetails = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setDuplicateWaybill($duplicateWaybill)
            ->setMoreData($moreData)
            ->setPagingToken($pagingToken)
            ->setTrackDetailsCount($trackDetailsCount)
            ->setTrackDetails($trackDetails);
    }
    /**
     * Get HighestSeverity value
     * @return string|null
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTrackDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\Notification[]|null
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Notification[] $notifications
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTrackDetail
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $completedTrackDetailNotificationsItem) {
            // validation for constraint: itemType
            if (!$completedTrackDetailNotificationsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Notification, "%s" given', is_object($completedTrackDetailNotificationsItem) ? get_class($completedTrackDetailNotificationsItem) : gettype($completedTrackDetailNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Notification $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTrackDetail
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
     * Get DuplicateWaybill value
     * @return bool|null
     */
    public function getDuplicateWaybill()
    {
        return $this->DuplicateWaybill;
    }
    /**
     * Set DuplicateWaybill value
     * @param bool $duplicateWaybill
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTrackDetail
     */
    public function setDuplicateWaybill($duplicateWaybill = null)
    {
        $this->DuplicateWaybill = $duplicateWaybill;
        return $this;
    }
    /**
     * Get MoreData value
     * @return bool|null
     */
    public function getMoreData()
    {
        return $this->MoreData;
    }
    /**
     * Set MoreData value
     * @param bool $moreData
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTrackDetail
     */
    public function setMoreData($moreData = null)
    {
        $this->MoreData = $moreData;
        return $this;
    }
    /**
     * Get PagingToken value
     * @return string|null
     */
    public function getPagingToken()
    {
        return $this->PagingToken;
    }
    /**
     * Set PagingToken value
     * @param string $pagingToken
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTrackDetail
     */
    public function setPagingToken($pagingToken = null)
    {
        // validation for constraint: string
        if (!is_null($pagingToken) && !is_string($pagingToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pagingToken)), __LINE__);
        }
        $this->PagingToken = $pagingToken;
        return $this;
    }
    /**
     * Get TrackDetailsCount value
     * @return int|null
     */
    public function getTrackDetailsCount()
    {
        return $this->TrackDetailsCount;
    }
    /**
     * Set TrackDetailsCount value
     * @param int $trackDetailsCount
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTrackDetail
     */
    public function setTrackDetailsCount($trackDetailsCount = null)
    {
        // validation for constraint: int
        if (!is_null($trackDetailsCount) && !is_numeric($trackDetailsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($trackDetailsCount)), __LINE__);
        }
        $this->TrackDetailsCount = $trackDetailsCount;
        return $this;
    }
    /**
     * Get TrackDetails value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackDetail[]|null
     */
    public function getTrackDetails()
    {
        return $this->TrackDetails;
    }
    /**
     * Set TrackDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackDetail[] $trackDetails
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTrackDetail
     */
    public function setTrackDetails(array $trackDetails = array())
    {
        foreach ($trackDetails as $completedTrackDetailTrackDetailsItem) {
            // validation for constraint: itemType
            if (!$completedTrackDetailTrackDetailsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackDetail) {
                throw new \InvalidArgumentException(sprintf('The TrackDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackDetail, "%s" given', is_object($completedTrackDetailTrackDetailsItem) ? get_class($completedTrackDetailTrackDetailsItem) : gettype($completedTrackDetailTrackDetailsItem)), __LINE__);
            }
        }
        $this->TrackDetails = $trackDetails;
        return $this;
    }
    /**
     * Add item to TrackDetails value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackDetail $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTrackDetail
     */
    public function addToTrackDetails(\Drupal\commerce_fedex\FedEx\StructType\TrackDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackDetail) {
            throw new \InvalidArgumentException(sprintf('The TrackDetails property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CompletedTrackDetail
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
