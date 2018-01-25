<?php

namespace MSF\FactoryBundle\Controller;

use MSF\FactoryBundle\Entity\Parfum;
use MSF\FactoryBundle\Form\ParfumType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ParfumController extends Controller
{
    //view
    /**
     * @Route("/parfum/view", name="view_parfum")
     */
    public function viewParfumAction()
    {
        return $this->render("FactoryBundle:pages:factory.html.twig");
    }
    //create
    /**
     * @Route("/parfum/create", name="create_parfum")
     */
    public function createParfumAction()
    {
        return $this->render("FactoryBundle:pages:create.html.twig");
    }
    //update
    /**
     * @Route("/parfum/update/{id}", name="update_parfum")
     */
    public function updateParfumAction()
    {
        return $this->render("FactoryBundle:pages:update.html.twig");
    }
    //show
    /**
     * @Route("/parfum/show/{id}", name="show_parfum")
     */
    public function showParfumAction()
    {
        return $this->render("FactoryBundle:pages:view.html.twig");
    }
    //delete

    /**
     * @Route("/parfum/delete/{id}", name="delete_parfum")
     */
    public function deleteParfumAction()
    {
        return $this->render("FactoryBundle:pages:delete.html.twig");
    }

    //form
    public function addAction()
    {
        $parfum = new Parfum();
        // recupere formulaire
        $form = $this->createForm(ParfumType::class, $parfum);

        //generate form html
        $formView = $form->createView();
    }
}

