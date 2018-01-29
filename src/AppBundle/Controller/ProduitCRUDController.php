<?php

namespace AppBundle\Controller;


use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class ProduitCRUDController extends CRUDController
{

    //update

    public function updateProduitAction()
    {

    }
    //show

    public function showProduitAction()
    {

    }
    //delete


    public function deleteProduitAction()
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

