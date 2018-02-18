<?php

namespace AppBundle\Form;

use MSFBundle\Entity\CodePromo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CodePromoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('code_promo')
                ->add('evenement')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class'=>'MSFBundle\Entity\CodePromo'));
    }

    public function getBlockPrefix()
    {
        return 'myscentfactory_msfbundle_code_promo_type';
    }
}
