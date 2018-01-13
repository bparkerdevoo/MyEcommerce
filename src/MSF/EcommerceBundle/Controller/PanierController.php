<?php

namespace MSF\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function panierAction()
    {
        return $this->render('EcommerceBundle:Panier:layout/panier.html.twig', array(
            // ...
        ));
    }

    public function livraisonAction()
    {
        return $this->render('EcommerceBundle:Panier:layout/livraison.html.twig', array(
            // ...
        ));
    }

    public function validationAction()
    {
        return $this->render('EcommerceBundle:Panier:layout/validation.html.twig', array(
            // ...
        ));
    }

}
