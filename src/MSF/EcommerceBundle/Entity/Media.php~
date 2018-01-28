<?php

namespace MSF\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="MSF\EcommerceBundle\Repository\MediaRepository")
 */
class Media
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
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="vignette1", type="string", length=255)
     */
    private $vignette1;

    /**
     * @var string
     *
     * @ORM\Column(name="vignette2", type="string", length=255)
     */
    private $vignette2;

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
     * Set path.
     *
     * @param string $path
     *
     * @return Media
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set alt.
     *
     * @param string $alt
     *
     * @return Media
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt.
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set vignette1.
     *
     * @param string $vignette1
     *
     * @return Media
     */
    public function setVignette1($vignette1)
    {
        $this->vignette1 = $vignette1;

        return $this;
    }

    /**
     * Get vignette1.
     *
     * @return string
     */
    public function getVignette1()
    {
        return $this->vignette1;
    }

    /**
     * Set vignette2.
     *
     * @param string $vignette2
     *
     * @return Media
     */
    public function setVignette2($vignette2)
    {
        $this->vignette2 = $vignette2;

        return $this;
    }

    /**
     * Get vignette2.
     *
     * @return string
     */
    public function getVignette2()
    {
        return $this->vignette2;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return Media
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
