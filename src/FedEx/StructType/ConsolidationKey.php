<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidationKey StructType
 * Meta informations extracted from the WSDL
 * - documentation: Uniquely identifies a consolidation, which is a logical container for a collection of shipments.
 * @subpackage Structs
 */
class ConsolidationKey extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of consolidation.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Index
     * Meta informations extracted from the WSDL
     * - documentation: Uniquely identifies the consolidation, within a given type and date.
     * - minOccurs: 0
     * @var string
     */
    public $Index;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - documentation: The date on which the consolidation was created.
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * Constructor method for ConsolidationKey
     * @uses ConsolidationKey::setType()
     * @uses ConsolidationKey::setIndex()
     * @uses ConsolidationKey::setDate()
     * @param string $type
     * @param string $index
     * @param string $date
     */
    public function __construct($type = null, $index = null, $date = null)
    {
        $this
            ->setType($type)
            ->setIndex($index)
            ->setDate($date);
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
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ConsolidationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ConsolidationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\ConsolidationKey
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ConsolidationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ConsolidationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Index value
     * @return string|null
     */
    public function getIndex()
    {
        return $this->Index;
    }
    /**
     * Set Index value
     * @param string $index
     * @return \Drupal\commerce_fedex\FedEx\StructType\ConsolidationKey
     */
    public function setIndex($index = null)
    {
        // validation for constraint: string
        if (!is_null($index) && !is_string($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($index)), __LINE__);
        }
        $this->Index = $index;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Drupal\commerce_fedex\FedEx\StructType\ConsolidationKey
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ConsolidationKey
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
