<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class essaiderouteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('paralisme')->add('fonctionglace')->add('vibration')->add('regimemoteur')->add('rapportvitesse')->add('boitevitesse')->add('pressionhuile')->add('tempuraturecircuit')->add('blocagedeblocage')->add('capteurarticulation')->add('freinageralentisseur')->add('freinagedeservice')->add('memoirededefautvide')->add('fonctrelevment')->add('kilometrageparcoru')->add('rmqparalisme')->add('rmqfonctionglace')->add('rmqvibration')->add('rmqregimemoteur')->add('rmqrapportvitesse')->add('rmqboitevitesse')->add('rmqpressionhuile')->add('rmqtempuraturecircuit')->add('rmqblocagedeblocage')->add('rmqcapteurarticulation')->add('rmqfreinageralentisseur')->add('rmqfreinagedeservice')->add('rmqmemoirededefautvide')->add('rmqfonctrelevment')->add('rmqkilometrageparcoru')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\essaideroute'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_essaideroute';
    }


}
