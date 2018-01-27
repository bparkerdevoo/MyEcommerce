<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\Categories;
use MSF\EcommerceBundle\Form\CategoriesType;
use function Sodium\add;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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
    public function updateCategorieAction($id)
    {
        return $this->render("EcommerceBundle:pages:update.html.twig");
    }

    /**
     * @Route("/categorie/show/{id}", name="show_categorie")
     */
    public function showCategorieAction($id)
    {
        return $this->render("EcommerceBundle:pages:view.html.twig");
    }

    /**
     * @Route("/categorie/delete/{id}", name="delete_post_route")
     */
    public function deleteCategorieAction($id)
    {
        return $this->render("EcommerceBundle:pages:delete.html.twig");
    }


    /**
     * @Route("/categorie", name="ajout_categorie")
     */

    public function addAction()
    {
        $categorie = new Categories();
        $categorie->setNom('Categorie');

        // recupere formulaire
        $form = $this->createFormBuilder($categorie)
            ->add('Categorie', TextType::class)
            ->add('save',SubmitType::class, array('label'=> 'Ajouter'))
            ->getForm()
        ;

        return $this->render("EcommerceBundle:Produits:modules/AjoutCategorie.html.twig", array($form->createView()
        ))
        //generate form html
        ;
    }
}

