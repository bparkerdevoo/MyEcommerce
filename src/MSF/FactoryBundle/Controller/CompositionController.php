<?php

namespace MSF\FactoryBundle\Controller;

use MSF\FactoryBundle\Form\CompositionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MSF\FactoryBundle\Entity\Composition;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CompositionController extends Controller
{
    //view
    /**
     * @Route("/composition/view", name="view_composition")
     */
    public function viewCompositionAction()
    {
        return $this->render("pages/factory.html.twig");
    }
    //create
    /**
     * @Route("/composition/create", name="create_composition")
     */
    public function createCompositionAction()
    {
        return $this->render("pages/create.html.twig");
    }
    //update
    /**
     * @Route("/composition/update/{id}", name="update_composition")
     */
    public function updateCompositionAction()
    {
        return $this->render("pages/update.html.twig");
    }
    //show
    /**
     * @Route("/composition/show/{id}", name="show_composition")
     */
    public function showCompositionAction()
    {
        return $this->render("pages/view.html.twig");
    }
    //delete

    /**
     * @Route("/composition/delete/{id}", name="delete_Composition")
     */
    public function deleteCompositionAction()
    {
        return $this->render("pages/delete.html.twig");
    }


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
        return $this->render('FactoryBundle:Produits/layout:composition.html.twig', array(
            'suggestions' => $suggestions
            // ...add name, picture, ambiance option, prix, disponibilite
        ));
    }

}
