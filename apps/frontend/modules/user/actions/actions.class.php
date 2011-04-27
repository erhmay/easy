<?php

/**
 * login actions.
 *
 * @package    easy
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeLogin(sfWebRequest $request)
  {
    $this->form = new LoginForm();
    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter($this->form->getName()));
      //checking Admin login action

      if ($this->form->isValid())
      {
          $this->getUser()->signIn($this->form->getObject());

          $this->redirect('homepage');
      }

      }

  }

  public function executeLogout(sfWebRequest $request)
  {
    $this->getUser()->signOut();
    $this->redirect('user/login');
  }

  public function executeRegister(sfWebRequest $request)
  {

  }
}
