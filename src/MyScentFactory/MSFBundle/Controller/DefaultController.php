<?php

namespace MyScentFactory\MSFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MyScentFactory\MSFBundle\Entity\Photo;
use MSF\EcommerceBundle\Entity\Media;
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
        $repository = $this->getDoctrine()->getRepository(Media::class);

        $photos = $repository->findAll();

        return $this->render('MSFBundle:Default:index.html.twig', array('image'=>$photos));
    }

    /**
     * @Route("/Media")
     */
    public function MediaAction()
    {
        return $this->render('MSFBundle:Default:media.html.twig', array(
            // ...
        ));
    }
}
