<?php
namespace Core\Entity;

use Core\DataBase\DataBaseInterface;

class Entity {

  protected $db;

  protected $types;

  public function __construct(DataBaseInterface $db) {
    $this->db = $db;
  }

  /**
   * @param $entity_type
   * @param $scope
   */
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

  /**
   * @param EntityInfo $type
   */
  public function installSchema(EntityInfo $type) {
    $string = "CREATE TABLE {$type->baseTable} (";

    $primary = $fields = array();
    foreach ($type->schema() as $key => $value) {
      $null = !empty($value['null']) ? 'NOT NULL' : 'NULL';
      $auto = !empty($value['auto_increment']) ? 'AUTO_INCREMENT' : '';
      $fields[] = $key . ' ' . $value['type'] . '(' . $value['size'] . ') ' . $null . ' ' . $auto;

      if (!empty($value['primary'])) {
        $primary[] = $key;
      }
    }

    $string .= implode(",\n", $fields);

    if (!empty($primary)) {
      $string .= ",\nPRIMARY KEY (" . implode(",", $primary) . ")\n";
    }

    $string .= ");";

    $this->db->execute($string);
  }
}
