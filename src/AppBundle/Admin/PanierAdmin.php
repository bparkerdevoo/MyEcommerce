<?php

namespace AppBundle\Admin;

use Symfony\Component\HttpFoundation\Session\Session;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use MSF\EcommerceBundle\Entity\Produit;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PanierAdmin extends AbstractAdmin{
	
/**
 * Verifie si le panier existe, le créé sinon
 *
 */


   function getSession(){
      return new Session();
   }

   function creationPanier(){
      
      if (!isset($panier)){
         $session = $this->getSession();
         try{
            $session->start();
         }catch(\Exception $e){

         }
         
         $panier=array();
         $panier['libelleProduit'] = array();
         $panier['qteProduit'] = array();
         $panier['prixProduit'] = array();
         $panier['detail'] = array();
         $panier['verrou'] = false;


         $session->set('panier', $panier);

      }
      return true;
   }


   /**
    * Ajoute un article dans le panier
    * @param string $libelleProduit
    * @param int $qteProduit
    * @param float $prixProduit
    * @return void
    */
   function ajouterArticle($libelleProduit,$qteProduit,$prixProduit){

      //Si le panier existe
      $session = $this->getSession();
      $panier = $session->get('panier');
      if ($this->creationPanier() && !$this->isVerrouille())
      {
         //Si le produit existe déjà on ajoute seulement la quantité
         $positionProduit = array_search($libelleProduit."-".$qteProduit."-".$prixProduit,  $panier['detail']);

         if ($positionProduit !== false)
         {
   	  	 $panier['qteProduit'][$positionProduit] += $qteProduit ;
         }
         else
         {
            //Sinon on ajoute le produit
            array_push( $panier['libelleProduit'],$libelleProduit);
            array_push( $panier['qteProduit'],$qteProduit);
            array_push( $panier['prixProduit'],$prixProduit);
            array_push( $panier['detail'],$libelleProduit."-".$qteProduit."-".$prixProduit);

            
         }
      }else{
         echo "Un problème est survenu veuillez contacter l'administrateur du site.";
      }

      $session->get(array('panier' => $panier));
   }



   /**
    * Modifie la quantité d'un article
    * @param $libelleProduit
    * @param $qteProduit
    * @return void
    */
   function modifierQTeArticle($libelleProduit,$qteProduit,$detail){
      //Si le panier éxiste
      $session = $this->getSession();
      $panier = $session->get('panier');
      if ($this->creationPanier() && !$this->isVerrouille())
      {
         //Si la quantité est positive on modifie sinon on supprime l'article
         if ($qteProduit > 0)
         {
            //Recharche du produit dans le panier
            $positionProduit = array_search($detail,  $panier['detail']);

            if ($positionProduit !== false)
            {
               $panier['qteProduit'][$positionProduit] = $qteProduit ;
               $session->get(array('panier' => $panier));
            }
         }else{
            $this->supprimerArticle($detail);
         }
      }
      else
      echo "Un problème est survenu veuillez contacter l'administrateur du site.";
   }

   /**
    * Supprime un article du panier
    * @param $libelleProduit
    *
    */
   function supprimerArticle($detail){
      //Si le panier existe
      $session = $this->getSession();
      $panier = $session->get('panier');
      if ($this->creationPanier() && !$this->isVerrouille())
      {
         //Nous allons passer par un panier temporaire
         $tmp=array();
         $tmp['libelleProduit'] = array();
         $tmp['qteProduit'] = array();
         $tmp['prixProduit'] = array();
         $tmp['detail'] = array();
         $tmp['verrou'] = $panier['verrou'];

         for($i = 0; $i < count($panier['detail']); $i++)
         {
            if ($panier['detail'][$i] !== $detail)
            {
               array_push( $tmp['libelleProduit'],$panier['libelleProduit'][$i]);
               array_push( $tmp['qteProduit'],$panier['qteProduit'][$i]);
               array_push( $tmp['prixProduit'],$panier['prixProduit'][$i]);
               array_push( $tmp['detail'],$panier['detail'][$i]);
            }

         }
         //On remplace le panier en session par notre panier temporaire à jour
         $session->get(array('panier' => $tmp));
         //On efface notre panier temporaire
         unset($tmp);
      }
      else
      echo "Un problème est survenu veuillez contacter l'administrateur du site.";
   }


   /**
    * Montant total du panier
    * @return int
    */
   function MontantGlobal(){
      $total=0;
      $session = $this->getSession();
      $panier = $session->get('panier');
      for($i = 0; $i < count($panier['libelleProduit']); $i++)
      {
         $total += $panier['qteProduit'][$i] * $panier['prixProduit'][$i];
      }
      return $total;
   }


   /**
    * Fonction de suppression du panier
    * @return void
    */
   function supprimePanier(){
      $session = $this->getSession();
      $session->remove('panier');
   }

   /**
    * Permet de savoir si le panier est verrouillé
    * @return booleen
    */
   function isVerrouille(){
      $session = $this->getSession();
      $panier = $session->get('panier');
      if (isset($panier) && $panier['verrou'])
      return true;
      else
      return false;
   }

   /**
    * Compte le nombre d'articles différents dans le panier
    * @return int
    */
   function compterArticles()
   {
      $session = $this->getSession();
      $panier = $session->get('panier');

      if (isset($panier)){
         return count($panier['libelleProduit']);
      }else{
         return 0;
      }
   }

}