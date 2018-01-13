<?php

namespace MSF\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
        return $this->render('EcommerceBundle:Produits:layout/produits.html.twig', array(
            // ...
        ));
    }

    public function presentationAction()
    {
        return $this->render('EcommerceBundle:Produits:layout/presentation.html.twig', array(
            // ...
        ));
    }

    public function personalisationAction()
    {
        return $this->render('EcommerceBundle:Produits:layout/personalisation.html.twig', array(
            // ...
        ));
    }

    public function compositionAction()
    {
        return $this->render('EcommerceBundle:Produits:layout/composition.html.twig', array(
            // ...
        ));
    }

}
