<?php

namespace AppBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use MSF\UserBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ClientCRUDController extends CRUDController
{
    /**
     * @Route("/client", name="client_home")
     */
    public function UpdateAction()
    {

    }
}
