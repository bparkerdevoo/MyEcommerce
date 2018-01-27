<?php

namespace MSF\FactoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NoteController extends Controller
{
    //view
    /**
     * @Route("/note/view", name="view-note")
     */
    public function viewNoteAction()
    {
        return $this->render("FactoryBundle:pages:factory.html.twig");
    }
    //create
    /**
     * @Route("/note/create", name="create-note")
     */
    public function createNoteAction()
    {
        return $this->render("FactoryBundle:pages:create.html.twig");
    }
    //update
    /**
     * @Route("/note/update/{id}", name="update-note")
     */
    public function updateNoteAction($id)
    {
        return $this->render("FactoryBundle:pages:update.html.twig");
    }
    //show
    /**
     * @Route("/note/show/{id}", name="show-note")
     */
    public function showNoteAction($id)
    {
        return $this->render("FactoryBundle:pages:view.html.twig");
    }
    //delete

    /**
     * @Route("/note/delete/{id}", name="delete-note")
     */
    public function deleteNoteAction($id)
    {
        return $this->render("FactoryBundle:pages:delete.html.twig");
    }
}
