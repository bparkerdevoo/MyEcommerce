<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\EcommerceBundle;
use MSF\EcommerceBundle\Entity\Produit;
use MSF\EcommerceBundle\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Mapping\Annotation;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class ProduitsController extends Controller
{
    /**
     * @Route("/produit/view", name="view_produit")
     *
     */
    public function viewProduitAction()
    {
        return $this->render("EcommerceBundle:pages:eshop.html.twig");
    }

    /**
     * @Route("/produit/create", name="create_produit")
     *
     */
    public function createProduitAction()
    {
        return $this->render("EcommerceBundle:pages:create.html.twig");
    }

    //update

    /**
     * @Route("/produit/udpate/{id}", name="update_produit")
     *
     */
    public function updateProduitAction($id)
    {
        return $this->render("EcommerceBundle:pages:update.html.twig");
    }

    //show

    /**
     * @Route("/produit/show/{id}", name="show_produit")
     *
     */
    public function showProduitAction($id)
    {
        return $this->render("EcommerceBundle:pages:view.html.twig");
    }

    //delete

    /**
     * @Route("/produit/delete/{id}", name="delete_produit")
     *
     */
    public function deleteProduitAction($id)
    {
        return $this->render("EcommerceBundle:pages:delete.html.twig");
    }

    //form  //form******************//form
    public function addAction(Request $request)
    {
        //creer produit
          $produit = new Produit();

        //recup formulaire
          $form = $this->createForm(ProduitType::class,$produit);
        //relier formulaire a la requette
         $form->handleRequest($request);

        //test de soumission du formulaire
         if($form->isSubmitted()&& $form->isValid()){
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

    public function modifierAction()
    {
        //afficher le contenu de la base de donnée pour le table produit

        $repository = $this->getDoctrine()->getRepository('EcommerceBundle:Produit');

        $produits = $repository->findAll();

        return $this->render('EcommerceBundle:Produits:modules/ModifProduit.html.twig', array('produits'=>$produits));



    }

    /**
     * @param $produitId
     * @return Response
     *
     * @Route("/edit/{id}", name="editer_produit")
     */
    public function updateAction()
    {

        return $this->render('EcommerceBundle:Produits:modules/editProduit.html.twig',
            array('form'=>$formView));
    }

    /*/**
     * @param Request $request
     * @param Produit $produit
     * @return Response
     *
     * @Route("/edit/{id}", name="editer_produit")
     * @ParamConverter("produits", options={"id" = "produit_id"})
     *
     */
    /*public function editAction(Request $request, Produit $produit)
    {

        //recup formulaire
        $form = $this->createForm(ProduitType::class,$produit);
        //relier formulaire a la requette
        $form->handleRequest($request);

        //test de soumission du formulaire
        if($form->isSubmitted()&& $form->isValid()){

            // enregistrer le produit en bdd
            $em = $this->getDoctrine()->getManager();
            $repository = $this->getDoctrine()->getRepository('EcommerceBundle:Produit');

            //objet viens de la bdd donc le persist est pas util
            //$em->persist($produit);
            $em->flush();

            //retourner une reponse
            return new Response('Le produit est modifié');
        }
        //genere la vue html du produit
        $formView = $form->createView();

        //afficher la vue
        return $this->render('EcommerceBundle:Produits:modules/editProduit.html.twig', array('form'=>$formView, 'produits'=>$produits));
    }*/

}
