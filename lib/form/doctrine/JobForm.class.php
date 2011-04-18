<?php

/**
 * Job form.
 *
 * @package    easy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JobForm extends BaseJobForm
{
  public function configure()
  {

      $choices = JobTable::getInstance()->getTypes();

      $this->widgetSchema['type'] = new sfWidgetFormChoice(array('choices' => $choices), array());

      $this->widgetSchema['logo'] = new sfWidgetFormInputFile(array(), array());

      $this->setDefaults(array(
          'url' => 'http://'
      ));

      $this->widgetSchema->setLabels(array(
          'logo'    => 'Лого (.jpg, .gif or .png)',
          'company'    => 'Компани нэр',
          'url'    => 'Вэб сайтын хаяг (URL)',
          'position'    => 'Албан тушаал',
          'type'    => 'Төрөл',
          'category_id'    => 'Ангилал',
          'description'    => 'Дэлгэрэнгүй',
          'how_to_apply'    => 'Хэрхэн CV-гээ илгээх',
      ));



      $this->validatorSchema['logo'] = new sfValidatorFile(array(
                        'path' => sfConfig::get('sf_upload').'/logo',
                        'mime_types' => 'web_images',
                        'required'  => false
                          ), array());

  }
}
