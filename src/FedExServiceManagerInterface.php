<?php

namespace Drupal\commerce_fedex;

/**
 * Class FedExServiceManager Manages Fedex Api
 *
 * @package Drupal\commerce_fedex
 */
interface FedExServiceManagerInterface {
  /**
   * Gets a new rate request
   *
   * @param array $configuration
   * The plugin configuration
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\RateRequest
   */
  public function getRateRequest(array $configuration);

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
  public function getRateService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE);

  /**
   * Gets a new TrackRequest
   *
   * @param array $configuration
   *  The Plugin Configuration
   * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
   */
  public function getTrackRequest(array $configuration);

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
  public function getTrackService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE);

  /**
   * Gets a new ShipRequest
   *
   * @param array $configuration
   *  The Plugin Configuration
   * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessShipmentRequest
   */
  public function getShipRequest(array $configuration);

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
  public function getShipService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE);

  /**
   *   getVersion Return the current WSDL version of a service
   *
   * @param $service
   *
   * @return mixed
   * @throws \Exception
   */
  public function getVersion($service);
}