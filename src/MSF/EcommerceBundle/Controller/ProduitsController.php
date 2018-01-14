<?php

namespace MSF\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
        return $this->render('EcommerceBundle:Produits:layout/produits.html.twig', array(
            // ...afficher tout les produits, classer par categorie (support, parfum, ambiance, evenement)
        ));
    }

    public function presentationAction()
    {
        return $this->render('EcommerceBundle:Produits:layout/presentation.html.twig', array(
            // ...afficher un produit, vignette nom de categorie (support, parfum, ambiance, evenement)
        ));
    }

    public function personalisationAction()
    {
        return $this->render('EcommerceBundle:Produits:layout/personalisation.html.twig', array(
            // ...enregistrer le nom de la composition du client dans table_commandeClient
        ));
    }

    public function compositionAction()
    {
        return $this->render('EcommerceBundle:Produits:layout/composition.html.twig', array(
            // ...composition du client
        ));
    }

}
