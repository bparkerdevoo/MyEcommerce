<?php
/**
 * Created by PhpStorm.
 * User: BELEMA
 * Date: 26/01/18
 * Time: 01:06
 */

namespace AppBundle\Admin;
use MyScentFactory\MSFBundle\Entity\Produit;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PanierAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('Post')
            ->with('Content', ['class' => 'col-md-9'])
            ->add('title', 'text')
            ->add('body', 'textarea')
            ->end()
            ->end()
            ->tab('Publish Options')
            ->with('Meta data', ['class' => 'col-md-3'])
            ->add('nom', 'sonata_type_model', [
                'class' => 'MSFBundle\Entity\Produit',
                'property' => 'name',])
            ->end()
            ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('nom');
    }

    public function toString($object)
    {
        return $object instanceof Panier
            ? $object->getTitle()
            : 'Panier'; // shown in the breadcrumb on the create view
    }
}