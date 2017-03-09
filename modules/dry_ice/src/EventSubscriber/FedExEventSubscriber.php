<?php

namespace Drupal\commerce_fedex_dry_ice\EventSubscriber;

use Drupal\commerce_fedex\Event\CommerceFedExEvents;
use Drupal\commerce_fedex\Event\RateRequestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class FedExEventSubscriber
 *
 * @package Drupal\commerce_fedex_dry_ice\EventSubscriber
 */
class FedExEventSubscriber implements EventSubscriberInterface {

  /**
   * @param \Drupal\commerce_fedex\Event\RateRequestEvent $event
   */
  public function beforeRateRequest(RateRequestEvent $event) {
    $rateRequest = $event->getRateRequest();

    // TODO: Alter or replace the rate request.
  }

  /**
   * @inheritdoc
   */
  static function getSubscribedEvents() {
    $events = [];

    $events[CommerceFedExEvents::BEFORE_RATE_REQUEST][] = ['beforeRateRequest'];

    return $events;
  }

}
