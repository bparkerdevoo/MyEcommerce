<?php

namespace AppBundle\Controller;

use AppBundle\Entity\BlogPost;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    /**
     * @param $name
     * @Route("/blog", name="blog_home")
     */
    public function BlogAction()
    {
        $articleName= new BlogPost();
       # return $this->render('', array('name' => $articleName)
        return $this->render('AppBundle:Blog:Blog_layout.html.twig');
    }

    /**
     * @param $name
     * @Route("/blog/Article/{articleId}", name="blog_article")
     */
    public function BlogArticleAction($articleId)
    {
        return $this->render('', array('name' => $articleId));
    }
}
