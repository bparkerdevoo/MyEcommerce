<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\Support;
use MSF\EcommerceBundle\Form\SupportType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SupportController extends Controller
{
    public function addAction()
    {
        $support = new Support();

        // recupere formulaire
        $form = $this->createForm(SupportType::class, $support);

        //generate form html
        $formView = $form->createView();

        //rend la vue
        return $this->render('EcommerceBundle:Produits:modules/AjoutSupport.html.twig',
            array('form'=>$formView));
    }

}
