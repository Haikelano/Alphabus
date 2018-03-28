<?php

namespace My\AlphabusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChassisType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nchassis','text',array('label' => 'N° Chassis :  '))
            ->add('typechassis','choice',array('choices'=>array('RR8'=>'RR8','RR2'=>'RR2','RRA'=>'RRA')),array('label'=>'Type chassis : '))
            ->add('datereception', 'date',array('label' => 'Date Reception :  '))
            ->add('controler','text',array('label' => 'Controler et enregistrer par  :  '))
            



        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\AlphabusBundle\Entity\Chassis'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_alphabusbundle_chassis';
    }


}
