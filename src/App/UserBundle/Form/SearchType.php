<?php

namespace App\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('first_name','text',array("required"=>false,'label'=>"Prénom", 'translation_domain' => 'FOSUserBundle'))
            ->add('last_name','text',array("required"=>false,'label'=>"Nom", 'translation_domain' => 'FOSUserBundle')) 
            ->add('email','text',array("required"=>false,'label'=>"Email", 'translation_domain' => 'FOSUserBundle')) ;
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
