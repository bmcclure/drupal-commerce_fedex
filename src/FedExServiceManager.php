<?php

namespace Drupal\commerce_fedex;

use NicholasCreativeMedia\FedExPHP\Services\TrackService;
use NicholasCreativeMedia\FedExPHP\Services\ShipService;
use NicholasCreativeMedia\FedExPHP\Services\RateService;
use NicholasCreativeMedia\FedExPHP\Structs\ClientDetail;
use NicholasCreativeMedia\FedExPHP\Structs\ProcessShipmentRequest;
use NicholasCreativeMedia\FedExPHP\Structs\RateRequest;
use NicholasCreativeMedia\FedExPHP\Structs\TrackRequest;
use NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationCredential;
use NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail;

/**
 * Class FedExServiceManager Manages Fedex Api
 *
 * @package Drupal\commerce_fedex
 */
class FedExServiceManager implements FedExServiceManagerInterface {

  /**
   * Function to handle any additional Services
   *
   * @param $name
   *   The Service name
   * @param $arguments
   *   configuration data
   * @return mixed
   * @throws \Exception
   */
  function __call($name, $arguments){
    if (strpos($name, "get") !== 0) {
      throw New \Exception("Method $name not found");
    }
    $name = substr($name, 3);

    $configuration = $arguments[0];

    if (strpos($name, "Service") !== FALSE){
      if (!class_exists("\\NicholasCreativeMedia\\FedExPHP\\Services\\$name")){
        throw New \Exception("Service $name not found");
      }
      $wsdlOptions = $arguments[1]?$arguments[1]:[];
      $resetSoapClient = isset($arguments[2])?$arguments[2]:TRUE;
      return new $name($wsdlOptions, $resetSoapClient, $configuration['mode'] === 'test' );
    }
    if (strpos($name, "Request") !== FALSE){
      if (!class_exists("\\NicholasCreativeMedia\\FedExPHP\\Services\\$name")){
        throw New \Exception("Request Type $name not found");
      }

      return new $name(
        $this->getWebAuthenticationDetail($configuration),
        $this->getClientDetail($configuration)
      );
    }
    throw New \Exception("Method $name not found");
  }

  /**
   * Gets a new rate request
   *
   * @param array $configuration
   * The plugin configuration
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\RateRequest
   */
  public function getRateRequest(array $configuration) {
    $rateRequest = new RateRequest(
      $this->getWebAuthenticationDetail($configuration),
      $this->getClientDetail($configuration)
    );

    return $rateRequest;
  }

  /**
   * Gets a new RateService
   *
   * @param array $configuration
   *  The Plugin Configuration
   * @param array $wsdlOptions
   *  Additional options to send to AbstractSoapClientBase
   * @param bool $resetSoapClient
   *  Whether to get a new soap client
   * @return \NicholasCreativeMedia\FedExPHP\Services\RateService
   */
  public function getRateService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $rateService = new RateService($wsdlOptions, $resetSoapClient, ($configuration['mode'] == 'test'));

    return $rateService;
  }

  /**
   * Gets a new TrackRequest
   *
   * @param array $configuration
   *  The Plugin Configuration
   * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
   */
  public function getTrackRequest(array $configuration) {
    $trackRequest = new TrackRequest(
      $this->getWebAuthenticationDetail($configuration),
      $this->getClientDetail($configuration)
    );

    return $trackRequest;
  }

  /**
   * Gets a new TrackService
   *
   * @param array $configuration
   *  The Plugin Configuration
   * @param array $wsdlOptions
   *  Additional options to send to AbstractSoapClientBase
   * @param bool $resetSoapClient
   *  Whether to get a new soap client
   * @return \NicholasCreativeMedia\FedExPHP\Services\TrackService
   */
  public function getTrackService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $trackService = new TrackService($wsdlOptions, $resetSoapClient, ($configuration['mode'] == 'test'));

    return $trackService;
  }

  /**
   * Gets a new ShipRequest
   *
   * @param array $configuration
   *  The Plugin Configuration
   * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessShipmentRequest
   */
  public function getShipRequest(array $configuration) {
    $shipRequest = new ProcessShipmentRequest(
      $this->getWebAuthenticationDetail($configuration),
      $this->getClientDetail($configuration)
    );

    return $shipRequest;
  }

  /**
   * Gets a new ShipService
   *
   * @param array $configuration
   *  The Plugin Configuration
   * @param array $wsdlOptions
   *  Additional options to send to AbstractSoapClientBase
   * @param bool $resetSoapClient
   *  Whether to get a new soap client
   * @return \NicholasCreativeMedia\FedExPHP\Services\ShipService
   */
  public function getShipService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $shipService = new ShipService($wsdlOptions, $resetSoapClient, ($configuration['mode'] == 'test'));

    return $shipService;
  }

  /**
   * Gets a new WebAuthentication object
   *
   * @param array $configuration
   *  The Plugin Configuration
   * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
   */
  public function getWebAuthenticationDetail(array $configuration) {
    $webAuthenticationDetail = new WebAuthenticationDetail();
    $webAuthenticationDetail->setUserCredential(new WebAuthenticationCredential($configuration['api_information']['api_key'], $configuration['api_information']['api_password']));

    return $webAuthenticationDetail;
  }

  /**
   * Gets a new ClientDetail object
   *
   * @param array $configuration
   *  The Plugin Configuration
   * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
   */
  public function getClientDetail(array $configuration) {
    $clientDetail = new ClientDetail($configuration['api_information']['account_number'], $configuration['api_information']['meter_number'], '123');

    return $clientDetail;
  }

  /**
   *   getVersion Return the current WSDL version of a service
   *
   * @param $service
   *
   * @return mixed
   * @throws \Exception
   */
  public function getVersion($service){
    $class = '\NicholasCreativeMedia\FedExPHP\Services\\' . $service;
    if (class_exists($class)){
      /** @var \NicholasCreativeMedia\FedExPHP\Services\FedExService $class */
      return $class::version();
    }
    throw new \Exception("Service $class not found");
  }

}

