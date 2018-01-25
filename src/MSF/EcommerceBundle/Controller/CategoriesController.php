<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\Categories;
use MSF\EcommerceBundle\Form\CategoriesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoriesController extends Controller
{

    /**
     * @Route("/categorie/view", name="view_categorie")
     */
    public function viewCategorieAction()
    {
        $post = $this->getDoctrine()->getRepository('EcommerceBundle:Categories')->findAll();

        return $this->render("EcommerceBundle:pages:eshop.html.twig");
    }

    /**
     * @Route("/categorie/create", name="create_categorie")
     */

      public function createCategorieAction()
    {
        return $this->render("EcommerceBundle:pages:create.html.twig");
    }

    /**
     * @Route("/categorie/update/{id}", name="update_categorie")
     */
    public function updateCategorieAction()
    {
        return $this->render("EcommerceBundle:pages:update.html.twig");
    }

    /**
     * @Route("/categorie/show/{id}", name="show_categorie")
     */
    public function showCategorieAction()
    {
        return $this->render("EcommerceBundle:pages:view.html.twig");
    }

    /**
     * @Route("/categorie/delete/{id}", name="delete_post_route")
     */
    public function deleteCategorieAction()
    {
        return $this->render("EcommerceBundle:pages:delete.html.twig");
    }




    public function addAction()
    {
        $categorie = new Categories();

        // recupere formulaire
        $form = $this->createForm(CategoriesType::class, $categorie);

        //generate form html
        $formView = $form->createView();
    }
}

