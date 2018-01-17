<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\Media;
use MSF\EcommerceBundle\Form\MediaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MediaController extends Controller
{
    public function addAction()
    {
        $media = new Media();

        // recupere formulaire
        $form = $this->createForm(MediaType::class, $media);

        //generate form html
        $formView = $form->createView();
    }

}
