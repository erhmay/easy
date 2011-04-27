<?php

/**
 * User form.
 *
 * @package    easy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CompanyRegisterForm extends UserForm
{
  public function configure()
  {
      parent::configure();

      $this->setDefaults(array(
          'url' => 'http://'
      ));

  }

//  public function  bind(array $taintedValues = null, array $taintedFiles = null) {
//
//      $taintedValues['type'] = 'company';
//
//      parent::bind($taintedValues, $taintedFiles);
//    }
}
