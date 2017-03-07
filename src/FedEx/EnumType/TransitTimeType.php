<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TransitTimeType EnumType
 * @subpackage Enumerations
 */
class TransitTimeType
{
    /**
     * Constant for value 'EIGHTEEN_DAYS'
     * @return string 'EIGHTEEN_DAYS'
     */
    const VALUE_EIGHTEEN_DAYS = 'EIGHTEEN_DAYS';
    /**
     * Constant for value 'EIGHT_DAYS'
     * @return string 'EIGHT_DAYS'
     */
    const VALUE_EIGHT_DAYS = 'EIGHT_DAYS';
    /**
     * Constant for value 'ELEVEN_DAYS'
     * @return string 'ELEVEN_DAYS'
     */
    const VALUE_ELEVEN_DAYS = 'ELEVEN_DAYS';
    /**
     * Constant for value 'FIFTEEN_DAYS'
     * @return string 'FIFTEEN_DAYS'
     */
    const VALUE_FIFTEEN_DAYS = 'FIFTEEN_DAYS';
    /**
     * Constant for value 'FIVE_DAYS'
     * @return string 'FIVE_DAYS'
     */
    const VALUE_FIVE_DAYS = 'FIVE_DAYS';
    /**
     * Constant for value 'FOURTEEN_DAYS'
     * @return string 'FOURTEEN_DAYS'
     */
    const VALUE_FOURTEEN_DAYS = 'FOURTEEN_DAYS';
    /**
     * Constant for value 'FOUR_DAYS'
     * @return string 'FOUR_DAYS'
     */
    const VALUE_FOUR_DAYS = 'FOUR_DAYS';
    /**
     * Constant for value 'NINETEEN_DAYS'
     * @return string 'NINETEEN_DAYS'
     */
    const VALUE_NINETEEN_DAYS = 'NINETEEN_DAYS';
    /**
     * Constant for value 'NINE_DAYS'
     * @return string 'NINE_DAYS'
     */
    const VALUE_NINE_DAYS = 'NINE_DAYS';
    /**
     * Constant for value 'ONE_DAY'
     * @return string 'ONE_DAY'
     */
    const VALUE_ONE_DAY = 'ONE_DAY';
    /**
     * Constant for value 'SEVENTEEN_DAYS'
     * @return string 'SEVENTEEN_DAYS'
     */
    const VALUE_SEVENTEEN_DAYS = 'SEVENTEEN_DAYS';
    /**
     * Constant for value 'SEVEN_DAYS'
     * @return string 'SEVEN_DAYS'
     */
    const VALUE_SEVEN_DAYS = 'SEVEN_DAYS';
    /**
     * Constant for value 'SIXTEEN_DAYS'
     * @return string 'SIXTEEN_DAYS'
     */
    const VALUE_SIXTEEN_DAYS = 'SIXTEEN_DAYS';
    /**
     * Constant for value 'SIX_DAYS'
     * @return string 'SIX_DAYS'
     */
    const VALUE_SIX_DAYS = 'SIX_DAYS';
    /**
     * Constant for value 'TEN_DAYS'
     * @return string 'TEN_DAYS'
     */
    const VALUE_TEN_DAYS = 'TEN_DAYS';
    /**
     * Constant for value 'THIRTEEN_DAYS'
     * @return string 'THIRTEEN_DAYS'
     */
    const VALUE_THIRTEEN_DAYS = 'THIRTEEN_DAYS';
    /**
     * Constant for value 'THREE_DAYS'
     * @return string 'THREE_DAYS'
     */
    const VALUE_THREE_DAYS = 'THREE_DAYS';
    /**
     * Constant for value 'TWELVE_DAYS'
     * @return string 'TWELVE_DAYS'
     */
    const VALUE_TWELVE_DAYS = 'TWELVE_DAYS';
    /**
     * Constant for value 'TWENTY_DAYS'
     * @return string 'TWENTY_DAYS'
     */
    const VALUE_TWENTY_DAYS = 'TWENTY_DAYS';
    /**
     * Constant for value 'TWO_DAYS'
     * @return string 'TWO_DAYS'
     */
    const VALUE_TWO_DAYS = 'TWO_DAYS';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
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
     * @uses self::VALUE_EIGHTEEN_DAYS
     * @uses self::VALUE_EIGHT_DAYS
     * @uses self::VALUE_ELEVEN_DAYS
     * @uses self::VALUE_FIFTEEN_DAYS
     * @uses self::VALUE_FIVE_DAYS
     * @uses self::VALUE_FOURTEEN_DAYS
     * @uses self::VALUE_FOUR_DAYS
     * @uses self::VALUE_NINETEEN_DAYS
     * @uses self::VALUE_NINE_DAYS
     * @uses self::VALUE_ONE_DAY
     * @uses self::VALUE_SEVENTEEN_DAYS
     * @uses self::VALUE_SEVEN_DAYS
     * @uses self::VALUE_SIXTEEN_DAYS
     * @uses self::VALUE_SIX_DAYS
     * @uses self::VALUE_TEN_DAYS
     * @uses self::VALUE_THIRTEEN_DAYS
     * @uses self::VALUE_THREE_DAYS
     * @uses self::VALUE_TWELVE_DAYS
     * @uses self::VALUE_TWENTY_DAYS
     * @uses self::VALUE_TWO_DAYS
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EIGHTEEN_DAYS,
            self::VALUE_EIGHT_DAYS,
            self::VALUE_ELEVEN_DAYS,
            self::VALUE_FIFTEEN_DAYS,
            self::VALUE_FIVE_DAYS,
            self::VALUE_FOURTEEN_DAYS,
            self::VALUE_FOUR_DAYS,
            self::VALUE_NINETEEN_DAYS,
            self::VALUE_NINE_DAYS,
            self::VALUE_ONE_DAY,
            self::VALUE_SEVENTEEN_DAYS,
            self::VALUE_SEVEN_DAYS,
            self::VALUE_SIXTEEN_DAYS,
            self::VALUE_SIX_DAYS,
            self::VALUE_TEN_DAYS,
            self::VALUE_THIRTEEN_DAYS,
            self::VALUE_THREE_DAYS,
            self::VALUE_TWELVE_DAYS,
            self::VALUE_TWENTY_DAYS,
            self::VALUE_TWO_DAYS,
            self::VALUE_UNKNOWN,
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
