<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\BlogPost;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\CommentPost;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;

class CommentPostController extends Controller
{
    public function creatAction()
    {
        $em = $this->getDoctrine()->getManager();

        $avis = new CommentPost();
        $avis->setAvis('avis');
        $avis->setBody('description');

        $em->persist($avis);

        $em->flush();

        return new Response('merci pour votre contribution'.$avis->getId());
    }

    public function editAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $em2 = $doctrine->getManager('other_connection');
    }
}
