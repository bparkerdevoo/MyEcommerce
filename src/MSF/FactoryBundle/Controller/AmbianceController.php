<?php

namespace MSF\FactoryBundle\Controller;

use MSF\FactoryBundle\Entity\Ambiance;
use MSF\FactoryBundle\Form\AmbianceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
    public function updateAmbianceAction()
    {
        return $this->render("FactoryBundle:pages:update.html.twig");
    }
    //show
    /**
     * @Route("/ambiance/show/{id}", name="show_ambiance")
     */
    public function showAmbianceAction()
    {
        return $this->render("FactoryBundle:pages:view.html.twig");
    }
    //delete

    /**
     * @Route("/ambiance/delete/{id}", name="delete_ambiance")
     */
    public function deleteAmbianceAction()
    {
        return $this->render("FactoryBundle:pages:delete.html.twig");
    }

    public function addAction()
    {
       $ambiance = new Ambiance();

        // recupere formulaire
        $form = $this->createForm(AmbianceType::class, $ambiance);

        //generate form html
        $formView = $form->createView();

    }
}
