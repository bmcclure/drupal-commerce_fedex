<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContentRecord StructType
 * @subpackage Structs
 */
class ContentRecord extends AbstractStructBase
{
    /**
     * The PartNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartNumber;
    /**
     * The ItemNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemNumber;
    /**
     * The ReceivedQuantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ReceivedQuantity;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for ContentRecord
     * @uses ContentRecord::setPartNumber()
     * @uses ContentRecord::setItemNumber()
     * @uses ContentRecord::setReceivedQuantity()
     * @uses ContentRecord::setDescription()
     * @param string $partNumber
     * @param string $itemNumber
     * @param int $receivedQuantity
     * @param string $description
     */
    public function __construct($partNumber = null, $itemNumber = null, $receivedQuantity = null, $description = null)
    {
        $this
            ->setPartNumber($partNumber)
            ->setItemNumber($itemNumber)
            ->setReceivedQuantity($receivedQuantity)
            ->setDescription($description);
    }
    /**
     * Get PartNumber value
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }
    /**
     * Set PartNumber value
     * @param string $partNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContentRecord
     */
    public function setPartNumber($partNumber = null)
    {
        // validation for constraint: string
        if (!is_null($partNumber) && !is_string($partNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partNumber)), __LINE__);
        }
        $this->PartNumber = $partNumber;
        return $this;
    }
    /**
     * Get ItemNumber value
     * @return string|null
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }
    /**
     * Set ItemNumber value
     * @param string $itemNumber
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContentRecord
     */
    public function setItemNumber($itemNumber = null)
    {
        // validation for constraint: string
        if (!is_null($itemNumber) && !is_string($itemNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemNumber)), __LINE__);
        }
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    /**
     * Get ReceivedQuantity value
     * @return int|null
     */
    public function getReceivedQuantity()
    {
        return $this->ReceivedQuantity;
    }
    /**
     * Set ReceivedQuantity value
     * @param int $receivedQuantity
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContentRecord
     */
    public function setReceivedQuantity($receivedQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($receivedQuantity) && !is_numeric($receivedQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($receivedQuantity)), __LINE__);
        }
        $this->ReceivedQuantity = $receivedQuantity;
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContentRecord
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
     * @return \Drupal\commerce_fedex\FedEx\StructType\ContentRecord
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
