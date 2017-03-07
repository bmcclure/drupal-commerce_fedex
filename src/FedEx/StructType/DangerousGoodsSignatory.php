<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DangerousGoodsSignatory StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies that name, title and place of the signatory responsible for the dangerous goods shipment.
 * @subpackage Structs
 */
class DangerousGoodsSignatory extends AbstractStructBase
{
    /**
     * The ContactName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContactName;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The Place
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the place where the form is signed.
     * - minOccurs: 0
     * @var string
     */
    public $Place;
    /**
     * Constructor method for DangerousGoodsSignatory
     * @uses DangerousGoodsSignatory::setContactName()
     * @uses DangerousGoodsSignatory::setTitle()
     * @uses DangerousGoodsSignatory::setPlace()
     * @param string $contactName
     * @param string $title
     * @param string $place
     */
    public function __construct($contactName = null, $title = null, $place = null)
    {
        $this
            ->setContactName($contactName)
            ->setTitle($title)
            ->setPlace($place);
    }
    /**
     * Get ContactName value
     * @return string|null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    /**
     * Set ContactName value
     * @param string $contactName
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsSignatory
     */
    public function setContactName($contactName = null)
    {
        // validation for constraint: string
        if (!is_null($contactName) && !is_string($contactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactName)), __LINE__);
        }
        $this->ContactName = $contactName;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsSignatory
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get Place value
     * @return string|null
     */
    public function getPlace()
    {
        return $this->Place;
    }
    /**
     * Set Place value
     * @param string $place
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsSignatory
     */
    public function setPlace($place = null)
    {
        // validation for constraint: string
        if (!is_null($place) && !is_string($place)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($place)), __LINE__);
        }
        $this->Place = $place;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\DangerousGoodsSignatory
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
