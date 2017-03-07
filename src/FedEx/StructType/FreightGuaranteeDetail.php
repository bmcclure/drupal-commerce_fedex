<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightGuaranteeDetail StructType
 * @subpackage Structs
 */
class FreightGuaranteeDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - documentation: Date for all Freight guarantee types.
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * Constructor method for FreightGuaranteeDetail
     * @uses FreightGuaranteeDetail::setType()
     * @uses FreightGuaranteeDetail::setDate()
     * @param string $type
     * @param string $date
     */
    public function __construct($type = null, $date = null)
    {
        $this
            ->setType($type)
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
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FreightGuaranteeType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\FreightGuaranteeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightGuaranteeDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\FreightGuaranteeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\FreightGuaranteeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightGuaranteeDetail
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\FreightGuaranteeDetail
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
