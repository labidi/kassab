<?php

namespace App\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * User
 *
 * @ORM\Table("user")
 * @ORM\Entity(repositoryClass="App\UserBundle\Entity\UserRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "admin" = "Admin"})
 * @ORM\HasLifecycleCallbacks()
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    protected $last_name;


    
    /**
     * @ORM\PrePersist
     */
    public function setUsernameAndUsernameCanonical() {
        $this->setUsername($this->getEmail()) ;
    }



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }


    public function __toString()
    {
        return $this->getFirstName().' '.$this->getLastName() ;
    }
}
