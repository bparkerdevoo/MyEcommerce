<?php

namespace MSF\FactoryBundle\Controller;

use MSF\FactoryBundle\Entity\Personnalisation;
use MSF\FactoryBundle\Form\PersonnalisationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class CustomController extends Controller
{
    //view
    /**
     * @Route("/customise/view", name="view_customise")
     */
    public function viewCustomiseAction()
    {
        $customNames = $this->getDoctrine()->getRepository('FactoryBundle:Personnalisation')->findAll();


        return $this->render('FactoryBundle:Produits:layout/personalisation.html.twig',array('customNames'=>$customNames));
    }





    //create
    /**
     * @Route("/customise/create", name="create_customise")
     */
    public function createCustomiseAction()
    {
        return $this->render("FactoryBundle:pages:create.html.twig");
    }
    //update
    /**
     * @Route("/customise/update/{id}", name="update_customise")
     */
    public function updateCustomiseAction($id)
    {
        return $this->render("FactoryBundle:pages:update.html.twig");
    }
    //show
    /**
     * @Route("/customise/show/{id}", name="show_customise")
     */
    public function showAustomiseAction($id)
    {
        return $this->render("FactoryBundle:pages:view.html.twig");
    }
    //delete

    /**
     * @Route("/customise/delete/{id}", name="delete_customise")
     */
    public function deleteCustomiseAction($id)
    {
        return $this->render("FactoryBundle:pages:delete.html.twig");
    }


    /**
     * @Route("/customise", name="customise_form")
     */
    public function addAction(Request $request)
    {
        //cree le champs nommer la composition
        $custom = new Personnalisation();
        // recupere le formulaire
        $form = $this->createForm(PersonnalisationType::class,$custom);

        //faire le lien entre lobjet et la requette
        $form->handleRequest($request);

        //get the form to customise: entity/personalisation
        $customNames = $this->getDoctrine()->getRepository('FactoryBundle:Personnalisation')->findAll();


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
        return $this->render('FactoryBundle:Produits:layout/personalisation.html.twig',
            array('form'=>$formView, 'custom'=>$customNames));

    }
}
