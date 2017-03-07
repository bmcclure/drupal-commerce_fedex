<?php

namespace Drupal\commerce_fedex\FedEx\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class TrackService extends AbstractSoapClientBase
{

  public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $beta = false) {
    $default_options = [
      \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'_wsdls'.DIRECTORY_SEPARATOR.'TrackService_v12.wsdl',
      \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Drupal\commerce_fedex\FedEx\ServiceType\TrackServiceClassMap::get(),
    ];
    $options = array_merge($default_options,$wsdlOptions);
    parent::__construct($options,$resetSoapClient,$beta);

    $this->version = new \Drupal\commerce_fedex\FedEx\StructType\VersionId('trck',12,0,0);
  }
    /**
     * Method to call the operation originally named
     * retrieveSignatureProofOfDeliveryLetter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterReply|bool
     */
    public function retrieveSignatureProofOfDeliveryLetter(\Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveSignatureProofOfDeliveryLetter($signatureProofOfDeliveryLetterRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named track
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_fedex\FedEx\StructType\TrackRequest $trackRequest
     * @return \Drupal\commerce_fedex\FedEx\StructType\TrackReply|bool
     */
    public function track(\Drupal\commerce_fedex\FedEx\StructType\TrackRequest $trackRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->track($trackRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendSignatureProofOfDeliveryFax
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest
     * @return \Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxReply|bool
     */
    public function sendSignatureProofOfDeliveryFax(\Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->sendSignatureProofOfDeliveryFax($signatureProofOfDeliveryFaxRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendNotifications
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsRequest $sendNotificationsRequest
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply|bool
     */
    public function sendNotifications(\Drupal\commerce_fedex\FedEx\StructType\SendNotificationsRequest $sendNotificationsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->sendNotifications($sendNotificationsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Drupal\commerce_fedex\FedEx\StructType\SendNotificationsReply|\Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryFaxReply|\Drupal\commerce_fedex\FedEx\StructType\SignatureProofOfDeliveryLetterReply|\Drupal\commerce_fedex\FedEx\StructType\TrackReply
     */
    public function getResult()
    {
        return parent::getResult();
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
