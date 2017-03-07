<?php

namespace Drupal\commerce_fedex\FedEx\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsDeclarationStatementDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: This provides the information necessary to identify the different statements, declarations, acts, and/or certifications that apply to this shipment.
 * @subpackage Structs
 */
class CustomsDeclarationStatementDetail extends AbstractStructBase
{
    /**
     * The Types
     * Meta informations extracted from the WSDL
     * - documentation: This indicates the different statements, declarations, acts, and/or certifications that apply to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Types;
    /**
     * The NaftaLowValueStatementDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the NAFTA low value statement information.
     * - minOccurs: 0
     * @var \Drupal\commerce_fedex\FedEx\StructType\NaftaLowValueStatementDetail
     */
    public $NaftaLowValueStatementDetail;
    /**
     * Constructor method for CustomsDeclarationStatementDetail
     * @uses CustomsDeclarationStatementDetail::setTypes()
     * @uses CustomsDeclarationStatementDetail::setNaftaLowValueStatementDetail()
     * @param string[] $types
     * @param \Drupal\commerce_fedex\FedEx\StructType\NaftaLowValueStatementDetail $naftaLowValueStatementDetail
     */
    public function __construct(array $types = array(), \Drupal\commerce_fedex\FedEx\StructType\NaftaLowValueStatementDetail $naftaLowValueStatementDetail = null)
    {
        $this
            ->setTypes($types)
            ->setNaftaLowValueStatementDetail($naftaLowValueStatementDetail);
    }
    /**
     * Get Types value
     * @return string[]|null
     */
    public function getTypes()
    {
        return $this->Types;
    }
    /**
     * Set Types value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomsDeclarationStatementType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomsDeclarationStatementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $types
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomsDeclarationStatementDetail
     */
    public function setTypes(array $types = array())
    {
        $invalidValues = array();
        foreach ($types as $customsDeclarationStatementDetailTypesItem) {
            if (!\Drupal\commerce_fedex\FedEx\EnumType\CustomsDeclarationStatementType::valueIsValid($customsDeclarationStatementDetailTypesItem)) {
                $invalidValues[] = var_export($customsDeclarationStatementDetailTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CustomsDeclarationStatementType::getValidValues())), __LINE__);
        }
        $this->Types = $types;
        return $this;
    }
    /**
     * Add item to Types value
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomsDeclarationStatementType::valueIsValid()
     * @uses \Drupal\commerce_fedex\FedEx\EnumType\CustomsDeclarationStatementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomsDeclarationStatementDetail
     */
    public function addToTypes($item)
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_fedex\FedEx\EnumType\CustomsDeclarationStatementType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Drupal\commerce_fedex\FedEx\EnumType\CustomsDeclarationStatementType::getValidValues())), __LINE__);
        }
        $this->Types[] = $item;
        return $this;
    }
    /**
     * Get NaftaLowValueStatementDetail value
     * @return \Drupal\commerce_fedex\FedEx\StructType\NaftaLowValueStatementDetail|null
     */
    public function getNaftaLowValueStatementDetail()
    {
        return $this->NaftaLowValueStatementDetail;
    }
    /**
     * Set NaftaLowValueStatementDetail value
     * @param \Drupal\commerce_fedex\FedEx\StructType\NaftaLowValueStatementDetail $naftaLowValueStatementDetail
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomsDeclarationStatementDetail
     */
    public function setNaftaLowValueStatementDetail(\Drupal\commerce_fedex\FedEx\StructType\NaftaLowValueStatementDetail $naftaLowValueStatementDetail = null)
    {
        $this->NaftaLowValueStatementDetail = $naftaLowValueStatementDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Drupal\commerce_fedex\FedEx\StructType\CustomsDeclarationStatementDetail
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
