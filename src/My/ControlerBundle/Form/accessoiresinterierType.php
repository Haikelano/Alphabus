<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class accessoiresinterierType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('rideau')->add('parasoleil')->add('cendries')->add('trappes')->add('finitionmastic')->add('baguettejoin')->add('fixationporte')->add('fixationtableau')->add('rmqrideau')->add('rmqparasoleil')->add('rmqcendries')->add('rmqtrappes')->add('rmqfinitionmastic')->add('rmqbaguettejoin')->add('rmqfixationporte')->add('rmqfixationtableau')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\accessoiresinterier'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_accessoiresinterier';
    }


}
