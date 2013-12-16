<?php

namespace LeBonCoinDesServices\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favorite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LeBonCoinDesServices\MainBundle\Entity\FavoriteRepository")
 */
class Favorite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_announcement", type="integer")
     */
    private $idAnnouncement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;


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
     * Set idAnnouncement
     *
     * @param integer $idAnnouncement
     * @return Favorite
     */
    public function setIdAnnouncement($idAnnouncement)
    {
        $this->idAnnouncement = $idAnnouncement;
    
        return $this;
    }

    /**
     * Get idAnnouncement
     *
     * @return integer 
     */
    public function getIdAnnouncement()
    {
        return $this->idAnnouncement;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Favorite
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
