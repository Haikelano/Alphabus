<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class siegeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fixatino')->add('balancement')->add('habillage')->add('ceinturesecurite')->add('rmqfixatino')->add('rmqbalancement')->add('rmqhabillage')->add('rmqceinturesecurite')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\siege'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_siege';
    }


}
