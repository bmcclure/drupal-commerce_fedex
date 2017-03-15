<?php

namespace Drupal\commerce_fedex_hazardous\EventSubscriber;

use Drupal\commerce_fedex\Event\CommerceFedExEvents;
use Drupal\commerce_fedex\Event\RateRequestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Provides a FedEx event subscriber.
 *
 * @package Drupal\commerce_fedex_hazardous\EventSubscriber
 */
class FedExEventSubscriber implements EventSubscriberInterface {

  /**
   * Alter the rate request event.
   *
   * @param \Drupal\commerce_fedex\Event\RateRequestEvent $event
   *   The rate request event.
   */
  public function onBeforeRateRequest(RateRequestEvent $event) {
    $rateRequest = $event->getRateRequest();

    // @todo Alter the rate request.
  }

  /**
   * @inheritdoc
   */
  static function getSubscribedEvents() {
    $events = [];
    $events[CommerceFedExEvents::BEFORE_RATE_REQUEST][] = ['onBeforeRateRequest'];

    return $events;
  }

}
