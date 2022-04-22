<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Validator\Constraints\Length;

class ChangePhoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('newPhone',TelType::class,[
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your Phone Number',
                    ]),
                    new Length([
                        'min'=> '8',
                        'max'=> '8',
                        'minMessage' => "The Phone Number of The professor should at least have {{ limit }} characters !",
                        'maxMessage' => "The Phone Number of the Professor Shouldn't reach {{ limit }} Characters !"
                    ])
                ],
                
            ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
