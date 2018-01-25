<?php

namespace MSF\FactoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FavorieController extends Controller
{
    //view
    /**
     * @Route("/favorie/view", name="view_favorie")
     */
    public function viewFavorieAction()
    {
        return $this->render("FactoryBundle:pages:factory.html.twig");
    }
    //create
    /**
     * @Route("/favorie/create", name="create_favorie")
     */
    public function createFavorieAction()
    {
        return $this->render("FactoryBundle:pages:create.html.twig");
    }
    //update
    /**
     * @Route("/favorie/update/{id}", name="update_favorie")
     */
    public function updateFavorieAction()
    {
        return $this->render("FactoryBundle:pages:update.html.twig");
    }
    //show
    /**
     * @Route("/favorie/show/{id}", name="show_favorie")
     */
    public function showFavorieAction()
    {
        return $this->render("FactoryBundle:pages:view.html.twig");
    }
    //delete

    /**
     * @Route("/favorie/delete/{id}", name="delete_favorie")
     */
    public function deleteFavorieAction()
    {
        return $this->render("FactoryBundle:pages:delete.html.twig");
    }
}
