<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureOptionDetail StructType
 * @subpackage Structs
 */
class SignatureOptionDetail extends AbstractStructBase
{
    /**
     * The OptionType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OptionType;
    /**
     * The SignatureReleaseNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SignatureReleaseNumber;
    /**
     * Constructor method for SignatureOptionDetail
     * @uses SignatureOptionDetail::setOptionType()
     * @uses SignatureOptionDetail::setSignatureReleaseNumber()
     * @param string $optionType
     * @param string $signatureReleaseNumber
     */
    public function __construct($optionType = null, $signatureReleaseNumber = null)
    {
        $this
            ->setOptionType($optionType)
            ->setSignatureReleaseNumber($signatureReleaseNumber);
    }
    /**
     * Get OptionType value
     * @return string|null
     */
    public function getOptionType()
    {
        return $this->OptionType;
    }
    /**
     * Set OptionType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SignatureOptionType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\SignatureOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $optionType
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureOptionDetail
     */
    public function setOptionType($optionType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\SignatureOptionType::valueIsValid($optionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $optionType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\SignatureOptionType::getValidValues())), __LINE__);
        }
        $this->OptionType = $optionType;
        return $this;
    }
    /**
     * Get SignatureReleaseNumber value
     * @return string|null
     */
    public function getSignatureReleaseNumber()
    {
        return $this->SignatureReleaseNumber;
    }
    /**
     * Set SignatureReleaseNumber value
     * @param string $signatureReleaseNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureOptionDetail
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber = null)
    {
        // validation for constraint: string
        if (!is_null($signatureReleaseNumber) && !is_string($signatureReleaseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signatureReleaseNumber)), __LINE__);
        }
        $this->SignatureReleaseNumber = $signatureReleaseNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureOptionDetail
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
