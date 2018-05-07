<?php

namespace My\ControlerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class equipementoptionelType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tachygraphe')->add('plombagetachygraphe')->add('fonctrefegirateur')->add('camerasurvaillence')->add('afficheursdestination')->add('fonctradio')->add('fontlecteur')->add('fonctecrans')->add('fonctmicrophone')->add('rmqtachygraphe')->add('rmqplombagetachygraphe')->add('rmqfonctrefegirateur')->add('rmqcamerasurvaillence')->add('rmqafficheursdestination')->add('rmqfonctradio')->add('rmqfontlecteur')->add('rmqfonctecrans')->add('rmqfonctmicrophone')->add('chassis');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\ControlerBundle\Entity\equipementoptionel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_controlerbundle_equipementoptionel';
    }


}
