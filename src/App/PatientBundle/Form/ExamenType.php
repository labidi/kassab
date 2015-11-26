<?php

namespace App\PatientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExamenType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date','date',array('widget' => 'single_text','format' => 'dd/MM/yyyy','attr' => array('class'=>'datepicker')))
            ->add('hb')
            ->add('ht')
            ->add('plq')
            ->add('gie')
            ->add('uree')
            ->add('creat')
            ->add('naplus')
            ->add('kplus')
            ->add('tp')
            ->add('tca')
            ->add('gs')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PatientBundle\Entity\Examen'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_patientbundle_examen';
    }
}
