<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalLabelsDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies additional labels to be produced. All required labels for shipments will be produced without the need to request additional labels. These are only available as thermal labels.
 * @subpackage Structs
 */
class AdditionalLabelsDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The type of additional labels to return.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - documentation: The number of this type label to return
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * Constructor method for AdditionalLabelsDetail
     * @uses AdditionalLabelsDetail::setType()
     * @uses AdditionalLabelsDetail::setCount()
     * @param string $type
     * @param int $count
     */
    public function __construct($type = null, $count = null)
    {
        $this
            ->setType($type)
            ->setCount($count);
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
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\AdditionalLabelsType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\AdditionalLabelsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\AdditionalLabelsDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\AdditionalLabelsType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\AdditionalLabelsType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \Drupal\commerce_fedex\FedEx\StructType\AdditionalLabelsDetail
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\AdditionalLabelsDetail
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
