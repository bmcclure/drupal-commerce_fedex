<?php

namespace Drupal\commerce_fedex;

use Drupal\commerce_fedex\FedEx\ServiceType\RateService;
use Drupal\commerce_fedex\FedEx\ServiceType\ShipService;
use Drupal\commerce_fedex\FedEx\ServiceType\TrackService;
use Drupal\commerce_fedex\FedEx\StructType\ClientDetail;
use Drupal\commerce_fedex\FedEx\StructType\ProcessShipmentRequest;
use Drupal\commerce_fedex\FedEx\StructType\RateRequest;
use Drupal\commerce_fedex\FedEx\StructType\TrackRequest;
use Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationCredential;
use Drupal\commerce_fedex\FedEx\StructType\WebAuthenticationDetail;

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
    $webAuthenticationDetail->setUserCredential(new WebAuthenticationCredential($configuration['api_information']['api_key'], $configuration['api_information']['api_password']));

    return $webAuthenticationDetail;
  }

  public function getClientDetail(array $configuration) {
    $clientDetail = new ClientDetail($configuration['api_information']['account_number'], $configuration['api_information']['meter_number']);

    return $clientDetail;
  }
}
