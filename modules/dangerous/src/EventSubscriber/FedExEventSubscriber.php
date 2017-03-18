<?php

namespace Drupal\commerce_fedex_dangerous\EventSubscriber;

use Drupal\commerce_fedex\Event\CommerceFedExEvents;
use Drupal\commerce_fedex\Event\RateRequestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Provides a FedEx event subscriber.
 *
 * @package Drupal\commerce_fedex_dangerous\EventSubscriber
 */
class FedExEventSubscriber implements EventSubscriberInterface {

  /**
   * Alter the rate request event.
   *
   * @param \Drupal\commerce_fedex\Event\RateRequestEvent $event
   *   The rate request event.
   */
  public function onBeforeRateRequest(RateRequestEvent $event) {
    $rate_request = $event->getRateRequest();

    // @todo Alter the rate request.
  }

  /**
   * Function getSubscribedEvents.
   *
   * @return array
   *   The subscribed events.
   */
  public static function getSubscribedEvents() {
    $events = [];
    $events[CommerceFedExEvents::BEFORE_RATE_REQUEST][] = ['onBeforeRateRequest'];

    return $events;
  }

}
