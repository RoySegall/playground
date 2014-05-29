<?php

class Core {

  protected $settings;

  public function __construct($path) {

    // Load file.
    require_once $path;

    // Save settings.
    $this->settings = Settings::getSettings();

    // Connect to DB.

  }

  // All variables that used for settings will be store in static.

  public function setSettings($key, $value) {
    $this->settings[$key] = $value;
  }

  public function getSettings() {
    return $this->settings;
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
