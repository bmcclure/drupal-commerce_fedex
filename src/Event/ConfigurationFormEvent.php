<?php

namespace Drupal\commerce_fedex\Event;


use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Defines the configuration form event for FedEx.
 *
 * @see \Drupal\commerce_fedex\Event\CommerceFedExEvents
 */
class ConfigurationFormEvent extends Event {

  /**
   * The form.
   *
   * @var array
   */
  protected $form;

  /**
   * The Form State.
   *
   * @var FormStateInterface
   */
  protected $formState;

  /**
   * The Shipping method configuration.
   *
   * @var array
   */
  protected $configuration;

  /**
   * Constructs a new ConfigurationFormEvent.
   *
   * @param array $form
   *   The form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The form state.
   * @param array $configuration
   *   The shipping method configuration.
   */
  public function __construct(array $form, FormStateInterface $form_state, array $configuration){
    $this->form = $form;
    $this->formState = $form_state;
    $this->configuration = $configuration;
  }


  /**
   * Gets the form.
   *
   * @return array
   *   The form.
   */
  public function getForm() {
    return $this->form;
  }

  /**
   * Sets the form.
   *
   * @param array $form
   *   The form.
   *
   * @return $this
   */
  public function setForm(array $form) {
    $this->form = $form;
    return $this;
  }

  /**
   * Gets the form state.
   *
   * @return \Drupal\Core\Form\FormStateInterface
   *   The form state.
   */
  public function getFormState() {
    return $this->formState;
  }

  /**
   * Sets the form state.
   *
   * @param $formState
   *   The form state.
   *
   * @return $this
   */
  public function setFormState(FormStateInterface $formState) {
    $this->formState = $formState;
    return $this;
  }

  /**
   * Gets the shipping method configuration.
   *
   * @return array
   *   The shipping method configuration.
   */
  public function getConfiguration() {
    return $this->configuration;
  }

  /**
   * Sets the shipping method configuration.
   *
   * @param array $configuration
   *   The shipping method configuration.
   *
   * @return $this
   */
  public function setConfiguration(array $configuration) {
    $this->configuration = $configuration;
    return $this;
  }

}
