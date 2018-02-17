<?php

namespace MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TVA
 *
 * @ORM\Table(name="t_v_a")
 * @ORM\Entity(repositoryClass="MSFBundle\Repository\TVARepository")
 */
class TVA
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
     * @var float
     *
     * @ORM\Column(name="Multiple", type="float")
     */
    private $multiple;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=45)
     */
    private $valeur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
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
     * Set multiple.
     *
     * @param float $multiple
     *
     * @return TVA
     */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;

        return $this;
    }

    /**
     * Get multiple.
     *
     * @return float
     */
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * Set valeur.
     *
     * @param string $valeur
     *
     * @return TVA
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur.
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return TVA
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
}
