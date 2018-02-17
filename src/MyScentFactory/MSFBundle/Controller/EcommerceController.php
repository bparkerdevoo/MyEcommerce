<?php

namespace MyScentFactory\MSFBundle\Controller;

use MSFBundle\Repository\ProduitRepository;
use MyScentFactory\MSFBundle\MSFBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MyScentFactory\MSFBundle\Entity\Produit;
use Symfony\Component\HttpFoundation\Request;
use MSF\EcommerceBundle\Entity\Media;

class EcommerceController extends Controller
{
    /**
     * //routing = shop
     *
     * @Route("/produit" , name="shop_produit")
     */
    public function ProduitAction()
    {
        //recupere produit

        $produit = $this->getDoctrine()->getRepository(Produit::class)->findAll()
        ;

        return $this->render('MSFBundle:Ecommerce:produit.html.twig', array(
            'produits'=>$produit,
        ));

    }

    /**
     * @Route("/Commande")
     */
    public function CommandeAction()
    {
        return $this->render('MSFBundle:Ecommerce:commande.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Panier/{id}", name="ajouterAuPanier")
     */
    public function PanierAction(Request $request, $id)
    {
        //pour avoir acces à la session
        $session= $request->getSession();
        //reste au debut

        $produit = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findOneBy(array('id'=>$id));

        $panier = null;
        //verifier si panier exist et si produit exist dans la session

        if ($produit != null && !$session->get('panier'))
        {
            $session->set('panier', array(
                array(
                    'photo'=> $produit->getImage(),
                    'Article' => $produit->getNom(),
                    'Categorie'=> $produit->getIdCategories(),
                    'reference'=> $produit->getId(),
                    'prix'=> $produit->getPrix(),
                    'quantite' => 1,
                    'Date' => new \DateTime()
                )
            ));
            //variable panier recupere le tableau ci-dessus
            $panier = $session->get('Panier');
        }
        if ($produit != null && $panier != null)
        {
            //array push permet rajouter des infos dans le panier
                  $panier = $session->get('panier');
                  array_push($panier,
                      array(
                          'Article' => $produit->getNom(),
                          'Categorie'=> $produit->getIdCategories(),
                          'reference'=> $produit->getId(),
                          'prix'=> $produit->getPrix(),
                          'quantite' => 1,
                          'Date' => new \DateTime()
                      ));
                  $session->set('panier', $panier);

        }
        $this->addFlash('notice', 'produit ajouté au panier');



        //reste à la fin
        //redirect route vers l'action pour le renvoyer dans la vu
        return $this->redirectToRoute('shop_produit');
    }


    /**
     * @Route("/panier/afficher", name="afficher_panier" )
     */

    public function afficherPanierAction(Request $request)
    {

        $session = $request->getSession();

        $panier = $session->get('panier');

        $monPanier = [];

        //chercher tout les produit dans le panier

        foreach ($panier as $maComposition)
        {
              $produit = $this->getDoctrine()->getRepository(Produit::class)
              ->findOneBy(array('id'=>$maComposition['reference']));


              $photo = $this->getDoctrine()->getRepository(Media::class)
              ->findOneBy(array('produit'=>$maComposition['reference']));

              //envoyer dans un tableau des données sans ecrasé les precedentes
              array_push($monPanier, array(
                  'produit'=> $produit,
                  'photo'=> $photo,
                  'quantite'=>$maComposition['quantite']

              ));

        }


        return $this->render('MSFBundle:Ecommerce:panier.html.twig', array(
            'panier'=>$monPanier,

        ));    }


}
