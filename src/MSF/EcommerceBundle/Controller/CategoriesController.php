<?php

namespace MSF\EcommerceBundle\Controller;

use MSF\EcommerceBundle\Entity\Categories;
use MSF\EcommerceBundle\Form\CategoriesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function addAction()
    {
        $categorie = new Categories();

        // recupere formulaire
        $form = $this->createForm(CategoriesType::class, $categorie);

        //generate form html
        $formView = $form->createView();
    }
}

