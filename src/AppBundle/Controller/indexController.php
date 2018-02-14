<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class indexController extends Controller
{


    /**
     * @Route("/accueil", name="accueil")
     */

    public function indexAction()
    {
        return new Response(
            'bienvenue chez msf'
        );
    }
    /**
     * //acceder a l'espace admin si session administrateur
     * @Route("/administrateur", name="admin")
     */

    public function AdminAction()
    {
        return new Response(
            'salut admin'
        );
    }

    /**
     * accededer compte client si session client
     * @Route("/shopper", name="espace_client")
     */

    public function shopAction()
    {
        return new Response(
            'salut shopper'
        );
    }

    /**
     * //espace d'achat
     * @Route("/cart", name="panier")
     */

    public function panierAction()
    {
        return new Response(
            'votre panier'
        );
    }

    /**
     *
     * @Route("/catalogue/{produitName}")
     */
    public function catalogueAction($produitName)
    {
        return new Response('Catalogue: '.$produitName);
    }

    /**
     * @Route("/apropos/msf")
     */
    public function infoMSFAction()
    {
        $templating = $this->container->get('templating');
        $html = $templating->render('info/apropos.html.twig');
    }

    /**
     * @Route("/apropos/parfum")
     */
    public function infoParfumAction()
    {

    }

    /**
     * @Route("/apropos/creatrice")
     */
    public function infoCreatriceAction()
    {

    }




}
