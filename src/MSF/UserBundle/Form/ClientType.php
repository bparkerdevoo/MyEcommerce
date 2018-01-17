<?php

namespace MSF\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom',TextType::class)
            ->add('titre', TextType::class)
            ->add('adresse1',TextType::class)
            ->add('adresse2',TextType::class)
            ->add('ville',TextType::class)->add('codePostal',TextType::class)->add('region',TextType::class)
            ->add('categorieAdresse',TextType::class)
            ->add('dateDeNaissance',BirthdayType::class)
            ->add('dateInscription',DateTimeType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MSF\UserBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'msf_userbundle_client';
    }


}
