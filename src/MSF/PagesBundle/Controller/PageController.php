<?php

namespace MSF\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends Controller
{
    /**
     * @Route("/condition/{cgu}", name="cgu")
     */
    public function cduAction($cgu)
    {
        return $this->render('PagesBundle:Page:layout/page.html.twig', array(
            'condition' => $cgu
        ));
    }

    /**
     * @Route("/condition/{cgv}", name="cgv")
     */
    public function cgvAction($cgv)
    {
        return $this->render('PagesBundle:Page:layout/page.html.twig', array(
            'condition' => $cgv
        ));
    }



}
