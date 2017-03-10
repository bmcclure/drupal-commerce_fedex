<?php

namespace Drupal\commerce_fedex\Event;


use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class ConfigurationFormEvent
 * @package Drupal\commerce_fedex\Event
 */
class ConfigurationFormEvent extends Event {

  /**
   * The form
   *
   * @var array
   */
  protected $form;

  /**
   * The Form State
   *
   * @var FormStateInterface
   */
  protected $form_state;

  /**
   * The Shipping method configuration
   *
   * @var array
   */
  protected $configuration;

  /**
   * ConfigurationFormEvent constructor.
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   * @param array $configuration
   */
  public function __construct(array $form, FormStateInterface $form_state, array $configuration){
    $this->form = $form;
    $this->form_state = $form_state;
    $this->configuration = $configuration;
  }


  /**
   * @return array
   */
  public function getForm() {
    return $this->form;
  }

  /**
   * @param $form
   * @return $this
   */
  public function setForm($form) {
    $this->form = $form;
    return $this;
  }

  /**
   * @return \Drupal\Core\Form\FormStateInterface
   */
  public function getFormState() {
    return $this->form_state;
  }

  /**
   * @param $form_state
   * @return $this
   */
  public function setFormState($form_state) {
    $this->form_state = $form_state;
    return $this;
  }

  /**
   * @return array
   */
  public function getConfiguration() {
    return $this->configuration;
  }

  /**
   * @param $configuration
   * @return $this
   */
  public function setConfiguration($configuration) {
    $this->configuration = $configuration;
    return $this;
  }



}