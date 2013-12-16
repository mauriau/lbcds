<?php

namespace LeBonCoinDesServices\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="LeBonCoinDesServices\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id_user;


    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=true)
     */
    protected $phone = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer",nullable=true)
     */
    protected $id =null;


    /**
     * Get id_user
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_user;
    }


    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set idCity
     *
     * @param integer $idCity
     * @return User
     */
    public function setIdCity($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get idCity
     *
     * @return integer 
     */
    public function getIdCity()
    {
        return $this->id;
    }
}
