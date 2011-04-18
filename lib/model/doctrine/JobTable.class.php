<?php

/**
 * JobTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JobTable extends Doctrine_Table
{

    static public $types = array(
        1 => 'Freelance',
        2 => 'Full-Time',
        3 => 'Internship',
        4 => 'Part-Time',
        5 => 'Temporary',
  );

  public function getTypes()
  {
    return self::$types;
  }

    /**
     * Returns an instance of this class.
     *
     * @return object JobTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Job');
    }


}