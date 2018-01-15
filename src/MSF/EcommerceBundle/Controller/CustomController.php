<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\Personnalisation;
use MSF\EcommerceBundle\Form\PersonnalisationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomController extends Controller
{

    public function addAction(Request $request)
    {
        //cree le champs nommer la composition
        $custom = new Personnalisation();
        // recupere le formulaire
        $form = $this->createForm(PersonnalisationType::class,$custom);

        //faire le lien entre lobjet et la requette
        $form->handleRequest($request);

        //pour savoir si le formulaire a ete soumis
        if($form->isSubmitted()){
            //enregistrer en bdd
            $em = $this->getDoctrine()->getManager();

            $em->persist($custom);
            $em->flush();

            return new Response('Bravo votre compo est unique');
        }

        // generer le html du formulaire
        $formView = $form->createView();

        //rend la vue
        return $this->render('EcommerceBundle:Produits:layout/personalisation.html.twig',
            array('form'=>$formView));

    }
}
