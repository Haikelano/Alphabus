<?php

namespace My\AlphabusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('titre','text',array('label' => 'Titre de votre Problème :  '))
            ->add('remarques','textarea',array('label' => 'Crée votre Remarques:  ',
                'attr' => array('cols' => 70, 'rows' => 5) ))


             ->add('file','file',array('label' => 'Inseré une image:  '));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\AlphabusBundle\Entity\Post'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_alphabusbundle_post';
    }


}
