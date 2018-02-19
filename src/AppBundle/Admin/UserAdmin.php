<?php
/**
 * Created by PhpStorm.
 * User: BELEMA
 * Date: 26/01/18
 * Time: 00:32
 */

namespace AppBundle\Admin;
use Sonata\AdminBundle\Form\Type\Filter\ChoiceType;
use Sonata\AdminBundle\Form\Type\ModelAutocompleteType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use MyScentFactory\UserBundle\Entity\User;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Component\Security\Core\Role\SwitchUserRole;


class UserAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('profile')
              ->with('Content', ['class' => 'col-md-9'])
                ->add('username', 'text')
                ->add('roles')
                ->add('email')
                ->add('password')
            ->add('last_login', 'date')

                ->end()
            ->end()

            ->tab('authorization')
                ->with('Meta data', ['class' => 'col-md-3'])



                ->end()
            ->end()    ;

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('lastLogin');

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('roles')
            ->addIdentifier('username')
            ->add('lastLogin');

    }
    protected $baseRouteName = 'user_admin';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('user'); // Action gets added automatically
        $collection->add('view', $this->getRouterIdParameter().'/view');

        $collection->add('update_action', $this->getRouterIdParameter().'/custom-action', [], [], [], '', ['https'], ['GET', 'POST']);
    }

    public function toString($object)
    {
        return $object instanceof User
            ? $object->getUsername()
            : 'User'; // shown in the breadcrumb on the create view
    }




}

