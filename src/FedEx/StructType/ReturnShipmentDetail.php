<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnShipmentDetail StructType
 * @subpackage Structs
 */
class ReturnShipmentDetail extends AbstractStructBase
{
    /**
     * The ReturnType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReturnType;
    /**
     * The Rma
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\Rma
     */
    public $Rma;
    /**
     * The ReturnEMailDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ReturnEMailDetail
     */
    public $ReturnEMailDetail;
    /**
     * The ReturnAssociation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\ReturnAssociationDetail
     */
    public $ReturnAssociation;
    /**
     * Constructor method for ReturnShipmentDetail
     * @uses ReturnShipmentDetail::setReturnType()
     * @uses ReturnShipmentDetail::setRma()
     * @uses ReturnShipmentDetail::setReturnEMailDetail()
     * @uses ReturnShipmentDetail::setReturnAssociation()
     * @param string $returnType
     * @param \Drupal\commerce_fedex\FedEx\StructType\Rma $rma
     * @param \Drupal\commerce_fedex\FedEx\StructType\ReturnEMailDetail $returnEMailDetail
     * @param \Drupal\commerce_fedex\FedEx\StructType\ReturnAssociationDetail $returnAssociation
     */
    public function __construct($returnType = null, \Drupal\commerce_fedex\FedEx\StructType\Rma $rma = null, \Drupal\commerce_fedex\FedEx\StructType\ReturnEMailDetail $returnEMailDetail = null, \Drupal\commerce_fedex\FedEx\StructType\ReturnAssociationDetail $returnAssociation = null)
    {
        $this
            ->setReturnType($returnType)
            ->setRma($rma)
            ->setReturnEMailDetail($returnEMailDetail)
            ->setReturnAssociation($returnAssociation);
    }
    /**
     * Get ReturnType value
     * @return string|null
     */
    public function getReturnType()
    {
        return $this->ReturnType;
    }
    /**
     * Set ReturnType value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\ReturnType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnType
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnShipmentDetail
     */
    public function setReturnType($returnType = null)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\ReturnType::valueIsValid($returnType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnType, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\ReturnType::getValidValues())), __LINE__);
        }
        $this->ReturnType = $returnType;
        return $this;
    }
    /**
     * Get Rma value
     * @return \Drupal\commerce_fedex\FedEx\StructType\Rma|null
     */
    public function getRma()
    {
        return $this->Rma;
    }
    /**
     * Set Rma value
     * @param \Drupal\commerce_fedex\FedEx\StructType\Rma $rma
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnShipmentDetail
     */
    public function setRma(\Drupal\commerce_fedex\FedEx\StructType\Rma $rma = null)
    {
        $this->Rma = $rma;
        return $this;
    }
    /**
     * Get ReturnEMailDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnEMailDetail|null
     */
    public function getReturnEMailDetail()
    {
        return $this->ReturnEMailDetail;
    }
    /**
     * Set ReturnEMailDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ReturnEMailDetail $returnEMailDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnShipmentDetail
     */
    public function setReturnEMailDetail(\Drupal\commerce_fedex\FedEx\StructType\ReturnEMailDetail $returnEMailDetail = null)
    {
        $this->ReturnEMailDetail = $returnEMailDetail;
        return $this;
    }
    /**
     * Get ReturnAssociation value
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnAssociationDetail|null
     */
    public function getReturnAssociation()
    {
        return $this->ReturnAssociation;
    }
    /**
     * Set ReturnAssociation value
     * @param \Drupal\commerce_fedex\FedEx\StructType\ReturnAssociationDetail $returnAssociation
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnShipmentDetail
     */
    public function setReturnAssociation(\Drupal\commerce_fedex\FedEx\StructType\ReturnAssociationDetail $returnAssociation = null)
    {
        $this->ReturnAssociation = $returnAssociation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\ReturnShipmentDetail
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
