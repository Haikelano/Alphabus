<?php

namespace My\AlphabusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StructureType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('protectionchassis')->add('niveauchassis')->add('geometriechassis')->add('geometriecarrosserie')->add('renfort')->add('soudureconection')->add('soudurecarroserie')->add('fixationtolehabillage')->add('cadreparebrise')->add('cadreporte')->add('cadrevitre')->add('jointbutyl')->add('masitcportecofre')->add('poitssoudure')->add('abspiecepolyester')->add('surfacetoles')->add('remarques')->add('repprotectionchassis')->add('repniveauchassis')->add('repgeometriechassis')->add('repgeometriecarrosserie')->add('reprenfort')->add('repsoudureconection')->add('repsoudurecarroserie')->add('repfixationtolehabillage')->add('repcadreparebrise')->add('repcadreporte')->add('repcadrevitre')->add('repjointbutyl')->add('repmasitcportecofre')->add('reppoitssoudure')->add('repabspiecepolyester')->add('repsurfacetoles')->add('repremarques')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\AlphabusBundle\Entity\Structure'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_alphabusbundle_structure';
    }


}
