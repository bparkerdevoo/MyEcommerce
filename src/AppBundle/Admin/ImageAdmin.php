<?php
/**
 * Created by PhpStorm.
 * User: BELEMA
 * Date: 26/01/18
 * Time: 00:32
 */

namespace AppBundle\Admin;

use MSFBundle\Entity\Image;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;



class ImageAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('file', 'file',[
                        'required' => false])

        ;

    }

    public function prePersist($image)
    {
        $this->manageFileUpload($image);
    }

    public function preUpdate($image)
    {
        $this->manageFileUpload($image);
    }

    private function manageFileUpload($image)
    {
        if ($image->getFile())
        {
            $image->refreshUpdated();
        }
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('imageName')
            ->add('updatedAt');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('imageName')
                   ->add('updatedAt')
        ;
    }

    protected $baseRouteName = 'image_admin';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('image'); // Action gets added automatically
        $collection->add('view', $this->getRouterIdParameter().'/view');

        $collection->add('update_action', $this->getRouterIdParameter().'/update_action', [], [], [], '', ['https'], ['GET', 'POST']);
    }

    public function toString($object)
    {
        return $object instanceof Image
            ? $object->getImageName()
            : 'Media'; // shown in the breadcrumb on the create view
    }

}