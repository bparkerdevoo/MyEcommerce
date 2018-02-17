<?php

namespace MSFBundle\Controller;

//////gestion produit et des catégories

use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping\Annotation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use AppBundle\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Exception;

class ProduitsController extends Controller
{
    /**
     * #racine(eshop)
     * @Route("/produit", name="produit")
     */

    public function produitAction(Request $request)
    {
        $article = new Produit();
        $article->setNom('composition d/\'été');
        $article->setPrix('20');
        $article->setDescription('huile parfumé, diffusion lente par les tiges de bambou');
        $article->setBrochure(null);
        $article->setTva('');
        $article->setDisponible('true');
        $article->setImage('photo');

        //envoyer dans la base de donnée

        $em =$this->getDoctrine()->getManager();

        // gestion de l'objet $article par doctrine

        $em->persist($article);

        $em->flush();

        return new Response('l\'article'.' '.$article->getNom().' '.'à bien été ajouté');



    }

    /**
     * @return Response
     * @Route("/produit/{id}", name="display_produit")
     */

    public function showProduitAction($id)
    {
        $article = $this->getDoctrine()
            ->getRepository()
            ->find($id);

        if(!$article){
            throw $this->createNotFoundException('Aucun produit ne correspond à '.$id.'bp');
        }

        return new Response($article->getNom());
    }

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


