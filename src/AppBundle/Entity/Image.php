<?php
namespace AppBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;


class Image
{
    const SERVER_PATH_TO_IMAGE_FOLDER = '/server/path/to/images';
    /**
 *
 * unmapped property to handle file uploads
 *
 */
private $file;

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