<?php

namespace Drupal\commerce_fedex\FedEx\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class RateService extends AbstractSoapClientBase
{

  public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $beta = false) {
    $default_options = [
      \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'_wsdls'.DIRECTORY_SEPARATOR.'RateService_v20.wsdl',
      \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Drupal\commerce_fedex\Fedex\ClassMap::get(),
    ];
    $options = array_merge($default_options,$wsdlOptions);
    parent::__construct($options,$resetSoapClient,$beta);

    $this->version = new \Arkitecht\FedEx\Structs\VersionId('crs',20,0,0);
  }
  /**
   * Method to call the operation originally named getRates
   * @uses AbstractSoapClientBase::getSoapClient()
   * @uses AbstractSoapClientBase::setResult()
   * @uses AbstractSoapClientBase::getResult()
   * @uses AbstractSoapClientBase::saveLastError()
   * @param \Drupal\commerce_fedex\FedEx\StructType\RateRequest $rateRequest
   * @return \Drupal\commerce_fedex\FedEx\StructType\RateReply|bool
   */
  public function getRates(\Drupal\commerce_fedex\FedEx\StructType\RateRequest $rateRequest)
  {
    try {
      $this->setResult(self::getSoapClient()->getRates($rateRequest));
      return $this->getResult();
    } catch (\SoapFault $soapFault) {
      $this->saveLastError(__METHOD__, $soapFault);
      return false;
    }
  }
  /**
   * Returns the result
   * @see AbstractSoapClientBase::getResult()
   * @return \Drupal\commerce_fedex\FedEx\StructType\RateReply
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
