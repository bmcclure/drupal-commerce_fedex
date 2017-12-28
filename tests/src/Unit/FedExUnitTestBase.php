<?php

namespace Drupal\Tests\commerce_fedex\Unit;

use Drupal\commerce_fedex\FedExRequest;
use Drupal\Tests\UnitTestCase;

/**
 * A test base class for FedEx Unit Tests.
 */
abstract class FedExUnitTestBase extends UnitTestCase {

  /**
   * {@inheritdoc}
   */
  protected function setUp() {

    parent::setUp();
    $this->request = new FedExRequest();
    $this->configuration = [
      'api_information' => [
        'api_key' => 'testkey',
        'api_password' => 'testpass',
        'account_number' => '1234567',
        'meter_number' => '9876543',
        'mode' => 'test',
      ],
    ];
  }

}
