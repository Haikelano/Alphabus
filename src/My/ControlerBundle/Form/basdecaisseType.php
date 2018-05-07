<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class basdecaisseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('soudurecnx')
            ->add('fixation')
            ->add('etancheite')
            ->add('peinture')
            ->add('visserie')
            ->add('carrosserie')
            ->add('frottement')
            ->add('fixationroue')
            ->add('fixationcable')
            ->add('rmqsoudurecnx')
            ->add('rmqfixation')
            ->add('rmqetancheite')
            ->add('rmqpeinture')
            ->add('rmqvisserie')
            ->add('rmqcarrosserie')
            ->add('rmqfrottement')
            ->add('rmqfixationroue')
            ->add('rmqfixationcable')
            ->add('chassis')

        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\basdecaisse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_basdecaisse';
    }


}
