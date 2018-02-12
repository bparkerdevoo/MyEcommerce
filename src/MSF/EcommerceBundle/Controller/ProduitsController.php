<?php

namespace MSF\EcommerceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping\Annotation;
use MSF\EcommerceBundle\Entity\Produit;
use MSF\EcommerceBundle\Form\ProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use AppBundle\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;



class ProduitsController extends Controller
{

}


