<?php

/**
 * BaseUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $type
 * @property integer $status
 * @property string $company_name
 * @property string $company_description
 * @property string $logo
 * @property string $url
 * @property string $address
 * @property string $location
 * 
 * @method string  getUsername()            Returns the current record's "username" value
 * @method string  getFirstName()           Returns the current record's "first_name" value
 * @method string  getLastName()            Returns the current record's "last_name" value
 * @method string  getEmail()               Returns the current record's "email" value
 * @method string  getType()                Returns the current record's "type" value
 * @method integer getStatus()              Returns the current record's "status" value
 * @method string  getCompanyName()         Returns the current record's "company_name" value
 * @method string  getCompanyDescription()  Returns the current record's "company_description" value
 * @method string  getLogo()                Returns the current record's "logo" value
 * @method string  getUrl()                 Returns the current record's "url" value
 * @method string  getAddress()             Returns the current record's "address" value
 * @method string  getLocation()            Returns the current record's "location" value
 * @method User    setUsername()            Sets the current record's "username" value
 * @method User    setFirstName()           Sets the current record's "first_name" value
 * @method User    setLastName()            Sets the current record's "last_name" value
 * @method User    setEmail()               Sets the current record's "email" value
 * @method User    setType()                Sets the current record's "type" value
 * @method User    setStatus()              Sets the current record's "status" value
 * @method User    setCompanyName()         Sets the current record's "company_name" value
 * @method User    setCompanyDescription()  Sets the current record's "company_description" value
 * @method User    setLogo()                Sets the current record's "logo" value
 * @method User    setUrl()                 Sets the current record's "url" value
 * @method User    setAddress()             Sets the current record's "address" value
 * @method User    setLocation()            Sets the current record's "location" value
 * 
 * @package    easy
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user');
        $this->hasColumn('username', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('first_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('last_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('company_name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('company_description', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '',
             ));
        $this->hasColumn('logo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('address', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '',
             ));
        $this->hasColumn('location', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}