<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccesoirexterieurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('isolation')->add('finition')->add('retroviseur')->add('fixationpara')->add('etatparachoc')->add('cachefeu')->add('grillebouches')->add('baguette')->add('porte')->add('essui')->add('rmqisolation')->add('rmqfinition')->add('rmqretroviseur')->add('rmqfixationpara')->add('rmqetatparachoc')->add('rmqcachefeu')->add('rmqgrillebouches')->add('rmqbaguette')->add('rmqporte')->add('rmqessui')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\Accesoirexterieur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_accesoirexterieur';
    }


}
