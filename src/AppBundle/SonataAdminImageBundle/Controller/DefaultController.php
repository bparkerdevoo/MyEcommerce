<?php

namespace AppBundle\SonataAdminImageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminImageBundle:Default:index.html.twig');
    }
}
