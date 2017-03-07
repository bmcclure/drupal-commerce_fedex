<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Notification StructType
 * Meta informations extracted from the WSDL
 * - documentation: The descriptive data regarding the result of the submitted transaction.
 * @subpackage Structs
 */
class Notification extends AbstractStructBase
{
    /**
     * The Severity
     * Meta informations extracted from the WSDL
     * - documentation: The severity of this notification. This can indicate success or failure or some other information about the request. The values that can be returned are SUCCESS - Your transaction succeeded with no other applicable information. NOTE
     * - Additional information that may be of interest to you about your transaction. WARNING - Additional information that you need to know about your transaction that you may need to take action on. ERROR - Information about an error that occurred while
     * processing your transaction. FAILURE - FedEx was unable to process your transaction at this time due to a system failure. Please try again later
     * - minOccurs: 0
     * @var string
     */
    public $Severity;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the source of this notification. Combined with the Code it uniquely identifies this notification
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: A code that represents this notification. Combined with the Source it uniquely identifies this notification.
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable text that explains this notification.
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The LocalizedMessage
     * Meta informations extracted from the WSDL
     * - documentation: The translated message. The language and locale specified in the ClientDetail. Localization are used to determine the representation. Currently only supported in a TrackReply.
     * - minOccurs: 0
     * @var string
     */
    public $LocalizedMessage;
    /**
     * The MessageParameters
     * Meta informations extracted from the WSDL
     * - documentation: A collection of name/value pairs that provide specific data to help the client determine the nature of an error (or warning, etc.) without having to parse the message string.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter[]
     */
    public $MessageParameters;
    /**
     * Constructor method for Notification
     * @uses Notification::setSeverity()
     * @uses Notification::setSource()
     * @uses Notification::setCode()
     * @uses Notification::setMessage()
     * @uses Notification::setLocalizedMessage()
     * @uses Notification::setMessageParameters()
     * @param string $severity
     * @param string $source
     * @param string $code
     * @param string $message
     * @param string $localizedMessage
     * @param \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter[] $messageParameters
     */
    public function __construct($severity = null, $source = null, $code = null, $message = null, $localizedMessage = null, array $messageParameters = array())
    {
        $this
            ->setSeverity($severity)
            ->setSource($source)
            ->setCode($code)
            ->setMessage($message)
            ->setLocalizedMessage($localizedMessage)
            ->setMessageParameters($messageParameters);
    }
    /**
     * Get Severity value
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationSeverityType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $severity
     * @return \Drupal\commerce_fedex\FedEx\StructType\Notification
     */
    public function setSeverity($severity = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\NotificationSeverityType::valueIsValid($severity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $severity, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->Severity = $severity;
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Drupal\commerce_fedex\FedEx\StructType\Notification
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Drupal\commerce_fedex\FedEx\StructType\Notification
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Drupal\commerce_fedex\FedEx\StructType\Notification
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get LocalizedMessage value
     * @return string|null
     */
    public function getLocalizedMessage()
    {
        return $this->LocalizedMessage;
    }
    /**
     * Set LocalizedMessage value
     * @param string $localizedMessage
     * @return \Drupal\commerce_fedex\FedEx\StructType\Notification
     */
    public function setLocalizedMessage($localizedMessage = null)
    {
        // validation for constraint: string
        if (!is_null($localizedMessage) && !is_string($localizedMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localizedMessage)), __LINE__);
        }
        $this->LocalizedMessage = $localizedMessage;
        return $this;
    }
    /**
     * Get MessageParameters value
     * @return \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter[]|null
     */
    public function getMessageParameters()
    {
        return $this->MessageParameters;
    }
    /**
     * Set MessageParameters value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter[] $messageParameters
     * @return \Drupal\commerce_fedex\FedEx\StructType\Notification
     */
    public function setMessageParameters(array $messageParameters = array())
    {
        foreach ($messageParameters as $notificationMessageParametersItem) {
            // validation for constraint: itemType
            if (!$notificationMessageParametersItem instanceof \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter) {
                throw new \InvalidArgumentException(sprintf('The MessageParameters property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter, "%s" given', is_object($notificationMessageParametersItem) ? get_class($notificationMessageParametersItem) : gettype($notificationMessageParametersItem)), __LINE__);
            }
        }
        $this->MessageParameters = $messageParameters;
        return $this;
    }
    /**
     * Add item to MessageParameters value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\Notification
     */
    public function addToMessageParameters(\Drupal\commerce_fedex\FedEx\StructType\NotificationParameter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter) {
            throw new \InvalidArgumentException(sprintf('The MessageParameters property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\NotificationParameter, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MessageParameters[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\Notification
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
