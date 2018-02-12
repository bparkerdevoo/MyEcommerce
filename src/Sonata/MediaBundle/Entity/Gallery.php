<?php

namespace Sonata\MediaBundle\Entity;

use Sonata\MediaBundle\Entity\BaseGallery as BaseGallery;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gallery
 *
 * @ORM\Table(name="gallery")
 * @ORM\Entity(repositoryClass="Sonata\MediaBundle\PHPCR\GalleryRepository")
 */

class Gallery extends BaseGallery
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

