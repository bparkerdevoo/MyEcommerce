<?php

namespace MSF\FactoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MSF\EcommerceBundle\Entity\Produit;

class PostController extends Controller
{
    /**
     * @Route("/post", name="view_post_route")
     */
    public function viewPostAction()
    {
        $post = $this->getDoctrine()->getRepository('EcommerceBundle:Produit')->findAll();

        return $this->render("FactoryBundle:pages:factory.html.twig");
    }

    /**
     * @Route("/post/create", name="create_post_route")
     */
    public function createPostAction()
    {
        return $this->render("FactoryBundle:pages:create.html.twig");
    }

    /**
     * @Route("/post/update/{id}", name="update_post_route")
     */
    public function updatePostAction($id)
    {
        return $this->render("FactoryBundle:pages:update.html.twig");
    }

    /**
     * @Route("/post/view/{id}", name="show_post_route")
     */
    public function showPostAction($id)
    {
        return $this->render("FactoryBundle:pages:view.html.twig");
    }

    /**
     * @Route("/post/delete/{id}", name="delete_post_route")
     */
    public function deletePostAction($id)
    {
        return $this->render("FactoryBundle:pages:delete.html.twig");
    }
}
