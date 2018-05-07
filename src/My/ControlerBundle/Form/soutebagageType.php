<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class soutebagageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('etancheite')->add('serrures')->add('amortisseurs')->add('ouverfermer')->add('poignee')->add('fixationverin')->add('absencevisserie')->add('rmqetancheite')->add('rmqserrures')->add('rmqamortisseurs')->add('rmqouverfermer')->add('rmqpoignee')->add('rmqfixationverin')->add('rmqabsencevisserie')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\soutebagage'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_soutebagage';
    }


}
