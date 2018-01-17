<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\Produit;
use MSF\EcommerceBundle\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProduitsController extends Controller
{

    public function addAction(Request $request)
    {
        //creer produit
          $produit = new Produit();

        //recup formulaire
          $form = $this->createForm(ProduitType::class,$produit);
        //relier formulaire a la requette
         $form->handleRequest($request);

        //test de soumission du formulaire
         if($form->isSubmitted()){
             // enregistrer le produit en bdd
              $em = $this->getDoctrine()->getManager();

              $em->persist($produit);
              $em->flush();

              //retourner une reponse
                return new Response('Le produit est ajouté');
         }
        //genere la vue html du produit
          $formView = $form->createView();

        //afficher la vue
          return $this->render('EcommerceBundle:Produits:modules/AjoutProduit.html.twig', array('form'=>$formView));


    }

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



    public function compositionAction()
    {
        return $this->render('EcommerceBundle:Produits:layout/composition.html.twig', array(
            // ...composition du client
        ));
    }

}
