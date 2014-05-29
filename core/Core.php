<?php

// Require needed files.
require_once 'kint/Kint.class.php';

/**
 * Some how of autoloader.
 */
function __autoload($name) {
  $file = str_replace("\\", "/", $name);
  $file = ROOT . '/' . $file . '.php';

  if (!file_exists($file)) {
    return;
  }

  require_once $file;
}

class Core {

  protected $settings;
  protected $db;

  public function __construct($path) {

    // Load file.
    require_once $path;

    // Save settings.
    $this->settings = Settings::getSettings();

    // Connect to DB.
    $db = $this->settings['db'];
    $this->db = new $db['type']($db['info']);
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
