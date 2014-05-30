<?php
namespace Core\Entity;

Interface EntityFieldQueryInterface {

  /**
   * @return $this;
   */
  public function type();

  /**
   * @return $this;
   */
  public function condition();

  /**
   * @return $this;
   */
  public function FieldCondition();

  /**
   * @return $this;
   */
  public function range();

  /**
   * @return $this;
   */
  public function execute();
}