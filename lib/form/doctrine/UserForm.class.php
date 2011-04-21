<?php

/**
 * User form.
 *
 * @package    easy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserForm extends BaseUserForm
{
  public function configure()
  {
      unset(
              $this['created_at'],
              $this['updated_at'],
              $this['type']
              );


     $this->widgetSchema->setLabels(array(
            'username'  =>  'Хэрэглэгчийн нэр',
            'first_name'  =>  'Таны нэр',
            'last_name'  =>  'Овог',
            'email'  =>  'Имайл',
            'location'  =>  'Байршил',
            'company_name'  =>  'Компани нэр',
            'company_description'  =>  'Компани дэлгэрэнгүй',
            'url'  =>  'Вэб хаяг (URL)',
            'address'  =>  'Хаяг',
     ));

     $this->validatorSchema['username'] = new sfValidatorString(array('required' => true), array('required' => 'Хэрэглэгчийн нэрээ оруулна уу'));
     $this->validatorSchema['first_name'] = new sfValidatorString(array('required' => true), array('required' => 'Нэрээ оруулна уу'));
     $this->validatorSchema['last_name'] = new sfValidatorString(array('required' => true), array('required' => 'Овогоо оруулна уу'));
     $this->validatorSchema['email'] = new sfValidatorEmail(array('required' => true), array('required' => 'Имайл хаягаа оруулна уу', 'invalid' => 'Буруу имайл хаяг, шалгаад дахин оруулна уу'));
     
     $this->validatorSchema['url'] = new sfValidatorUrl(array('required' => true), array('required' => 'Вэб хаягаа нэрээ оруулна уу'));
     $this->validatorSchema['company_name'] = new sfValidatorString(array('required' => true), array('required' => 'Компани нэрээ оруулна уу', 'invalid' => 'Буруу вэб хаяг, шалгаад дахин оруулна уу'));
     $this->validatorSchema['company_description'] = new sfValidatorString(array('required' => false), array('required' => ''));


  }
}
