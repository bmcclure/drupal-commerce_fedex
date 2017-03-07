<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportDetail StructType
 * @subpackage Structs
 */
class ExportDetail extends AbstractStructBase
{
    /**
     * The B13AFilingOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $B13AFilingOption;
    /**
     * The ExportComplianceStatement
     * Meta informations extracted from the WSDL
     * - documentation: General field for exporting-country-specific export data (e.g. B13A for CA, FTSR Exemption or AES Citation for US).
     * - minOccurs: 0
     * @var string
     */
    public $ExportComplianceStatement;
    /**
     * The PermitNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PermitNumber;
    /**
     * The DestinationControlDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DestinationControlDetail
     */
    public $DestinationControlDetail;
    /**
     * Constructor method for ExportDetail
     * @uses ExportDetail::setB13AFilingOption()
     * @uses ExportDetail::setExportComplianceStatement()
     * @uses ExportDetail::setPermitNumber()
     * @uses ExportDetail::setDestinationControlDetail()
     * @param string $b13AFilingOption
     * @param string $exportComplianceStatement
     * @param string $permitNumber
     * @param \Drupal\commerce_fedex\FedEx\StructType\DestinationControlDetail $destinationControlDetail
     */
    public function __construct($b13AFilingOption = null, $exportComplianceStatement = null, $permitNumber = null, \Drupal\commerce_fedex\FedEx\StructType\DestinationControlDetail $destinationControlDetail = null)
    {
        $this
            ->setB13AFilingOption($b13AFilingOption)
            ->setExportComplianceStatement($exportComplianceStatement)
            ->setPermitNumber($permitNumber)
            ->setDestinationControlDetail($destinationControlDetail);
    }
    /**
     * Get B13AFilingOption value
     * @return string|null
     */
    public function getB13AFilingOption()
    {
        return $this->B13AFilingOption;
    }
    /**
     * Set B13AFilingOption value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\B13AFilingOptionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\B13AFilingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $b13AFilingOption
     * @return \Drupal\commerce_fedex\FedEx\StructType\ExportDetail
     */
    public function setB13AFilingOption($b13AFilingOption = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\B13AFilingOptionType::valueIsValid($b13AFilingOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $b13AFilingOption, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\B13AFilingOptionType::getValidValues())), __LINE__);
        }
        $this->B13AFilingOption = $b13AFilingOption;
        return $this;
    }
    /**
     * Get ExportComplianceStatement value
     * @return string|null
     */
    public function getExportComplianceStatement()
    {
        return $this->ExportComplianceStatement;
    }
    /**
     * Set ExportComplianceStatement value
     * @param string $exportComplianceStatement
     * @return \Drupal\commerce_fedex\FedEx\StructType\ExportDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement = null)
    {
        // validation for constraint: string
        if (!is_null($exportComplianceStatement) && !is_string($exportComplianceStatement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportComplianceStatement)), __LINE__);
        }
        $this->ExportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    /**
     * Get PermitNumber value
     * @return string|null
     */
    public function getPermitNumber()
    {
        return $this->PermitNumber;
    }
    /**
     * Set PermitNumber value
     * @param string $permitNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\ExportDetail
     */
    public function setPermitNumber($permitNumber = null)
    {
        // validation for constraint: string
        if (!is_null($permitNumber) && !is_string($permitNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($permitNumber)), __LINE__);
        }
        $this->PermitNumber = $permitNumber;
        return $this;
    }
    /**
     * Get DestinationControlDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DestinationControlDetail|null
     */
    public function getDestinationControlDetail()
    {
        return $this->DestinationControlDetail;
    }
    /**
     * Set DestinationControlDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\DestinationControlDetail $destinationControlDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ExportDetail
     */
    public function setDestinationControlDetail(\Drupal\commerce_fedex\FedEx\StructType\DestinationControlDetail $destinationControlDetail = null)
    {
        $this->DestinationControlDetail = $destinationControlDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ExportDetail
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
