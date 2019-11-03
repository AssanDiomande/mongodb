<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @MongoDB\Document
 * 
 */
class User implements UserInterface
{
    /**
     * @MongoDB\Id
     * 
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $firstname;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $lastname;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $email;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $rawpassword;

    /**
     * @MongoDB\Field(type="date")
     */
    protected $creation_date;

    /**
     * @MongoDB\Field(type="string")
     */
    private $password;

    /**
     * @MongoDB\Field(type="boolean")
     */
    private $isAdmin = false;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getRawpassword()
    {
        return $this->rawpassword;
    }

    public function setRawpassword($rawpassword)
    {
        $this->rawpassword = $rawpassword;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setDate($creation_date)
    {
        $this->creation_date = $creation_date;
    }

    public function getDate()
    {
        return $this->creation_date;
    }

    public function getRoles()
    {
        return [
            $this->isAdmin ? 'ROLE_ADMIN' : 'ROLE_USER',
        ];
    }

    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {
        $this->rawPassword = null;
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    public function getIsAdmin()
    {
        return $this->isAdmin;
    }
}