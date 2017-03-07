<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Descriptive data for the client submitting a transaction.
 * @subpackage Structs
 */
class ClientDetail extends AbstractStructBase
{
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx account number associated with this transaction.
     * - minOccurs: 1
     * @var string
     */
    public $AccountNumber;
    /**
     * The MeterNumber
     * Meta informations extracted from the WSDL
     * - documentation: This number is assigned by FedEx and identifies the unique device from which the request is originating
     * - minOccurs: 1
     * @var string
     */
    public $MeterNumber;
    /**
     * The IntegratorId
     * Meta informations extracted from the WSDL
     * - documentation: Only used in transactions which require identification of the FedEx Office integrator.
     * - minOccurs: 0
     * @var string
     */
    public $IntegratorId;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the region from which the transaction is submitted.
     * - minOccurs: 0
     * @var string
     */
    public $Region;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: The language to be used for human-readable Notification.localizedMessages in responses to the request containing this ClientDetail object. Different requests from the same client may contain different Localization data. (Contrast
     * with TransactionDetail.localization, which governs data payload language/translation.)
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Localization
     */
    public $Localization;
    /**
     * Constructor method for ClientDetail
     * @uses ClientDetail::setAccountNumber()
     * @uses ClientDetail::setMeterNumber()
     * @uses ClientDetail::setIntegratorId()
     * @uses ClientDetail::setRegion()
     * @uses ClientDetail::setLocalization()
     * @param string $accountNumber
     * @param string $meterNumber
     * @param string $integratorId
     * @param string $region
     * @param \Drupal\commerce_fedex\FedEx\StructType\Localization $localization
     */
    public function __construct($accountNumber = null, $meterNumber = null, $integratorId = null, $region = null, \Drupal\commerce_fedex\FedEx\StructType\Localization $localization = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setMeterNumber($meterNumber)
            ->setIntegratorId($integratorId)
            ->setRegion($region)
            ->setLocalization($localization);
    }
    /**
     * Get AccountNumber value
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\ClientDetail
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get MeterNumber value
     * @return string
     */
    public function getMeterNumber()
    {
        return $this->MeterNumber;
    }
    /**
     * Set MeterNumber value
     * @param string $meterNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\ClientDetail
     */
    public function setMeterNumber($meterNumber = null)
    {
        // validation for constraint: string
        if (!is_null($meterNumber) && !is_string($meterNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meterNumber)), __LINE__);
        }
        $this->MeterNumber = $meterNumber;
        return $this;
    }
    /**
     * Get IntegratorId value
     * @return string|null
     */
    public function getIntegratorId()
    {
        return $this->IntegratorId;
    }
    /**
     * Set IntegratorId value
     * @param string $integratorId
     * @return \Drupal\commerce_fedex\FedEx\StructType\ClientDetail
     */
    public function setIntegratorId($integratorId = null)
    {
        // validation for constraint: string
        if (!is_null($integratorId) && !is_string($integratorId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($integratorId)), __LINE__);
        }
        $this->IntegratorId = $integratorId;
        return $this;
    }
    /**
     * Get Region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ExpressRegionCode::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ExpressRegionCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $region
     * @return \Drupal\commerce_fedex\FedEx\StructType\ClientDetail
     */
    public function setRegion($region = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ExpressRegionCode::valueIsValid($region)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $region, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ExpressRegionCode::getValidValues())), __LINE__);
        }
        $this->Region = $region;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ClientDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ClientDetail
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
