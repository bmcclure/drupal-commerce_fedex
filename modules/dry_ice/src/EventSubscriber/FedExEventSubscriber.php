<?php

namespace Drupal\commerce_fedex_dry_ice\EventSubscriber;

use Drupal\commerce_fedex\Event\CommerceFedExEvents;
use Drupal\commerce_fedex\Event\ConfigurationFormEvent;
use Drupal\commerce_fedex\Event\DefaultConfigurationEvent;
use Drupal\commerce_fedex\Event\RateRequestEvent;
use Drupal\commerce_shipping\PackageTypeManagerInterface;
use Drupal\physical\WeightUnit;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Provides a FedEx event subscriber.
 *
 * @package Drupal\commerce_fedex_dry_ice\EventSubscriber
 */
class FedExEventSubscriber implements EventSubscriberInterface {
  use StringTranslationTrait;

  /**
   * The package type manager.
   *
   * @var PackageTypeManagerInterface
   */
  protected $packageTypeManager;

  /**
   * Constructs a new ShippingMethodBase object.
   *
   * @param \Drupal\commerce_shipping\PackageTypeManagerInterface $packageTypeManager
   *   The package type manager.
   */
  public function __construct(PackageTypeManagerInterface $packageTypeManager) {
    $this->packageTypeManager = $packageTypeManager;
  }

  /**
   * Alter the rate request event.
   *
   * @param \Drupal\commerce_fedex\Event\RateRequestEvent $event
   *   The rate request event.
   */
  public function onBeforeRateRequest(RateRequestEvent $event) {
    $rateRequest = $event->getRateRequest();
    $shipment = $event->getShipment();

    // @todo Alter the rate request.
  }

  /**
   * Alter the FedEx configuration form.
   *
   * @param \Drupal\commerce_fedex\Event\ConfigurationFormEvent $event
   *   The configuration form event.
   */
  public function onBuildConfigurationForm(ConfigurationFormEvent $event){
    $form = $event->getForm();
    $configuration = $event->getConfiguration();

    $package_types = $this->packageTypeManager
      ->getDefinitionsByShippingMethod('fedex');

    $package_types = array_map(function ($package_type) {
      return $package_type['label'];
    }, $package_types);

    $form['dry_ice'] = [
      '#type' => 'details',
      '#title' => $this->t('Dry Ice Configuration'),
      '#description' => $this->t('Enter your configuration for Dry ice'),
      '#weight' => 10,
    ];
    $form['dry_ice']['domestic']['package_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Dry ice package type'),
      '#options' => $package_types,
      '#default_value' => $configuration['dry_ice']['domestic']['package_type'],
      '#required' => TRUE,
      '#access' => count($package_types) > 1,
    ];
    $form['dry_ice']['domestic']['weight']  = [
      '#type' => 'physical_measurement',
      '#measurement_type' => 'weight',
      '#title' => $this->t('Dry Ice Weight'),
      '#default_value' => $configuration['dry_ice']['domestic']['weight'],
      '#size' => 5,
      '#maxlength' => 4,
      '#required' => TRUE,
    ];
    $form['dry_ice']['intl']['package_type'] = [
      '#type' => 'select',
      '#title' => $this->t('International dry ice package type'),
      '#options' => $package_types,
      '#default_value' => $configuration['dry_ice']['intl']['package_type'],
      '#required' => TRUE,
      '#access' => count($package_types) > 1,
    ];
    $form['dry_ice']['intl']['weight']  = [
      '#type' => 'physical_measurement',
      '#measurement_type' => 'weight',
      '#title' => $this->t('International dry Ice Weight'),
      '#default_value' => $configuration['dry_ice']['intl']['weight'],
      '#size' => 5,
      '#maxlength' => 4,
      '#required' => TRUE,
    ];

    $event->setForm($form);
  }

  /**
   * Submits the configuration data.
   *
   * @param \Drupal\commerce_fedex\Event\ConfigurationFormEvent $event
   *   The configuration form event.
   */
  public function onSubmitConfigurationForm(ConfigurationFormEvent $event){
    $configuration = $event->getConfiguration();
    $form_state = $event->getFormState();
    $form = $event->getForm();

    if (!$form_state->getErrors()) {
      $values = $form_state->getValue($form['#parents']);

      $configuration['dry_ice']['domestic']['package_type'] = $values['dry_ice']['domestic']['package_type'];
      $configuration['dry_ice']['domestic']['weight'] = $values['dry_ice']['domestic']['weight'];
      $configuration['dry_ice']['intl']['package_type'] = $values['dry_ice']['intl']['package_type'];
      $configuration['dry_ice']['intl']['weight'] = $values['dry_ice']['intl']['weight'];
    }

    $event->setConfiguration($configuration);
  }


  /**
   * Gets the default configuration values.
   *
   * @param \Drupal\commerce_fedex\Event\DefaultConfigurationEvent $event
   *   The default configuration event.
   */
  public function onGetDefaultConfiguration(DefaultConfigurationEvent $event){
    $configuration = $event->getConfiguration();

    $configuration['dry_ice'] = [
      'domestic' => [
        'package_type' => 'custom_box',
        'weight' => [
          'number' => 0,
          'unit' => WeightUnit::KILOGRAM,
        ],
      ],
      'intl' => [
        'package_type' => 'custom_box',
        'weight' => [
          'number' => 0,
          'unit' => WeightUnit::KILOGRAM,
        ],
      ],
    ];

    $event->setConfiguration($configuration);
  }

  /**
   * @inheritdoc
   */
  static function getSubscribedEvents() {
    $events = [];
    $events[CommerceFedExEvents::BEFORE_RATE_REQUEST][] = ['onBeforeRateRequest'];
    $events[CommerceFedExEvents::BUILD_CONFIGURATION_FORM][] = ['onBuildConfigurationForm'];
    $events[CommerceFedExEvents::SUBMIT_CONFIGURATION_FORM][] = ['onSubmitConfigurationForm'];
    $events[CommerceFedExEvents::GET_DEFAULT_CONFIGURATION][] = ['onGetDefaultConfiguration'];

    return $events;
  }

}
