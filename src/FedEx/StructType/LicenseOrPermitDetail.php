<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LicenseOrPermitDetail StructType
 * @subpackage Structs
 */
class LicenseOrPermitDetail extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - documentation: License or Permit Number.
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The EffectiveDate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the effective date of the license.
     * - minOccurs: 0
     * @var string
     */
    public $EffectiveDate;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the expiration date of the license.
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDate;
    /**
     * Constructor method for LicenseOrPermitDetail
     * @uses LicenseOrPermitDetail::setNumber()
     * @uses LicenseOrPermitDetail::setEffectiveDate()
     * @uses LicenseOrPermitDetail::setExpirationDate()
     * @param string $number
     * @param string $effectiveDate
     * @param string $expirationDate
     */
    public function __construct($number = null, $effectiveDate = null, $expirationDate = null)
    {
        $this
            ->setNumber($number)
            ->setEffectiveDate($effectiveDate)
            ->setExpirationDate($expirationDate);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Drupal\commerce_fedex\FedEx\StructType\LicenseOrPermitDetail
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\LicenseOrPermitDetail
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\LicenseOrPermitDetail
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\LicenseOrPermitDetail
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
