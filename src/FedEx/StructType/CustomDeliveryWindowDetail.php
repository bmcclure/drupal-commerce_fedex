<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomDeliveryWindowDetail StructType
 * @subpackage Structs
 */
class CustomDeliveryWindowDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of custom delivery being requested.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The RequestTime
     * Meta informations extracted from the WSDL
     * - documentation: Time by which delivery is requested.
     * - minOccurs: 0
     * @var string
     */
    public $RequestTime;
    /**
     * The RequestRange
     * Meta informations extracted from the WSDL
     * - documentation: Range of dates for custom delivery request; only used if type is BETWEEN.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\DateRange
     */
    public $RequestRange;
    /**
     * The RequestDate
     * Meta informations extracted from the WSDL
     * - documentation: Date for custom delivery request; only used for types of ON, BETWEEN, or AFTER.
     * - minOccurs: 0
     * @var string
     */
    public $RequestDate;
    /**
     * Constructor method for CustomDeliveryWindowDetail
     * @uses CustomDeliveryWindowDetail::setType()
     * @uses CustomDeliveryWindowDetail::setRequestTime()
     * @uses CustomDeliveryWindowDetail::setRequestRange()
     * @uses CustomDeliveryWindowDetail::setRequestDate()
     * @param string $type
     * @param string $requestTime
     * @param \Drupal\commerce_fedex\FedEx\StructType\DateRange $requestRange
     * @param string $requestDate
     */
    public function __construct($type = null, $requestTime = null, \Drupal\commerce_fedex\FedEx\StructType\DateRange $requestRange = null, $requestDate = null)
    {
        $this
            ->setType($type)
            ->setRequestTime($requestTime)
            ->setRequestRange($requestRange)
            ->setRequestDate($requestDate);
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
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomDeliveryWindowType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomDeliveryWindowType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDeliveryWindowDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\CustomDeliveryWindowType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CustomDeliveryWindowType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get RequestTime value
     * @return string|null
     */
    public function getRequestTime()
    {
        return $this->RequestTime;
    }
    /**
     * Set RequestTime value
     * @param string $requestTime
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDeliveryWindowDetail
     */
    public function setRequestTime($requestTime = null)
    {
        // validation for constraint: string
        if (!is_null($requestTime) && !is_string($requestTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestTime)), __LINE__);
        }
        $this->RequestTime = $requestTime;
        return $this;
    }
    /**
     * Get RequestRange value
     * @return \Drupal\commerce_fedex\FedEx\StructType\DateRange|null
     */
    public function getRequestRange()
    {
        return $this->RequestRange;
    }
    /**
     * Set RequestRange value
     * @param \Drupal\commerce_fedex\FedEx\StructType\DateRange $requestRange
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDeliveryWindowDetail
     */
    public function setRequestRange(\Drupal\commerce_fedex\FedEx\StructType\DateRange $requestRange = null)
    {
        $this->RequestRange = $requestRange;
        return $this;
    }
    /**
     * Get RequestDate value
     * @return string|null
     */
    public function getRequestDate()
    {
        return $this->RequestDate;
    }
    /**
     * Set RequestDate value
     * @param string $requestDate
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDeliveryWindowDetail
     */
    public function setRequestDate($requestDate = null)
    {
        // validation for constraint: string
        if (!is_null($requestDate) && !is_string($requestDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestDate)), __LINE__);
        }
        $this->RequestDate = $requestDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomDeliveryWindowDetail
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
