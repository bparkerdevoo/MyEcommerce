<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\Ambiance;
use MSF\EcommerceBundle\Form\AmbianceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AmbianceController extends Controller
{
    public function addAction()
    {
       $ambiance = new Ambiance();

        // recupere formulaire
        $form = $this->createForm(AmbianceType::class, $ambiance);

        //generate form html
        $formView = $form->createView();





    }
}
