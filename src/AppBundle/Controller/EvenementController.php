<?php

namespace AppBundle\Controller;

use MSF\FactoryBundle\Entity\Evenement;
use MSF\FactoryBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EvenementController extends Controller
{

    //view
    /**
     * @Route("/event/view", name="view_event")
     */
    public function viewEventAction()
    {
        return $this->render("FactoryBundle:pages:factory.html.twig");
    }
    //create
    /**
     * @Route("/event/create", name="create_event")
     */
    public function createEventAction()
    {
        return $this->render("FactoryBundle:pages:create.html.twig");
    }
    //update
    /**
     * @Route("/event/update/{id}", name="update_event")
     */
    public function updateEventAction($id)
    {
        return $this->render("FactoryBundle:pages:update.html.twig");
    }
    //show
    /**
     * @Route("/event/show/{id}", name="show_event")
     */
    public function showEventAction($id)
    {
        return $this->render("FactoryBundle:pages:view.html.twig");
    }
    //delete

    /**
     * @Route("/event/delete/{id}", name="delete_event")
     */
    public function deleteEventAction($id)
    {
        return $this->render("FactoryBundle:pages:delete.html.twig");
    }

    //form
    public function addAction()
    {
        $event = new Evenement();

        // recupere formulaire
        $form = $this->createForm(EvenementType::class, $event);

        //generate form html
        $formView = $form->createView();
    }
}

