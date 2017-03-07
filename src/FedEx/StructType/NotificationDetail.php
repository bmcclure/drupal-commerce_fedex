<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationDetail StructType
 * @subpackage Structs
 */
class NotificationDetail extends AbstractStructBase
{
    /**
     * The NotificationType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of notification that will be sent.
     * - minOccurs: 0
     * @var string
     */
    public $NotificationType;
    /**
     * The EmailDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the email notification details.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\EMailDetail
     */
    public $EmailDetail;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the localization for this notification.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Localization
     */
    public $Localization;
    /**
     * Constructor method for NotificationDetail
     * @uses NotificationDetail::setNotificationType()
     * @uses NotificationDetail::setEmailDetail()
     * @uses NotificationDetail::setLocalization()
     * @param string $notificationType
     * @param \Drupal\commerce_fedex\FedEx\StructType\EMailDetail $emailDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\Localization $localization
     */
    public function __construct($notificationType = null, \Drupal\commerce_fedex\FedEx\StructType\EMailDetail $emailDetail = null, \Drupal\commerce_fedex\FedEx\StructType\Localization $localization = null)
    {
        $this
            ->setNotificationType($notificationType)
            ->setEmailDetail($emailDetail)
            ->setLocalization($localization);
    }
    /**
     * Get NotificationType value
     * @return string|null
     */
    public function getNotificationType()
    {
        return $this->NotificationType;
    }
    /**
     * Set NotificationType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $notificationType
     * @return \Drupal\commerce_fedex\FedEx\StructType\NotificationDetail
     */
    public function setNotificationType($notificationType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\NotificationType::valueIsValid($notificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notificationType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NotificationType::getValidValues())), __LINE__);
        }
        $this->NotificationType = $notificationType;
        return $this;
    }
    /**
     * Get EmailDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\EMailDetail|null
     */
    public function getEmailDetail()
    {
        return $this->EmailDetail;
    }
    /**
     * Set EmailDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\EMailDetail $emailDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\NotificationDetail
     */
    public function setEmailDetail(\Drupal\commerce_fedex\FedEx\StructType\EMailDetail $emailDetail = null)
    {
        $this->EmailDetail = $emailDetail;
        return $this;
    }
    /**
     * Get Localization value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Localization $localization
     * @return \Drupal\commerce_fedex\FedEx\StructType\NotificationDetail
     */
    public function setLocalization(\Drupal\commerce_fedex\FedEx\StructType\Localization $localization = null)
    {
        $this->Localization = $localization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\NotificationDetail
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
