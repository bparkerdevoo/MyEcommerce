<?php

namespace MSF\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function pageAction($id)
    {
        return $this->render('PagesBundle:Page:layout/page.html.twig', array(
            // ...
        ));
    }

    public function accueilAction()
    {
        return $this->render('PagesBundle:Page:layout/accueil.html.twig', array(
            // ...
        ));
    }

}
