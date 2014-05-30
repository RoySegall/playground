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

  /**
   * @var array
   */
  protected $settings;

  /**
   * @var \Core\DataBase\DataBaseInterface;
   */
  protected $db;

  /**
   * @var \Core\Entity\Entity;
   */
  protected $entity;

  /**
   * @var \Core\Entity\EntityFieldQueryInterface
   */
  protected $entityFieldQuery;

  public function __construct($path) {

    // Load file.
    require_once $path;

    // Save settings.
    $this->settings = Settings::getSettings();

    // Connect to DB.
    $db = $this->settings['db'];
    $this->db = new $db['type']($db['info']);

    $this->entity = new Core\Entity\Entity($this->db);
    $this->entityFieldQuery = new Core\Entity\EntityFieldQuery;
  }

  // All variables that used for settings will be store in static.

  public function setSettings($key, $value) {
    $this->settings[$key] = $value;
  }

  public function getSettings() {
    return $this->settings;
  }

  /**
   * @return \Core\DataBase\DataBaseInterface
   */
  public function db() {
    return $this->db;
  }

  /**
   * @return \Core\Entity\Entity
   */
  public function entity() {
    return $this->entity;
  }

  /**
   * @return \Core\Entity\EntityFieldQueryInterface
   */
  public function entityFieldQuery() {
    return $this->entityFieldQuery;
  }

  public static function debug($debug) {
    \Kint::dump($debug);
  }
}
