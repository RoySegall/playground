<?php

/**
 * Define the root path of the project.
 */
define('ROOT', getcwd());

/**
 * Get the core file.
 */
require_once 'core/Core.php';

// Initialize the project.
$core = new core(ROOT . '/settings.php');

// Register the entity. This is a part of bootstrap sequence. In modular MVC
// this should be collect with hooks.
// todo: move to install file.
$core->entity()->registerEntity('node', 'Modules\node');

// Verify we have the node entity registered.
if (!$info = $core->entity()->entityInfo('node')) {
  return;
}

// Check the schema of the node exists.
if (!$core->db()->tableExists($info->baseTable)) {
  $core->entity()->installSchema($info);
}

// Search for a certain entity.
$nids = $core->entityFieldQuery()->type($node)->execute();
return;

$node = $core->getEntity('node');

$node->load(1);

// Fields.

// Create field.
$core->createField(ROOT . '/modules/dateField', 'Date');

// Attaching field to node article.
$core->attachFields('Date', 'field_date', 'Node', 'article');

$node->set('field_date', '6/25/1989');
$node->save();
