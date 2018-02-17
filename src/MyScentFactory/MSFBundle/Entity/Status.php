<?php

namespace MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Status
 *
 * @ORM\Table(name="status")
 * @ORM\Entity(repositoryClass="MSFBundle\Repository\StatusRepository")
 */
class status
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
     * @ORM\Column(name="id_composition", type="string")
     * @ORM\OneToMany(targetEntity="MSFBundle\Entity\Composition", mappedBy="status")
     */
    private $id_composition;

    public function __construct()
    {
        $this->id_composition = new ArrayCollection();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50, unique=true)
     */
    private $status;


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
     * Set status.
     *
     * @param string $status
     *
     * @return status
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set idComposition.
     *
     * @param string $idComposition
     *
     * @return etat
     */
    public function setIdComposition($idComposition)
    {
        $this->id_composition = $idComposition;

        return $this;
    }

    /**
     * Get idComposition.
     *
     * @return string
     */
    public function getIdComposition()
    {
        return $this->id_composition;
    }
}
