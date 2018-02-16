<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\CodePromo;
use AppBundle\Form\CodePromoType;

class CodePromoController extends Controller
{
    /**
     *
     * @Route("/panier/code_promo/{code}", name="code_promo")
     */
    public function CodePromoAction($code)
    {
        $em = $this->getDoctrine()->getManager();

        #$code= new CodePromo();
        $code1= new CodePromo();
        $code2= new CodePromo();

        #$code1->setCodePromo('saintPat10%');
        #$code2->setCodePromo('valentin10%');
        #$code1->setEvenement('fête irlandaise');
       # $code2->setEvenement('saint-valentin');

        #$em->persist($code);
        $em->persist($code1);
        $em->persist($code2);

        $em->flush();

        $promo = $em->getRepository('AppBundle:CodePromo')->findAll()
        ;


        return $this->render('::panier/promo_panier.html.twig', array('code'=>$code1->getCodePromo(), 'evenement'=>$code1->getEvenement() , array('offre'=>$promo)));
    }
}
