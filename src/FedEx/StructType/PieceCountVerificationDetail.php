<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PieceCountVerificationDetail StructType
 * @subpackage Structs
 */
class PieceCountVerificationDetail extends AbstractStructBase
{
    /**
     * The CountLocationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountLocationType;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for PieceCountVerificationDetail
     * @uses PieceCountVerificationDetail::setCountLocationType()
     * @uses PieceCountVerificationDetail::setCount()
     * @uses PieceCountVerificationDetail::setDescription()
     * @param string $countLocationType
     * @param int $count
     * @param string $description
     */
    public function __construct($countLocationType = null, $count = null, $description = null)
    {
        $this
            ->setCountLocationType($countLocationType)
            ->setCount($count)
            ->setDescription($description);
    }
    /**
     * Get CountLocationType value
     * @return string|null
     */
    public function getCountLocationType()
    {
        return $this->CountLocationType;
    }
    /**
     * Set CountLocationType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PieceCountLocationType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\PieceCountLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $countLocationType
     * @return \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail
     */
    public function setCountLocationType($countLocationType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\PieceCountLocationType::valueIsValid($countLocationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $countLocationType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\PieceCountLocationType::getValidValues())), __LINE__);
        }
        $this->CountLocationType = $countLocationType;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail
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
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\PieceCountVerificationDetail
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
