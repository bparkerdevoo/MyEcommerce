<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
const SERVER_PATH_TO_IMAGE_FOLDER = '/server/path/to/images';

class Image

{
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
 *
 */
}