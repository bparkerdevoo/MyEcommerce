<?php
/**
 * Created by PhpStorm.
 * User: BELEMA
 * Date: 26/01/18
 * Time: 00:32
 */

namespace AppBundle\Admin;

use Symfony\Component\HttpFoundation\File\File;
use MSF\EcommerceBundle\Entity\Media;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Vich\UploaderBundle\Form\Type\VichImageType;
use AppBundle\Service\FileUploader;
use Sonata\AdminBundle\Show\ShowMapper;




class MediaAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        //from symfony doc on sonata admin chpt 4
        // get the image instance
        $image = $this->getSubject();

        $fileFieldOptions = ['required' => false];
        if ($image && ($path = $image->getPath()))
        {
            $container = $this->getConfigurationPool()->getContainer();
            $fullPath = $container->get('request_stack')->getCurrentRequest()->getBasePath().'/'.$path;

            $fileFieldOptions['help'] = '<img src"'.$fullPath.'" class="admin-preview img-responsive" width="20px" height="20px" />';
        }
        $formMapper->add('imageName', 'text')
            ->add('imageFile', 'file',[
                'required' => false])
            ->add('imageFile', 'file', $fileFieldOptions);
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
        if ($image->getImageFile())
        {
            $image->refreshUpdated();
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper->add('ImageFile', 'file');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('imageName')
            ->add('updatedAt');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $image = $this->getSubject();

        $fileFieldOptions = ['required' => false];

        if ($image && ($path = $image->getPath()))
        {
            $container = $this->getConfigurationPool()->getContainer();
            $fullPath = $container->get('request_stack')->getCurrentRequest()->getBasePath().'/'.$path;

            $fileFieldOptions['help'] = '<img src"'.$fullPath.'" class="admin-preview img-responsive" width="20px" height="20px" />';
        }
        $listMapper
            ->addIdentifier('imageName')
            ->add('updatedAt')
            ->add('imageFile', 'file', $fileFieldOptions)

        ->add('image', 'file', array(
                'prefix' => '/public/images/products/'
            ))
        ;
        #var_dump($listMapper);
    }

    protected $baseRouteName = 'media_admin';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('media'); // Action gets added automatically
        $collection->add('view', $this->getRouterIdParameter().'/view');

        $collection->add('update_action', $this->getRouterIdParameter().'/update_action', [], [], [], '', ['https'], ['GET', 'POST']);
    }

    public function toString($object)
    {
        return $object instanceof Media
            ? $object->getImageName()
            : 'Media'; // shown in the breadcrumb on the create view
    }

}