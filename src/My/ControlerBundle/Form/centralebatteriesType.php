<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class centralebatteriesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fixationelectrique')->add('fixationcable')->add('fixationbatteries')->add('chargebatterie')->add('niveauelectrolite')->add('rmqfixationelectrique')->add('rmqfixationcable')->add('rmqfixationbatteries')->add('rmqchargebatterie')->add('rmqniveauelectrolite')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\centralebatteries'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_centralebatteries';
    }


}
