<?php

namespace MSF\UserBundle\Controller;

use MSF\UserBundle\Entity\Client;
use MSF\UserBundle\Form\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    public function addAction(Request $request)
    {
        //creer nouveau objet client
          $client = new Client();

          // recupere formulaire
          $form = $this->createForm(ClientType::class, $client);

          //link form a la requette
          $form->handleRequest($request);

          //test soumission du formulaire
          if($form->isSubmitted() && $form->isValid()){
              //enregistrer le client en bdd
              $em = $this->getDoctrine()->getManager();

              $em->persist($client);
              $em->flush();

              return new Response('Vous êtes enregistré');
          }

          //generate form html
          $formView = $form->createView();

          // affichage
          return $this->render('UserBundle:Default:modules/ajoutClient.html.twig', array('form'=>$formView));

    }




}
