<?php

namespace MSF\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends Controller
{



    /**
     * @Route("/catalogue", name="catalogue_composition")
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
