<?php

namespace Drupal\Tests\commerce_fedex\Kernel;

use Drupal\commerce_order\Entity\Order;
use Drupal\commerce_order\Entity\OrderItem;
use Drupal\commerce_price\Price;
use Drupal\commerce_product\Entity\ProductVariation;
use Drupal\physical\Weight;
use Drupal\profile\Entity\Profile;
use Drupal\Tests\commerce_shipping\Kernel\ShippingKernelTestBase;

/**
 * Provides a base class for Fedex Kernel tests.
 */
abstract class FedExKernelTestBase extends ShippingKernelTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = [
    'entity_reference_revisions',
    'physical',
    'path',
    'profile',
    'state_machine',
    'commerce_fedex',
    'commerce_fedex_test',
    'commerce_price',
    'commerce_product',
    'commerce_order',
    'commerce_shipping',
    'commerce_shipping_test',
  ];

  const TEST_KEY = "zUwKK4QmUC1urlzQ";

  const TEST_PASS = "fjsogmH8lDnmwjbugtZsluPaL";

  const TEST_ACCOUNT_NUMBER = "510087860";

  const TEST_METER_NUMBER = "118776757";

  /**
   * The fedex request.
   *
   * @var \Drupal\commerce_fedex\FedExRequestInterface
   */
  protected $fedExRequest;

  /**
   * The Packer Manager.
   *
   * @var \Drupal\commerce_shipping\PackerManagerInterface
   */
  protected $packerManager;

  /**
   * The Shipping Method Manager.
   *
   * @var \Drupal\commerce_shipping\ShippingMethodManager
   */
  protected $shippingMethodManager;

  protected $variations;

  protected $order;

  protected $profile;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->store->address = [
      'country_code' => 'US',
      'postal_code' => '49503',
      'locality' => 'Grand Rapids',
      'address_line1' => '38 W. Fulton St.',
      'administrative_area' => 'MI',
      'given_name' => 'Michael',
      'family_name' => 'Smith',
    ];
    $this->store->save();

    $this->fedExRequest = $this->container->get('commerce_fedex.fedex_request');

    $this->packerManager = $this->container->get('commerce_shipping.packer_manager');

    $this->shippingMethodManager = $this->container->get('plugin.manager.commerce_shipping_method');

    $this->variations[] = ProductVariation::create([
      'type' => 'default',
      'sku' => 'test-product-01',
      'title' => 'Hat',
      'price' => new Price('10', 'USD'),
      'weight' => new Weight('500', 'g'),
    ]);
    $this->variations[] = ProductVariation::create([
      'type' => 'default',
      'sku' => 'test-product-02',
      'title' => 'Mug',
      'price' => new Price('10', 'USD'),
      'weight' => new Weight('300', 'g'),
    ]);
    $this->variations[0]->save();
    $this->variations[1]->save();

    $user = $this->createUser(['mail' => $this->randomString() . '@example.com']);
    /** @var \Drupal\commerce_order\Entity\OrderInterface $order */
    $this->order = Order::create([
      'type' => 'default',
      'state' => 'draft',
      'mail' => $user->getEmail(),
      'uid' => $user->id(),
      'store_id' => $this->store->id(),
    ]);
    $this->order->save();
    $this->order = $this->reloadEntity($this->order);

    $order_item[] = OrderItem::create([
      'type' => 'default',
      'purchased_entity' => $this->variations[0],
      'title' => 'Hat',
      'quantity' => '2',
      'unit_price' => $this->variations[0]->getPrice(),
    ]);
    $order_item[] = OrderItem::create([
      'type' => 'default',
      'purchased_entity' => $this->variations[1],
      'title' => 'Mug',
      'quantity' => '2',
      'unit_price' => $this->variations[1]->getPrice(),
    ]);
    $order_item[0]->save();
    $order_item[1]->save();

    /** @var \Drupal\commerce_order\Entity\OrderItem $order_item */
    // $order_item = $this->reloadEntity($order_item);
    $this->order->addItem($order_item[0]);
    $this->order->addItem($order_item[1]);

    $this->order->save();
    $this->order = $this->reloadEntity($this->order);

    $this->profile = Profile::create([
      'type' => 'customer',
      'address' => [
        'country_code' => 'US',
        'postal_code' => '48823',
        'locality' => 'East Lansing',
        'address_line1' => '333 Albert',
        'administrative_area' => 'MI',
        'given_name' => 'Nicholas',
        'family_name' => 'Smith',
      ],
      'uid' => $this->order->getCustomerId(),
    ]);

    $this->profile->save();
    $this->profile = $this->reloadEntity($this->profile);

  }

}
