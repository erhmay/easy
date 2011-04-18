<?php

/**
 * Page form base class.
 *
 * @method Page getObject() Returns the current form's model object
 *
 * @package    easy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'parent_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Page'), 'add_empty' => false)),
      'name'             => new sfWidgetFormInputText(),
      'description'      => new sfWidgetFormTextarea(),
      'is_visible'       => new sfWidgetFormInputCheckbox(),
      'show_on_homepage' => new sfWidgetFormInputCheckbox(),
      'is_featured'      => new sfWidgetFormInputCheckbox(),
      'is_clickable'     => new sfWidgetFormInputCheckbox(),
      'link'             => new sfWidgetFormInputText(),
      'image'            => new sfWidgetFormInputText(),
      'lft'              => new sfWidgetFormInputText(),
      'rgt'              => new sfWidgetFormInputText(),
      'level'            => new sfWidgetFormInputText(),
      'sort_order'       => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'parent_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Page'), 'required' => false)),
      'name'             => new sfValidatorString(array('max_length' => 255)),
      'description'      => new sfValidatorString(),
      'is_visible'       => new sfValidatorBoolean(array('required' => false)),
      'show_on_homepage' => new sfValidatorBoolean(array('required' => false)),
      'is_featured'      => new sfValidatorBoolean(array('required' => false)),
      'is_clickable'     => new sfValidatorBoolean(array('required' => false)),
      'link'             => new sfValidatorString(array('max_length' => 255)),
      'image'            => new sfValidatorString(array('max_length' => 255)),
      'lft'              => new sfValidatorInteger(array('required' => false)),
      'rgt'              => new sfValidatorInteger(array('required' => false)),
      'level'            => new sfValidatorInteger(array('required' => false)),
      'sort_order'       => new sfValidatorInteger(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('page[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Page';
  }

}
