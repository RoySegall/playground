<?php

namespace Modules\node\Entity;

use Core\Entity\EntityInfo;

class Node extends EntityInfo {
  public $label = 'Node';
  public $type = 'node';
  public $keys = array(
    'id' => 'nid',
    'label' => 'title'
  );
  public $baseTable = 'node';
  public $fieldable = TRUE;

  public function schema() {
    return array(
      'nid' => array(
        'type' => 'int',
        'size' => '12',
        'auto_increment' => TRUE,
        'primary' => TRUE,
      ),
      'type' => array(
        'type' => 'varchar',
        'size' => '255',
      ),
      'created' => array(
        'type' => 'int',
        'size' => 12,
      ),
      'updated' => array(
        'type' => 'int',
        'size' => 12,
      ),
    );
  }
}
