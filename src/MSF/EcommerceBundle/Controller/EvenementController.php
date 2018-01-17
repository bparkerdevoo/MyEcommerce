<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\Evenement;
use MSF\EcommerceBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EvenementController extends Controller
{
    public function addAction()
    {
        $event = new Evenement();

        // recupere formulaire
        $form = $this->createForm(EvenementType::class, $event);

        //generate form html
        $formView = $form->createView();
    }
}

