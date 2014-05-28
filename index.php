<?php

define('ROOT', getcwd());

require_once 'core/Core.php';

return;


$core = new Core(ROOT . '/settings.php');
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