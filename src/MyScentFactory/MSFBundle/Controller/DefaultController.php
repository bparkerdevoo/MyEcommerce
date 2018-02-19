<?php

namespace MyScentFactory\MSFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MyScentFactory\MSFBundle\Entity\MediaUploads;
use MyScentFactory\MSFBundle\Entity\Produit;
use MSFBundle\Form\MediaType;
use MSFBundle\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/msf/bienvenue", name="bienvenue")
     */
    public function indexAction()
    {
        //to persiste et fush
        $em = $this->getDoctrine()->getManager();

        //recuperation de la bdd
        $repository = $this->getDoctrine()->getRepository(MediaUploads::class);

        $photos = $repository->findAll();

        return $this->render('MSFBundle:Default:index.html.twig', array('image'=>$photos));
    }

    /**
     * @Route("/Media/upload", name="upload_image")
     */
    public function MediaAction()
    {

        $media = new MediaUploads();

        // recupere formulaire
        $form = $this->createForm(MediaType::class, $media);

        //generate form html
        $formView = $form->createView();

        return $this->redirectToRoute('catalogue');
    }

    /**
     *
     * @Route("produit/upload", name="upload")
     *
     */
    public function fileAction( )
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $produit->getBrochure();
            $fileName = $fileUploader->upload($file);

            $produit->setBrochure($fileName);


            return $this->render('MSFBundle:produits.html.twig', array('form' => $form->createView(),
            ));


        }
        return $this;
    }
}
