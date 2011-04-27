<?php

/**
 * company actions.
 *
 * @package    easy
 * @subpackage company
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class companyActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeRegister(sfWebRequest $request)
  {
    $this->form = new CompanyRegisterForm();
      $form = $this->form;
      if($request->isMethod(sfRequest::POST))
      {
          $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
            if ($form->isValid())
            {
                $user = $form->save();

                $this->getUser()->setFlash('success', 'Та амжилттай бүртгүүллээ. Бүртгэлээ идэвхжүүлэхийн тулд имайл хаягаа шалгана уу');

                $this->redirect('homepage');
            }
      }
  }
}
