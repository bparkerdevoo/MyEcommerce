<?php

namespace MSF\FactoryBundle\Controller;

use MSF\FactoryBundle\Entity\Ambiance;
use MSF\FactoryBundle\Form\AmbianceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class AmbianceController extends Controller
{
    //view
    /**
     * @Route("/ambiance/view", name="view_ambiance")
     */
    public function viewAmbianceAction()
    {
        return $this->render("FactoryBundle:pages:factory.html.twig");
    }
    //create
    /**
     * @Route("/ambiance/create", name="create_ambiance")
     */
    public function createAmbianceAction()
    {
        return $this->render("FactoryBundle:pages:create.html.twig");
    }
    //update
    /**
     * @Route("/ambiance/update/{id}", name="update_ambiance")
     */
    public function updateAmbianceAction($id)
    {
        return $this->render("FactoryBundle:pages:update.html.twig");
    }
    //show
    /**
     * @Route("/ambiance/show/{id}", name="show_ambiance")
     */
    public function showAmbianceAction($id)
    {
        return $this->render("FactoryBundle:pages:view.html.twig");
    }
    //delete

    /**
     * @Route("/ambiance/delete/{id}", name="delete_ambiance")
     */
    public function deleteAmbianceAction($id)
    {
        return $this->render("FactoryBundle:pages:delete.html.twig");
    }

    //formulaire

    /**
     * @Route("/form/ambiance", name="form_ambiance")
     */

    public function addAction(Request $request)
    {
       $ambiance = new Ambiance();
       $ambiance->setNom('type d\'ambiance');
            // recupere formulaire
        $form = $this->createFormBuilder($ambiance)
            ->add('nom', TextType::class)
            ->add('enregistrer', SubmitType::class, array('label' => "ajouter une ambiance"))
            ->getForm();
        return $this->render("FactoryBundle:Produits:modules/ambiance.html.twig", array('form' => $form->createView(),));//generate form html


    }
}
