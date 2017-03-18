<?php

namespace Drupal\commerce_fedex;

/**
 * Manage FedEx API services.
 *
 * @package Drupal\commerce_fedex
 */
interface FedExRequestInterface {

  /**
   * Gets a new rate request.
   *
   * @param array $configuration
   *   The plugin configuration.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\RateRequest
   *   The rate request.
   */
  public function getRateRequest(array $configuration);

  /**
   * Gets a new RateService.
   *
   * @param array $configuration
   *   The Plugin Configuration.
   * @param array $wsdlOptions
   *   Additional options to send to AbstractSoapClientBase.
   * @param bool $resetSoapClient
   *   Whether to get a new soap client.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Services\RateService
   *   The rate service.
   */
  public function getRateService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE);

  /**
   * Gets a new TrackRequest.
   *
   * @param array $configuration
   *   The Plugin Configuration.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
   *   The track request.
   */
  public function getTrackRequest(array $configuration);

  /**
   * Gets a new TrackService.
   *
   * @param array $configuration
   *   The Plugin Configuration.
   * @param array $wsdlOptions
   *   Additional options to send to AbstractSoapClientBase.
   * @param bool $resetSoapClient
   *   Whether to get a new soap client.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Services\TrackService
   *   The track service.
   */
  public function getTrackService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE);

  /**
   * Gets a new ShipRequest.
   *
   * @param array $configuration
   *   The Plugin Configuration.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessShipmentRequest
   *   The request.
   */
  public function getShipRequest(array $configuration);

  /**
   * Gets a new ShipService.
   *
   * @param array $configuration
   *   The Plugin Configuration.
   * @param array $wsdlOptions
   *   Additional options to send to AbstractSoapClientBase.
   * @param bool $resetSoapClient
   *   Whether to get a new soap client.
   *
   * @return \NicholasCreativeMedia\FedExPHP\Services\ShipService
   *   The ship service.
   */
  public function getShipService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE);

  /**
   * Return the current WSDL version of a service.
   *
   * @param string $service
   *   The service.
   *
   * @return mixed
   *   The current version.
   *
   * @throws \Exception
   */
  public function getVersion($service);

}
