<?php
namespace Core\DataBase;

Interface DataBaseInterface {

  /**
   * Constructing the class. Passing settings relate to the DB connection.
   *
   * @param $settings
   *  The settings of the connection and other things the class will need.
   */
  public function __construct($settings);

  /**
   * Setting a table for the SQL query.
   *
   * @param $table
   *  The name of the table.
   *
   * @return $this.
   */
  public function setTable($table);

  /**
   * Joining in the table.
   *
   * @param $table
   *  The table name.
   * @param $alias
   *  The alias name.
   *
   * @return $this.
   */
  public function leftJoin($table, $alias);

  /**
   * Doing a left join.
   *
   * @param $table
   *  The table name.
   * @param $alias
   *  The alias name.
   *
   * @return $this.
   */
  public function rightJoin($table, $alias);

  /**
   * Adding a condition.
   *
   * @param $field
   *  The field name.
   *
   * @return $this
   */
  public function condition($field);

  /**
   * Adding a range to the query.
   *
   * @param $start
   *  The position starting.
   * @param $end
   *  The ending position.
   *
   * @return $this
   */
  public function range($start, $end);

  /**
   * Executing thq query.
   * @param $query
   *  The query string.
   *
   * @return array.
   *  return array of results.
   */
  public function execute($query);

  /**
   * Check if the table exists.
   *
   * @param $table
   *  Check if the table exists in the DB.
   *
   * @return boolean
   */
  public function tableExists($table);
}
