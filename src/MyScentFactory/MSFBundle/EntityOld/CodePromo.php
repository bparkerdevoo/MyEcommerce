<?php

namespace MyScentFactory\MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodePromo
 *
 * @ORM\Table(name="codePromo")
 * @ORM\Entity(repositoryClass="\CodePromoRepository")
 */
class CodePromo
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
     * @ORM\Column(name="codePromo", type="string", length=10, unique=true)
     */
    private $codePromo;

    /**
     * @var string
     *
     * @ORM\Column(name="evenement", type="string", length=100)
     */
    private $evenement;


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
     * Set codePromo.
     *
     * @param string $codePromo
     *
     * @return CodePromo
     */
    public function setCodePromo($codePromo)
    {
        $this->codePromo = $codePromo;

        return $this;
    }

    /**
     * Get codePromo.
     *
     * @return string
     */
    public function getCodePromo()
    {
        return $this->codePromo;
    }

    /**
     * Set evenement.
     *
     * @param string $evenement
     *
     * @return CodePromo
     */
    public function setEvenement($evenement)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement.
     *
     * @return string
     */
    public function getEvenement()
    {
        return $this->evenement;
    }
}
