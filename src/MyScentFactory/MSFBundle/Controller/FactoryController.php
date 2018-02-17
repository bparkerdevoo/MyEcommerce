<?php

namespace MyScentFactory\MSFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MSFBundle\Entity\Personnalisation;
use MSFBundle\Form\PersonnalisationType;
use MSFBundle\Form\CompositionType;
use MSFBundle\Entity\Composition;

class FactoryController extends Controller
{
    /**
     * @Route("/Custom")
     */
    public function CustomAction()
    {
        return $this->render('MSFBundle:Factory:custom.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/suggestion", name="suggestion")
     */
    public function composeAction()
    {
        $em = $this->getDoctrine()->getManager();

        /* $suggestion = new Composition();
         $suggestion->setAmbiance('Tradition');
         $suggestion->setDescription('Retour au source, reception familliale');
         $suggestion->setSupport('bol en cuivre');
         $suggestion->setParfum('tchiouraye');
         $suggestion->setPrix('15');
         $suggestion->setTva('20');
         $suggestion->setDisponible('4');
         $suggestion->setPhotoSupport('img/holder.png');
         $suggestion->setPhotoParfum('img/msf_spray.jpg');

         $em->persist($suggestion);

         $suggestion2 = new Composition();
         $suggestion2->setAmbiance('Romantique');
         $suggestion2->setDescription('Douce lumière,  les bougies ont toujours une place sur la table');
         $suggestion2->setSupport('Bougie en cire naturel');
         $suggestion2->setParfum('Miel');
         $suggestion2->setPrix('25');
         $suggestion2->setTva('20');
         $suggestion2->setDisponible('6');
         $suggestion2->setPhotoSupport('img/holder.png');
         $suggestion2->setPhotoParfum('img/msf_spray.jpg');

         $em->persist($suggestion2);
         $em->flush()*/

        $suggestions = $em->getRepository('FactoryBundle:Composition')->findAll();
        return $this->render('MSFBundle:Produits:composition.html.twig', array(
            'suggestions' => $suggestions
            // ...add name, picture, ambiance option, prix, disponibilite
        ));
    }

    //view
    /**
     * @Route("/customise/view", name="view_customise")
     */
    public function viewCustomiseAction()
    {
        $customNames = $this->getDoctrine()->getRepository('MSFBundle:Personnalisation')->findAll();


        return $this->render('MSFBundle:Produits:personalisation.html.twig',array('customNames'=>$customNames));
    }

}
