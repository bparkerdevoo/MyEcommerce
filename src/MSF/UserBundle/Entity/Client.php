<?php

namespace MSF\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="MSF\UserBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=100)
     */
    private $prenom;

    /**
     * @var bool
     *
     * @ORM\Column(name="Titre", type="boolean")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse1", type="text")
     */
    private $adresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse2", type="text")
     */
    private $adresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=60)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePostal", type="string", length=8)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=60)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=10)
     */
    private $mobile;

    /**
     * @var bool
     *
     * @ORM\Column(name="CategorieAdresse", type="boolean")
     */
    private $categorieAdresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_naissance", type="date")
     */
    private $dateDeNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetimetz")
     */
    private $dateInscription;

    public function __construct()
    {
        $this->dateInscription = new \DateTime('NOW');
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set titre.
     *
     * @param bool $titre
     *
     * @return Client
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre.
     *
     * @return bool
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set adresse1.
     *
     * @param string $adresse1
     *
     * @return Client
     */
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Get adresse1.
     *
     * @return string
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * Set adresse2.
     *
     * @param string $adresse2
     *
     * @return Client
     */
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get adresse2.
     *
     * @return string
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * Set ville.
     *
     * @param string $ville
     *
     * @return Client
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codePostal.
     *
     * @param string $codePostal
     *
     * @return Client
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal.
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set region.
     *
     * @param string $region
     *
     * @return Client
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set categorieAdresse.
     *
     * @param bool $categorieAdresse
     *
     * @return Client
     */
    public function setCategorieAdresse($categorieAdresse)
    {
        $this->categorieAdresse = $categorieAdresse;

        return $this;
    }

    /**
     * Get categorieAdresse.
     *
     * @return bool
     */
    public function getCategorieAdresse()
    {
        return $this->categorieAdresse;
    }

    /**
     * Set dateDeNaissance.
     *
     * @param \DateTime $dateDeNaissance
     *
     * @return Client
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get dateDeNaissance.
     *
     * @return \DateTime
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set dateInscription.
     *
     * @param \DateTime $dateInscription
     *
     * @return Client
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription.
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set telephone.
     *
     * @param string $telephone
     *
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone.
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mobile.
     *
     * @param string $mobile
     *
     * @return Client
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile.
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }
}
