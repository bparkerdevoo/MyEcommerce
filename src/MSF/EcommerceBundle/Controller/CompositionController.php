<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\EcommerceBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MSF\EcommerceBundle\Entity\Composition;

class CompositionController extends Controller
{
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

       $suggestions = $em->getRepository('EcommerceBundle:Composition')->findAll();
        return $this->render('EcommerceBundle:Produits/layout:composition.html.twig', array(
            'suggestions' => $suggestions
            // ...add name, picture, ambiance option, prix, disponibilite
        ));
    }

}
