<?php

/**
 * Page filter form base class.
 *
 * @package    easy
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'parent_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Page'), 'add_empty' => true)),
      'name'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_visible'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'show_on_homepage' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_featured'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_clickable'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'link'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'image'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lft'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rgt'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'level'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sort_order'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'parent_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Page'), 'column' => 'id')),
      'name'             => new sfValidatorPass(array('required' => false)),
      'description'      => new sfValidatorPass(array('required' => false)),
      'is_visible'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'show_on_homepage' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_featured'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_clickable'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'link'             => new sfValidatorPass(array('required' => false)),
      'image'            => new sfValidatorPass(array('required' => false)),
      'lft'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rgt'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'level'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sort_order'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('page_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Page';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'parent_id'        => 'ForeignKey',
      'name'             => 'Text',
      'description'      => 'Text',
      'is_visible'       => 'Boolean',
      'show_on_homepage' => 'Boolean',
      'is_featured'      => 'Boolean',
      'is_clickable'     => 'Boolean',
      'link'             => 'Text',
      'image'            => 'Text',
      'lft'              => 'Number',
      'rgt'              => 'Number',
      'level'            => 'Number',
      'sort_order'       => 'Number',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
