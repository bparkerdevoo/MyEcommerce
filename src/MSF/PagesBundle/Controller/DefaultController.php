<?php

namespace MSF\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/accueil/msf")
     */
    public function infoMSFAction()
    {
        $accueil = $this->render("PagesBundle:page:layout/accueil.html.twig");

        return $accueil;
    }

    /**
     * @Route("/catalogue/{categorie}", name="catalogue_composition")
     */
    public function showCompositionAction($categorie)
    {
        return $this->render("PagesBundle:page:layout/catalogue.html.twig",['categorie'=>$categorie]);

    }


}
