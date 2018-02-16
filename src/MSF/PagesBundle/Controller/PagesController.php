<?php

namespace MSF\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function indexAccueilAction()
    {
        $accueil = $this->render("PagesBundle:page:accueil.html.twig");

        return $accueil;
    }

    /**
     * @Route("/catalogue/{categorie}", name="catalogue_composition")
     */
    public function showCompositionAction($categorie)
    {
        return $this->render("PagesBundle:page:layout/catalogue.html.twig",['categorie'=>$categorie]);

    }

    /**
     * @Route("/mentions_legale", name="conditions")
     */

    public function MentionAction()
    {
        return $this->render("PagesBundle:page:layout/page.html.twig");

    }


}
