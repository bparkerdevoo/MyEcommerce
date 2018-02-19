<?php

namespace MyScentFactory\MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forfait
 *
 * @ORM\Table(name="forfait")
 * @ORM\Entity(repositoryClass="MSFBundle\Repository\ForfaitRepository")
 */
class Forfait
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
     * @var string|null
     *
     * @ORM\Column(name="Forfait", type="string", length=150, nullable=true)
     */
    private $forfait;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
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
     * Set forfait.
     *
     * @param string|null $forfait
     *
     * @return Forfait
     */
    public function setForfait($forfait = null)
    {
        $this->forfait = $forfait;

        return $this;
    }

    /**
     * Get forfait.
     *
     * @return string|null
     */
    public function getForfait()
    {
        return $this->forfait;
    }

    /**
     * Set prix.
     *
     * @param int|null $prix
     *
     * @return Forfait
     */
    public function setPrix($prix = null)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return int|null
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
