<?php

namespace LeBonCoinDesServices\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * regions
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LeBonCoinDesServices\MainBundle\Entity\regionsRepository")
 */
class regions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_region", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_region;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_region", type="string", length=255)
     */
    private $nomRegion;


    /**
     * Get id_region
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_region;
    }

    /**
     * Set nomRegion
     *
     * @param string $nomRegion
     * @return regions
     */
    public function setNomRegion($nomRegion)
    {
        $this->nomRegion = $nomRegion;
    
        return $this;
    }

    /**
     * Get nomRegion
     *
     * @return string 
     */
    public function getNomRegion()
    {
        return $this->nomRegion;
    }
}
