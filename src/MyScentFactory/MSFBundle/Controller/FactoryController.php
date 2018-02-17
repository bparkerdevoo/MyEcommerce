<?php

namespace MyScentFactory\MSFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FactoryController extends Controller
{
    /**
     * @Route("/Custom")
     */
    public function CustomAction()
    {
        return $this->render('MSFBundle:Factory:custom.html.twig', array(
            // ...
        ));
    }

}
