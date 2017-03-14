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
 * Class FedExServiceManager
 * @package Drupal\commerce_fedex
 */
class FedExServiceManager {

  /**
   * @param $name
   * @param $arguments
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
   * @param array $configuration
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
   * @param array $configuration
   * @param array $wsdlOptions
   * @param bool $resetSoapClient
   * @return \NicholasCreativeMedia\FedExPHP\Services\RateService
   */
  public function getRateService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $rateService = new RateService($wsdlOptions, $resetSoapClient, ($configuration['mode'] == 'test'));

    return $rateService;
  }

  /**
   * @param array $configuration
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
   * @param array $configuration
   * @param array $wsdlOptions
   * @param bool $resetSoapClient
   * @return \NicholasCreativeMedia\FedExPHP\Services\TrackService
   */
  public function getTrackService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $trackService = new TrackService($wsdlOptions, $resetSoapClient, ($configuration['mode'] == 'test'));

    return $trackService;
  }

  /**
   * @param array $configuration
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
   * @param array $configuration
   * @param array $wsdlOptions
   * @param bool $resetSoapClient
   * @return \NicholasCreativeMedia\FedExPHP\Services\ShipService
   */
  public function getShipService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $shipService = new ShipService($wsdlOptions, $resetSoapClient, ($configuration['mode'] == 'test'));

    return $shipService;
  }

  /**
   * @param array $configuration
   * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
   */
  public function getWebAuthenticationDetail(array $configuration) {
    $webAuthenticationDetail = new WebAuthenticationDetail();
    $webAuthenticationDetail->setUserCredential(new WebAuthenticationCredential($configuration['api_information']['api_key'], $configuration['api_information']['api_password']));

    return $webAuthenticationDetail;
  }

  /**
   * @param array $configuration
   * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
   */
  public function getClientDetail(array $configuration) {
    $clientDetail = new ClientDetail($configuration['api_information']['account_number'], $configuration['api_information']['meter_number'], '123');

    return $clientDetail;
  }

  public function getVersion($service){
    $class = '\NicholasCreativeMedia\FedExPHP\Services\\' . $service;
    if (class_exists($class)){
      /** @var \NicholasCreativeMedia\FedExPHP\Services\FedExService $class */
      return $class::version();
    }
    throw new \Exception("Service $class not found");
  }

}

