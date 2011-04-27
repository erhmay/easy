<?php

class myUser extends sfBasicSecurityUser
{
     private $_instance;

  /**
   * Get User profile
   * @return User
   */
  public function getInstance()
  {
    if (!$this->isAuthenticated())
    {
      return null;
    }
    if (!isset($this->_instance))
    {
      $this->_instance = Doctrine::getTable('User')->find($this->getUserId());
    }
    return $this->_instance;
  }

  /**
   * Sign In user
   * @param User $user
   */
  public function signIn(User $user)
  {
    $this->setAuthenticated(true);

    $this->addCredential($user->getType());
    $this->setAttribute('userId' , $user->getId(), '');

    $user->save();
   }

  /**
   * User sign out
   */
  public function signOut()
  {
    $this->clearCredentials();
    $this->setAuthenticated(false);
  }

  /**
   * get Logged user id
   * @return integer
   */
  public function getUserId()
  {
    if ($this->isAuthenticated())
    {
      return $this->getAttribute('userId', 0, '');
    }
    return null;
  }
}
