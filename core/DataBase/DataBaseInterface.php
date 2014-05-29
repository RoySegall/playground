<?php
namespace Core\DataBase;

Interface DataBaseInterface {

  public function __construct($settings);

  public function setTable($table);

  public function leftJoin($table, $alias);

  public function rightJoin($table, $alias);

  public function condition($field);

  public function range($start, $end);

  public function execute();

  public function tableExists($table);
}
