<?php

namespace Drupal\Tests\commerce_fedex\Kernel;

use Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod\FedEx;
use Drupal\commerce_shipping\Entity\ShippingMethodInterface;
use NicholasCreativeMedia\FedExPHP\Enums\DropoffType;
use NicholasCreativeMedia\FedExPHP\Enums\RateRequestType;
use NicholasCreativeMedia\FedExPHP\Enums\ServiceType;
use Drupal\commerce_shipping\ShippingRate;
use Drupal\commerce_price\Price;

/**
 * Tests the shipment order processor.
 *
 * @coversDefaultClass \Drupal\commerce_fedex\Plugin\Commerce\ShippingMethod\FedEx
 * @group commerce_fedex
 */
class FedExRateTest extends FedExKernelTestBase {

  /**
   * Covers ::calculateRates.
   */
  public function testAllInOneRates() {

    $shipments = $this->packerManager->packToShipments($this->order, $this->profile, []);
    $shipments = array_shift($shipments);
    $shipment = reset($shipments);
    $configuration = [
      'api_information' => [
        'api_key' => static::TEST_KEY,
        'api_password' => static::TEST_PASS,
        'account_number' => static::TEST_ACCOUNT_NUMBER,
        'meter_number' => static::TEST_METER_NUMBER,
        'mode' => 'test',
      ],
      'options' => [
        'packaging' => FedEx::PACKAGE_ALL_IN_ONE,
        'rate_request_type' => RateRequestType::VALUE_NONE,
        'dropoff' => DropoffType::VALUE_REGULAR_PICKUP,
        'insurance' => FALSE,
        'rate_multiplier' => 1.0,
        'round' => PHP_ROUND_HALF_UP,
        'log' => [],
      ],
      'plugins' => [],
      'default_package_type' => 'custom_box',
      'services' => [ServiceType::VALUE_FEDEX_GROUND],
    ];
    $shipping_method = $this->prophesize(ShippingMethodInterface::class);
    $shipping_method->id()->willReturn('123456789');

    $plugin = $this->shippingMethodManager->createInstance('fedex', $configuration);
    assert($plugin instanceof FedEx);
    $plugin->setParentEntity($shipping_method->reveal());
    $shipment->setPackageType($plugin->getDefaultPackageType());
    $rates = $plugin->calculateRates(reset($shipments));

    $this->assertCount(1, $rates);
    $ground_rate = reset($rates);
    assert($ground_rate instanceof ShippingRate);
    $this->assertEquals('8.78', $ground_rate->getAmount()->getNumber());
    $this->assertEquals('8.78', $ground_rate->getOriginalAmount()->getNumber());
    $this->assertEquals('123456789', $ground_rate->getShippingMethodId());

  }

}
