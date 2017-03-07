<?php

namespace Drupal\commerce_fedex\FedEx\ServiceType;

/**
 * Class which returns the class map definition
 * @package
 */
class TrackServiceClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Address' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\Address',
            'AppointmentDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\AppointmentDetail',
            'AppointmentTimeDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\AppointmentTimeDetail',
            'AvailableImagesDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\AvailableImagesDetail',
            'ClientDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\ClientDetail',
            'Commodity' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\Commodity',
            'CompletedTrackDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\CompletedTrackDetail',
            'Contact' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\Contact',
            'ContactAndAddress' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\ContactAndAddress',
            'ContentRecord' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\ContentRecord',
            'CustomerExceptionRequestDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\CustomerExceptionRequestDetail',
            'CustomsOptionDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\CustomsOptionDetail',
            'DateRange' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\DateRange',
            'DeliveryOptionEligibilityDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\DeliveryOptionEligibilityDetail',
            'Dimensions' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\Dimensions',
            'Distance' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\Distance',
            'EMailDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\EMailDetail',
            'EdtExciseCondition' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\EdtExciseCondition',
            'LocalTimeRange' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\LocalTimeRange',
            'Localization' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\Localization',
            'Measure' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\Measure',
            'Money' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\Money',
            'NaftaCommodityDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\NaftaCommodityDetail',
            'Notification' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\Notification',
            'NotificationDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\NotificationDetail',
            'NotificationParameter' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\NotificationParameter',
            'PagingDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\PagingDetail',
            'PieceCountVerificationDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\PieceCountVerificationDetail',
            'QualifiedTrackingNumber' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\QualifiedTrackingNumber',
            'SendNotificationsReply' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\SendNotificationsReply',
            'SendNotificationsRequest' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\SendNotificationsRequest',
            'ShipmentEventNotificationDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\ShipmentEventNotificationDetail',
            'ShipmentEventNotificationSpecification' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\ShipmentEventNotificationSpecification',
            'ShipmentNotificationFormatSpecification' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\ShipmentNotificationFormatSpecification',
            'SignatureImageDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\SignatureImageDetail',
            'SignatureProofOfDeliveryFaxReply' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\SignatureProofOfDeliveryFaxReply',
            'SignatureProofOfDeliveryFaxRequest' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\SignatureProofOfDeliveryFaxRequest',
            'SignatureProofOfDeliveryLetterReply' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\SignatureProofOfDeliveryLetterReply',
            'SignatureProofOfDeliveryLetterRequest' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\SignatureProofOfDeliveryLetterRequest',
            'SpecialInstructionStatusDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\SpecialInstructionStatusDetail',
            'StringBarcode' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\StringBarcode',
            'TrackAdvanceNotificationDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackAdvanceNotificationDetail',
            'TrackChargeDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackChargeDetail',
            'TrackDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackDetail',
            'TrackEvent' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackEvent',
            'TrackInformationNoteDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackInformationNoteDetail',
            'TrackNotificationPackage' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackNotificationPackage',
            'TrackNotificationRecipientDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackNotificationRecipientDetail',
            'TrackOtherIdentifierDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackOtherIdentifierDetail',
            'TrackPackageIdentifier' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackPackageIdentifier',
            'TrackPayment' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackPayment',
            'TrackReconciliation' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackReconciliation',
            'TrackReply' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackReply',
            'TrackRequest' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackRequest',
            'TrackReturnDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackReturnDetail',
            'TrackSelectionDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackSelectionDetail',
            'TrackServiceDescriptionDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackServiceDescriptionDetail',
            'TrackSpecialHandling' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackSpecialHandling',
            'TrackSpecialInstruction' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackSpecialInstruction',
            'TrackSplitShipmentPart' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackSplitShipmentPart',
            'TrackStatusAncillaryDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackStatusAncillaryDetail',
            'TrackStatusDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackStatusDetail',
            'TrackingDateOrTimestamp' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TrackingDateOrTimestamp',
            'TransactionDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\TransactionDetail',
            'Weight' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\Weight',
            'WebAuthenticationDetail' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\WebAuthenticationCredential',
            'VersionId' => '\\Drupal\\commerce_fedex\\FedEx\\StructType\\VersionId',
        );
    }
}
