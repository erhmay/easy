<?php

/**
 * Admin form base class.
 *
 * @method Admin getObject() Returns the current form's model object
 *
 * @package    easy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdminForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'firstname'      => new sfWidgetFormInputText(),
      'lastname'       => new sfWidgetFormInputText(),
      'username'       => new sfWidgetFormInputText(),
      'password'       => new sfWidgetFormInputText(),
      'email'          => new sfWidgetFormInputText(),
      'type'           => new sfWidgetFormInputText(),
      'last_logged_at' => new sfWidgetFormDateTime(),
      'created_at'     => new sfWidgetFormDateTime(),
      'permission'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'firstname'      => new sfValidatorString(array('max_length' => 100)),
      'lastname'       => new sfValidatorString(array('max_length' => 100)),
      'username'       => new sfValidatorString(array('max_length' => 100)),
      'password'       => new sfValidatorString(array('max_length' => 32)),
      'email'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'type'           => new sfValidatorInteger(array('required' => false)),
      'last_logged_at' => new sfValidatorDateTime(),
      'created_at'     => new sfValidatorDateTime(),
      'permission'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('admin[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Admin';
  }

}
