<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalControlledExportDetail StructType
 * @subpackage Structs
 */
class InternationalControlledExportDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ForeignTradeZoneCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ForeignTradeZoneCode;
    /**
     * The EntryNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EntryNumber;
    /**
     * The LicenseOrPermitNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LicenseOrPermitNumber;
    /**
     * The LicenseOrPermitExpirationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LicenseOrPermitExpirationDate;
    /**
     * Constructor method for InternationalControlledExportDetail
     * @uses InternationalControlledExportDetail::setType()
     * @uses InternationalControlledExportDetail::setForeignTradeZoneCode()
     * @uses InternationalControlledExportDetail::setEntryNumber()
     * @uses InternationalControlledExportDetail::setLicenseOrPermitNumber()
     * @uses InternationalControlledExportDetail::setLicenseOrPermitExpirationDate()
     * @param string $type
     * @param string $foreignTradeZoneCode
     * @param string $entryNumber
     * @param string $licenseOrPermitNumber
     * @param string $licenseOrPermitExpirationDate
     */
    public function __construct($type = null, $foreignTradeZoneCode = null, $entryNumber = null, $licenseOrPermitNumber = null, $licenseOrPermitExpirationDate = null)
    {
        $this
            ->setType($type)
            ->setForeignTradeZoneCode($foreignTradeZoneCode)
            ->setEntryNumber($entryNumber)
            ->setLicenseOrPermitNumber($licenseOrPermitNumber)
            ->setLicenseOrPermitExpirationDate($licenseOrPermitExpirationDate);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\InternationalControlledExportType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\InternationalControlledExportType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\InternationalControlledExportType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\InternationalControlledExportType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ForeignTradeZoneCode value
     * @return string|null
     */
    public function getForeignTradeZoneCode()
    {
        return $this->ForeignTradeZoneCode;
    }
    /**
     * Set ForeignTradeZoneCode value
     * @param string $foreignTradeZoneCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail
     */
    public function setForeignTradeZoneCode($foreignTradeZoneCode = null)
    {
        // validation for constraint: string
        if (!is_null($foreignTradeZoneCode) && !is_string($foreignTradeZoneCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($foreignTradeZoneCode)), __LINE__);
        }
        $this->ForeignTradeZoneCode = $foreignTradeZoneCode;
        return $this;
    }
    /**
     * Get EntryNumber value
     * @return string|null
     */
    public function getEntryNumber()
    {
        return $this->EntryNumber;
    }
    /**
     * Set EntryNumber value
     * @param string $entryNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail
     */
    public function setEntryNumber($entryNumber = null)
    {
        // validation for constraint: string
        if (!is_null($entryNumber) && !is_string($entryNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($entryNumber)), __LINE__);
        }
        $this->EntryNumber = $entryNumber;
        return $this;
    }
    /**
     * Get LicenseOrPermitNumber value
     * @return string|null
     */
    public function getLicenseOrPermitNumber()
    {
        return $this->LicenseOrPermitNumber;
    }
    /**
     * Set LicenseOrPermitNumber value
     * @param string $licenseOrPermitNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail
     */
    public function setLicenseOrPermitNumber($licenseOrPermitNumber = null)
    {
        // validation for constraint: string
        if (!is_null($licenseOrPermitNumber) && !is_string($licenseOrPermitNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($licenseOrPermitNumber)), __LINE__);
        }
        $this->LicenseOrPermitNumber = $licenseOrPermitNumber;
        return $this;
    }
    /**
     * Get LicenseOrPermitExpirationDate value
     * @return string|null
     */
    public function getLicenseOrPermitExpirationDate()
    {
        return $this->LicenseOrPermitExpirationDate;
    }
    /**
     * Set LicenseOrPermitExpirationDate value
     * @param string $licenseOrPermitExpirationDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail
     */
    public function setLicenseOrPermitExpirationDate($licenseOrPermitExpirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($licenseOrPermitExpirationDate) && !is_string($licenseOrPermitExpirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($licenseOrPermitExpirationDate)), __LINE__);
        }
        $this->LicenseOrPermitExpirationDate = $licenseOrPermitExpirationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\InternationalControlledExportDetail
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
