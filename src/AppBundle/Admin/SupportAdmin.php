<?php
/**
 * Created by PhpStorm.
 * User: BELEMA
 * Date: 26/01/18
 * Time: 00:32
 */

namespace AppBundle\Admin;

use MSF\FactoryBundle\Entity\Support;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use MSF\UserBundle\Entity\Client;
use Sonata\AdminBundle\Route\RouteCollection;

class SupportAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('nom', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('nom');
    }
    protected $baseRouteName = 'support_admin';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('support'); // Action gets added automatically
        $collection->add('view', $this->getRouterIdParameter().'/view');

        $collection->add('update_action', $this->getRouterIdParameter().'/update_action', [], [], [], '', ['https'], ['GET', 'POST']);
    }

    public function toString($object)
    {
        return $object instanceof Support
            ? $object->getNom()
            : 'Support'; // shown in the breadcrumb on the create view
    }


}

