<?php

namespace MyScentFactory\MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;


/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="MyScentFactory\MSFBundle\Repository\ProduitRepository")
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
     *@var File
     * @ORM\Column(name="brochure", type="string", nullable=true)
     *
     * @Assert\NotBlank(message="merci de télécharger la brochure du produit au format PDF.")
     * @Assert\File(mimeTypes={"application/pdf"})
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $brochure
     */
    private $brochure;



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
     * Set brochure.
     *
     * @param string|null $brochure
     *
     * @return Produit
     */
    public function setBrochure($brochure = null)
    {
        $this->brochure = $brochure;

        return $this;
    }

    /**
     * Get brochure.
     *
     * @return string|null
     */
    public function getBrochure()
    {
        return $this->brochure;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return Produit
     */
    public function setNom($nom = null)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string|null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Produit
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix.
     *
     * @param float|null $prix
     *
     * @return Produit
     */
    public function setPrix($prix = null)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return float|null
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set tva.
     *
     * @param float|null $tva
     *
     * @return Produit
     */
    public function setTva($tva = null)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva.
     *
     * @return float|null
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set disponible.
     *
     * @param bool|null $disponible
     *
     * @return Produit
     */
    public function setDisponible($disponible = null)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible.
     *
     * @return bool|null
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
}
