<?php

namespace MSF\EcommerceBundle\Controller;

use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping\Annotation;
use MSF\EcommerceBundle\Entity\Produit;
use MSF\EcommerceBundle\Form\ProduitType;
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
            ->getRepository('EcommerceBundle:Produit')
            ->find($id);

        if(!$article){
            throw $this->createNotFoundException('Aucun produit ne correspond à '.$id.'bp');
        }

        return new Response($article->getNom());
    }


}


