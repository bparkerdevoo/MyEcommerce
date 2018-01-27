<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\Media;
use MSF\EcommerceBundle\Form\MediaType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MediaController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/media/view", name="view_media")
     */
    public function viewMediaAction()
    {
        return $this->render("EcommerceBundle:pages:eshop.html.twig");
    }

    /**
     *
     * @Route("/media/create", name="create_media")
     */
    public function createMediaAction()
    {
        return $this->render("EcommerceBundle:pages:create.html.twig");
    }

    /**
     * @Route("/media/update/{id}", name="update_media")
     *
     */
    public function updateMediaAction($id)
    {
        return $this->render("EcommerceBundle:pages:update.html.twig");
    }

    /**
     * @Route("/media/show/{id}", name="show_media")
     *
     */
    public function showMediaAction($id)
    {
        return $this->render("EcommerceBundle:pages:view.html.twig");
    }

    /**
     * @Route("/media/delete/{id}", name="delete_media")
     *
     */
    public function deleteMediaAction($id)
    {
        return $this->render("EcommerceBundle:pages:delete.html.twig");
    }



    //form

    public function addAction()
    {
        $media = new Media();

        // recupere formulaire
        $form = $this->createForm(MediaType::class, $media);

        //generate form html
        $formView = $form->createView();
    }

}
