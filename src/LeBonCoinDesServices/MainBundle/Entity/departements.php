<?php

namespace LeBonCoinDesServices\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * departements
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LeBonCoinDesServices\MainBundle\Entity\departementsRepository")
 */
class departements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_departement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_departement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_region", type="integer")
     */
    private $idRegion;

    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer")
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_departement", type="string", length=255)
     */
    private $nomDepartement;


    /**
     * Get id_departement
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_departement;
    }

    /**
     * Set idRegion
     *
     * @param integer $idRegion
     * @return departements
     */
    public function setIdRegion($idRegion)
    {
        $this->idRegion = $idRegion;
    
        return $this;
    }

    /**
     * Get idRegion
     *
     * @return integer 
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * Set code
     *
     * @param integer $code
     * @return departements
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set nomDepartement
     *
     * @param string $nomDepartement
     * @return departements
     */
    public function setNomDepartement($nomDepartement)
    {
        $this->nomDepartement = $nomDepartement;
    
        return $this;
    }

    /**
     * Get nomDepartement
     *
     * @return string 
     */
    public function getNomDepartement()
    {
        return $this->nomDepartement;
    }
}
