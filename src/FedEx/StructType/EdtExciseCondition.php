<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EdtExciseCondition StructType
 * @subpackage Structs
 */
class EdtExciseCondition extends AbstractStructBase
{
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Category;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: Customer-declared value, with data type and legal values depending on excise condition, used in defining the taxable value of the item.
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for EdtExciseCondition
     * @uses EdtExciseCondition::setCategory()
     * @uses EdtExciseCondition::setValue()
     * @param string $category
     * @param string $value
     */
    public function __construct($category = null, $value = null)
    {
        $this
            ->setCategory($category)
            ->setValue($value);
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\EdtExciseCondition
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
