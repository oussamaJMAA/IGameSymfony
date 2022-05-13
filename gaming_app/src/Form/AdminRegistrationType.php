<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\File;
class Admint extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])->add('roles', ChoiceType::class,[
                'choices' => [
                    'Client' => 'ROLE_USER',
                    'Editor' => 'ROLE_EDITOR',
                    'Admin' => 'ROLE_ADMIN'
                ],
  
                'expanded' => true ,
                'multiple' => true,
                'label' => 'Rôles',
                'label_attr' => array('class' => 'checkbox-inline')
            ])
            
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
            ])->add('phone')
            /*
            ->add('image' , FileType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please insert an image',
                    ]),
                ],
                'data_class' => null
            ])*/
            ->add('image' , FileType::class, 
            array(
                'required'=>false,

                'attr' => array(
                    'accept' => "image/jpeg, image/png"
                ),
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a JPG or PNG',
                    ]),new NotBlank([
                        'message' => 'Please insert an image',
                    ]),
                    
                ]
            ),
        
        )
            ;
            
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
