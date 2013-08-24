<?php
namespace Pbx\WebBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
//        {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
        $builder
            ->add('username', null, array(
                'label' => false,
                'translation_domain' => 'FOSUserBundle',
                'attr' => array(
                    'class'=>'form-control',
                    'placeholder'=>'form.username',
                    'autofocus' => true,

                ),
            ))
            ->add('email', 'email', array(
                'label' => false,
                'translation_domain' => 'FOSUserBundle',
                'attr' => array(
                    'class'=>'form-control',
                    'placeholder'=>'form.email',
                ),
            ))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array(
                    'label' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'form.password',
                    ),
                ),
                'second_options' => array(
                    'label' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'form.password_confirmation',
                    ),
                ),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
        ;
        // add your custom field
//        $builder->add('name');
    }

    public function getName()
    {
        return 'pbx_user_registration';
    }
}