<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class vitrageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('etat')->add('overclose')->add('montagejoint')->add('montagecle')->add('rmqetat')->add('rmqoverclose')->add('rmqmontagejoint')->add('rmqmontagecle')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\vitrage'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_vitrage';
    }


}
