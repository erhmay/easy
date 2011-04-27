<?php

/**
 * User form.
 *
 * @package    easy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LoginForm extends sfForm
{
  protected $_object;


  public function getObject()
  {
    return $this->_object;
  }

  public function configure()
  {
    $this->widgetSchema['username']  = new sfWidgetFormInputText();
    $this->widgetSchema['password']  = new sfWidgetFormInputPassword();

    $this->widgetSchema->setLabels(array('username' => 'Хэрэглэгчийн нэр:'));
    $this->widgetSchema->setLabels(array('password' => 'Нууц үг:'));

    $this->validatorSchema['username'] = new sfValidatorString(
        array('required' => true),
        array('required' => 'Хэрэглэгчийн нэрээ оруулна уу'));

    $this->validatorSchema['password'] = new sfValidatorString(
        array('required' => true),
        array('required' => 'Нууц дугаараа оруулна уу'));

    $this->widgetSchema->setNameFormat('login[%s]');

    $this->validatorSchema->setPostValidator(
        new sfValidatorCallback(array('callback' => array($this, 'checkPassword')))
    );
  }

  public function checkPassword($validator, $values)
  {
        $this->_object = Doctrine::getTable('User')->getUserByNamePassword(
            $values['username'],
            $values['password']);

    if (!$this->_object)
    {

      // password is not correct, throw an error
      throw new sfValidatorError($validator, 'Хэрэглэгчийн нэр эсвэл нууц үг буруу байна');
    }

    // password is correct, return the clean values
    return $values;
  }
}
