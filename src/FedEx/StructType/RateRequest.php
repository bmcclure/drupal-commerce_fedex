<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRequest StructType
 * Meta informations extracted from the WSDL
 * - type: ns:RateRequest
 * @subpackage Structs
 */
class RateRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Drupal\commerce_fedex\FedEx\StructType\ClientDetail
     */
    public $ClientDetail;
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
     * The ReturnTransitAndCommit
     * Meta informations extracted from the WSDL
     * - documentation: Allows the caller to specify that the transit time and commit data are to be returned in the reply.
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnTransitAndCommit;
    /**
     * The CarrierCodes
     * Meta informations extracted from the WSDL
     * - documentation: Candidate carriers for rate-shopping use case. This field is only considered if requestedShipment/serviceType is omitted.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CarrierCodes;
    /**
     * The VariableOptions
     * Meta informations extracted from the WSDL
     * - documentation: Contains zero or more service options whose combinations are to be considered when replying with available services.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $VariableOptions;
    /**
     * The ConsolidationKey
     * Meta informations extracted from the WSDL
     * - documentation: If provided, identifies the consolidation to which this open shipment should be added after successful creation.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ConsolidationKey
     */
    public $ConsolidationKey;
    /**
     * The RequestedShipment
     * Meta informations extracted from the WSDL
     * - documentation: The shipment for which a rate quote (or rate-shopping comparison) is desired.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment
     */
    public $RequestedShipment;
    /**
     * Constructor method for RateRequest
     * @uses RateRequest::setWebAuthenticationDetail()
     * @uses RateRequest::setClientDetail()
     * @uses RateRequest::setVersion()
     * @uses RateRequest::setTransactionDetail()
     * @uses RateRequest::setReturnTransitAndCommit()
     * @uses RateRequest::setCarrierCodes()
     * @uses RateRequest::setVariableOptions()
     * @uses RateRequest::setConsolidationKey()
     * @uses RateRequest::setRequestedShipment()
     * @param \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail $webAuthenticationDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\ClientDetail $clientDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\VersionId $version
     * @param \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail
     * @param bool $returnTransitAndCommit
     * @param string[] $carrierCodes
     * @param string[] $variableOptions
     * @param \Drupal\commerce_fedex\FedEx\StructType\ConsolidationKey $consolidationKey
     * @param \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment $requestedShipment
     */
    public function __construct(\Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail $webAuthenticationDetail = null, \Drupal\commerce_fedex\FedEx\StructType\ClientDetail $clientDetail = null, \Drupal\commerce_fedex\FedEx\StructType\VersionId $version = null, \Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail = null, $returnTransitAndCommit = null, array $carrierCodes = array(), array $variableOptions = array(), \Drupal\commerce_fedex\FedEx\StructType\ConsolidationKey $consolidationKey = null, \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment $requestedShipment = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setReturnTransitAndCommit($returnTransitAndCommit)
            ->setCarrierCodes($carrierCodes)
            ->setVariableOptions($variableOptions)
            ->setConsolidationKey($consolidationKey)
            ->setRequestedShipment($requestedShipment);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail $webAuthenticationDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
     */
    public function setWebAuthenticationDetail(\Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ClientDetail $clientDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
     */
    public function setClientDetail(\Drupal\commerce_fedex\FedEx\StructType\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
     */
    public function setTransactionDetail(\Drupal\commerce_fedex\FedEx\StructType\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ReturnTransitAndCommit value
     * @return bool|null
     */
    public function getReturnTransitAndCommit()
    {
        return $this->ReturnTransitAndCommit;
    }
    /**
     * Set ReturnTransitAndCommit value
     * @param bool $returnTransitAndCommit
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
     */
    public function setReturnTransitAndCommit($returnTransitAndCommit = null)
    {
        $this->ReturnTransitAndCommit = $returnTransitAndCommit;
        return $this;
    }
    /**
     * Get CarrierCodes value
     * @return string[]|null
     */
    public function getCarrierCodes()
    {
        return $this->CarrierCodes;
    }
    /**
     * Set CarrierCodes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $carrierCodes
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
     */
    public function setCarrierCodes(array $carrierCodes = array())
    {
        $invalidValues = array();
        foreach ($carrierCodes as $rateRequestCarrierCodesItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::valueIsValid($rateRequestCarrierCodesItem)) {
                $invalidValues[] = var_export($rateRequestCarrierCodesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCodes = $carrierCodes;
        return $this;
    }
    /**
     * Add item to CarrierCodes value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
     */
    public function addToCarrierCodes($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCodes[] = $item;
        return $this;
    }
    /**
     * Get VariableOptions value
     * @return string[]|null
     */
    public function getVariableOptions()
    {
        return $this->VariableOptions;
    }
    /**
     * Set VariableOptions value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $variableOptions
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
     */
    public function setVariableOptions(array $variableOptions = array())
    {
        $invalidValues = array();
        foreach ($variableOptions as $rateRequestVariableOptionsItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::valueIsValid($rateRequestVariableOptionsItem)) {
                $invalidValues[] = var_export($rateRequestVariableOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->VariableOptions = $variableOptions;
        return $this;
    }
    /**
     * Add item to VariableOptions value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
     */
    public function addToVariableOptions($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->VariableOptions[] = $item;
        return $this;
    }
    /**
     * Get ConsolidationKey value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ConsolidationKey|null
     */
    public function getConsolidationKey()
    {
        return $this->ConsolidationKey;
    }
    /**
     * Set ConsolidationKey value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ConsolidationKey $consolidationKey
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
     */
    public function setConsolidationKey(\Drupal\commerce_fedex\FedEx\StructType\ConsolidationKey $consolidationKey = null)
    {
        $this->ConsolidationKey = $consolidationKey;
        return $this;
    }
    /**
     * Get RequestedShipment value
     * @return \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment|null
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }
    /**
     * Set RequestedShipment value
     * @param \Drupal\commerce_fedex\FedEx\StructType\RequestedShipment $requestedShipment
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
     */
    public function setRequestedShipment(\Drupal\commerce_fedex\FedEx\StructType\RequestedShipment $requestedShipment = null)
    {
        $this->RequestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\RateRequest
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
