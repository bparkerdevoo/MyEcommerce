<?php

namespace MyScentFactory\MSFBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Mapping\Annotation;
use Symfony\Component\Routing\Annotation\Route;



class CommandeController extends Controller
{
    /**
     *
     * @return Response
     * @Route("/bondecommande", name="bon_de_commande")
     *
     */
    public function indexAction()
    {
        $bonDeCommande = new Commande();


        $bonDeCommande->setDate(new \DateTime());
        $bonDeCommande->setModeReglement('modeRegelement');
        $bonDeCommande->setMontant('20');

        $em=$this->getDoctrine()->getManager();

        $em->persist($bonDeCommande);

        $em->flush();

        return new Response('BON DE COMMANDE');


    }
	
/**
 * Verifie si le panier existe, le créé sinon
 * @return bool
 * @Route("/Panier/", name="panier")
 */


   function getSession(){
      return new Session();
   }

   function creationPanier(){
       $panier= new Commande();
      
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
    */
   function ajouterArticle($libelleProduit,$qteProduit,$prixProduit){

      //Si le panier existe
      $session = $this->getSession();
      $panier = $session->get('panier');
      if ($this->creationPanier() && !$this->isVerrouille())
      {
         //Si le produit existe déjà on ajoute seulement la quantité
         $positionProduit = array_search($libelleProduit."-".$taille."-".$couleur,  $panier['detail']);

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
            array_push( $panier['detail'],$libelleProduit."-".$taille."-".$couleur);

            
         }
      }else{
         echo "Un problème est survenu veuillez contacter l'administrateur du site.";
      }

      $session->replace(array('panier' => $panier));
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
               $session->replace(array('panier' => $panier));
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
    * @return unknown_type
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
         $session->replace(array('panier' => $tmp));
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

    /**
     * @Route("/", name="PanierProduit")
     */
    public function FormAction(Request $request)
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $p);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $p = $form->getData();
            $p1 = $this->getDoctrine()
                ->getRepository('EcommerceBundle:Produit')
                ->findBy(
                    array(
                        'nom' => $p->getnom(),
                        'prix' => $p->getPrix()
                    )
                );
            if($p1){
                return new Response("Erreur, produit dèja ajouté !");
            }else{
                $em = $this->getDoctrine()->getManager();

                $em->persist($p);
                $em->flush();

                return new Response("Produit ajouté avec succès !");
            }

        }else{
            return $this->render('', array(
                'name' => '',
                'form' => $form->createView(),
            ));
        }
    }

    public function findByNomAction()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('MSFBundle:Produit');
        $prods = $em->findBy(array('nom' => 'A'), null, 1);
        return $this->render('',
            array(
            )
        );
    }
    public function creationPanierAction(Request $request){
        $panier = new Panier();

        $session = $panier->getSession();
        if(count($session->get('panier'))==0){
            $panier->creationPanier();
        }

        //echo count($session->get('panier'))."<br>";
        //echo $session->getId();
        //$session->invalidate();

        if ($request->getMethod() == 'GET') {

            $nom = $request->get('nom');
            $qte = $request->get('qte');
            $prix = $request->get('prix');

            $panier->ajouterArticle($libelle,$prix);

            //$panier->modifierQTeArticle($libelle,10,"Taza-az-BLANC");
            //echo "<br>".$panier->MontantGlobal();
            //echo "<br>".$panier->compterArticles();
        }

        echo "<br><br>";
        var_dump($session->get('panier'));
        return new response("");
    }
    public function panierAction(){
        $panier = new Panier();
        $session = $panier->getSession();
        if(count($session->get('panier'))==0){
            $panier->creationPanier();
        }
        $session = $panier->getSession();

        return $this->render('',
            array(
                'panier' => $session->get('panier')
            )
        );
    }
    public function supprimerAction($detail){
        $panier = new Panier();
        $session = $panier->getSession();
        if(count($session->get('panier'))==0){
            $panier->creationPanier();
        }
        $panier->supprimerArticle($detail);
        return $this->redirect($this->generateUrl('panier_panier'));
    }
    public function modifierQteAction(Request $request){
        if ($request->getMethod() == 'POST') {
            $qte = $request->get('q');

            if (is_array($qte)){
                $QteArticle = array();
                $i=0;
                foreach ($qte as $contenu){
                    $QteArticle[$i++] = intval($contenu);
                }
            }else{
                $qte = intval($qte);
            }

            $p = new Panier();
            $session = $p->getSession();
            $panier = $session->get('panier');

            for ($i = 0 ; $i < count($QteArticle) ; $i++){
                $p->modifierQTeArticle($panier['libelleProduit'][$i],round($QteArticle[$i]),$panier['detail'][$i]);
            }
        }
        return $this->redirect($this->generateUrl('panier_panier'));
    }
    public function saveCartAction(){
        $em = $this->getDoctrine()->getManager();

        $repository = $this->getDoctrine()
            ->getRepository('PanierAdminBundle:Produit');
        $produit = $repository->findOneByLibelle('A');

        $cmd = new Commande();
        $cmd->setMontant(1000)
            ->setModePaiement("Normal");

        $em->persist($cmd);

        $p = new Panier();
        $session = $p->getSession();
        $panier = $session->get('panier');

        for ($i = 0 ; $i < count($panier['libelleProduit']) ; $i++){
            $lc[$i] = new LigneCommande();

            $lc[$i]->setQuantite($panier['qteProduit'][$i]);
            $lc[$i]->setPrixUnitaire($panier['prixProduit'][$i]);
            $lc[$i]->setCommande($cmd);
            $lc[$i]->setProduit($produit);
            $em->persist($lc[$i]);
        }


        $em->flush();
        return new Response("Commande sauvegardée");
    }

}