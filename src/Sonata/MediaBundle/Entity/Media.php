<?php

namespace Sonata\MediaBundle\Entity;

use Sonata\MediaBundle\Entity\BaseMedia as BaseMedia;
use Doctrine\ORM\Mapping as ORM;


/**
 * Media
 *
 * @ORM\Table(name="Media")
 * @ORM\Entity(repositoryClass="Sonata\MediaBundle\PHPCR\MediaRepository")
 */
class Media extends BaseMedia
{
    /**
     * @var \Sonata\MediaBundle\Entity\Media
     *
     * @ORM\ManyToOne(targetEntity="Sonata\MediaBundle\Entity\Media", cascade={"all"}, fetch="LAZY")
     * @ORM\JoinColumn(name="avatar_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $avatar;
    /**
     * @var string The path - typically stored in the database
     */
    private $path;

    public function getWebPath()
    {
        // ... $webPath being the full image URL, to be used in templates

        return $webPath;
    }

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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set name.
     *
     * @param string $name
     *
     * @return Gallery
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
