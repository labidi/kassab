<?php

namespace App\PatientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nom','text',array("required"=>false,'label'=>"Prénom", 'translation_domain' => 'PatientBundle'))
            ->add('prenom','text',array("required"=>false,'label'=>"Nom", 'translation_domain' => 'PatientBundle'))
            ->add('age','text',array("required"=>false,'label'=>"Age", 'translation_domain' => 'PatientBundle'))
            ->add('num_dossier','text',array("required"=>false,'label'=>"Numéro de dossier", 'translation_domain' => 'PatientBundle'))
        ;
    }


    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'search_form';
    }
}
