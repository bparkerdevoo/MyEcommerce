<?php

namespace AppBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use MyScentFactory\MSFBundle\Entity\Personnalisation;
use Symfony\Component\Routing\Annotation\Route;


class PersonnalisationCRUDController extends CRUDController
{
    /**
     * @Route("/personnalisation", name="customisation")
     */
    public function UpdateAction()
    {

    }
}
