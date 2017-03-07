<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for LabelStockType EnumType
 * @subpackage Enumerations
 */
class LabelStockType
{
    /**
     * Constant for value 'PAPER_4X6'
     * @return string 'PAPER_4X6'
     */
    const VALUE_PAPER_4_X_6 = 'PAPER_4X6';
    /**
     * Constant for value 'PAPER_4X8'
     * @return string 'PAPER_4X8'
     */
    const VALUE_PAPER_4_X_8 = 'PAPER_4X8';
    /**
     * Constant for value 'PAPER_4X9'
     * @return string 'PAPER_4X9'
     */
    const VALUE_PAPER_4_X_9 = 'PAPER_4X9';
    /**
     * Constant for value 'PAPER_7X4.75'
     * @return string 'PAPER_7X4.75'
     */
    const VALUE_PAPER_7_X_4_75 = 'PAPER_7X4.75';
    /**
     * Constant for value 'PAPER_8.5X11_BOTTOM_HALF_LABEL'
     * @return string 'PAPER_8.5X11_BOTTOM_HALF_LABEL'
     */
    const VALUE_PAPER_8_5_X_11_BOTTOM_HALF_LABEL = 'PAPER_8.5X11_BOTTOM_HALF_LABEL';
    /**
     * Constant for value 'PAPER_8.5X11_TOP_HALF_LABEL'
     * @return string 'PAPER_8.5X11_TOP_HALF_LABEL'
     */
    const VALUE_PAPER_8_5_X_11_TOP_HALF_LABEL = 'PAPER_8.5X11_TOP_HALF_LABEL';
    /**
     * Constant for value 'STOCK_4X6'
     * @return string 'STOCK_4X6'
     */
    const VALUE_STOCK_4_X_6 = 'STOCK_4X6';
    /**
     * Constant for value 'STOCK_4X6.75_LEADING_DOC_TAB'
     * @return string 'STOCK_4X6.75_LEADING_DOC_TAB'
     */
    const VALUE_STOCK_4_X_6_75_LEADING_DOC_TAB = 'STOCK_4X6.75_LEADING_DOC_TAB';
    /**
     * Constant for value 'STOCK_4X6.75_TRAILING_DOC_TAB'
     * @return string 'STOCK_4X6.75_TRAILING_DOC_TAB'
     */
    const VALUE_STOCK_4_X_6_75_TRAILING_DOC_TAB = 'STOCK_4X6.75_TRAILING_DOC_TAB';
    /**
     * Constant for value 'STOCK_4X8'
     * @return string 'STOCK_4X8'
     */
    const VALUE_STOCK_4_X_8 = 'STOCK_4X8';
    /**
     * Constant for value 'STOCK_4X9_LEADING_DOC_TAB'
     * @return string 'STOCK_4X9_LEADING_DOC_TAB'
     */
    const VALUE_STOCK_4_X_9_LEADING_DOC_TAB = 'STOCK_4X9_LEADING_DOC_TAB';
    /**
     * Constant for value 'STOCK_4X9_TRAILING_DOC_TAB'
     * @return string 'STOCK_4X9_TRAILING_DOC_TAB'
     */
    const VALUE_STOCK_4_X_9_TRAILING_DOC_TAB = 'STOCK_4X9_TRAILING_DOC_TAB';
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
     * @uses self::VALUE_PAPER_4_X_6
     * @uses self::VALUE_PAPER_4_X_8
     * @uses self::VALUE_PAPER_4_X_9
     * @uses self::VALUE_PAPER_7_X_4_75
     * @uses self::VALUE_PAPER_8_5_X_11_BOTTOM_HALF_LABEL
     * @uses self::VALUE_PAPER_8_5_X_11_TOP_HALF_LABEL
     * @uses self::VALUE_STOCK_4_X_6
     * @uses self::VALUE_STOCK_4_X_6_75_LEADING_DOC_TAB
     * @uses self::VALUE_STOCK_4_X_6_75_TRAILING_DOC_TAB
     * @uses self::VALUE_STOCK_4_X_8
     * @uses self::VALUE_STOCK_4_X_9_LEADING_DOC_TAB
     * @uses self::VALUE_STOCK_4_X_9_TRAILING_DOC_TAB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAPER_4_X_6,
            self::VALUE_PAPER_4_X_8,
            self::VALUE_PAPER_4_X_9,
            self::VALUE_PAPER_7_X_4_75,
            self::VALUE_PAPER_8_5_X_11_BOTTOM_HALF_LABEL,
            self::VALUE_PAPER_8_5_X_11_TOP_HALF_LABEL,
            self::VALUE_STOCK_4_X_6,
            self::VALUE_STOCK_4_X_6_75_LEADING_DOC_TAB,
            self::VALUE_STOCK_4_X_6_75_TRAILING_DOC_TAB,
            self::VALUE_STOCK_4_X_8,
            self::VALUE_STOCK_4_X_9_LEADING_DOC_TAB,
            self::VALUE_STOCK_4_X_9_TRAILING_DOC_TAB,
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
