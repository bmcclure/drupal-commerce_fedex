<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendNotificationsReply StructType
 * Meta informations extracted from the WSDL
 * - type: ns:SendNotificationsReply
 * @subpackage Structs
 */
class SendNotificationsReply extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - documentation: This contains the severity type of the most severe Notification in the Notifications array.
     * - minOccurs: 1
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - documentation: Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Drupal\commerce_fedex\FedEx\StructType\Notification[]
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: Contains the version of the reply being used.
     * - minOccurs: 1
     * @var \Drupal\commerce_fedex\FedEx\StructType\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The DuplicateWaybill
     * Meta informations extracted from the WSDL
     * - documentation: True if duplicate packages (more than one package with the same tracking number) have been found, the packages array contains information about each duplicate. Use this information to determine which of the tracking numbers is the
     * one you need and resend your request using the tracking number and TrackingNumberUniqueIdentifier for that package.
     * - minOccurs: 0
     * @var bool
     */
    public $DuplicateWaybill;
    /**
     * The MoreDataAvailable
     * Meta informations extracted from the WSDL
     * - documentation: True if additional packages remain to be retrieved.
     * - minOccurs: 0
     * @var bool
     */
    public $MoreDataAvailable;
    /**
     * The PagingToken
     * Meta informations extracted from the WSDL
     * - documentation: Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     * - minOccurs: 0
     * @var string
     */
    public $PagingToken;
    /**
     * The Packages
     * Meta informations extracted from the WSDL
     * - documentation: Information about the notifications that are available for this tracking number. If there are duplicates the ship date and destination address information is returned for determining which TrackingNumberUniqueIdentifier to use on a
     * subsequent request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\TrackNotificationPackage[]
     */
    public $Packages;
    /**
     * Constructor method for SendNotificationsReply
     * @uses SendNotificationsReply::setHighestSeverity()
     * @uses SendNotificationsReply::setNotifications()
     * @uses SendNotificationsReply::setVersion()
     * @uses SendNotificationsReply::setTransactionDetail()
     * @uses SendNotificationsReply::setDuplicateWaybill()
     * @uses SendNotificationsReply::setMoreDataAvailable()
     * @uses SendNotificationsReply::setPagingToken()
     * @uses SendNotificationsReply::setPackages()
     * @param string $highestSeverity
     * @param \Drupal\commerce_fedex\FedEx\StructType\Notification[] $notifications
     * @param \Drupal\commerce_fedex\FedEx\StructType\VersionId $version
     * @param \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail
     * @param bool $duplicateWaybill
     * @param bool $moreDataAvailable
     * @param string $pagingToken
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackNotificationPackage[] $packages
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \Drupal\commerce_fedex\FedEx\StructType\VersionId $version = null, \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail = null, $duplicateWaybill = null, $moreDataAvailable = null, $pagingToken = null, array $packages = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setDuplicateWaybill($duplicateWaybill)
            ->setMoreDataAvailable($moreDataAvailable)
            ->setPagingToken($pagingToken)
            ->setPackages($packages);
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $sendNotificationsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$sendNotificationsReplyNotificationsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\Notification, "%s" given', is_object($sendNotificationsReplyNotificationsItem) ? get_class($sendNotificationsReplyNotificationsItem) : gettype($sendNotificationsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\Notification $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply
     */
    public function setTransactionDetail(\Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply
     */
    public function setDuplicateWaybill($duplicateWaybill = null)
    {
        $this->DuplicateWaybill = $duplicateWaybill;
        return $this;
    }
    /**
     * Get MoreDataAvailable value
     * @return bool|null
     */
    public function getMoreDataAvailable()
    {
        return $this->MoreDataAvailable;
    }
    /**
     * Set MoreDataAvailable value
     * @param bool $moreDataAvailable
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply
     */
    public function setMoreDataAvailable($moreDataAvailable = null)
    {
        $this->MoreDataAvailable = $moreDataAvailable;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply
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
     * Get Packages value
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackNotificationPackage[]|null
     */
    public function getPackages()
    {
        return $this->Packages;
    }
    /**
     * Set Packages value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackNotificationPackage[] $packages
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply
     */
    public function setPackages(array $packages = array())
    {
        foreach ($packages as $sendNotificationsReplyPackagesItem) {
            // validation for constraint: itemType
            if (!$sendNotificationsReplyPackagesItem instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackNotificationPackage) {
                throw new \InvalidArgumentException(sprintf('The Packages property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackNotificationPackage, "%s" given', is_object($sendNotificationsReplyPackagesItem) ? get_class($sendNotificationsReplyPackagesItem) : gettype($sendNotificationsReplyPackagesItem)), __LINE__);
            }
        }
        $this->Packages = $packages;
        return $this;
    }
    /**
     * Add item to Packages value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackNotificationPackage $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply
     */
    public function addToPackages(\Drupal\commerce_fedex\FedEx\StructType\TrackNotificationPackage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\TrackNotificationPackage) {
            throw new \InvalidArgumentException(sprintf('The Packages property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\TrackNotificationPackage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Packages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply
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
