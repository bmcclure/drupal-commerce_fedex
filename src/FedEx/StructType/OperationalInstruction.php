<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationalInstruction StructType
 * @subpackage Structs
 */
class OperationalInstruction extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - documentation: Position of operational instruction element.
     * - minOccurs: 0
     * @var int
     */
    public $Number;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - documentation: Content corresponding to the operational instruction.
     * - minOccurs: 0
     * @var string
     */
    public $Content;
    /**
     * Constructor method for OperationalInstruction
     * @uses OperationalInstruction::setNumber()
     * @uses OperationalInstruction::setContent()
     * @param int $number
     * @param string $content
     */
    public function __construct($number = null, $content = null)
    {
        $this
            ->setNumber($number)
            ->setContent($content);
    }
    /**
     * Get Number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Drupal\commerce_fedex\FedEx\StructType\OperationalInstruction
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \Drupal\commerce_fedex\FedEx\StructType\OperationalInstruction
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
        $this->Content = $content;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\OperationalInstruction
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
