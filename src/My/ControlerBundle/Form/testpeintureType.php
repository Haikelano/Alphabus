<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class testpeintureType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('peinturemaintien')->add('abscvapeur')->add('abscimpureté')->add('peauorange')->add('abscgratinure')->add('brillance')->add('rmqpeinturemaintien')->add('rmqabscvapeur')->add('rmqabscimpureté')->add('rmqpeauorange')->add('rmqabscgratinure')->add('rmqbrillance')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\testpeinture'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_testpeinture';
    }


}
