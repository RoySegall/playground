<?php
namespace Core\Entity;

Interface EntityFieldQueryInterface {

  public function type();

  public function condition();

  public function FieldCondition();

  public function range();

  public function execute();
}