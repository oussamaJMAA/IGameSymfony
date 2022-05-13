<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LoginFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email', TextType::class,[
            'constraints' => [
                new NotBlank([
                    'message' => 'Error'
                ])
                ],
                'required'=>true,
                'attr' => [
                    'class' =>'form-control'
                ]

        ])
        ->add('password', TextType::class,[
            'constraints' => [
                new NotBlank([
                    'message' => 'Error'
                ])
                ],
                'required'=>true,
                'attr' => [
                    'class' =>'form-control'
                ]

        ])
        ->add('_csrf_token',HiddenType::class)
        ->add('submit', SubmitType::class, [
            "attr" => [
            "class" => "btn btn-md btn-block"
            ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
