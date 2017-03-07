<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentEMailDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how to e-mail shipping documents.
 * @subpackage Structs
 */
class ShippingDocumentEMailDetail extends AbstractStructBase
{
    /**
     * The EMailRecipients
     * Meta informations extracted from the WSDL
     * - documentation: Provides the roles and email addresses for e-mail recipients.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient[]
     */
    public $EMailRecipients;
    /**
     * The Grouping
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the convention by which documents are to be grouped as e-mail attachments.
     * - minOccurs: 0
     * @var string
     */
    public $Grouping;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the language in which the email containing the document is requested to be composed.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Localization
     */
    public $Localization;
    /**
     * Constructor method for ShippingDocumentEMailDetail
     * @uses ShippingDocumentEMailDetail::setEMailRecipients()
     * @uses ShippingDocumentEMailDetail::setGrouping()
     * @uses ShippingDocumentEMailDetail::setLocalization()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient[] $eMailRecipients
     * @param string $grouping
     * @param \Drupal\commerce_fedex\FedEx\StructType\Localization $localization
     */
    public function __construct(array $eMailRecipients = array(), $grouping = null, \Drupal\commerce_fedex\FedEx\StructType\Localization $localization = null)
    {
        $this
            ->setEMailRecipients($eMailRecipients)
            ->setGrouping($grouping)
            ->setLocalization($localization);
    }
    /**
     * Get EMailRecipients value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient[]|null
     */
    public function getEMailRecipients()
    {
        return $this->EMailRecipients;
    }
    /**
     * Set EMailRecipients value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient[] $eMailRecipients
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailDetail
     */
    public function setEMailRecipients(array $eMailRecipients = array())
    {
        foreach ($eMailRecipients as $shippingDocumentEMailDetailEMailRecipientsItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentEMailDetailEMailRecipientsItem instanceof \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient) {
                throw new \InvalidArgumentException(sprintf('The EMailRecipients property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient, "%s" given', is_object($shippingDocumentEMailDetailEMailRecipientsItem) ? get_class($shippingDocumentEMailDetailEMailRecipientsItem) : gettype($shippingDocumentEMailDetailEMailRecipientsItem)), __LINE__);
            }
        }
        $this->EMailRecipients = $eMailRecipients;
        return $this;
    }
    /**
     * Add item to EMailRecipients value
     * @throws \InvalidArgumentException
     * @param \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailDetail
     */
    public function addToEMailRecipients(\Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient) {
            throw new \InvalidArgumentException(sprintf('The EMailRecipients property can only contain items of \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailRecipient, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EMailRecipients[] = $item;
        return $this;
    }
    /**
     * Get Grouping value
     * @return string|null
     */
    public function getGrouping()
    {
        return $this->Grouping;
    }
    /**
     * Set Grouping value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentEMailGroupingType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentEMailGroupingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $grouping
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailDetail
     */
    public function setGrouping($grouping = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentEMailGroupingType::valueIsValid($grouping)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $grouping, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ShippingDocumentEMailGroupingType::getValidValues())), __LINE__);
        }
        $this->Grouping = $grouping;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShippingDocumentEMailDetail
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
