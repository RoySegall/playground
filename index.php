<?php

define('ROOT', getcwd());

require_once 'core/Core.php';

$core = new core(ROOT . '/settings.php');

var_dump($core->getSettings());

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
