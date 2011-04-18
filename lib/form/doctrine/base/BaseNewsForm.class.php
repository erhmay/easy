<?php

/**
 * News form base class.
 *
 * @method News getObject() Returns the current form's model object
 *
 * @package    easy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNewsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'type'        => new sfWidgetFormInputText(),
      'title'       => new sfWidgetFormInputText(),
      'image'       => new sfWidgetFormInputText(),
      'body'        => new sfWidgetFormTextarea(),
      'location'    => new sfWidgetFormTextarea(),
      'is_featured' => new sfWidgetFormInputCheckbox(),
      'sort_order'  => new sfWidgetFormInputText(),
      'is_active'   => new sfWidgetFormInputCheckbox(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'type'        => new sfValidatorInteger(array('required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 255)),
      'image'       => new sfValidatorString(array('max_length' => 255)),
      'body'        => new sfValidatorString(),
      'location'    => new sfValidatorString(),
      'is_featured' => new sfValidatorBoolean(array('required' => false)),
      'sort_order'  => new sfValidatorInteger(array('required' => false)),
      'is_active'   => new sfValidatorBoolean(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('news[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'News';
  }

}
