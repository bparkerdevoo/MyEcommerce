<?php

namespace MSF\UserBundle\Controller;

use MSF\UserBundle\Entity\Client;
use MSF\UserBundle\Form\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EspaceClientController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     * @Route("/enregistrement", name="information_client")
     */
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

              return $this->render('UserBundle:registered/confirmed.html.twig');
          }

          //generate form html
          $formView = $form->createView();

          // affichage
          return $this->render('UserBundle:modules:ajoutClient.html.twig', array('form'=>$formView));

    }

    /**
     *
     * @Route("/espace_client/information", name="information_client")
     */
    public function editAction(Request $request)
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


        }

        //generate form html
        $formView = $form->createView();

        // affichage
        return $this->render('UserBundle:modules:UpdateClient.html.twig', array('form'=>$formView));

    }



}
