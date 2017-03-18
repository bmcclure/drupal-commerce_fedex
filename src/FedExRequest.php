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
 * Manage FedEx API services.
 *
 * @package Drupal\commerce_fedex
 */
class FedExRequest implements FedExRequestInterface {

  /**
   * {@inheritdoc}
   */
  public function __call($name, $arguments) {
    if (strpos($name, "get") !== 0) {
      throw new \Exception("Method $name not found");
    }

    $name = substr($name, 3);
    $configuration = $arguments[0];

    if (strpos($name, "Service") !== FALSE) {
      if (!class_exists("\\NicholasCreativeMedia\\FedExPHP\\Services\\$name")) {
        throw new \Exception("FedEx service $name not found");
      }

      $wsdl_options = $arguments[1] ?: [];
      $reset_soap_client = isset($arguments[2]) ? $arguments[2] : TRUE;

      return new $name(
        $wsdl_options,
        $reset_soap_client,
        $this->getMode($configuration)
      );
    }

    if (strpos($name, "Request") !== FALSE) {
      if (!class_exists("\\NicholasCreativeMedia\\FedExPHP\\Services\\$name")) {
        throw new \Exception("Request Type $name not found");
      }

      return new $name(
        $this->getWebAuthenticationDetail($configuration),
        $this->getClientDetail($configuration)
      );
    }

    throw new \Exception("Method $name not found");
  }

  /**
   * {@inheritdoc}
   */
  public function getRateRequest(array $configuration) {
    $rate_request = new RateRequest(
      $this->getWebAuthenticationDetail($configuration),
      $this->getClientDetail($configuration)
    );

    return $rate_request;
  }

  /**
   * {@inheritdoc}
   */
  public function getRateService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $rate_service = new RateService($wsdlOptions, $resetSoapClient, $this->getMode($configuration));

    return $rate_service;
  }

  /**
   * {@inheritdoc}
   */
  public function getTrackRequest(array $configuration) {
    $track_request = new TrackRequest(
      $this->getWebAuthenticationDetail($configuration),
      $this->getClientDetail($configuration)
    );

    return $track_request;
  }

  /**
   * {@inheritdoc}
   */
  public function getTrackService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $track_service = new TrackService($wsdlOptions, $resetSoapClient, $this->getMode($configuration));

    return $track_service;
  }

  /**
   * {@inheritdoc}
   */
  public function getShipRequest(array $configuration) {
    $ship_request = new ProcessShipmentRequest(
      $this->getWebAuthenticationDetail($configuration),
      $this->getClientDetail($configuration)
    );

    return $ship_request;
  }

  /**
   * {@inheritdoc}
   */
  public function getShipService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $ship_service = new ShipService(
      $wsdlOptions,
      $resetSoapClient,
      $this->getMode($configuration)
    );

    return $ship_service;
  }

  /**
   * {@inheritdoc}
   */
  public function getWebAuthenticationDetail(array $configuration) {
    $web_authentication_detail = new WebAuthenticationDetail();
    $web_authentication_detail->setUserCredential(new WebAuthenticationCredential(
      $configuration['api_information']['api_key'],
      $configuration['api_information']['api_password']
    ));

    return $web_authentication_detail;
  }

  /**
   * {@inheritdoc}
   */
  public function getClientDetail(array $configuration) {
    $client_detail = new ClientDetail(
      $configuration['api_information']['account_number'],
      $configuration['api_information']['meter_number'],
      '123'
    );

    return $client_detail;
  }

  /**
   * {@inheritdoc}
   */
  public function getVersion($service) {
    $class = '\NicholasCreativeMedia\FedExPHP\Services\\' . $service;

    if (!class_exists($class)) {
      throw new \Exception("Service $class not found");
    }

    /** @var \NicholasCreativeMedia\FedExPHP\Services\FedExService $class */
    return $class::version();
  }

  /**
   * Gets the mode to use to connect.
   *
   * @param array $configuration
   *   The configuration array.
   *
   * @return string
   *   The mode (test or live).
   */
  protected function getMode(array $configuration) {
    $mode = 'test';

    if (!empty($configuration['api_information']['mode'])) {
      $mode = $configuration['api_information']['mode'];
    }

    return $mode;
  }

}
