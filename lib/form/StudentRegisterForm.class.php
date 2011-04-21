<?php

/**
 * User form.
 *
 * @package    easy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class StudentRegisterForm extends UserForm
{
  public function configure()
  {
      parent::configure();

      unset(
              $this['company_name'],
              $this['company_description'],
              $this['location']
              );

  }
}
