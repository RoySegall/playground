<?php

namespace Modules\node;

class info extends \Core\Entity\EntityInfo {
  public $type = 'node';
  public $keys = array(
    'id' => 'nid',
    'label' => 'title'
  );
  public $baseTable = 'node';
  public $fieldable = TRUE;

  public function schema() {
    return array(
      'nid' => array(),
      'type' => array(),
      'created' => array(),
      'updated' => array(),
    );
  }
}
