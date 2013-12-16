<?php

namespace LeBonCoinDesServices\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Announcement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LeBonCoinDesServices\MainBundle\Entity\AnnouncementRepository")
 */
class Announcement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_announcement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_announcement;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_city", type="integer")
     */
    private $id_city;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=100)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\ManyToOne(targetEntity="LeBonCoinDesServices\UserBundle\Entity\user", inversedBy="announcement", cascade={"persist"})
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     */
    private $user_id;

    /**
     * @ORM\OneToOne(targetEntity="category", inversedBy="announcement")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $announcement_id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_announcement;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Announcement
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set idCategory
     *
     * @param integer $idCategory
     * @return Announcement
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;
    
        return $this;
    }

    /**
     * Get idCategory
     *
     * @return integer 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Announcement
     */
    public function setIdCity($id)
    {
        $this->idCity = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getIdCity()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Announcement
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Announcement
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Announcement
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Announcement
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
