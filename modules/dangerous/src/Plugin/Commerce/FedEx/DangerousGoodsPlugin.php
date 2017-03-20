<?php

namespace Drupal\commerce_fedex_dangerous\Plugin\Commerce\FedEx;

use Drupal\commerce_fedex\Plugin\Commerce\FedEx\FedExPluginBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\SubformState;

/**
 * Providex the FedEx Dangerous Goods Service Plugin.
 *
 * @CommerceFedExPlugin(
 *   id = "dangerous",
 *   label = @Translation("FedEx Dangerous Goods"),
 *   options_label = @Translation("Dangerous Goods Shipment Options"),
 *   options_description = @Translation("Enter your global shipping options for Dangerous Goods shipments")
 * )
 */
class DangerousGoodsPlugin extends FedExPluginBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return ['contact_number' => ''] + parent::defaultConfiguration();

  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
    $form['contact_number'] = [
      '#type' => 'textfield',
      '#title' => $this->t("Contact Number"),
      '#description' => $this->t('Enter the Phone number of your dangerous goods/hazardous materials contact person'),
      '#default_value' => $this->configuration['contact_number'],
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    $this->configuration['contact_number'] = $form_state->getValue('contact_number');
  }

}
