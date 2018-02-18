<?php

namespace MyScentFactory\UserBundle\Controller;

use MSFBundle\Entity\Produit;
use MSFBundle\Entity\Composition;
use MyScentFactory\UserBundle\Entity\Client;
use MyScentFactory\UserBundle\Form\ClientType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EspaceClientController extends Controller
{
    /**
     *
     * @Route("/session", name="login_client")
     */
    public function accesAction()
    {
        $client =new Client();
        $user = $this->getUser();

        $client->getIdUser();



        var_dump($client);
        return $this->render('@FOSUser/Profile/show.html.twig', array(
            'user' => $user,
            'client' => $client
        ));
    }
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

    /**
     *
     * @Route("/{profile_client}", name="profile_client")
     * @Method("GET")
     */
    public function showClientProfileAction($profile_client)
    {
        $profile_client = new Client();
        #$profile_client->setPrenom('justine');

        return $this->render('UserBundle:FOSUserBundle:Profile:show_content.html.twig',  array('client'=>$profile_client->getPrenom()));
    }

    /**
     * @Route("/test_profile/{client}", name="test")
     *
     */
    public function testAction($client){

        $client =$this->getDoctrine()
         ->getRepository(Client::class)->find($client);
var_dump($client);
echo 'ddd';

        return $this->render('UserBundle;views:FOSUserBundle:Profile/show_content_client.html.twig',  array('client'=>$client));

    }




}
