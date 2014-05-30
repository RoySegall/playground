<?php

namespace Core\DataBase\MySql;

use Core\DataBase\DataBaseInterface;

class MySql implements DataBaseInterface {

  /**
   * @var \PDO
   */
  protected $db;

  public function __construct($settings) {
    $this->db = new \PDO('mysql:host=' . $settings['host'] . ';dbname=' . $settings['name'], $settings['user'], $settings['pass']);
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
    $stmt = $this->db->query('show tables');
    $stmt->execute();
    while($row = $stmt->fetch(\PDO::FETCH_OBJ)) {
      if ($row->Tables_in_playground == $table) {
        return TRUE;
      }
    }

    return FALSE;
  }
}
