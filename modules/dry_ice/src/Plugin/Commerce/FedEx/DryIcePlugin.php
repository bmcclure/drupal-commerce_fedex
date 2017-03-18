<?php

namespace Drupal\commerce_fedex_dry_ice\Plugin\Commerce\FedEx;

use Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginBase;
use Drupal\commerce_shipping\PackageTypeManagerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\physical\WeightUnit;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides the Fedex Dry Ice Service.
 *
 * @CommerceFedExPlugin(
 *   id = "dry_ice",
 *   label = @Translation("FedEx Dry Ice"),
 *   optionsLabel = @Translation("Dry Ice Shipment Options")
 * )
 */
class DryIcePlugin extends FedExPluginBase {

  /**
   * The Package Type Manager.
   *
   * @var \Drupal\commerce_shipping\PackageTypeManagerInterface
   */
  protected $packageTypeManager;

  /**
   * Creates a new Dry Ice FedEx Plugin object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\commerce_shipping\PackageTypeManagerInterface $package_type_manager
   *   The package type manager.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, PackageTypeManagerInterface $package_type_manager) {
    $this->packageTypeManager = $package_type_manager;
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    $this->setConfiguration($configuration);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('plugin.manager.commerce_package_type')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
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
    ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $package_types = $this->packageTypeManager
      ->getDefinitionsByShippingMethod('fedex');

    $package_types = array_map(function ($package_type) {
      return $package_type['label'];
    }, $package_types);

    $form['domestic']['package_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Dry ice package type'),
      '#options' => $package_types,
      '#default_value' => $this->configuration['domestic']['package_type'],
      '#required' => TRUE,
      '#access' => count($package_types) > 1,
    ];
    $form['domestic']['weight'] = [
      '#type' => 'physical_measurement',
      '#measurement_type' => 'weight',
      '#title' => $this->t('Dry Ice Weight'),
      '#default_value' => $this->configuration['domestic']['weight'],
      '#size' => 5,
      '#maxlength' => 4,
      '#required' => TRUE,
    ];
    $form['intl']['package_type'] = [
      '#type' => 'select',
      '#title' => $this->t('International dry ice package type'),
      '#options' => $package_types,
      '#default_value' => $this->configuration['intl']['package_type'],
      '#required' => TRUE,
      '#access' => count($package_types) > 1,
    ];
    $form['intl']['weight'] = [
      '#type' => 'physical_measurement',
      '#measurement_type' => 'weight',
      '#title' => $this->t('International dry Ice Weight'),
      '#default_value' => $this->configuration['intl']['weight'],
      '#size' => 5,
      '#maxlength' => 4,
      '#required' => TRUE,
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {

    if (!$form_state->getErrors()) {

      $values = $form_state->getValues();

      $this->configuration['domestic']['package_type'] = $values['domestic']['package_type'];
      $this->configuration['domestic']['weight'] = $values['domestic']['weight'];
      $this->configuration['intl']['package_type'] = $values['intl']['package_type'];
      $this->configuration['intl']['weight'] = $values['intl']['weight'];
    }
  }

}
