<?php

class Core {

  protected $settings;

  public function __construct($path) {

    // Load file.

    // Save settings.

    // Connect to DB.

  }

  // All variables that used for settings will be store in static.

  public function setVariable($key, $value) {
    $this->settings[$key] = $value;
  }

  public function getVariable() {
  }

  /**
   * @param $scope
   *
   * @return EntityInterface
   */
  public function registerEntity($scope) {
  }

  /**
   * @param $entity
   *
   * @return EntityInterface
   */
  public function getEntity($entity) {
  }

  public function entityExists() {
  }

  public function createField() {

  }
}