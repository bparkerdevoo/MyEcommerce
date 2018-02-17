<?php
/**
 * Created by PhpStorm.
 * User: BELEMA
 * Date: 26/01/18
 * Time: 01:06
 */

namespace AppBundle\Admin;

use AppBundle\Entity\BlogPost;
use MSFBundle\Entity\CommentPost;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CommentPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('Post')
                ->with('Content', ['class' => 'col-md-9'])
                    ->add('avis', 'text')
                    ->add('body', 'textarea')
                ->end()
            ->end()
            ->tab('Publish Options')
                ->with('Meta data', ['class' => 'col-md-3'])
                    ->add('BlogPost', 'sonata_type_model', [
                'class' => 'AppBundle\Entity\BlogPost',
                'property' => 'title',])
                ->end()
             ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('avis');
    }

    public function toString($object)
    {
        return $object instanceof CommentPost
            ? $object->getAvis()
            : 'AvisPost'; // shown in the breadcrumb on the create view
    }
}