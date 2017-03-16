<?php

namespace Drupal\commerce_fedex\Event;

/**
 * Defines events for the Commerce FedEx module.
 */
final class CommerceFedExEvents {

  /**
   * Name of the event fired to allow altering the rate request sent to FedEx.
   *
   * @Event
   *
   * @see \Drupal\commerce_fedex\Event\RateRequestEvent
   */
  const BEFORE_RATE_REQUEST = 'commerce_fedex.before_rate_request';

  /**
   * Name of the event fired when altering the packer order items.
   *
   * @todo Remove this event after it's rolled into commerce_shipping
   *
   * @Event
   *
   * @see \Drupal\commerce_fedex\Event\BeforePackEvent.php
   */
  const BEFORE_PACK = 'commerce_fedex.before_pack';

}
