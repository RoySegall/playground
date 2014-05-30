<?php

define('ROOT', getcwd());

require_once 'core/Core.php';
$core = new core(ROOT . '/settings.php');

$core->entity()->registerEntity('node', 'Modules\node');

if (!$info = $core->entity()->entityInfo('node')) {
  return;
}

if (!$core->db()->tableExists($info->baseTable)) {
  $core->entity()->installSchema($info);
}


\core::debug($info);

return;


if (!$core->entityExists('node')) {
  $core->registerEntity('Modules\node');
}

$node = $core->getEntity('node');

$node->load(1);

// Fields.

// Create field.
$core->createField(ROOT . '/modules/dateField', 'Date');

// Attaching field to node article.
$core->attachFields('Date', 'field_date', 'Node', 'article');

$node->set('field_date', '6/25/1989');
$node->save();
