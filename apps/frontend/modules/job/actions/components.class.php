<?php

/**
 * job actions.
 *
 * @package    easy
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobComponents extends sfComponents
{
  public function executeLatest(sfWebRequest $request)
  {
    $this->jobs = Doctrine_Core::getTable('Job')
      ->createQuery('a')
      ->orderBy('a.created_at')
      ->limit(10)
      ->execute();
  }
}


