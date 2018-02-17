<?php

namespace MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Composition
 *
 * @ORM\Table(name="composition")
 * @ORM\Entity(repositoryClass="MSFBundle\Repository\CompositionRepository")
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
     * @var int
     *
     * @ORM\Column(name="id_parfum", type="integer")
     * @ORM\ManyToMany(targetEntity="MSFBundle\Entity\Parfum", cascade={"persist"})
     *
     */
    private $id_parfum;

    /**
     * @var int
     *
     * @ORM\Column(name="id_support", type="integer")
     * @ORM\OneToMany(targetEntity="MSFBundle\Entity\Support", mappedBy="id_composition",cascade={"persist"})
     *
     */
    private $id_support;

    /**
     * @var int
     *
     * @ORM\Column(name="id_custom", type="integer")
     * @ORM\OneToOne(targetEntity="MSFBundle\Entity\Personnalisation", cascade={"persist"})
     *
     */
    private $id_custom;

    /**
     * @var int
     *
     * @ORM\Column(name="id_client", type="integer")
     * @ORM\ManyToOne(targetEntity="MSF\UserBundle\Entity\ClientBundle\Entity\Client", cascade={"persist"})
     *
     */
    private $id_client;

    /**
     * @var string
     * @ORM\Column(name="id_etat", type="string")
     * @ORM\ManyToOne(targetEntity="MSFBundle\Entity\etat", cascade={"persist"})
     */
    private $id_etat;

    /**
     * @var string
     * @ORM\Column(name="auteur", type="string")
     *
     */
    private $auteur;


    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;


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
     * Set idParfum.
     *
     * @param int $idParfum
     *
     * @return Composition
     */
    public function setIdParfum($idParfum)
    {
        $this->id_parfum = $idParfum;

        return $this;
    }

    /**
     * Get idParfum.
     *
     * @return int
     */
    public function getIdParfum()
    {
        return $this->id_parfum;
    }

    /**
     * Set idSupport.
     *
     * @param int $idSupport
     *
     * @return Composition
     */
    public function setIdSupport($idSupport)
    {
        $this->id_support = $idSupport;

        return $this;
    }

    /**
     * Get idSupport.
     *
     * @return int
     */
    public function getIdSupport()
    {
        return $this->id_support;
    }

    /**
     * Set idCustom.
     *
     * @param int $idCustom
     *
     * @return Composition
     */
    public function setIdCustom($idCustom)
    {
        $this->id_custom = $idCustom;

        return $this;
    }

    /**
     * Get idCustom.
     *
     * @return int
     */
    public function getIdCustom()
    {
        return $this->id_custom;
    }

    /**
     * Set idClient.
     *
     * @param int $idClient
     *
     * @return Composition
     */
    public function setIdClient($idClient)
    {
        $this->id_client = $idClient;

        return $this;
    }

    /**
     * Get idClient.
     *
     * @return int
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * Set id_etat.
     *
     * @param string $etat
     *
     * @return Composition
     */
    public function setId_etat($etat)
    {
        $this->id_etat = $etat;

        return $this;
    }

    /**
     * Get id_etat.
     *
     * @return string
     */
    public function getId_etat()
    {
        return $this->id_etat;
    }

    /**
     * Set auteur.
     *
     * @param string $auteur
     *
     * @return Composition
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur.
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set idEtat.
     *
     * @param string $idEtat
     *
     * @return Composition
     */
    public function setIdEtat($idEtat)
    {
        $this->id_etat = $idEtat;

        return $this;
    }

    /**
     * Get idEtat.
     *
     * @return string
     */
    public function getIdEtat()
    {
        return $this->id_etat;
    }
}
