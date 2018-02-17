<?php

namespace MyScentFactory\MSFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PageController extends Controller
{
    /**
     * @Route("/Catalogue")
     */
    public function CatalogueAction()
    {
        return $this->render('MSFBundle:Page:catalogue.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Accueil")
     */
    public function AccueilAction()
    {
        return $this->render('MSFBundle:Page:accueil.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Apropos")
     */
    public function AproposAction()
    {
        return $this->render('MSFBundle:Page:apropos.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Condition")
     */
    public function ConditionAction()
    {
        return $this->render('MSFBundle:Page:condition.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Blog")
     */
    public function BlogAction()
    {
        return $this->render('MSFBundle:Page:blog.html.twig', array(
            // ...
        ));
    }



}
