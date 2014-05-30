<?php
namespace Core\Entity;

use Core\DataBase\DataBaseInterface;

class Entity {

  protected $db;

  protected $types;

  public function __construct(DataBaseInterface $db) {
    $this->db = $db;
  }

  public function registerEntity($entity_type, $scope) {
    $class = $scope . '\info';
    /** @var \Core\Entity\EntityInfo $entity_info */
    $entity_info = new $class;

    $this->types[$entity_type] = $entity_info;
  }

  /**
   * @param null $type
   *
   * @return \Core\Entity\EntityInfo
   */
  public function entityInfo($type = NULL) {
    return empty($type) ? $this->types : $this->types[$type];
  }

  public function installSchema(EntityInfo $type) {
    \Core::debug($type->schema());

  }
}
