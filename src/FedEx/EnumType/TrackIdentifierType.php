<?php

namespace Drupal\commerce_fedex\FedEx\EnumType;

/**
 * This class stands for TrackIdentifierType EnumType
 * @subpackage Enumerations
 */
class TrackIdentifierType
{
    /**
     * Constant for value 'BILL_OF_LADING'
     * @return string 'BILL_OF_LADING'
     */
    const VALUE_BILL_OF_LADING = 'BILL_OF_LADING';
    /**
     * Constant for value 'COD_RETURN_TRACKING_NUMBER'
     * @return string 'COD_RETURN_TRACKING_NUMBER'
     */
    const VALUE_COD_RETURN_TRACKING_NUMBER = 'COD_RETURN_TRACKING_NUMBER';
    /**
     * Constant for value 'CUSTOMER_AUTHORIZATION_NUMBER'
     * @return string 'CUSTOMER_AUTHORIZATION_NUMBER'
     */
    const VALUE_CUSTOMER_AUTHORIZATION_NUMBER = 'CUSTOMER_AUTHORIZATION_NUMBER';
    /**
     * Constant for value 'CUSTOMER_REFERENCE'
     * @return string 'CUSTOMER_REFERENCE'
     */
    const VALUE_CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
    /**
     * Constant for value 'DEPARTMENT'
     * @return string 'DEPARTMENT'
     */
    const VALUE_DEPARTMENT = 'DEPARTMENT';
    /**
     * Constant for value 'DOCUMENT_AIRWAY_BILL'
     * @return string 'DOCUMENT_AIRWAY_BILL'
     */
    const VALUE_DOCUMENT_AIRWAY_BILL = 'DOCUMENT_AIRWAY_BILL';
    /**
     * Constant for value 'FREE_FORM_REFERENCE'
     * @return string 'FREE_FORM_REFERENCE'
     */
    const VALUE_FREE_FORM_REFERENCE = 'FREE_FORM_REFERENCE';
    /**
     * Constant for value 'GROUND_INTERNATIONAL'
     * @return string 'GROUND_INTERNATIONAL'
     */
    const VALUE_GROUND_INTERNATIONAL = 'GROUND_INTERNATIONAL';
    /**
     * Constant for value 'GROUND_SHIPMENT_ID'
     * @return string 'GROUND_SHIPMENT_ID'
     */
    const VALUE_GROUND_SHIPMENT_ID = 'GROUND_SHIPMENT_ID';
    /**
     * Constant for value 'GROUP_MPS'
     * @return string 'GROUP_MPS'
     */
    const VALUE_GROUP_MPS = 'GROUP_MPS';
    /**
     * Constant for value 'INVOICE'
     * @return string 'INVOICE'
     */
    const VALUE_INVOICE = 'INVOICE';
    /**
     * Constant for value 'JOB_GLOBAL_TRACKING_NUMBER'
     * @return string 'JOB_GLOBAL_TRACKING_NUMBER'
     */
    const VALUE_JOB_GLOBAL_TRACKING_NUMBER = 'JOB_GLOBAL_TRACKING_NUMBER';
    /**
     * Constant for value 'ORDER_GLOBAL_TRACKING_NUMBER'
     * @return string 'ORDER_GLOBAL_TRACKING_NUMBER'
     */
    const VALUE_ORDER_GLOBAL_TRACKING_NUMBER = 'ORDER_GLOBAL_TRACKING_NUMBER';
    /**
     * Constant for value 'ORDER_TO_PAY_NUMBER'
     * @return string 'ORDER_TO_PAY_NUMBER'
     */
    const VALUE_ORDER_TO_PAY_NUMBER = 'ORDER_TO_PAY_NUMBER';
    /**
     * Constant for value 'OUTBOUND_LINK_TO_RETURN'
     * @return string 'OUTBOUND_LINK_TO_RETURN'
     */
    const VALUE_OUTBOUND_LINK_TO_RETURN = 'OUTBOUND_LINK_TO_RETURN';
    /**
     * Constant for value 'PARTNER_CARRIER_NUMBER'
     * @return string 'PARTNER_CARRIER_NUMBER'
     */
    const VALUE_PARTNER_CARRIER_NUMBER = 'PARTNER_CARRIER_NUMBER';
    /**
     * Constant for value 'PART_NUMBER'
     * @return string 'PART_NUMBER'
     */
    const VALUE_PART_NUMBER = 'PART_NUMBER';
    /**
     * Constant for value 'PURCHASE_ORDER'
     * @return string 'PURCHASE_ORDER'
     */
    const VALUE_PURCHASE_ORDER = 'PURCHASE_ORDER';
    /**
     * Constant for value 'REROUTE_TRACKING_NUMBER'
     * @return string 'REROUTE_TRACKING_NUMBER'
     */
    const VALUE_REROUTE_TRACKING_NUMBER = 'REROUTE_TRACKING_NUMBER';
    /**
     * Constant for value 'RETURNED_TO_SHIPPER_TRACKING_NUMBER'
     * @return string 'RETURNED_TO_SHIPPER_TRACKING_NUMBER'
     */
    const VALUE_RETURNED_TO_SHIPPER_TRACKING_NUMBER = 'RETURNED_TO_SHIPPER_TRACKING_NUMBER';
    /**
     * Constant for value 'RETURN_MATERIALS_AUTHORIZATION'
     * @return string 'RETURN_MATERIALS_AUTHORIZATION'
     */
    const VALUE_RETURN_MATERIALS_AUTHORIZATION = 'RETURN_MATERIALS_AUTHORIZATION';
    /**
     * Constant for value 'SHIPPER_REFERENCE'
     * @return string 'SHIPPER_REFERENCE'
     */
    const VALUE_SHIPPER_REFERENCE = 'SHIPPER_REFERENCE';
    /**
     * Constant for value 'STANDARD_MPS'
     * @return string 'STANDARD_MPS'
     */
    const VALUE_STANDARD_MPS = 'STANDARD_MPS';
    /**
     * Constant for value 'TRACKING_NUMBER_OR_DOORTAG'
     * @return string 'TRACKING_NUMBER_OR_DOORTAG'
     */
    const VALUE_TRACKING_NUMBER_OR_DOORTAG = 'TRACKING_NUMBER_OR_DOORTAG';
    /**
     * Constant for value 'TRANSPORTATION_CONTROL_NUMBER'
     * @return string 'TRANSPORTATION_CONTROL_NUMBER'
     */
    const VALUE_TRANSPORTATION_CONTROL_NUMBER = 'TRANSPORTATION_CONTROL_NUMBER';
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
     * @uses self::VALUE_BILL_OF_LADING
     * @uses self::VALUE_COD_RETURN_TRACKING_NUMBER
     * @uses self::VALUE_CUSTOMER_AUTHORIZATION_NUMBER
     * @uses self::VALUE_CUSTOMER_REFERENCE
     * @uses self::VALUE_DEPARTMENT
     * @uses self::VALUE_DOCUMENT_AIRWAY_BILL
     * @uses self::VALUE_FREE_FORM_REFERENCE
     * @uses self::VALUE_GROUND_INTERNATIONAL
     * @uses self::VALUE_GROUND_SHIPMENT_ID
     * @uses self::VALUE_GROUP_MPS
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_JOB_GLOBAL_TRACKING_NUMBER
     * @uses self::VALUE_ORDER_GLOBAL_TRACKING_NUMBER
     * @uses self::VALUE_ORDER_TO_PAY_NUMBER
     * @uses self::VALUE_OUTBOUND_LINK_TO_RETURN
     * @uses self::VALUE_PARTNER_CARRIER_NUMBER
     * @uses self::VALUE_PART_NUMBER
     * @uses self::VALUE_PURCHASE_ORDER
     * @uses self::VALUE_REROUTE_TRACKING_NUMBER
     * @uses self::VALUE_RETURNED_TO_SHIPPER_TRACKING_NUMBER
     * @uses self::VALUE_RETURN_MATERIALS_AUTHORIZATION
     * @uses self::VALUE_SHIPPER_REFERENCE
     * @uses self::VALUE_STANDARD_MPS
     * @uses self::VALUE_TRACKING_NUMBER_OR_DOORTAG
     * @uses self::VALUE_TRANSPORTATION_CONTROL_NUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BILL_OF_LADING,
            self::VALUE_COD_RETURN_TRACKING_NUMBER,
            self::VALUE_CUSTOMER_AUTHORIZATION_NUMBER,
            self::VALUE_CUSTOMER_REFERENCE,
            self::VALUE_DEPARTMENT,
            self::VALUE_DOCUMENT_AIRWAY_BILL,
            self::VALUE_FREE_FORM_REFERENCE,
            self::VALUE_GROUND_INTERNATIONAL,
            self::VALUE_GROUND_SHIPMENT_ID,
            self::VALUE_GROUP_MPS,
            self::VALUE_INVOICE,
            self::VALUE_JOB_GLOBAL_TRACKING_NUMBER,
            self::VALUE_ORDER_GLOBAL_TRACKING_NUMBER,
            self::VALUE_ORDER_TO_PAY_NUMBER,
            self::VALUE_OUTBOUND_LINK_TO_RETURN,
            self::VALUE_PARTNER_CARRIER_NUMBER,
            self::VALUE_PART_NUMBER,
            self::VALUE_PURCHASE_ORDER,
            self::VALUE_REROUTE_TRACKING_NUMBER,
            self::VALUE_RETURNED_TO_SHIPPER_TRACKING_NUMBER,
            self::VALUE_RETURN_MATERIALS_AUTHORIZATION,
            self::VALUE_SHIPPER_REFERENCE,
            self::VALUE_STANDARD_MPS,
            self::VALUE_TRACKING_NUMBER_OR_DOORTAG,
            self::VALUE_TRANSPORTATION_CONTROL_NUMBER,
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
