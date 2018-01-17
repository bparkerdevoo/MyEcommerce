<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\Parfum;
use MSF\EcommerceBundle\Form\ParfumType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParfumController extends Controller
{
    public function addAction()
    {
        $parfum = new Parfum();
        // recupere formulaire
        $form = $this->createForm(ParfumType::class, $parfum);

        //generate form html
        $formView = $form->createView();
    }
}

