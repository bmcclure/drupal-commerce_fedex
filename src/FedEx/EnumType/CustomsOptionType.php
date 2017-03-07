<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for CustomsOptionType EnumType
 * @subpackage Enumerations
 */
class CustomsOptionType
{
    /**
     * Constant for value 'COURTESY_RETURN_LABEL'
     * @return string 'COURTESY_RETURN_LABEL'
     */
    const VALUE_COURTESY_RETURN_LABEL = 'COURTESY_RETURN_LABEL';
    /**
     * Constant for value 'EXHIBITION_TRADE_SHOW'
     * @return string 'EXHIBITION_TRADE_SHOW'
     */
    const VALUE_EXHIBITION_TRADE_SHOW = 'EXHIBITION_TRADE_SHOW';
    /**
     * Constant for value 'FAULTY_ITEM'
     * @return string 'FAULTY_ITEM'
     */
    const VALUE_FAULTY_ITEM = 'FAULTY_ITEM';
    /**
     * Constant for value 'FOLLOWING_REPAIR'
     * @return string 'FOLLOWING_REPAIR'
     */
    const VALUE_FOLLOWING_REPAIR = 'FOLLOWING_REPAIR';
    /**
     * Constant for value 'FOR_REPAIR'
     * @return string 'FOR_REPAIR'
     */
    const VALUE_FOR_REPAIR = 'FOR_REPAIR';
    /**
     * Constant for value 'ITEM_FOR_LOAN'
     * @return string 'ITEM_FOR_LOAN'
     */
    const VALUE_ITEM_FOR_LOAN = 'ITEM_FOR_LOAN';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'REJECTED'
     * @return string 'REJECTED'
     */
    const VALUE_REJECTED = 'REJECTED';
    /**
     * Constant for value 'REPLACEMENT'
     * @return string 'REPLACEMENT'
     */
    const VALUE_REPLACEMENT = 'REPLACEMENT';
    /**
     * Constant for value 'TRIAL'
     * @return string 'TRIAL'
     */
    const VALUE_TRIAL = 'TRIAL';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_COURTESY_RETURN_LABEL
     * @uses self::VALUE_EXHIBITION_TRADE_SHOW
     * @uses self::VALUE_FAULTY_ITEM
     * @uses self::VALUE_FOLLOWING_REPAIR
     * @uses self::VALUE_FOR_REPAIR
     * @uses self::VALUE_ITEM_FOR_LOAN
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_REJECTED
     * @uses self::VALUE_REPLACEMENT
     * @uses self::VALUE_TRIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COURTESY_RETURN_LABEL,
            self::VALUE_EXHIBITION_TRADE_SHOW,
            self::VALUE_FAULTY_ITEM,
            self::VALUE_FOLLOWING_REPAIR,
            self::VALUE_FOR_REPAIR,
            self::VALUE_ITEM_FOR_LOAN,
            self::VALUE_OTHER,
            self::VALUE_REJECTED,
            self::VALUE_REPLACEMENT,
            self::VALUE_TRIAL,
        );
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
