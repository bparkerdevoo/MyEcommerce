<?php

namespace MSF\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping\Annotation;
use MSF\EcommerceBundle\Entity\Commande;
use MSF\EcommerceBundle\Form\ProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use AppBundle\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;

class CommandeController extends Controller
{
    /**
     *
     * @return Response
     * @Route("/bondecommande", name="bon_de_commande")
     *
     */
    public function indexAction()
    {
        $bonDeCommande = new Commande();


        $bonDeCommande->setDate(new \DateTime());
        $bonDeCommande->setModeReglement('modeRegelement');
        $bonDeCommande->setMontant('20');

        $em=$this->getDoctrine()->getManager();

        $em->persist($bonDeCommande);

        $em->flush();

        return new Response('BON DE COMMANDE');


    }
}
