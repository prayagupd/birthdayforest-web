<?php

namespace Proxies\__CG__\models;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class User extends \models\User implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPhone()
    {
        $this->__load();
        return parent::getPhone();
    }

    public function setPhone($phone)
    {
        $this->__load();
        return parent::setPhone($phone);
    }

    public function getGender()
    {
        $this->__load();
        return parent::getGender();
    }

    public function setGender($gender)
    {
        $this->__load();
        return parent::setGender($gender);
    }

    public function getDob()
    {
        $this->__load();
        return parent::getDob();
    }

    public function setDob($dob)
    {
        $this->__load();
        return parent::setDob($dob);
    }

    public function getRegisterSource()
    {
        $this->__load();
        return parent::getRegisterSource();
    }

    public function setRegisterSource($registerSource)
    {
        $this->__load();
        return parent::setRegisterSource($registerSource);
    }

    public function getRegisterIp()
    {
        $this->__load();
        return parent::getRegisterIp();
    }

    public function setRegisterIp($registerIp)
    {
        $this->__load();
        return parent::setRegisterIp($registerIp);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getStatus()
    {
        $this->__load();
        return parent::getStatus();
    }

    public function setStatus($status)
    {
        $this->__load();
        return parent::setStatus($status);
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function setAddress($address)
    {
        $this->__load();
        return parent::setAddress($address);
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function getRegisteredDate()
    {
        $this->__load();
        return parent::getRegisteredDate();
    }

    public function setRegisteredDate($registeredDate)
    {
        $this->__load();
        return parent::setRegisteredDate($registeredDate);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'email', 'name', 'password', 'username', 'phone', 'gender', 'dob', 'registeredDate', 'registerSource', 'registerIp', 'type', 'status', 'address');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}