<?php

namespace Drupal\commerce_fedex;

use Arkitecht\FedEx\Services\RateService;
use Arkitecht\FedEx\Services\ShipService;
use Arkitecht\FedEx\Services\TrackService;
use Arkitecht\FedEx\Structs\ClientDetail;
use Arkitecht\FedEx\Structs\ProcessShipmentRequest;
use Arkitecht\FedEx\Structs\RateRequest;
use Arkitecht\FedEx\Structs\TrackRequest;
use Arkitecht\FedEx\Structs\WebAuthenticationCredential;
use Arkitecht\FedEx\Structs\WebAuthenticationDetail;

class FedExServiceManager {
  public function getRateRequest(array $configuration) {
    $rateRequest = new RateRequest(
      $this->getWebAuthenticationDetail($configuration),
      $this->getClientDetail($configuration)
    );

    return $rateRequest;
  }

  public function getRateService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $rateService = new RateService($wsdlOptions, $resetSoapClient, ($configuration['mode'] == 'test'));

    return $rateService;
  }

  public function getTrackRequest(array $configuration) {
    $trackRequest = new TrackRequest(
      $this->getWebAuthenticationDetail($configuration),
      $this->getClientDetail($configuration)
    );

    return $trackRequest;
  }

  public function getTrackService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $trackService = new TrackService($wsdlOptions, $resetSoapClient, ($configuration['mode'] == 'test'));

    return $trackService;
  }

  public function getShipRequest(array $configuration) {
    $shipRequest = new ProcessShipmentRequest(
      $this->getWebAuthenticationDetail($configuration),
      $this->getClientDetail($configuration)
    );

    return $shipRequest;
  }

  public function getShipService(array $configuration, array $wsdlOptions = [], $resetSoapClient = TRUE) {
    $shipService = new ShipService($wsdlOptions, $resetSoapClient, ($configuration['mode'] == 'test'));

    return $shipService;
  }

  public function getWebAuthenticationDetail(array $configuration) {
    $webAuthenticationDetail = new WebAuthenticationDetail();
    $webAuthenticationDetail->setUserCredential(new WebAuthenticationCredential($configuration['api_key'], $configuration['api_password']));

    return $webAuthenticationDetail;
  }

  public function getClientDetail(array $configuration) {
    $clientDetail = new ClientDetail($configuration['account_number'], $configuration['meter_number']);

    return $clientDetail;
  }
}
