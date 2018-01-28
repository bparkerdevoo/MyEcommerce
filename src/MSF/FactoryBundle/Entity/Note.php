<?php

namespace MSF\FactoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="MSF\FactoryBundle\Repository\NoteRepository")
 */
class Note
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
     * @ORM\
     */

    /**
     * @var int
     *
     * @ORM\Column(name="Note", type="integer")
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="Produit", type="string", length=255)
     */
    private $produit;


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
     * Set note.
     *
     * @param int $note
     *
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note.
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set produit.
     *
     * @param string $produit
     *
     * @return Note
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit.
     *
     * @return string
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
