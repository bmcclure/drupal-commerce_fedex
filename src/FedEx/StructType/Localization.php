<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Localization StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the representation of human-readable text.
 * @subpackage Structs
 */
class Localization extends AbstractStructBase
{
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - documentation: Two-letter code for language (e.g. EN, FR, etc.)
     * - minOccurs: 1
     * @var string
     */
    public $LanguageCode;
    /**
     * The LocaleCode
     * Meta informations extracted from the WSDL
     * - documentation: Two-letter code for the region (e.g. us, ca, etc..).
     * - minOccurs: 0
     * @var string
     */
    public $LocaleCode;
    /**
     * Constructor method for Localization
     * @uses Localization::setLanguageCode()
     * @uses Localization::setLocaleCode()
     * @param string $languageCode
     * @param string $localeCode
     */
    public function __construct($languageCode = null, $localeCode = null)
    {
        $this
            ->setLanguageCode($languageCode)
            ->setLocaleCode($localeCode);
    }
    /**
     * Get LanguageCode value
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param string $languageCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\Localization
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        return $this;
    }
    /**
     * Get LocaleCode value
     * @return string|null
     */
    public function getLocaleCode()
    {
        return $this->LocaleCode;
    }
    /**
     * Set LocaleCode value
     * @param string $localeCode
     * @return \Drupal\commerce_fedex\FedEx\StructType\Localization
     */
    public function setLocaleCode($localeCode = null)
    {
        // validation for constraint: string
        if (!is_null($localeCode) && !is_string($localeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localeCode)), __LINE__);
        }
        $this->LocaleCode = $localeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\Localization
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
