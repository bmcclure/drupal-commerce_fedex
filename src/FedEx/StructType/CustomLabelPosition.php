<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelPosition StructType
 * @subpackage Structs
 */
class CustomLabelPosition extends AbstractStructBase
{
    /**
     * The X
     * Meta informations extracted from the WSDL
     * - documentation: Horizontal position, relative to left edge of custom area.
     * - minOccurs: 0
     * @var int
     */
    public $X;
    /**
     * The Y
     * Meta informations extracted from the WSDL
     * - documentation: Vertical position, relative to top edge of custom area.
     * - minOccurs: 0
     * @var int
     */
    public $Y;
    /**
     * Constructor method for CustomLabelPosition
     * @uses CustomLabelPosition::setX()
     * @uses CustomLabelPosition::setY()
     * @param int $x
     * @param int $y
     */
    public function __construct($x = null, $y = null)
    {
        $this
            ->setX($x)
            ->setY($y);
    }
    /**
     * Get X value
     * @return int|null
     */
    public function getX()
    {
        return $this->X;
    }
    /**
     * Set X value
     * @param int $x
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelPosition
     */
    public function setX($x = null)
    {
        // validation for constraint: int
        if (!is_null($x) && !is_numeric($x)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($x)), __LINE__);
        }
        $this->X = $x;
        return $this;
    }
    /**
     * Get Y value
     * @return int|null
     */
    public function getY()
    {
        return $this->Y;
    }
    /**
     * Set Y value
     * @param int $y
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelPosition
     */
    public function setY($y = null)
    {
        // validation for constraint: int
        if (!is_null($y) && !is_numeric($y)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($y)), __LINE__);
        }
        $this->Y = $y;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomLabelPosition
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
