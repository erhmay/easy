<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    easy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'username'            => new sfWidgetFormInputText(),
      'first_name'          => new sfWidgetFormInputText(),
      'last_name'           => new sfWidgetFormInputText(),
      'password'            => new sfWidgetFormInputText(),
      'email'               => new sfWidgetFormInputText(),
      'type'                => new sfWidgetFormInputText(),
      'status'              => new sfWidgetFormInputText(),
      'company_name'        => new sfWidgetFormInputText(),
      'company_description' => new sfWidgetFormTextarea(),
      'logo'                => new sfWidgetFormInputText(),
      'url'                 => new sfWidgetFormInputText(),
      'address'             => new sfWidgetFormTextarea(),
      'location'            => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'username'            => new sfValidatorString(array('max_length' => 255)),
      'first_name'          => new sfValidatorString(array('max_length' => 255)),
      'last_name'           => new sfValidatorString(array('max_length' => 255)),
      'password'            => new sfValidatorString(array('max_length' => 255)),
      'email'               => new sfValidatorString(array('max_length' => 255)),
      'type'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'              => new sfValidatorInteger(array('required' => false)),
      'company_name'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'company_description' => new sfValidatorString(array('required' => false)),
      'logo'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'             => new sfValidatorString(array('required' => false)),
      'location'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
