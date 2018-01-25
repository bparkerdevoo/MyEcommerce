<?php

namespace MSF\FactoryBundle\Controller;

use MSF\FactoryBundle\Entity\Support;
use MSF\FactoryBundle\Form\SupportType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class SupportController extends Controller
{
    //view
    /**
     * @Route("/support/view", name="view_support")
     */
    public function viewSupportAction()
    {
        return $this->render("FactoryBundle:pages:factory.html.twig");
    }
    //create
    /**
     * @Route("/support/create", name="create_support")
     */
    public function createSupportAction()
    {
        return $this->render("FactoryBundle:pages:create.html.twig");
    }
    //update
    /**
     * @Route("/support/update/{id}", name="update_support")
     */
    public function updateSupportAction()
    {
        return $this->render("FactoryBundle:pages:update.html.twig");
    }
    //show
    /**
     * @Route("/support/show/{id}", name="show_support")
     */
    public function showSupportAction()
    {
        return $this->render("FactoryBundle:pages:view.html.twig");
    }
    //delete

    /**
     * @Route("/support/delete/{id}", name="delete_support")
     */
    public function deleteSupportAction()
    {
        return $this->render("FactoryBundle:pages:delete.html.twig");
    }

    //form
        public function addAction()
    {
        $support = new Support();

        // recupere formulaire
        $form = $this->createForm(SupportType::class, $support);

        //generate form html
        $formView = $form->createView();

        //rend la vue
        return $this->render('FactoryBundle:Produits:modules/AjoutSupport.html.twig',
            array('form'=>$formView));
    }

}
