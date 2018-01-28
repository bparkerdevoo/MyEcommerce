<?php

namespace MSF\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


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
     * @ORM\Column(name="id_produit", type="integer")
     * @ORM\OneToMany(targetEntity="MSF\EcommerceBundle\Entity\Produit", mappedBy="Categories")
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
     * @ORM\Column(name="nom", type="string", length=100)
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
        return $this->id_produit;
    }

    /**
     * Set idParfum.
     *
     * @param \MSF\FactoryBundle\Entity\Parfum|null $idParfum
     *
     * @return Categories
     */
    public function setIdParfum(\MSF\FactoryBundle\Entity\Parfum $idParfum = null)
    {
        $this->id_parfum = $idParfum;

        return $this;
    }

    /**
     * Get idParfum.
     *
     * @return \MSF\FactoryBundle\Entity\Parfum|null
     */
    public function getIdParfum()
    {
        return $this->id_parfum;
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
     * Get idSupport.
     *
     * @return \MSF\FactoryBundle\Entity\Support|null
     */
    public function getIdSupport()
    {
        return $this->id_support;
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
     * Get idAccessoire.
     *
     * @return \AppBundle\Entity\Accessoire|null
     */
    public function getIdAccessoire()
    {
        return $this->id_accessoire;
    }
}
