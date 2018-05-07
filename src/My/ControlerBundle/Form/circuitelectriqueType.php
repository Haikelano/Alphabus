<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class circuitelectriqueType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('eclairage')->add('eclairageinter')->add('fonctbutton')->add('foncfreint')->add('buttonregl')->add('buttonposte')->add('controlecharge')->add('fonctavertiseur')->add('fonctcapteur')->add('sonneriemarche')->add('fontbuttonmoteur')->add('capteurportemoteur')->add('rmqeclairage')->add('rmqeclairageinter')->add('rmqfonctbutton')->add('rmqfoncfreint')->add('rmqbuttonregl')->add('rmqbuttonposte')->add('rmqcontrolecharge')->add('rmqfonctavertiseur')->add('rmqfonctcapteur')->add('rmqsonneriemarche')->add('rmqfontbuttonmoteur')->add('rmqcapteurportemoteur')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\circuitelectrique'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_circuitelectrique';
    }


}
