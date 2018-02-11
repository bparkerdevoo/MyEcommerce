<?php

namespace AppBundle\Controller;

use AppBundle\Entity\BlogPost;
use AppBundle\Entity\CommentPost;
use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\Routing\Annotation\Route;

class CommentPostCRUDController extends CRUDController
{
    /**
     * @param $name
     * @Route("/blog/avis", name="blog_avis")
     */
    public function avisAction()
    {
        $avis= new CommentPost();
       # return $this->render('', array('name' => $articleName)

    }

    /**
     * @param $name
     * @Route("/blog/avis/Article/{articleId}", name="comment_article")
     */
    public function CommentArticleAction($articleId)
    {

    }
}
