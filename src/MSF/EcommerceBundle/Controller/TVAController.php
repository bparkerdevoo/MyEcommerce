<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\TVA;
use MSF\EcommerceBundle\Form\TVAType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TVAController extends Controller
{
    public function addAction()
    {
        $tva = new TVA();

        // recupere formulaire
        $form = $this->createForm(TVAType::class, $tva);

        //generate form html
        $formView = $form->createView();

    }

}
