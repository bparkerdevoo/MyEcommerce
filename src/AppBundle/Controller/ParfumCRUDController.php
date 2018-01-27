<?php

namespace AppBundle\Controller;


use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class ParfumCRUDController extends CRUDController
{

    //update

    public function updateParfumAction()
    {

    }
    //show

    public function showParfumAction()
    {

    }
    //delete


    public function deleteParfumAction()
    {

    }

    //form
    public function addAction()
    {
        #$parfum = new Parfum();
        // recupere formulaire
       # $form = $this->createForm(ParfumType::class, $parfum);

        //generate form html
        #$formView = $form->createView();
    }
}

