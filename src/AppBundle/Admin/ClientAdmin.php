<?php
/**
 * Created by PhpStorm.
 * User: BELEMA
 * Date: 26/01/18
 * Time: 00:32
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use MSF\UserBundle\Entity\Client;
use Sonata\AdminBundle\Route\RouteCollection;

class ClientAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('dateInscription', 'date')
            ->add('titre', 'choice',
                array('choices' => array(
                    'Mme' => 'Madame',
                    'Melle' => 'Mademoiselle',
                    'Mr' => 'Monsieur'
                )))
            ->add('prenom', 'text')
            ->add('nom', 'text')
            ->add('adresse1', 'text')
            ->add('adresse2', 'text')
            ->add('ville', 'text')
            ->add('codePostal', 'text')
            ->add('region', 'text')
            ->add('telephone', 'text')
            ->add('mobile', 'text')
            ->add('categorieAdresse', 'text')
            ->add('dateDeNaissance', 'date')
            ->add('id_User', 'sonata_type_model', [
                'class' => 'MSF\UserBundle\Entity\User',
                'property' => 'username',])

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('prenom')
            ->add('dateInscription')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nom')
            ->addIdentifier('prenom')
            ->addIdentifier('dateInscription')
        ;
    }
    protected $baseRouteName = 'client_admin';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('client'); // Action gets added automatically
        $collection->add('view', $this->getRouterIdParameter().'/view');

        $collection->add('update_action', $this->getRouterIdParameter().'/custom-action', [], [], [], '', ['https'], ['GET', 'POST']);
    }


}

