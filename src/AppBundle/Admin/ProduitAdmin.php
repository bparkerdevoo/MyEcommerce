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
use MSF\EcommerceBundle\Entity\Produit;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProduitAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('Enregistrer produit')
                ->with('Content', ['class'=> 'col-md-9'])
                    ->add('nom', 'text')
                    ->add('description', 'textarea')
                    ->add('id_Categories','sonata_type_model', [
                        'class' => 'MSF\EcommerceBundle\Entity\Categories',
                'property' => 'nom',])
                    ->add('prix', 'number')
                    ->add('tva', 'number')
                    ->add('image', 'text')
//                    ->add('brochure', FileType::class, array('label' => 'Brochure (Fichier PDF)'))
        ->add('disponible', 'choice',
            array('choices' => array(
                'oui' => 'oui',
                'non' => 'non',
                'rupture' => 'rupture')))
                ->end()
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('id_categories.nom')
           ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nom')
            ->add('description')
            ->add('prix')
            ->add('id_categories.nom')
            ->add('brochure')
        ;

    }
    protected $baseRouteName = 'produit_admin';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('produit'); // Action gets added automatically
        $collection->add('view', $this->getRouterIdParameter().'/view');

        $collection->add('update_action', $this->getRouterIdParameter().'/update_action', [], [], [], '', ['https'], ['GET', 'POST']);
    }

    public function toString($object)
    {
        return $object instanceof Produit
            ? $object->getNom()
            : 'Produit'; // shown in the breadcrumb on the create view
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MSF\EcommerceBundle\Entity\Produit',
        ));
    }




}

