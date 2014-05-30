<?php
namespace Core\Entity;

class Entity {

  protected $db;

  protected $types;

  public function __construct(\Core\DataBase\DataBaseInterface $db) {
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
   */
  public function entityInfo($type = NULL) {
    return empty($type) ? $this->types : $this->types[$type];
  }
}