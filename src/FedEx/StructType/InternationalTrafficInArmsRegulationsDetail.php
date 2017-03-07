<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalTrafficInArmsRegulationsDetail StructType
 * @subpackage Structs
 */
class InternationalTrafficInArmsRegulationsDetail extends AbstractStructBase
{
    /**
     * The LicenseOrExemptionNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LicenseOrExemptionNumber;
    /**
     * Constructor method for InternationalTrafficInArmsRegulationsDetail
     * @uses InternationalTrafficInArmsRegulationsDetail::setLicenseOrExemptionNumber()
     * @param string $licenseOrExemptionNumber
     */
    public function __construct($licenseOrExemptionNumber = null)
    {
        $this
            ->setLicenseOrExemptionNumber($licenseOrExemptionNumber);
    }
    /**
     * Get LicenseOrExemptionNumber value
     * @return string|null
     */
    public function getLicenseOrExemptionNumber()
    {
        return $this->LicenseOrExemptionNumber;
    }
    /**
     * Set LicenseOrExemptionNumber value
     * @param string $licenseOrExemptionNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\InternationalTrafficInArmsRegulationsDetail
     */
    public function setLicenseOrExemptionNumber($licenseOrExemptionNumber = null)
    {
        // validation for constraint: string
        if (!is_null($licenseOrExemptionNumber) && !is_string($licenseOrExemptionNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($licenseOrExemptionNumber)), __LINE__);
        }
        $this->LicenseOrExemptionNumber = $licenseOrExemptionNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\InternationalTrafficInArmsRegulationsDetail
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
