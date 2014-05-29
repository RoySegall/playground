<?php

/**
 * @file
 * settings.php
 *
 * This file will contain global settings about the current project.
 */

class Settings {
  protected static $settings;

  private function __construct() {
    self::$settings = array(
      'db' => array(
        'name' => 'playground',
        'pass' => 'root',
        'user' => 'root',
        'host' => 'localhost',
        'type' => 'Core\DataBase\MySql',
      )
    );
  }

  public static function getSettings() {
    return self::$settings;
  }
}
