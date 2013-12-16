<?php

namespace LeBonCoinDesServices\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * villes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LeBonCoinDesServices\MainBundle\Entity\villesRepository")
 */
class villes
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
     * @ORM\Column(name="habitants", type="integer")
     */
    private $habitants;

    /**
     * @var integer
     *
     * @ORM\Column(name="densite", type="integer")
     */
    private $densite;

    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=2)
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ville", type="string", length=255)
     */
    private $nomVille;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ville_maj", type="string", length=255)
     */
    private $nomVilleMaj;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ville_url", type="string", length=255)
     */
    private $nomVilleUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=5)
     */
    private $codePostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_insee", type="integer")
     */
    private $codeInsee;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @var boolean
     *
     * @ORM\Column(name="coord_fixed", type="boolean")
     */
    private $coordFixed;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_arr", type="string", length=5)
     */
    private $cpArr;

    /**
     * @var integer
     *
     * @ORM\Column(name="arrondissement", type="smallint")
     */
    private $arrondissement;

    /**
     * @var float
     *
     * @ORM\Column(name="latRad", type="float")
     */
    private $latRad;

    /**
     * @var float
     *
     * @ORM\Column(name="lonRad", type="float")
     */
    private $lonRad;

    /**
     * @ORM\OneToOne(targetEntity="LeBonCoinDesServices\UserBundle\Entity\user", inversedBy="ville")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     */
    private $user_id;

    /**
     * @ORM\OneToOne(targetEntity="announcement", inversedBy="ville")
     * @ORM\JoinColumn(name="id_announcement", referencedColumnName="id_announcement")
     */
    private $announcement_id;

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
     * Set habitants
     *
     * @param integer $habitants
     * @return villes
     */
    public function setHabitants($habitants)
    {
        $this->habitants = $habitants;
    
        return $this;
    }

    /**
     * Get habitants
     *
     * @return integer 
     */
    public function getHabitants()
    {
        return $this->habitants;
    }

    /**
     * Set densite
     *
     * @param integer $densite
     * @return villes
     */
    public function setDensite($densite)
    {
        $this->densite = $densite;
    
        return $this;
    }

    /**
     * Get densite
     *
     * @return integer 
     */
    public function getDensite()
    {
        return $this->densite;
    }

    /**
     * Set departement
     *
     * @param string $departement
     * @return villes
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    
        return $this;
    }

    /**
     * Get departement
     *
     * @return string 
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set nomVille
     *
     * @param string $nomVille
     * @return villes
     */
    public function setNomVille($nomVille)
    {
        $this->nomVille = $nomVille;
    
        return $this;
    }

    /**
     * Get nomVille
     *
     * @return string 
     */
    public function getNomVille()
    {
        return $this->nomVille;
    }

    /**
     * Set nomVilleMaj
     *
     * @param string $nomVilleMaj
     * @return villes
     */
    public function setNomVilleMaj($nomVilleMaj)
    {
        $this->nomVilleMaj = $nomVilleMaj;
    
        return $this;
    }

    /**
     * Get nomVilleMaj
     *
     * @return string 
     */
    public function getNomVilleMaj()
    {
        return $this->nomVilleMaj;
    }

    /**
     * Set nomVilleUrl
     *
     * @param string $nomVilleUrl
     * @return villes
     */
    public function setNomVilleUrl($nomVilleUrl)
    {
        $this->nomVilleUrl = $nomVilleUrl;
    
        return $this;
    }

    /**
     * Get nomVilleUrl
     *
     * @return string 
     */
    public function getNomVilleUrl()
    {
        return $this->nomVilleUrl;
    }

    /**
     * Set codePostale
     *
     * @param string $codePostale
     * @return villes
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;
    
        return $this;
    }

    /**
     * Get codePostale
     *
     * @return string 
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set codeInsee
     *
     * @param integer $codeInsee
     * @return villes
     */
    public function setCodeInsee($codeInsee)
    {
        $this->codeInsee = $codeInsee;
    
        return $this;
    }

    /**
     * Get codeInsee
     *
     * @return integer 
     */
    public function getCodeInsee()
    {
        return $this->codeInsee;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return villes
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return villes
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set coordFixed
     *
     * @param boolean $coordFixed
     * @return villes
     */
    public function setCoordFixed($coordFixed)
    {
        $this->coordFixed = $coordFixed;
    
        return $this;
    }

    /**
     * Get coordFixed
     *
     * @return boolean 
     */
    public function getCoordFixed()
    {
        return $this->coordFixed;
    }

    /**
     * Set cpArr
     *
     * @param string $cpArr
     * @return villes
     */
    public function setCpArr($cpArr)
    {
        $this->cpArr = $cpArr;
    
        return $this;
    }

    /**
     * Get cpArr
     *
     * @return string 
     */
    public function getCpArr()
    {
        return $this->cpArr;
    }

    /**
     * Set arrondissement
     *
     * @param integer $arrondissement
     * @return villes
     */
    public function setArrondissement($arrondissement)
    {
        $this->arrondissement = $arrondissement;
    
        return $this;
    }

    /**
     * Get arrondissement
     *
     * @return integer 
     */
    public function getArrondissement()
    {
        return $this->arrondissement;
    }

    /**
     * Set latrad
     *
     * @param float $latrad
     * @return villes
     */
    public function setLatrad($latrad)
    {
        $this->latrad = $latrad;
    
        return $this;
    }

    /**
     * Get latrad
     *
     * @return float 
     */
    public function getLatrad()
    {
        return $this->latrad;
    }

    /**
     * Set lonrad
     *
     * @param float $lonrad
     * @return villes
     */
    public function setLonrad($lonrad)
    {
        $this->lonrad = $lonrad;
    
        return $this;
    }

    /**
     * Get lonrad
     *
     * @return float 
     */
    public function getLonrad()
    {
        return $this->lonrad;
    }
}
