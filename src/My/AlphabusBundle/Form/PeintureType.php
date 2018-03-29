<?php

namespace My\AlphabusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PeintureType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('protectionrouille')->add('couchepeinture')->add('peinturefaceav')->add('peinturefacear')->add('peinturefacedr')->add('peinturefaceg')->add('etanchete')->add('interrieur')->add('bascaisse')->add('decorationclient')->add('remarques')->add('repprotectionrouille')->add('repcouchepeinture')->add('reppeinturefaceav')->add('reppeinturefacear')->add('reppeinturefacedr')->add('reppeinturefaceg')->add('repetanchete')->add('repinterrieur')->add('repbascaisse')->add('repdecorationclient')->add('repremarques')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\AlphabusBundle\Entity\Peinture'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_alphabusbundle_peinture';
    }


}
