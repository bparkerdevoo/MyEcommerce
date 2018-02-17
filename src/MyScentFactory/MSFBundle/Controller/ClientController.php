<?php

namespace MyScentFactory\MSFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ClientController extends Controller
{
    /**
     * @Route("/Connexion")
     */
    public function ConnexionAction()
    {
        return $this->render('MSFBundle:Client:connexion.html.twig', array(
            // ...
        ));
    }

}
