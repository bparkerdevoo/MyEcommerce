<?php

namespace MSF\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composition
 *
 * @ORM\Table(name="composition")
 * @ORM\Entity(repositoryClass="MSF\EcommerceBundle\Repository\CompositionRepository")
 */
class Composition
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
     * @ORM\Column(name="ambiance", type="string", length=255)
     */
    private $ambiance;

    /**
     * @var string
     *
     * @ORM\Column(name="support", type="string", length=255)
     */
    private $support;

    /**
     * @var string
     *
     * @ORM\Column(name="parfum", type="string", length=255)
     */
    private $parfum;

    /**
     * @var string
     *
     * @ORM\Column(name="photoSupport", type="string", length=255)
     */
    private $photoSupport;

    /**
     * @var string
     *
     * @ORM\Column(name="photoParfum", type="string", length=255)
     */
    private $photoParfum;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float")
     */
    private $tva;


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
     * @param string $ambiance
     *
     * @return Composition
     */
    public function setAmbiance($ambiance)
    {
        $this->ambiance = $ambiance;

        return $this;
    }

    /**
     * Get ambiance.
     *
     * @return string
     */
    public function getAmbiance()
    {
        return $this->ambiance;
    }

    /**
     * Set support.
     *
     * @param string $support
     *
     * @return Composition
     */
    public function setSupport($support)
    {
        $this->support = $support;

        return $this;
    }

    /**
     * Get support.
     *
     * @return string
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * Set parfum.
     *
     * @param string $parfum
     *
     * @return Composition
     */
    public function setParfum($parfum)
    {
        $this->parfum = $parfum;

        return $this;
    }

    /**
     * Get parfum.
     *
     * @return string
     */
    public function getParfum()
    {
        return $this->parfum;
    }

    /**
     * Set photoSupport.
     *
     * @param string $photoSupport
     *
     * @return Composition
     */
    public function setPhotoSupport($photoSupport)
    {
        $this->photoSupport = $photoSupport;

        return $this;
    }

    /**
     * Get photoSupport.
     *
     * @return string
     */
    public function getPhotoSupport()
    {
        return $this->photoSupport;
    }

    /**
     * Set photoParfum.
     *
     * @param string $photoParfum
     *
     * @return Composition
     */
    public function setPhotoParfum($photoParfum)
    {
        $this->photoParfum = $photoParfum;

        return $this;
    }

    /**
     * Get photoParfum.
     *
     * @return string
     */
    public function getPhotoParfum()
    {
        return $this->photoParfum;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Composition
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
     * @return Composition
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
     * Set disponible.
     *
     * @param bool $disponible
     *
     * @return Composition
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
     * Set tva.
     *
     * @param float $tva
     *
     * @return Composition
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
}
