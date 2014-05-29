<?php

/**
 * @file
 * settings.php
 *
 * This file will contain global settings about the current project.
 *
 * todo: Move to parent class.
 */

class Settings {
  /**
   * Return the settings of the class.
   *
   * @return array
   */
  public static function getSettings() {
    return array(
      'db' => array(
        'info' => array(
          'name' => 'playground',
          'pass' => 'root',
          'user' => 'root',
          'host' => 'localhost',
        ),
        'type' => 'Core\DataBase\MySql\MySql',
      )
    );
  }
}
