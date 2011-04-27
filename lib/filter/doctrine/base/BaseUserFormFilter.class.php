<?php

/**
 * User filter form base class.
 *
 * @package    easy
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'username'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'first_name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'                => new sfWidgetFormFilterInput(),
      'status'              => new sfWidgetFormFilterInput(),
      'company_name'        => new sfWidgetFormFilterInput(),
      'company_description' => new sfWidgetFormFilterInput(),
      'logo'                => new sfWidgetFormFilterInput(),
      'url'                 => new sfWidgetFormFilterInput(),
      'address'             => new sfWidgetFormFilterInput(),
      'location'            => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'username'            => new sfValidatorPass(array('required' => false)),
      'first_name'          => new sfValidatorPass(array('required' => false)),
      'last_name'           => new sfValidatorPass(array('required' => false)),
      'password'            => new sfValidatorPass(array('required' => false)),
      'email'               => new sfValidatorPass(array('required' => false)),
      'type'                => new sfValidatorPass(array('required' => false)),
      'status'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'company_name'        => new sfValidatorPass(array('required' => false)),
      'company_description' => new sfValidatorPass(array('required' => false)),
      'logo'                => new sfValidatorPass(array('required' => false)),
      'url'                 => new sfValidatorPass(array('required' => false)),
      'address'             => new sfValidatorPass(array('required' => false)),
      'location'            => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'username'            => 'Text',
      'first_name'          => 'Text',
      'last_name'           => 'Text',
      'password'            => 'Text',
      'email'               => 'Text',
      'type'                => 'Text',
      'status'              => 'Number',
      'company_name'        => 'Text',
      'company_description' => 'Text',
      'logo'                => 'Text',
      'url'                 => 'Text',
      'address'             => 'Text',
      'location'            => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
