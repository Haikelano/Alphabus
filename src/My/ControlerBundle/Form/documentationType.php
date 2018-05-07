<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class documentationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('modelclimatisation')->add('compresseurclim')->add('evaporateur')->add('condenseur')->add('refrigerateur')->add('installationaudio')->add('posteradio')->add('amplificateur')->add('lecteurdvd')->add('afficheurdestination')->add('afficheurdestination2')->add('necran')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\documentation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_documentation';
    }


}
