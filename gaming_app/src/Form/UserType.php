<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email', EmailType::class,[
            'constraints' => [
                new NotBlank([
                    'message' => 'Merci de saisir une adresse email'
                ])
                ],
                'required'=>true,
                'attr' => [
                    'class' =>'form-control'
                ]

        ])
        ->add('roles', ChoiceType::class,[
            'choices' => [
                'Client' => 'ROLE_USER',
                'Editor' => 'ROLE_EDITOR',
                'Admin' => 'ROLE_ADMIN'
            ],

            'expanded' => true ,
            'multiple' => true ,
            'label' => 'Rôles',
            'label_attr' => array('class' => 'checkbox-inline')
        ])
       
        ->add('username')
       ->add('phone')
       ->add('gender', ChoiceType::class,[
        'choices' => [
            'Male' => 'male',
            'Female' => 'female',
    
        ],

        'expanded' => true ,
        'multiple' => false,
        'label' => 'Gender',
        'label_attr' => array(
            'class' => 'radio-inline'
        )
    ])  ->add('image' , FileType::class, [
        'data_class' => null
    ])
        
    ;
}
    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
