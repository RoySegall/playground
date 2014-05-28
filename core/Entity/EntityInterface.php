<?php
namespace Core\Entity;

Interface EntityInterface {

  public function load($id);

  public function loadMultiple($ids);

  public function save();

  public function delete();

  public function deleteMultiple();

  public function id();

  public function bundle();

  public function get($property);

  public function set($roperty, $value);
}