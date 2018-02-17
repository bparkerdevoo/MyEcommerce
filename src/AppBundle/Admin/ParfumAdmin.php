<?php
/**
 * Created by PhpStorm.
 * User: BELEMA
 * Date: 26/01/18
 * Time: 00:32
 */

namespace AppBundle\Admin;

use MSFBundle\Entity\Parfum;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use MSFBundle\Entity\Client;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Form\Type\ModelType;

class ParfumAdmin extends AbstractAdmin
{


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nom', 'text')
            ->add('description', 'textarea')
            ->add('prix', 'number')
            ->add('tva', 'percent')
            ->add('image', 'text')
            ->add('origine', 'text')
            ->add('disponible', 'choice',
                         array('choices' => array(
                                'disponible' => true,
                                'Rupture' => false,

                )));
        ;


    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('nom');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('nom');
    }
    protected $baseRouteName = 'parfum_admin';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('parfum'); // Action gets added automatically
        $collection->add('view', $this->getRouterIdParameter().'/view');

        $collection->add('update_action', $this->getRouterIdParameter().'/update_action', [], [], [], '', ['https'], ['GET', 'POST']);
    }

    public function toString($object)
    {
        return $object instanceof Parfum
            ? $object->getNom()
            : 'Parfum'; // shown in the breadcrumb on the create view
    }


}

