<?php

namespace Modules\node\Entity;

use Core\Entity\EntityDeclarations;

class Info extends EntityDeclarations {

  public $nameSpaces = array(

    'Modules\node\Entity' => array(
      'Node',
      'NodeType',
    ),
  );
}