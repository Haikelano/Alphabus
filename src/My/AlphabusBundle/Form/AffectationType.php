<?php

namespace My\AlphabusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AffectationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('seriealpha')->add('dateaffectation')->add('controleacier')->add('dateacier')->add('controlepeinture')->add('datepeinture')->add('controlcontroler')->add('datecontrole')->add('controleessai')->add('dateessai')->add('nclients')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\AlphabusBundle\Entity\Affectation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_alphabusbundle_affectation';
    }


}
