<?php

namespace App\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder
            ->add('firstName', null, array('label' => 'user.firstName', 'translation_domain' => 'FOSUserBundle'))
            ->add('lastName', null, array('label' => 'user.lastName', 'translation_domain' => 'FOSUserBundle'))
            ->add('email', 'email', array('label' => 'user.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => 'user.username', 'translation_domain' => 'FOSUserBundle', "required"=>false))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'user.password'),
                'second_options' => array('label' => 'user.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('categories',  'entity',array('class' => 'AppUserBundle:Category',
                'property'     => 'name',
                'multiple'     => true
            ))
            ->add('street', null, array('label' => 'user.street', 'translation_domain' => 'FOSUserBundle','required' => false))
            ->add('city', null, array('label' => 'user.city', 'translation_domain' => 'FOSUserBundle','required' => false))
            ->add('codePostal', null, array('label' => 'user.codePostal', 'translation_domain' => 'FOSUserBundle','required' => false))
            ->add('country', 'country', array('label' => 'user.country', 'translation_domain' => 'FOSUserBundle','required' => false))
            ->add('phone', null, array('label' => 'user.phone', 'translation_domain' => 'FOSUserBundle','required' => false))
            ->add('job', null, array('label' => 'user.job', 'translation_domain' => 'FOSUserBundle'))
            ->add('cgu', 'checkbox', array(
                'label'     => 'user.cgu',
                'required'  => true,
                'mapped' => false
            ));

        $builder->remove('username');
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}