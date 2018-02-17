<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Form\ProduitType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PanierDefaultController extends Controller
{
    /**
     * @Route("/panier/produit", name="ajouter_produit")
     */
    public function indexAction()
    {
        return $this->render('EcommerceBundle:Default:index.html.twig');
    }

    /**
     * @Route("/", name="old_addproduit")
     */
    public function FormAction(Request $request)
    {
        $p = new Produit();
        $form = $this->createForm(ProduitType::class, $p);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $p = $form->getData();
            $p1 = $this->getDoctrine()
                ->getRepository('EcommerceBundle:Produit')
                ->findBy(
                    array(
                        'nom' => $p->getnom(),
                        'prix' => $p->getPrix()
                    )
                );
            if($p1){
                return new Response("Erreur, produit dèja ajouté !");
            }else{
                $em = $this->getDoctrine()->getManager();

                $em->persist($p);
                $em->flush();

                return new Response("Produit ajouté avec succès !");
            }

        }else{
            return $this->render('EcommerceBundle:Default:Index.html.twig', array(
                'name' => '',
                'form' => $form->createView(),
            ));
        }
    }
}
