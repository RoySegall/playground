<?php
namespace Core\Entity;

abstract class EntityInfo {

  public $type;
  public $keys;
  public $baseTable;
  public $label;
  public $fieldable;

  public function schema() {
    return array();
  }
}