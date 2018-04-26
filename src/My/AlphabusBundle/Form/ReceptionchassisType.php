<?php

namespace My\AlphabusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReceptionchassisType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('generalchassis')
                ->add('huilemoreur')
                ->add('boitevitesse')
                ->add('huiledirection')
                ->add('liquiderefroidisement')
                ->add('ventilateur')
                ->add('embrayage')
                ->add('huilefuitechassis')
                ->add('fuitedaire')
                ->add('rouesecours')
                ->add('filtresecondaire')
                ->add('centraleelectrique')
                ->add('tableaubord')
                ->add('exthuiledirection')
                ->add('cledouble')
                ->add('docchassis')
                ->add('etat')
            ->add('etat','choice',array('choices'=>array(true=>'Terminer leur Travail',false
                =>'Ne pas terminer le travail'))
                 ,array('label'=>'l\'etat terminer ou non : '))
                ->add('codeereur')
                ->add('kitaccesoires')
                ->add('remorquage')
                ->add('protectionchassis')
                ->add('remarques')->add('rmqgeneralchassis')
                ->add('rmqhuilemoreur')->add('rmqboitevitesse')->add('rmqhuiledirection')
                ->add('rmqliquiderefroidisement')->add('rmqventilateur')->add('rmqembrayage')
                ->add('rmqhuilefuitechassis')->add('rmqfuitedaire')->add('rmqrouesecours')
                ->add('rmqfiltresecondaire')->add('rmqcentraleelectrique')
                ->add('rmqtableaubord')->add('rmqexthuiledirection')
                ->add('rmqcledouble')->add('rmqdocchassis')->add('rmqcodeereur')
                ->add('rmqkitaccesoires')->add('rmqremorquage')->add('rmqprotectionchassis')
                ->add('mecanicien')->add('contqualite')->add('responsablequalite')
                ->add('nchassis');
    }
    
    /**
     * 
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\AlphabusBundle\Entity\Receptionchassis'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_alphabusbundle_receptionchassis';
    }


}
