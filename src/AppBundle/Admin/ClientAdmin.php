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
use MyScentFactory\UserBundle\Entity\Client;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\MediaBundle\Model\MediaInterface;

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
            ->add('dateDeNaissance', 'date')
            ->add('idUser', 'sonata_type_model', [
                'class' => 'MyScentFactory\UserBundle\Entity\User',
                'property' => 'username',])





        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id_user.id')
            ->add('nom')
            ->add('prenom')
            ->add('dateInscription')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id_user.id')
            ->addIdentifier('id.id')
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

    public function toString($object)
    {
        return $object instanceof Client
            ? $object->getNom()
            : 'Client'; // shown in the breadcrumb on the create view
    }


}

