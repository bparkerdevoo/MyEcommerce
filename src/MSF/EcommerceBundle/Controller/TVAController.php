<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\TVA;
use MSF\EcommerceBundle\Form\TVAType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TVAController extends Controller
{

    /**
     * @Route("/tva/create", name="create_tva")
     */

    public function createTvaAction()
    {
        return $this->render("EcommerceBundle:pages:create.html.twig");
    }

    /**
     * @Route("/tva/view", name="view_tva")
     */

    public function viewTvaAction()
    {
        return $this->render("EcommerceBundle:pages:eshop.html.twig");
    }

    /**
     * @Route("/tva/update/{id}", name="update_tva")
     */

    public function updateTvaAction()
    {
        return $this->render("EcommerceBundle:pages:update.html.twig");
    }

    /**
     * @Route("/tva/show/{id}", name="show_tva")
     */

    public function showTvaAction()
    {
        return $this->render("EcommerceBundle:pages:view.html.twig");
    }

    /**
     * @Route("/tva/delete/{id}", name="delete_tva")
     */

    public function deleteTvaAction()
    {
        return $this->render("EcommerceBundle:pages:delete.html.twig");
    }




    public function addAction()
    {
        $tva = new TVA();

        // recupere formulaire
        $form = $this->createForm(TVAType::class, $tva);

        //generate form html
        $formView = $form->createView();

    }

}
