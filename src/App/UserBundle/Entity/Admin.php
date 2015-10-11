<?php

namespace App\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table("admin")
 * @ORM\Entity(repositoryClass="App\UserBundle\Entity\AdminRepository")
 */
class Admin extends User
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $roles[] = "ROLE_ADMIN" ;
        parent::__construct() ;
    }



}
