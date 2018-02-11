<?php

namespace MSF\EcommerceBundle\Form;

use function Sodium\add;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use MSF\EcommerceBundle\Entity\Produit;
use Sonata\AdminBundle\Form\DataTransformer;
use Symfony\Component\Form\DataTransformerInterface;



class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('id_Categories', ChoiceType::class)
            ->add('description', TextType::class)
            ->add('prix', MoneyType::class, array(
                'scale'=>2,
                'currency'=>false,
            ))
            ->add('tva', PercentType::class)
            ->add('disponible', CheckboxType::class)
            ->add('image', TextType::class)
        ->add('brochure', FileType::class, array('label' => 'Brochure (PDF FILE'));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MSF\EcommerceBundle\Entity\Produit'
        ));


    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'msf_ecommercebundle_produit';
    }


}
