<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabZoneSpecification StructType
 * @subpackage Structs
 */
class DocTabZoneSpecification extends AbstractStructBase
{
    /**
     * The ZoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneNumber;
    /**
     * The Header
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Header;
    /**
     * The DataField
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DataField;
    /**
     * The LiteralValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LiteralValue;
    /**
     * The Justification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Justification;
    /**
     * Constructor method for DocTabZoneSpecification
     * @uses DocTabZoneSpecification::setZoneNumber()
     * @uses DocTabZoneSpecification::setHeader()
     * @uses DocTabZoneSpecification::setDataField()
     * @uses DocTabZoneSpecification::setLiteralValue()
     * @uses DocTabZoneSpecification::setJustification()
     * @param int $zoneNumber
     * @param string $header
     * @param string $dataField
     * @param string $literalValue
     * @param string $justification
     */
    public function __construct($zoneNumber = null, $header = null, $dataField = null, $literalValue = null, $justification = null)
    {
        $this
            ->setZoneNumber($zoneNumber)
            ->setHeader($header)
            ->setDataField($dataField)
            ->setLiteralValue($literalValue)
            ->setJustification($justification);
    }
    /**
     * Get ZoneNumber value
     * @return int|null
     */
    public function getZoneNumber()
    {
        return $this->ZoneNumber;
    }
    /**
     * Set ZoneNumber value
     * @param int $zoneNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification
     */
    public function setZoneNumber($zoneNumber = null)
    {
        // validation for constraint: int
        if (!is_null($zoneNumber) && !is_numeric($zoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneNumber)), __LINE__);
        }
        $this->ZoneNumber = $zoneNumber;
        return $this;
    }
    /**
     * Get Header value
     * @return string|null
     */
    public function getHeader()
    {
        return $this->Header;
    }
    /**
     * Set Header value
     * @param string $header
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification
     */
    public function setHeader($header = null)
    {
        // validation for constraint: string
        if (!is_null($header) && !is_string($header)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($header)), __LINE__);
        }
        $this->Header = $header;
        return $this;
    }
    /**
     * Get DataField value
     * @return string|null
     */
    public function getDataField()
    {
        return $this->DataField;
    }
    /**
     * Set DataField value
     * @param string $dataField
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification
     */
    public function setDataField($dataField = null)
    {
        // validation for constraint: string
        if (!is_null($dataField) && !is_string($dataField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dataField)), __LINE__);
        }
        $this->DataField = $dataField;
        return $this;
    }
    /**
     * Get LiteralValue value
     * @return string|null
     */
    public function getLiteralValue()
    {
        return $this->LiteralValue;
    }
    /**
     * Set LiteralValue value
     * @param string $literalValue
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification
     */
    public function setLiteralValue($literalValue = null)
    {
        // validation for constraint: string
        if (!is_null($literalValue) && !is_string($literalValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($literalValue)), __LINE__);
        }
        $this->LiteralValue = $literalValue;
        return $this;
    }
    /**
     * Get Justification value
     * @return string|null
     */
    public function getJustification()
    {
        return $this->Justification;
    }
    /**
     * Set Justification value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DocTabZoneJustificationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\DocTabZoneJustificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $justification
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification
     */
    public function setJustification($justification = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\DocTabZoneJustificationType::valueIsValid($justification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $justification, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\DocTabZoneJustificationType::getValidValues())), __LINE__);
        }
        $this->Justification = $justification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\DocTabZoneSpecification
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
