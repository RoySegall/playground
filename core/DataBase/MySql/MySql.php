<?php

namespace Core\DataBase\MySql;


class MySql implements \Core\DataBase\DataBaseInterface {

  /**
   * @var \PDO
   */
  protected $db;

  public function __construct($settings) {
    $this->db = new \PDO("mysql:host={$settings['host']};dbmame={$settings['name']}", $settings['user'], $settings['pass']);
  }

  public function setTable($table) {

    return $this;
  }

  public function leftJoin($table, $alias) {
    return $this;
  }

  public function rightJoin($table, $alias) {
    return $this;
  }

  public function condition($field) {
    return $this;
  }

  public function range($start, $end) {
    return $this;
  }

  public function execute() {
    return $this;
  }

  public function tableExists($table) {
    return $this;
  }
}
