<?php
namespace MyScentFactory\MSFBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Image
 * @package MSFBundle\Entity
 * @ORM\Entity(repositoryClass="MSFBundle\Repository\ImageRepository")
 *
 */
class Image
{
    const SERVER_PATH_TO_IMAGE_FOLDER = '/server/path/to/images';
    /**
 *
 * unmapped property to handle file uploads
 *
     * @ORM\Column(type="string")
     */
private $file;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


/**
 * Sets file.
 *
 * @param uploadedFile $file
 */

    public function setFile (UploadedFile $file = null)
    {
        $this->file= $file;
    }

/**
 * Get file
 *
 * @return UploadedFile
 */
    public function getFile()
    {
        return $this->file;
    }

/**
 *
 * Manages the copying of the file to the relevant place on the server
 */
public function upload()
{
    if(null === $this->getFile())
    {
        return;
    }

    $this->getFile()->move(
        self::SERVER_PATH_TO_IMAGE_FOLDER,
        $this->getFile()->getClientOriginalName()
    );

    $this->filename =$this->getFile()->getClientOriginalName();

    $this->setFile(null);
}

/**
 * Lifecycle callback to upload the file to the server
 *
 */
    public function lifecycleFileUpload()
    {
        $this->upload();
    }
 /**
  *
  * updates the hash value to force the preUpdate events to fire
  */
    public function refreshUpDated()
    {
        $this->setUpdated(new \DateTime());
    }

    /**
     *
     * @ORM\Column(type="string")
     */
    private $imageAlt;

    /**
     * Set imageAlt.
     *
     * @param string
     *
     *
     */
    public function setImageAlt($alt)
    {
        $this->imageAlt = $alt;

        return $this;
    }

    /**
     * Get imageAlt.
     *
     *
     */
    public function getImageAlt()
    {
        return $this->imageAlt;
    }
}
