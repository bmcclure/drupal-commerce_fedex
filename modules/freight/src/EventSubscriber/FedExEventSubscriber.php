<?php

namespace Drupal\commerce_fedex_freight\EventSubscriber;

use Drupal\commerce_fedex\Event\CommerceFedExEvents;
use Drupal\commerce_fedex\Event\RateRequestEvent;
use Drupal\commerce_fedex\Event\ServicesEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Provides a FedEx event subscriber.
 *
 * @package Drupal\commerce_fedex_freight\EventSubscriber
 */
class FedExEventSubscriber implements EventSubscriberInterface {

  /**
   * Add freight services.
   *
   * @param \Drupal\commerce_fedex\Event\ServicesEvent $event
   *   The rate request event.
   */
  public function onServices(ServicesEvent $event) {
    $event
      ->addService('FEDEX_1_DAY_FREIGHT', 'FedEx 1 Day Freight')
      ->addService('FEDEX_2_DAY_FREIGHT', 'FedEx 2 Day Freight')
      ->addService('FEDEX_3_DAY_FREIGHT', 'FedEx 3 Day Freight')
      ->addService('FEDEX_FREIGHT_ECONOMY', 'FedEx Freight Economy')
      ->addService('FEDEX_FREIGHT_PRIORITY', 'FedEx Freight Priority');
  }

  /**
   * Function getSubscribedEvents.
   *
   * @return array
   *   The subscribed events.
   */
  public static function getSubscribedEvents() {
    $events = [];
    $events[CommerceFedExEvents::SERVICES][] = ['onServices'];

    return $events;
  }

}
