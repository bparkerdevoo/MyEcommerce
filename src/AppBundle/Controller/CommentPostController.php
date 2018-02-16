<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\BlogPost;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\CommentPost;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;



class CommentPostController extends Controller
{
    /**
     * @return Response
     * @Route("/avis/{avis}", name="deposer_avis")
     */
    public function createAction($avis)
    {
        $em = $this->getDoctrine()->getManager();

        $avis = new CommentPost();
        $avis->setAvis('avis client');
        $avis->setBody('');

        $em->persist($avis);

        $em->flush();

        return $this->render ('AppBundle:modules:avis.html.twig',['avis'=>$avis->getAvis(), 'comment'=>$avis->getBody()]);
    }

    public function editAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $em2 = $doctrine->getManager('other_connection');
    }

    /**
     * @Route("/avis/{avis}/commentaires", name="afficher_avis")
     * @Method("GET")
     */
    public function getCommentsAction()
    {
        $avisClient=[
                    ['id'=>1, 'avis'=>'avis1', 'body'=>'comments3', 'produit'=>'img/msf_ceramique.jpg'],
                    ['id'=>2, 'avis'=>'avis2', 'body'=>'comments2', 'produit'=>'img/msf_huile.jpg'],
                    ['id'=>3, 'avis'=>'avis3', 'body'=>'comments1', 'produit'=>'img/msf_burner.jpg']
        ];

        $avis = [
            'avis' => $avisClient,
        ];

        return new Response(json_encode($avis));
    }
}
