<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use MyScentFactory\MSFBundle\Entity\Personnalisation;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Route\RouteCollection;




class PersonnalisationAdmin extends AbstractAdmin
{
    public function toString($object)
    {
        return $object instanceof Personnalisation
            ? $object->getTitre()
            : 'Personnalisation'; // shown in the breadcrumb on the create view
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('Post')
            ->with('Content', ['class' => 'col-md-9'])
            ->add('titre', 'text')
            ->add('id_auteur', 'text')

            ->end()
            ->end();

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('titre')
            ->add('date_creation', 'date')
            ->add('id_auteur');

    }

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('customisation'); // Action gets added automatically
        $collection->add('view', $this->getRouterIdParameter().'/view');

        $collection->add('update_action', $this->getRouterIdParameter().'/custom-action', [], [], [], '', ['https'], ['GET', 'POST']);
    }
}