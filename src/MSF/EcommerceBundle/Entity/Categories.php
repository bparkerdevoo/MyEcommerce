<?php

namespace MSF\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraint as Assert;


/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="MSF\EcommerceBundle\Repository\CategoriesRepository")
 */
class Categories
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
     * @ORM\OneToMany(targetEntity="MSF\EcommerceBundle\Entity\Produit", mappedBy="categories")
     */
    private $id_produit;

    public function __construct()
    {
        $this->id_produit = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Parfum", cascade={"persist"})
     *
     */
    private $id_parfum;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="MSF\FactoryBundle\Entity\Support", cascade={"persist"})
     *
     */
    private $id_support;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Accessoire", cascade={"persist"})
     *
     */
    private $id_accessoire;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     *
     *
     */
    private $nom;




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
     * Set ambiance.
     *
     * @param string $nom
     *
     * @return Categories
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get ambiance.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }





    /**
     * Set idProduit.
     *
     * @param int $idProduit
     *
     * @return Categories
     */
    public function setIdProduit($idProduit)
    {
        $this->id_produit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit.
     *
     * @return int
     */
    public function getIdProduit()
    {
        return $this->id;
    }


    /**
     * Set idSupport.
     *
     * @param \MSF\FactoryBundle\Entity\Support|null $idSupport
     *
     * @return Categories
     */
    public function setIdSupport(\MSF\FactoryBundle\Entity\Support $idSupport = null)
    {
        $this->id_support = $idSupport;

        return $this;
    }



    /**
     * Set idAccessoire.
     *
     * @param \AppBundle\Entity\Accessoire|null $idAccessoire
     *
     * @return Categories
     */
    public function setIdAccessoire(\AppBundle\Entity\Accessoire $idAccessoire = null)
    {
        $this->id_accessoire = $idAccessoire;

        return $this;
    }



    /**
     * Add idProduit.
     *
     * @param \MSF\EcommerceBundle\Entity\Produit $idProduit
     *
     * @return Categories
     */
    public function addIdProduit(\MSF\EcommerceBundle\Entity\Produit $idProduit)
    {
        $this->id_produit[] = $idProduit;

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
        return $this->id_produit->removeElement($idProduit);
    }





    /**
     * Set idParfum.
     *
     * @param \AppBundle\Entity\Parfum|null $idParfum
     *
     * @return Categories
     */
    public function setIdParfum(\AppBundle\Entity\Parfum $idParfum = null)
    {
        $this->id_parfum = $idParfum;

        return $this;
    }

    /**
     * Get idParfum.
     *
     * @return \AppBundle\Entity\Parfum|null
     */
    public function getIdParfum()
    {
        return $this->id;
    }

    /**
     * Get idSupport.
     *
     * @return \MSF\FactoryBundle\Entity\Support|null
     */
    public function getIdSupport()
    {
        return $this->id;
    }

    /**
     * Get idAccessoire.
     *
     * @return \AppBundle\Entity\Accessoire|null
     */
    public function getIdAccessoire()
    {
        return $this;
    }
}
