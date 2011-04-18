<?php

/**
 * Page form.
 *
 * @package    easy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageForm extends BasePageForm
{
  public function configure()
  {
      unset(
              $this['created_at'],
              $this['updated_at'],
              $this['lft'],
              $this['rgt'],
              $this['level']
              );

      $this->widgetSchema['parent_id'] = new sfWidgetFormDoctrineChoice(array(
                    'model'     => 'Page',
                    'multiple'     => 'false'
      ), array());

  }
}
