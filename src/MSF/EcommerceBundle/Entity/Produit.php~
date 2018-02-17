<?php

namespace MSF\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;


/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="MSF\EcommerceBundle\Repository\ProduitRepository")
 * @Vich\Uploadable
 */
class Produit
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
     * @ORM\OneToMany(targetEntity="Media", mappedBy="Produit")
     */
    private $media_Id;
    public function __construct()
    {
        $this->media_Id = new ArrayCollection();
    }

    /**
     *@var File
     * @ORM\Column(name="brochure", type="string", nullable=true)
     *
     * @Assert\NotBlank(message="merci de télécharger la brochure du produit au format PDF.")
     * @Assert\File(mimeTypes={"application/pdf"})
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $brochure
     */
    private $brochure;

    /**
     * @return mixed
     */
    public function getBrochure()
    {
        return $this->brochure;
    }

    /**
     * @param mixed $brochure
     */
    public function setBrochure(File $brochure = null)
    {
        $this->brochure = $brochure;

        return $this;
    }



    /**
     * @ORM\ManyToOne(targetEntity="MSF\EcommerceBundle\Entity\Categories", inversedBy="produit")
     *
     * @ORM\JoinColumn(name="categories_id", referencedColumnName="id")
     */
    private $id_categories;

    /**
     * @ORM\ManyToOne(targetEntity="MSF\EcommerceBundle\Entity\Commande", inversedBy="produit")
     *
     * @ORM\JoinColumn(name="idCommande", referencedColumnName="id")
     */
    private $idCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=150, unique=true, nullable=true)
     *
     * @Assert\NotBlank(message="Merci de renseigner ce champ")
     */
    private $nom;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=2, nullable=true)
     *
     * @Assert\GreaterThan(0)
     *
     * @Assert\NotBlank(message="Le prix est obligatoire")
     *
     *
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float", nullable=true)
     */
    private $tva;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean", nullable=true)
     */
    private $disponible;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;


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
     * @return Produit
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
     * Set description.
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix.
     *
     * @param float $prix
     *
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set tva.
     *
     * @param float $tva
     *
     * @return Produit
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva.
     *
     * @return float
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set disponible.
     *
     * @param bool $disponible
     *
     * @return Produit
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible.
     *
     * @return bool
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return Produit
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set idCategories.
     *
     * @param int $idCategories
     *
     * @return Produit
     */
    public function setIdCategories(Categories $idCategories)
    {
        $this->id_categories = $idCategories;

        return $this;
    }

    /**
     * Get idCategories.
     *
     * @return int
     */
    public function getIdCategories()
    {
        return $this->id_categories;
    }


    /**
     * Add mediaId.
     *
     * @param \MSF\EcommerceBundle\Entity\Media $mediaId
     *
     * @return Produit
     */
    public function addMediaId(\MSF\EcommerceBundle\Entity\Media $mediaId)
    {
        $this->media_Id[] = $mediaId;

        return $this;
    }

    /**
     * Remove mediaId.
     *
     * @param \MSF\EcommerceBundle\Entity\Media $mediaId
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeMediaId(\MSF\EcommerceBundle\Entity\Media $mediaId)
    {
        return $this->media_Id->removeElement($mediaId);
    }

    /**
     * Get mediaId.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMediaId()
    {
        return $this->media_Id;
    }

    /**
     * Set idCommande.
     *
     * @param \MSF\EcommerceBundle\Entity\Commande|null $idCommande
     *
     * @return Produit
     */
    public function setIdCommande(\MSF\EcommerceBundle\Entity\Commande $idCommande = null)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande.
     *
     * @return \MSF\EcommerceBundle\Entity\Commande|null
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }
}
