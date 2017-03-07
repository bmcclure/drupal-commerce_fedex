<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionDetail StructType
 * @subpackage Structs
 */
class TransactionDetail extends AbstractStructBase
{
    /**
     * The CustomerTransactionId
     * Meta informations extracted from the WSDL
     * - documentation: Free form text to be echoed back in the reply. Used to match requests and replies.
     * - minOccurs: 0
     * @var string
     */
    public $CustomerTransactionId;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Governs data payload language/translations (contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Localization
     */
    public $Localization;
    /**
     * Constructor method for TransactionDetail
     * @uses TransactionDetail::setCustomerTransactionId()
     * @uses TransactionDetail::setLocalization()
     * @param string $customerTransactionId
     * @param \Drupal\commerce_fedex\FedEx\StructType\Localization $localization
     */
    public function __construct($customerTransactionId = null, \Drupal\commerce_fedex\FedEx\StructType\Localization $localization = null)
    {
        $this
            ->setCustomerTransactionId($customerTransactionId)
            ->setLocalization($localization);
    }
    /**
     * Get CustomerTransactionId value
     * @return string|null
     */
    public function getCustomerTransactionId()
    {
        return $this->CustomerTransactionId;
    }
    /**
     * Set CustomerTransactionId value
     * @param string $customerTransactionId
     * @return \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail
     */
    public function setCustomerTransactionId($customerTransactionId = null)
    {
        // validation for constraint: string
        if (!is_null($customerTransactionId) && !is_string($customerTransactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerTransactionId)), __LINE__);
        }
        $this->CustomerTransactionId = $customerTransactionId;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail
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
