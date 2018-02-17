<?php
/**
 * Created by PhpStorm.
 * User: BELEMA
 * Date: 15/02/18
 * Time: 01:37
 */

namespace MSF\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * //ecommerce//front
 * 
 * @ORM\Entity
 * @ORM\Table(name="commande")
 */
class Commande
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;
    public function __construct(){
        $this->date = new \DateTime();
    }

    /**
     * @ORM\Column(type="float")
     */
    private $montant;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getModeReglement()
    {
        return $this->modeReglement;
    }

    /**
     * @param mixed $modeReglement
     */
    public function setModeReglement($modeReglement)
    {
        $this->modeReglement = $modeReglement;
    }

    /**
     * @ORM\Column(type="string")
     */
    private $modeReglement;

    /**
     * @ORM\JoinColumn(nullable=false)
     * @ORM\ManyToMany(targetEntity="MyScentFactory\MSFBundle\Entity\Produit", cascade={"persist"})
     */
    private $idProduit;
    
    

    /**
     * 
     * @ORM\JoinColumn(name="id_client")
     * @ORM\ManyToOne(targetEntity="MSF\UserBundle\Entity\Client", cascade={"persist"})
     */
    private $idClient;

    /**
     * @ORM\OneToOne(targetEntity="MSF\FactoryBundle\Entity\Composition", cascade={"persist"})
     * @ORM\JoinColumn( nullable=true)
     */
    private $nomComposition;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\CodePromo")
     * @ORM\JoinColumn( nullable=true)
     */
    private $idCodePromo;

    /**
     * @return mixed
     */
    public function getIdCodePromo()
    {
        return $this->idCodePromo;
    }

    /**
     * @param mixed $idCodePromo
     */
    public function setIdCodePromo($idCodePromo)
    {
        $this->idCodePromo = $idCodePromo;
    }

    /**
     * @ORM\JoinColumn(nullable=true)
     * @ORM\ManyToOne(targetEntity="MSF\EcommerceBundle\Entity\LigneDeCommande")
     */
    private $ligneDeCommande;

    /**
     * @return mixed
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @param mixed $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getNomComposition()
    {
        return $this->nomComposition;
    }

    /**
     * @param mixed $nomComposition
     */
    public function setNomComposition($nomComposition)
    {
        $this->nomComposition = $nomComposition;
    }

    /**
     * @return mixed
     */
    public function getLigneDeCommande()
    {
        return $this->ligneDeCommande;
    }

    /**
     * @param mixed $ligneDeCommande
     */
    public function setLigneDeCommande($ligneDeCommande)
    {
        $this->ligneDeCommande = $ligneDeCommande;
    }
    

    /**
     * Add idProduit.
     *
     * @param \MSF\EcommerceBundle\Entity\Produit $idProduit
     *
     * @return Commande
     */
    public function addIdProduit(\MSF\EcommerceBundle\Entity\Produit $idProduit)
    {
        $this->idProduit[] = $idProduit;

        return $this;
    }

    /**
     * Remove idProduit.
     *
     * @param \MSF\EcommerceBundle\Entity\Produit $idProduit
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdProduit(\MSF\EcommerceBundle\Entity\Produit $idProduit)
    {
        return $this->idProduit->removeElement($idProduit);
    }
}