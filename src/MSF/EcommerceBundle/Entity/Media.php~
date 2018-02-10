<?php

namespace MSF\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="MSF\EcommerceBundle\Repository\MediaRepository")
 * @Vich\Uploadable
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
     * @ORM\Column(name="image_name", type="string", length=255)
     */
    private $imageName;

    /**
     * @param string $imageName
     */
    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    /**
     * @return string
     */
    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName", size="imageSize")
     */
    private $imageFile;

    /**
     *
     * manually uploading a file, ensure an instance of 'UploadedFile' is injected into the setter, to trigger the update
     * config parameter is set to true: 'inject_on_load' for the setter to accept instance of file
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */

    public function setImageFile(File $image = null) : void
    {
        $this->imageFile = $image;

        if(null !== $image){
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    /**
     * @return File
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }


    /**
     *
     * @ORM\Column(type="integer", name="size")
     * @var integer
     *
     */

    private $imageSize;

    /**
     * @param int $imageSize
     */
    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    /**
     * @return int
     */
    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

    /**
     * @ORM\Column(type="datetime", name="date_loaded")
     * @var \DateTime
     *
     */
    private $updatedAt;





    /**
     * @ORM\ManyToOne(targetEntity="MSF\EcommerceBundle\Entity\Produit", inversedBy="Media")
     *
     * @ORM\JoinColumn(name="produit", referencedColumnName="id")
     */
    private $produit;

    public function setProduit(Produit $produit)
    {
        $this->produit = $produit;
    }

    public function getProduit()
    {
        return $this->produit;
    }



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

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Media
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
