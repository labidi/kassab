<?php

namespace App\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_name')
            ->add('last_name')
/*            ->add('role', 'choice', array(
                'choices'  => array(
                    'ROLE_USER' => 'Male',
                    'ROLE_ADMIN' => 'Female'),
                'required' => false,
            ))*/
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'user.password'),
                'second_options' => array('label' => 'user.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('email', 'email', array('label' => 'user.email', 'translation_domain' => 'FOSUserBundle'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_userbundle_user';
    }
}
