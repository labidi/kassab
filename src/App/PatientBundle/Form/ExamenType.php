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
            ->add('hb',null,array('required'=>false))
            ->add('ht',null,array('required'=>false))
            ->add('plq',null,array('required'=>false))
            ->add('gie',null,array('required'=>false))
            ->add('uree',null,array('required'=>false))
            ->add('creat',null,array('required'=>false))
            ->add('naplus',null,array('required'=>false))
            ->add('kplus',null,array('required'=>false))
            ->add('tp',null,array('required'=>false))
            ->add('tca',null,array('required'=>false))
            ->add('gs',null,array('required'=>false))
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
