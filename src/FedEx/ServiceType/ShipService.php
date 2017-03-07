<?php

namespace Drupal\commerce_fedex\FedEx\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class ShipService extends AbstractSoapClientBase
{

  public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $beta = false) {
    $default_options = [
      \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'_wsdls'.DIRECTORY_SEPARATOR.'ShipService_v19.wsdl',
      \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Drupal\commerce_fedex\FedEx\ServiceType\ShipServiceClassMap::get(),
    ];
    $options = array_merge($default_options,$wsdlOptions);
    parent::__construct($options,$resetSoapClient,$beta);

    $this->version = new \Drupal\commerce_fedex\FedEx\StructType\VersionId('ship',19,0,0);
  }
    /**
     * Method to call the operation originally named processTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ProcessTagRequest $processTagRequest
     * @return \Drupal\commerce_fedex\FedEx\StructType\ProcessTagReply|bool
     */
    public function processTag(\Drupal\commerce_fedex\FedEx\StructType\ProcessTagRequest $processTagRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->processTag($processTagRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named processShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ProcessShipmentRequest $processShipmentRequest
     * @return \Drupal\commerce_fedex\FedEx\StructType\ProcessShipmentReply|bool
     */
    public function processShipment(\Drupal\commerce_fedex\FedEx\StructType\ProcessShipmentRequest $processShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->processShipment($processShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_fedex\FedEx\StructType\DeleteTagRequest $deleteTagRequest
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentReply|bool
     */
    public function deleteTag(\Drupal\commerce_fedex\FedEx\StructType\DeleteTagRequest $deleteTagRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteTag($deleteTagRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_fedex\FedEx\StructType\DeleteShipmentRequest $deleteShipmentRequest
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentReply|bool
     */
    public function deleteShipment(\Drupal\commerce_fedex\FedEx\StructType\DeleteShipmentRequest $deleteShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteShipment($deleteShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Drupal\commerce_fedex\FedEx\StructType\ValidateShipmentRequest $validateShipmentRequest
     * @return \Drupal\commerce_fedex\FedEx\StructType\ShipmentReply|bool
     */
    public function validateShipment(\Drupal\commerce_fedex\FedEx\StructType\ValidateShipmentRequest $validateShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->validateShipment($validateShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Drupal\commerce_fedex\FedEx\StructType\ProcessShipmentReply|\Drupal\commerce_fedex\FedEx\StructType\ProcessTagReply|\Drupal\commerce_fedex\FedEx\StructType\ShipmentReply
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
