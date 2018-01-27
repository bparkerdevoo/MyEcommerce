<?php

namespace AppBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;


class SupportCRUDController extends CRUDController
{
    //view

    public function viewSupportAction()
    {

    }
    //create

    public function createSupportAction()
    {
    }
    //update

    public function updateSupportAction($id)
    {
    }
    //show

    public function showSupportAction($id)
    {
    }
    //delete


    public function deleteSupportAction()
    {
    }

    //form


    public function addAction()
    {
        #$support = new Support();

        // recupere formulaire
        #$form = $this->createForm(SupportType::class, $support);

        //generate form html
        #$formView = $form->createView();

        //rend la vue

    }

}
