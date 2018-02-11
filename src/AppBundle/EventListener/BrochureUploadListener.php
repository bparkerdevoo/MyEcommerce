<?php
namespace AppBundle\EventListener;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use MSF\EcommerceBundle\Entity\Produit;
use AppBundle\Service\FileUploader;

class BrochureUploadListener
{
    private $uploader;

    public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $this->uploadedFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();
        $this->uploadedFile($entity);
    }

    private function uploadedFile($entity)
    {
        if (!$entity instanceof Produit)
        {
            return;
        }

        $file = $entity->getBrochure();

        if ($file instanceof UploadedFile)
        {
            $fileName = $this->uploader->upload($file);
            $entity->setBrochure($fileName);
        }
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Produit)
        {
         return;
        }

        if($fileName = $entity->getBrochure())
        {
            $entity->setBrochure(new File($this->uploader->getTargetDir().'/'.$fileName));
        }
    }
}